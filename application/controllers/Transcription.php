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
        redirect(base_url("reveController/loadOption"));
    }

    public function choixImages()
    {
        $this->load->model("Reve");

        $listeChoix = $this->Reve->getChoixImage();

        $data = array();

        $data['listeChoix'] = $listeChoix;
        $data['view'] = "service_images";
    }
}
