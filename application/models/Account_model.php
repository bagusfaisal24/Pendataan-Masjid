<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model{

	public function getDataAccounts(){
		$sql = "SELECT * FROM `pengguna` WHERE `level` != 0";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getDataAccount($id){
		$sql = "SELECT * FROM `pengguna` WHERE `id_pengguna` = '".$id."'";
		$data = $this->db->query($sql);
		return $data->result_array();		
	}
	
	public function updateDataAccount($nama_lengkap,$password,$id){
		$sql = "UPDATE `pengguna` SET `nama_lengkap`='".$nama_lengkap."',`password`='".sha1($password)."' WHERE `id_pengguna`='".$id."'";
		$data = $this->db->query($sql);
		return $data;
	}

}
?>