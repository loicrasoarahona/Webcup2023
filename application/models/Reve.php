<?php if (!defined('BASEPATH')) exit('No direct script acces allowed');

class Reve extends CI_Model
{
    public function getAllCategorie()
    {
        $sql = "SELECT * FROM categorie where type='text'";
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function getChoixImage()
    {
        $sql = "select idcategorie from souscategorie where description is not null";
        $req = $this->db->query($sql);

        $retour = array();

        foreach ($req->result_array() as $row) {
            $sql = "select * from souscategorie where idcategorie=" . $row['idcategorie'];
            $requete = $this->db->query($sql);
            $tableau = array();
            foreach ($requete->result_array() as $ligne) {
                array_push($tableau, $ligne);
            }
            array_push($retour, $tableau);
        }

        return $retour;
    }

    public function getOptionsByIdCat($idCat)
    {
        $sql = "SELECT * FROM souscategorie where idCategorie='%s'";
        $sql = sprintf($sql, $idCat);
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function getFullSentence($personne, $activite, $endroit, $temps, $emotion, $reve)
    {
        $string = "J'étais ";
        $string = ($personne != "seul") ? $string . "avec une personne qui a été un " . $personne . ", nous étions " : $string . $personne . " et ";
        $string = $string . "en train de ";
        $string = ($activite != "rien") ? $string . $activite : $string . $activite . " faire";
        $string = ($endroit != "pas précis") ? $string . " " . $endroit . " " : $string;
        $string = ($temps != "pas précis") ? $string . $temps : $string;
        if ($emotion != "pas précis") $string = ($emotion != "peur") ? $string . ", durant ce temps, j'étais " . $emotion : $string . ", durant ce temps, j'avais eu " . $emotion;
        $string .= ", pour moi ce rêve était vraiment " . $reve;
        return $string;
    }
}
