<?php

/**
 *
 */
class Historique extends CI_Model
{
    function saveHistoryOption($iduser, $response, $option){
        $sql = "insert into historique values (null, '" . $iduser . "', null, '" . $this->db->escape_str($response) . "', '" . $this->db->escape_str($option) . "')";
        $this->db->query($sql);
    } 

    function saveHistoryQuestion($iduser, $response, $question){
        $sql = "insert into historique values (null, '" . $iduser . "', '". $this->db->escape_str($question) ."', '" . $this->db->escape_str($response) . "', null)";
        $this->db->query($sql);
    } 
}
?>