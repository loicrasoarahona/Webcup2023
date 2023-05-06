<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function index() {
        $this->load->model('Chat');
        $data['response'] = $this->Chat->call_gpt();
        $this->load->view('home.php', $data);
    }

}