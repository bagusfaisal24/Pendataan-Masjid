<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('masjid_model');
        $this->load->model('security_model');

    }

    public function index(){
        if($this->security_model->checkLogin()){
            $data['masjid'] = $this->masjid_model->getDataMasjids(array("b1_longitude","b1_latitude","b1_nama"));
                        
            $this->template->set('title', 'Pemetaan');
			$this->template->set('breadc', array('Masjid/Pemetaan'));
			$this->template->load('default_layout', 'contents' , 'map/index', $data);
		}else redirect('login');	
    }

}