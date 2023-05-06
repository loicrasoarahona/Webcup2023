<?php if (!defined('BASEPATH')) exit('No direct script acces allowed');

class Reve extends CI_Model
{
    public function getAllCategorie()
    {
        $sql = "SELECT * FROM categorie";
        $sql = $this->db->query($sql);
        return $sql -> result_array();
    }

    public function getOptionsByIdCat($idCat)
    {
        $sql = "SELECT * FROM souscategorie where idCategorie='%s'";
        $sql = sprintf($sql,$idCat);
        $sql = $this->db->query($sql);
        return $sql -> result_array();
    }

    public function getFullSentence($personne, $activite, $endroit, $temps, $emotion, $reve) {
        $string="J'étais ";
        $string= ($personne!="seul") ? $string."avec une personne qui a été un ".$personne.", nous étions " : $string.$personne." et ";
        $string=$string."en train de ";
        $string= ($activite!="rien") ? $string.$activite : $string.$activite." faire";
        $string= ($endroit!="pas précis") ? $string." ".$endroit." " : $string;
        $string= ($temps!="pas précis") ? $string.$temps : $string;
        if($emotion!="pas précis") $string= ($emotion!="peur") ? $string.", durant ce temps, j'étais ".$emotion : $string.", durant ce temps, j'avais eu ".$emotion; 
        $string.=", pour moi ce rêve était vraiment ".$reve;
        return $string;
    }
}