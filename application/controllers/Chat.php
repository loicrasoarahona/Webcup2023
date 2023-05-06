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
        $isquestion = $this->input->get('isquestion');
        //creation question que ça soit simple, soit question cauchemar
        $question = $this->API->gestion_question($this->input->get('question'));

        $question_cauchemar = $this->API->gestion_question_cauchemar($this->input->get('question'));
        
        $iduser = $this->session->userdata("iduser");

        $response = $this->API->traitement_response($question);
        
        //var_dump($response);

        $response_cauchemar = $this->API->traitement_response($question_cauchemar);

        var_dump(strtoupper($response_cauchemar));

        if(strpos(strtoupper($response_cauchemar), "NON") !== false){

            if($isquestion != null ){

                $this->Historique->saveHistoryQuestion($iduser, $response, $question); 
    
            }else{
    
                $this->Historique->saveHistoryOption($iduser, $response, $question);
    
            }
        }else{
            
        }
        
       
        $data['response'] = $response;

        $this->load->view('home.php', $data);
    }

}