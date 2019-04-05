<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default_model extends CI_Model{

	public function getAuth($username,$password){
		$data = $this->db->query("SELECT * FROM `pengguna` WHERE `username` = '$username' AND `password` = '".sha1($password)."' LIMIT 1");
        return $data->num_rows();
    }

    public function getAccountData($username,$password){
        $data = $this->db->query("SELECT username, nama_lengkap, id_pengguna, level, token FROM `pengguna` WHERE `username` = '$username' AND `password` = '".sha1($password)."' LIMIT 1");
        return $data->result_array();
        
    }

    public function getSettings(){
        $data = $this->db->query("SELECT * FROM settings");
        return $data->result_array();
        
    }

    public function updateSettings($true,$false,$start,$end){
        $sql = "UPDATE `settings`   SET     `setting_true`='".$true."',
                                            `setting_false`='".$false."',
                                            `setting_start`='".$start."',
                                            `setting_end`='".$end."' 
                                    WHERE   `setting_kode`=1";
        return $data = $this->db->query($sql); 
    }

}
?>