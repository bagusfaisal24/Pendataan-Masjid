<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security_model extends CI_Model{

	public function checkLogin($level=999){
		$sessid = $this->session->userdata('id_pengguna');
        $sesslevel = $this->session->userdata('level');
        
        if(isset($sessid)==true&&isset($sesslevel)==true){
            if($level!=999){
                if($sesslevel==$level) return true;
                else return false;
            }else return true;
        }else return false;
    }
}
?>