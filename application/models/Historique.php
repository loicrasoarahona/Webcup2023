<?php

/**
 *
 */
class Historique extends CI_Model
{
    function saveHistoryOption($iduser, $response, $option, $is_specifique){
        $sql = "insert into historique values (null, '" . $iduser . "', null, '" . $this->db->escape_str($response) . "', '" . $this->db->escape_str($option) . "'," . $is_specifique . ")";
        $this->db->query($sql);
    } 

    function saveHistoryQuestion($iduser, $response, $question, $is_specifique){
        $sql = "insert into historique values (null, '" . $iduser . "', '". $this->db->escape_str($question) ."', '" . $this->db->escape_str($response) . "', null, " . $is_specifique . ")";
        $this->db->query($sql);
    } 

    public function verify_historique_specifique($iduser)
    {
        $sql = "select * from historique  where iduser = ". $iduser ." and is_specifique =1";
        // var_dump($sql);
        $query = $this->db->query($sql);
        $val = array();
        $i = 0;
        foreach ($query->result_array() as $row) {
            foreach ($row as $key => $value) {
                $val[$i][$key] = $value;
            }
            $i++;
        }
        if($val == null)return null;
        return $val;
    }
}
?>