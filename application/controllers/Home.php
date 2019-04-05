<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('masjid_model');
		$this->load->model('security_model');


  	}	

	public function index()
	{
		if($this->security_model->checkLogin()){
			header("Access-Control-Allow-Origin: *");
			$data['tipe1'] = $this->masjid_model->getTipe1()[0]['total'];
			$data['tipe2'] = $this->masjid_model->getTipe2()[0]['total'];
			$data['tipe3'] = $this->masjid_model->getTipe3()[0]['total'];
			$data['tipe4'] = $this->masjid_model->getTipe4()[0]['total'];
			$data['level'] = checklevel($this->session->userdata('level'));
			$this->template->set('title', 'Home');
			$this->template->set('breadc', array('Home'));
			$this->template->load('default_layout', 'contents' , 'home/index', $data);
		}else redirect('login');
	}

	public function takmir()
	{
		$data['data'] = "";
		$this->template->set('title', 'Home');
		$this->template->set('breadc', array('Home'));
		$this->template->load('default_layout', 'contents' , 'home/index_takmir', $data);
	}
}
