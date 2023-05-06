<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('API');

        $this->load->model('Historique');

    }
    public function index() {
        $isnot_option = $this->input->post('isquestion');
       
        //creation question que ça soit simple, soit question cauchemar
       
        $question = $this->API->gestion_question($this->input->post('question'));
        $question_cauchemar = $this->API->gestion_question_cauchemar($this->input->get('question'));
        
        $iduser = $this->session->userdata("iduser");

        $response = $this->API->traitement_response($question);
        
        var_dump($response);

        $response_cauchemar = $this->API->traitement_response($question_cauchemar);

        var_dump($iduser);

        if(strpos(strtoupper($response_cauchemar), "NON") !== false){

            $this->save_history($iduser, $response, $question, 0, $isnot_option);

        }else{
            $this->save_history($iduser, $response, $question, 1, $isnot_option);
            $response = $this->generate_response_specifique($iduser);
        }
          
        $data['response'] = $response;
       
        // var_dump($response);
        //$this->load->view('home.php', $data);
        $data['view'] = 'service_reponse';
        $this->load->view('template', $data);
    }

    function save_history($iduser, $response, $question ,$is_specifique, $isnot_option){

        if($isnot_option != 0 ){

            $this->Historique->saveHistoryQuestion($iduser, $response, $question, $is_specifique); 

        }else{

            $this->Historique->saveHistoryOption($iduser, $response, $question, $is_specifique);

        }
    }

    function generate_response_specifique($iduser){
        $verify = $this->Historique->verify_historique_specifique($iduser);

        // var_dump("count :: ", $verify, count($verify));

        if(count($verify) >=2 ) {

            $response = "PUBLICITE";

        }else{
            
            $response = "Nous avons identifié que vous avez fait un cauchemar, cela peut être un signe de trouble psychologique. Nous saurons comment vous aider si cela se produit de facon recurrent. Merci de votre confiance à Onirix";

        }
        return $response;
    }

}