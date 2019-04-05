<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('masjid_model');
    }

    public function adduser(){
        if(!empty($_POST)){
            $nama = $_POST['nama_lengkap'];
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            if(isset($_POST['level'])) $level = $_POST['level']; else $level = 2;
            $token = generateToken($username,$password);

            $hasil = $this->masjid_model->addPengguna($nama,$username,$password,$token,$level);
            if($hasil) echo json_encode(array("app_name"=>"fMasjid beta","insert"=>"success"));
            else echo json_encode(array("app_name"=>"fMasjid beta","insert"=>"fail"));
        } else echo json_encode(array("add_user"=>"fail","status"=>"invalid input"));
    }

    public function updateb1($token="",$id=""){
        if($this->checkToken($token)&&!empty($id)) {
            $hasil = $this->masjid_model->updateDataMasjidB1($_POST,$id);
            // var_dump($_POST);
            if(isset($_SERVER['HTTP_REFERER'])) {
                if(checkReferer($_SERVER['HTTP_REFERER'])) header("location:".$_SERVER['HTTP_REFERER']);
             }

            if($hasil) echo json_encode(array("app_name"=>"fMasjid beta","update"=>"success"));
            else echo json_encode(array("app_name"=>"fMasjid beta","update"=>"fail"));
        }else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token or id"));
    }

    public function updateb2($token="",$id=""){
        if($this->checkToken($token)&&!empty($id)) {
            $datanow = $this->masjid_model->getDataMasjidB2($id);

            $configUpload['upload_path']    = '././upload';                 #the folder placed in the root of project
            $configUpload['allowed_types']  = 'gif|jpg|png|bmp|jpeg';       #allowed types description
            $configUpload['max_size']       = '0';                          #max size
            $configUpload['max_width']      = '0';                          #max width
            $configUpload['max_height']     = '0';                          #max height
            $configUpload['encrypt_name']   = true;                         #encrypt name of the uploaded file
            $this->load->library('upload', $configUpload);                  #init the upload class
            
            $foto = array();
            if(isset($_FILES['b2_fotodepan'])){
            if(!$this->upload->do_upload('b2_fotodepan')){
                $uploadedDetails    = $this->upload->display_errors();
            }else{
                $uploadedDetails    = $this->upload->data();    
                $foto['b2_fotodepan'] = $uploadedDetails['file_name'];
            }}else{
                $foto['b2_fotodepan'] = $datanow['b2_fotodepan'];
            }
            if(isset($_FILES['b2_fotoutama'])){
            if(!$this->upload->do_upload('b2_fotoutama')){
                $uploadedDetails    = $this->upload->display_errors();
            }else{
                $uploadedDetails    = $this->upload->data();    
                $foto['b2_fotoutama'] = $uploadedDetails['file_name'];
            }}else{
                $foto['b2_fotoutama'] = $datanow['b2_fotoutama'];
            }
            if(isset($_FILES['b2_fotowudhu'])){
            if(!$this->upload->do_upload('b2_fotowudhu')){
                $uploadedDetails    = $this->upload->display_errors();
            }else{
                $uploadedDetails    = $this->upload->data();    
                $foto['b2_fotowudhu'] = $uploadedDetails['file_name'];
            }}else{
                $foto['b2_fotowudhu'] = $datanow['b2_fotowudhu'];
            }
            if(isset($_FILES['b2_fotokamar'])){
            if(!$this->upload->do_upload('b2_fotokamar')){
                $uploadedDetails    = $this->upload->display_errors();
            }else{
                $uploadedDetails    = $this->upload->data();    
                $foto['b2_fotokamar'] = $uploadedDetails['file_name'];
            }}else{
                $foto['b2_fotokamar'] = $datanow['b2_fotokamar'];
            }
            
            

            // var_dump($_POST);
            $hasil = $this->masjid_model->updateDataMasjidB2($_POST,$id,$foto);

            // if(isset($_SERVER['HTTP_REFERER'])) {
            //     if(checkReferer($_SERVER['HTTP_REFERER'])) header("location:".$_SERVER['HTTP_REFERER']);
            //  }
            if($hasil) echo json_encode(array("app_name"=>"fMasjid beta","update"=>"success"));
            else echo json_encode(array("app_name"=>"fMasjid beta","update"=>"fail"));
        }else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token or id"));
    }

    public function updateb3($token="",$id=""){
        if($this->checkToken($token)&&!empty($id)) {
            $hasil = $this->masjid_model->updateDataMasjidB3($_POST,$id);

            if(isset($_SERVER['HTTP_REFERER'])) {
                if(checkReferer($_SERVER['HTTP_REFERER'])) header("location:".$_SERVER['HTTP_REFERER']);
             }
            if($hasil) echo json_encode(array("app_name"=>"fMasjid beta","update"=>"success"));
            else echo json_encode(array("app_name"=>"fMasjid beta","update"=>"fail"));
        }else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token or id"));
    }

    public function updateb4($token="",$id=""){
        if($this->checkToken($token)&&!empty($id)) {
            $hasil = $this->masjid_model->updateDataMasjidB4($_POST,$id);

            if(isset($_SERVER['HTTP_REFERER'])) {
                if(checkReferer($_SERVER['HTTP_REFERER'])) header("location:".$_SERVER['HTTP_REFERER']);
             }
            if($hasil) echo json_encode(array("app_name"=>"fMasjid beta","update"=>"success"));
            else echo json_encode(array("app_name"=>"fMasjid beta","update"=>"fail"));
        }else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token or id"));
    }

    public function checkToken($token=""){
        $dummytoken = 1234;

        return $token==$dummytoken;
    }

    public function index($token=""){
        if($this->checkToken($token)) echo json_encode(array("app_name"=>"fMasjid beta","status"=>"ok"));
        else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token"));
    }

    public function getdatabidang($token="",$id="",$bidang=0){
        if($this->checkToken($token)&&!empty($id)) {
            switch ($bidang) {
                case 1: 
                    $data = $this->masjid_model->getDataMasjidB1($id);
                break;
                case 2: 
                    $data = $this->masjid_model->getDataMasjidB2($id);
                break;
                case 3: 
                    $data = $this->masjid_model->getDataMasjidB3($id);
                break;
                case 4: 
                    $data = $this->masjid_model->getDataMasjidB4($id);
                break;
            }
            echo json_encode($data);
        }else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token or id"));
    }

    public function post($token=""){
        if($this->checkToken($token)) {
            
        }else echo json_encode(array("app_name"=>"fMasjid beta","status"=>"bad","info"=>"invalid token"));
    }

    public function auth(){
        $this->load->model('default_model');
        if(!empty($_POST)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // var_dump($username);
            $num = $this->default_model->getAuth($username,$password);
            if($num!=0){
            $account = $this->default_model->getAccountData($username,$password)[0];
            echo json_encode(array("login"=>"success","id_pengguna"=>$account['id_pengguna']));
            }
            else echo json_encode(array("login"=>"fail"));
        }else{
            echo json_encode(array("login"=>"fail"));
        }
    }
}