<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transcription extends CI_Controller
{
    public function question()
    {
        $data['view'] = 'service_chat';
        $this->load->view('template', $data);
    }
    public function choix()
    {
        $data['view'] = 'service_choix';
        $this->load->view('template', $data);
    }
    public function reponse()
    {
        $data['view'] = 'service_reponse';
        $this->load->view('template', $data);
    }
    public function choixoption()
    {
        $data['view'] = 'service_choix';
        redirect(base_url("ReveController/loadOption"));
    }

    public function choixImages()
    {
        $this->load->model("Reve");

        $listeChoix = $this->Reve->getChoixImage();

        $data = array();

        $data['listeChoix'] = $listeChoix;
        $data['view'] = "service_images";

        $this->load->view('template', $data);
    }

    public function validationReponseImage()
    {
        $reponses = json_decode($this->input->post('reponses'));

        $string = "";

        foreach ($reponses as $choix) {
            $string .= explode('|', $choix->description)[0] . ',';
        }


        // Convertir la chaîne en un tableau en utilisant la virgule comme séparateur
        $array = explode(",", $string);

        // Initialiser un tableau associatif pour stocker les occurrences
        $occurrences = array();

        // Parcourir le tableau et compter les occurrences de chaque élément
        foreach ($array as $element) {
            if (isset($occurrences[$element])) {
                $occurrences[$element]++;
            } else {
                $occurrences[$element] = 1;
            }
        }

        // Trouver l'élément avec le nombre d'occurrences le plus élevé
        $maxOccurrences = 0;
        $mostFrequentElement = "";

        foreach ($occurrences as $element => $count) {
            if ($count > $maxOccurrences) {
                $maxOccurrences = $count;
                $mostFrequentElement = $element;
            }
        }

        var_dump($maxOccurrences);
        var_dump($mostFrequentElement);

        $data = array(
            "mostFrequentElement" => $mostFrequentElement,
            "reponses" => "$reponses",
            "view" => "response-images"
        );

        $this->load->view('template', $data);
    }
}
