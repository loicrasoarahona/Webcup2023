<?php

/**
 *
 */
class User extends CI_Model{
    public function inscription($nom, $prenom,  $mail, $mdp, $role)
    {
        $sql = "insert into user values (null,'" . $nom . "','" . $prenom . "','" . $mail . "','" . $mdp . "'," .$role. ")";
        $this->db->query($sql);
    }
    
    public function verify_mail_isexist($mail)
    {
        $sql = "select * from user u where u.mail='" . $this->db->escape_str($mail) . "'";
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
        return $val[0];
    }

    
    public function verify_login($mail, $mdp)
    {
        $sql = "select * from user u where u.mail='" . $this->db->escape_str($mail) . "' and u.mdp='". $this->db->escape_str($mdp) ."'";
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
        return $val[0];
    }
    
    public function sign_up($nom, $prenom,  $mail, $mdp, $role){
        $val = $this->verify_mail_isexist($mail);
        $ret = null;
        if($val != null){
            return null;
        }else{
            $this->inscription($nom, $prenom,  $mail, $mdp, $role);
            $ret = $this->verify_login($mail, $mdp);
        }
        return $ret;
    }    
}
?>