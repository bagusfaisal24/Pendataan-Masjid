<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masjid extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('masjid_model');
    $this->load->model('default_model');
    $this->load->model('security_model');
  }

	public function index()
	{
    if($this->security_model->checkLogin(0)){
      $data['masjid'] = $this->masjid_model->getDataMasjids(array("b1_nama","b1_alamat","bidang_kode","tipe","score","progress"));
      // $data['masjid'] = $this->masjid_model->getDataMasjids();
      $data['settings'] = $this->default_model->getSettings()[0];
      $this->template->set('title', 'Data Masjid');
      $this->template->set('breadc', array('Data Masjid','Daftar'));
      $this->template->load('default_layout', 'contents' , 'masjid/list', $data);
    } else redirect('logout');
  }

  public function detail($id)
  {
    if($this->security_model->checkLogin(0)){
      $data['masjid'] = $this->masjid_model->getDetailMasjid($id)[0];

      $this->template->set('title', 'Data Masjid');
      $this->template->set('breadc', array('Data Masjid','Detail'));
      $this->template->load('default_layout', 'contents' , 'masjid/detail', $data);
    }else redirect('logout');
  }

  public function takmir(){
    if($this->security_model->checkLogin(2)){
      $id = $this->session->userdata('id_pengguna');
      $data['masjid'] = $this->masjid_model->getDataMasjidTakmir($id)[0];
      $data["user"]["id"] = $id;
      $data["user"]["token"] = $this->session->userdata('token');
      $this->template->set('title', 'Data Masjid');
      $this->template->set('breadc', array('Data Masjid'));
      $this->template->load('default_layout', 'contents' , 'masjid/takmir/list', $data);
    }
  }

  public function report(){
    if($this->security_model->checkLogin(0)){
      $data['tipe1'] = $this->masjid_model->getTipe1()[0]['total'];
			$data['tipe2'] = $this->masjid_model->getTipe2()[0]['total'];
			$data['tipe3'] = $this->masjid_model->getTipe3()[0]['total'];
      $data['tipe4'] = $this->masjid_model->getTipe4()[0]['total'];
      $data['max_ranking'] = 5;
      $data['hasil_tipe1'] = $this->masjid_model->getHasilTipe1();
      $data['hasil_tipe2'] = $this->masjid_model->getHasilTipe2();
      $data['hasil_tipe3'] = $this->masjid_model->getHasilTipe3();
      $data['hasil_tipe4'] = $this->masjid_model->getHasilTipe4();

      $this->template->set('title', 'Data Masjid');
      $this->template->set('breadc', array('Data Masjid','Report'));
      $this->template->load('default_layout', 'contents' , 'masjid/report', $data);
    }else redirect('logout');
  }
}
