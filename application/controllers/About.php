<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['view'] = 'about';
        $this->load->view('template', $data);
    }
}   
?>