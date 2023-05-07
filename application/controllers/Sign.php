<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function in(){
        
        $mail = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $this->load->model('User');
        $val = $this->User->verify_login($mail, $mdp);
        $this->session->unset_userdata('iduser');
        if ($val == null) {
            $data['message'] = 'email et/ou mot de pass incorrect(s)';
            $this->load->view('login', $data);
        } else {
            $data['message'] = 'Bienvenue Mr ';
            
            $this->session->set_userdata('iduser', $val['id']);

            redirect(base_url('Transcription/choix'));
        }
    }

    public function sinscrire(){
        $this->load->view('signup');
    }
    public function up(){
        $data = null;
        try{
            $mail = $this->input->post('email');
            $mdp = $this->input->post('mdp');
            $confirmerMdp = $this->input->post('confirmerMdp');
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $role = 1;
            if($mdp != $confirmerMdp){
                throw new Exception('mot de passe non conforme');
            }else{
                $this->load->model('User');
                $val = $this->User->sign_up($nom, $prenom, $mail, $mdp, $role);
                if ($val == null) {
                    throw new Exception('email déja existé');
                } else {
                    $this->session->set_userdata('iduser', $val['id']);
                    redirect(base_url('Transcription/choix'));
                }
            }
        }catch (Exception $e) {
            $data['message'] = $e->getMessage();
        }
        $this->load->view('signup', $data);
    }
}
