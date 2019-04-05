<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('account_model');
		$this->load->model('masjid_model');
		$this->load->model('security_model');
  	}

	public function index()
	{
		if($this->security_model->checkLogin(0)){
			// header("Access-Control-Allow	-Origin: *");
			// var_dump($this->session->userdata());
			$data['account'] = $this->account_model->getDataAccounts();

			$this->template->set('title', 'Account');
			$this->template->set('breadc', array('Pengaturan','Akun'));
			$this->template->load('default_layout', 'contents' , 'account/list', $data);
		} else redirect('logout');
	}

	public function add()
	{
		if($this->security_model->checkLogin(0)){

			$data['data'] = "";

			$this->template->set('title', 'Account');
			$this->template->set('breadc', array('Pengaturan','Akun','Tambah Akun'));
			$this->template->load('default_layout', 'contents' , 'account/add', $data);
		} else redirect('logout');
	}

	public function edit($id)
	{
		if($this->security_model->checkLogin(0)){

			$data['account'] = $this->account_model->getDataAccount($id)[0];
			$data['id'] = $id;


			$this->template->set('title', 'Account');
			$this->template->set('breadc', array('Pengaturan','Akun','Ubah Akun'));
			$this->template->load('default_layout', 'contents' , 'account/edit', $data);
		} else redirect('logout');
	}


	public function actUpdate($id){
		if($this->security_model->checkLogin(0)){
			if(isset($_POST['submit'])){

				$nama = $_POST['nama_lengkap'];
				$password = $_POST['password'];

				if($password==""){
					$password = $this->account_model->getDataAccount($id)[0]['password'];
				}else $password = sha1($password);

				$hasil = $this->masjid_model->updatePengguna($id,$nama,$password);

				echo $password;

				if($hasil) redirect('account');
				else redirect('account/edit/'.$id."/fail");

			} else redirect('account/edit/'.$id);

		} else redirect('logout');
	}

	public function actAdd(){
		if($this->security_model->checkLogin(0)){

			if(isset($_POST['submit'])){

				$nama = $_POST['nama_lengkap'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				if(isset($_POST['level'])) $level = $_POST['level']; else $level = 2;
				$token = generateToken($username,$password);

				$hasil = $this->masjid_model->addPengguna($nama,$username,$password,$token,$level);
				if($hasil) redirect('account');
				else redirect('account/add/fail');

			} else redirect('account/add');
		} else redirect('logout');
	}

	public function actDel($id){
		if($this->security_model->checkLogin(0)){

			$hasil = $this->masjid_model->delPengguna($id);
			if($hasil) redirect('account');
			else redirect('account');

		} else redirect('logout');
	}
}
