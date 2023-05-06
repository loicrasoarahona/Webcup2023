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
}