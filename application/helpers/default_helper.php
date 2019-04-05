<?php

function createBreadcrumb($data){
    $hasil = '  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">';
    foreach($data as $bread) {
        if ($bread === end($data)) {
        $hasil .= '         <li class="breadcrumb-item active" aria-current="page">'.$bread.'</li>';
        }else
        $hasil .= '         <li class="breadcrumb-item" aria-current="page">'.$bread.'</li>';
    }
    $hasil .= '     </ol>
                </nav>';

    return $hasil;
}

function LoginRedirect($status){
    if($status==false) redirect("login");
}

function calcProgress($data){
    $total = count($data);
    // echo $total;
    $minus = 0;
    foreach ($data as $row) {
        if($row=="") $minus++;
    }

    $percent = 100*($minus/$total);
    $output = round((100-$percent), 2); 
    return $output." %";

}

function checkType($data){
    extract($data);
    $status = 1;
    if($b3_wudhu=="ada"&&$b3_kamar=="ada"&&$b3_air=="ada") $status = 1;
    if($status==1&&$b3_sound=="ada"&&$b3_gudang=="ada") $status = 2;
    if($status==2&&$b3_lahan=="ada"&&$b3_kantor=="ada"&&$b3_jarak=="ada"&&$b3_perpustakaan=="ada") $status = 3;
    if($status==3&&$b3_audio=="ada"&&$b3_projector=="ada"&&$b3_penginapan=="ada"&&$b3_taman=="ada"&&$b3_lainnya=="ada") $status = 4;
    
    return $status;
}

function calcScore($data,$true,$false){
    $total = 79;
    $minus = 0;
    foreach ($data as $row) {
        if($row==""||$row=="tidak") $minus++;
    }

    $score = (($total-$minus)*$true)+($minus*$false);
    return $score;
}

function checkLevel($level){
    switch ($level) {
        case 0:
            return "Admin/LPM";
            break;
        
        case 1:
            return "Juri";
            break;
        
        case 2:
            return "Takmir";
            break;
        
        case 3:
            return "Mahasiswa";
            break;
    }

}

function generateToken($x,$y){
    return md5($x."".$y);
}

function echoData($data){
    if($data!=""){
        return $data;
    }else{
        return '<span class="badge badge-warning">Belum Terisi</span>';
    }
}

function randomWord($id = 20){
    $pool = '1234567890abcdefghijkmnpqrstuvwxyz';
    
    $word = '';
    for ($i = 0; $i < $id; $i++){
        $word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
    }
    return $word; 
}

function checkReferer($referer){
    if (strpos($referer,base_url() ) !== false) {
        return true;
    }else return false;
}
