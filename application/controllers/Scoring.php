<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoring extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('masjid_model');
        $this->load->model('default_model');
        $this->load->model('security_model'); 
    }

	public function index()
	{   
        if($this->security_model->checkLogin(1)){
            $data['masjid'] = $this->masjid_model->getDataMasjids(array("b1_nama","b1_alamat","bidang_kode","tipe","score","progress"));
            $data['settings'] = $this->default_model->getSettings()[0];
            
            $this->template->set('title', 'Data Masjid');
            $this->template->set('breadc', array('Penilaian'));
            $this->template->load('default_layout', 'contents' , 'scoring/list', $data);
          } else redirect('logout');
    }


    public function detail($id)
    {
        if($this->security_model->checkLogin(1)){  
        $data['masjid'] = $this->masjid_model->getDetailMasjid($id)[0];   
        $data['score'] = $this->masjid_model->getScore($this->session->userdata('id_pengguna'),$id)[0]; 
        $data['settings'] = $this->default_model->getSettings()[0];  
        $this->template->set('title', 'Data Masjid');
        $this->template->set('breadc', array('Penilaian','Detail'));
        $this->template->load('default_layout', 'contents' , 'scoring/detail', $data); 
        }else redirect('logout');   
    }

    public function simpan($id){
        if($this->security_model->checkLogin(1)){  
            if(isset($_POST['submit'])==true&&isset($_POST['nilai'])==true){
                $nilai = $_POST['nilai'];
                $this->masjid_model->scoring($nilai,$this->session->userdata('id_pengguna'),$id);
                redirect('scoring/detail/'.$id);
            }   
        }else redirect('logout'); 
    }
    
}
