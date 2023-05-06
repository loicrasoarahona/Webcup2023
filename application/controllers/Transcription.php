<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transcription extends CI_Controller
{
    public function index()
    {
        $data['view'] = 'service_chat';
        $this->load->view('template', $data);
    }
    public function choix()
    {
        $data['view'] = 'service_choix';
        $this->load->view('template', $data);
    }
}   
?>