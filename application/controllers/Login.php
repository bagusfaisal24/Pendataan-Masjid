<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('default_model');
		$this->load->model('security_model');

	}
	public function index()
	{
		if($this->security_model->checkLogin()==false){
			$this->load->view('default/login');
		}else redirect('home');
	

	}

	public function auth(){

		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$hasil = $this->default_model->getAuth($username,$password);
			// var_dump($hasil);
			if($hasil==0) redirect("login");
			else {
				$data = $this->default_model->getAccountData($username,$password)[0];
				var_dump($data);
				$data['login']=true;

				switch ($data['level']) {
					case 0:
						$redirect = "home";
						break;
					case 1:
						$redirect = "home";
						break;
					case 2:
						$redirect = "home/takmir";
						break;
				}

				$this->session->set_userdata($data);

				redirect($redirect);
			}
		} else redirect("login");
	}
}
