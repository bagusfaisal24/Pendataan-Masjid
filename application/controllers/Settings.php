<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('default_model');
        $this->load->model('security_model'); 
    }

	public function index()
	{   
        if($this->security_model->checkLogin(0)){
            $data['settings'] = $this->default_model->getSettings()[0];
            $this->template->set('title', 'Pengaturan Sistem');
            $this->template->set('breadc', array('Pengaturan','Sistem'));
            $this->template->load('default_layout', 'contents' , 'settings/index', $data);
        } else redirect('logout');
    }
    
    public function update(){
        if($this->security_model->checkLogin(0)){
            if(isset($_POST['submit'])){
                $this->default_model->updateSettings($_POST['s_true'],$_POST['s_false'],$_POST['s_start'],$_POST['s_end']);
                redirect('settings');
            }
        } else redirect('logout');
    }
}
