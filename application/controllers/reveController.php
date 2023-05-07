<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reveController extends CI_Controller {

	public function loadCategorie()
	{
		$data['listeCat'] = $this->Reve->getAllCategorie();
		$data['view'] = 'service_options';
		$this->load->view('service_options',$data);
	}

	public function loadOption()
	{
        $question=[
            "S'il y avait une personne dans votre rêve, veuillez nous indiquer en choisissant parmi la liste 
            suivante qui était-ce pour vous:",
            "Quelle activité avez vous fait ? ",
            "Où étiez-vous ?",
            "A quel moment de la journée ?",
            "Quelles étaient vos emotions lors du rêve ?",
            "D'après vous quel était le type du rêve?"
        ];
		
        $tab[0]=$question[0];
		$tab[1]=$this->Reve->getOptionsByIdCat(1);
        
        $tab[2]=$question[1];
		$tab[3]=$this->Reve->getOptionsByIdCat(2);
        
        $tab[4]=$question[3];
		$tab[5]=$this->Reve->getOptionsByIdCat(3);
        
        $tab[6]=$question[4];
		$tab[7]=$this->Reve->getOptionsByIdCat(4);        
        
        $tab[8]=$question[5];
		$tab[9]=$this->Reve->getOptionsByIdCat(5);
        
        $tab[10]=$question[6];
		$tab[11]=$this->Reve->getOptionsByIdCat(6);
        
        $data['listeReve'] = $tab;
		$data['view'] = 'service_options';
		$this->load->view('service_options',$data);
	}

    public function makeSentenceByOption()
	{
		// $data['sentence']= $this->Reve->getFullSentence("voisin", "se balader","sur un bateau", "pas précis", "le soir", "peur");
        $personne=$this->input->post('personne');
        $activite=$this->input->post('activite');
        $endroit=$this->input->post('endroit');
        $temps=$this->input->post('temps');
        $emotion=$this->input->post('emotion');
        $reve=$this->input->post('reve');
        return $this->Reve->getFullSentence($personne, $activite, $endroit, $temps, $emotion, $reve);
    }
}