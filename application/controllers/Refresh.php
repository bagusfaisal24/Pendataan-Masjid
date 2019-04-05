<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refresh extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('masjid_model');
        $this->load->model('security_model');
        $this->load->model('default_model');
        $this->load->library('user_agent');
  	}	

    public function dore($referer){
        if($this->security_model->checkLogin()){
            $data['masjid'] = $this->masjid_model->getDataRefresh();
            $settings = $this->default_model->getSettings()[0];
            foreach($data['masjid'] as $row){
                $temp_score = (($this->masjid_model->getTotalScore($row['bidang_kode'])[0]['total'])/3);
                
                $tipe = checkType($row);
                $score = calcScore($row,$settings['setting_true'],$settings['setting_false']) + ($temp_score/3);
                $progress = calcProgress($row);
                $this->masjid_model->refresh($row['bidang_kode'],$tipe,$score,$progress);
            }
            redirect($referer);
        } else redirect('logout');
    }
}
