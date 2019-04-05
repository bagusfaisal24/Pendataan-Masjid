<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('account_model'); 
    $this->load->model('default_model'); 
    $this->load->model('security_model');
  }

	public function index()
	{
    if($this->security_model->checkLogin(0)==true||$this->security_model->checkLogin(1)==true||$this->security_model->checkLogin(2)==true){
      $data['profile'] = $this->account_model->getDataAccount($this->session->userdata('id_pengguna'))[0];      
      $this->template->set('title', 'Profil');
      $this->template->set('breadc', array('Pengaturan','Profil'));
      $this->template->load('default_layout', 'contents' , 'profile/index', $data);
    } else redirect('logout');
  }


  public function update(){
    if($this->security_model->checkLogin(0)==true||$this->security_model->checkLogin(1)==true||$this->security_model->checkLogin(2)==true){
      if(isset($_POST['submit'])){
        var_dump($_POST);
        $id = $this->session->userdata('id_pengguna');
        $nama = $_POST['nama_lengkap'];
        $sandi = sha1($_POST['sandi']);

        $this->account_model->updateDataAccount($nama,$sandi,$id);
        // redirect('profile');
        
      }      
    } else redirect('logout');
  }

}
