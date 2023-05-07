<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('API');

        $this->load->model('Historique');
    }

    public function checkSession()
    {
        if (!$this->session->has_userdata('iduser')) {
            redirect(site_url("Sign/"));
        }
    }
    public function index()
    {
        $this->checkSession();
        $isnot_option = $this->input->post('isquestion');
        $qe = null;
        if ($isnot_option != 0) {

            $qe = $this->input->post('question');
        } else {

            $rep = json_decode($this->input->post('reponses'));
            // var_dump($rep);
            $qe = $this->Reve->getFullSentence($rep[0]->nom, $rep[1]->nom, $rep[2]->nom, $rep[3]->nom, $rep[4]->nom, $rep[5]->nom);
        }
        //creation question que ça soit simple, soit question cauchemar
        // var_dump($qe);

        $question = $this->API->gestion_question($qe);

        $question_cauchemar = $this->API->gestion_question_cauchemar($qe);

        $iduser = $this->session->userdata("iduser");

        $response = $this->API->traitement_response($question);

        //var_dump($response);

        $response_cauchemar = $this->API->traitement_response($question_cauchemar);

        // var_dump($iduser);

        if (strpos(strtoupper($response_cauchemar), "NON") !== false) {

            $this->save_history($iduser, $response, $question, 0, $isnot_option);
        } else {

            $this->save_history($iduser, $response, $question, 1, $isnot_option);
            $response = $this->generate_response_specifique($iduser);
        }

        $data['response'] = $response;

        $data['view'] = 'service_reponse';

        $this->load->view('template', $data);

        // var_dump($response);

        //$this->load->view('home.php', $data);
    }

    function save_history($iduser, $response, $question, $is_specifique, $isnot_option)
    {


        if ($isnot_option != 0) {

            $this->Historique->saveHistoryQuestion($iduser, $response, $question, $is_specifique);
        } else {

            $this->Historique->saveHistoryOption($iduser, $response, $question, $is_specifique);
        }
    }

    function generate_response_specifique($iduser)
    {
        $verify = $this->Historique->verify_historique_specifique($iduser);

        // var_dump("count :: ", $verify, count($verify));

        if (count($verify) >= 2) {

            $response = "PUBLICITE";
        } else {

            $response = "Nous avons identifié que vous avez fait un cauchemar, cela peut être un signe de trouble psychologique. Nous saurons comment vous aider si cela se produit de facon recurrent. Merci de votre confiance à Onirix";
        }
        return $response;
    }

    public function makeSentenceByOption()
    {
        // $data['sentence']= $this->Reve->getFullSentence("voisin", "se balader","sur un bateau", "pas précis", "le soir", "peur");
        $personne = $this->input->post('personne');

        $activite = $this->input->post('activite');

        $endroit = $this->input->post('endroit');

        $temps = $this->input->post('temps');

        $emotion = $this->input->post('emotion');

        $reve = $this->input->post('reve');

        return $this->Reve->getFullSentence($personne, $activite, $endroit, $temps, $emotion, $reve);
    }
}
