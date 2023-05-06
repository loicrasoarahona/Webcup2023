<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
        $this->load->view('template', $data);
    }
        
}   
?>