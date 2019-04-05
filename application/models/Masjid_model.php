<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masjid_model extends CI_Model{

	public function getDataMasjids($columns = array("*")){
		$column = "";
		$len = count($columns);
		for($i=0;$i<$len;$i++){
			if($i<($len-1)) $column .= $columns[$i].",";
			else $column .= $columns[$i];
		}

		$sql = "
		SELECT ".$column." FROM bidang1,bidang2,bidang3,bidang4,bidang_relasi WHERE 	
			bidang1.b1_kode = bidang_relasi.b1 AND
			bidang2.b2_kode = bidang_relasi.b2 AND
			bidang3.b3_kode = bidang_relasi.b3 AND
			bidang4.b4_kode = bidang_relasi.b4 AND
			bidang_relasi.status_flag = 0
			";

		$data = $this->db->query($sql);
		return $data->result_array();
	}


	public function getDataRefresh(){
		$sql = "
		SELECT * FROM bidang2,bidang3,bidang4,bidang_relasi WHERE 	
			bidang2.b2_kode = bidang_relasi.b2 AND
			bidang3.b3_kode = bidang_relasi.b3 AND
			bidang4.b4_kode = bidang_relasi.b4 AND
			bidang_relasi.status_flag = 0";

		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function refresh($kode,$tipe,$score,$progress){
		$sql = "
		UPDATE `bidang_relasi` SET `tipe`='".$tipe."',`score`='".$score."',`progress`='".$progress."' WHERE `bidang_kode`='".$kode."'";
		$data = $this->db->query($sql);
	}

	public function scoring($nilai,$pengguna,$bidang){
		$sql = "
		UPDATE `nilai` SET `nilai`= '".$nilai."' WHERE `pengguna_id`='".$pengguna."' AND `bidang_kode`='".$bidang."'";
		$data = $this->db->query($sql);
	}

	public function getScore($pengguna,$bidang){
		$sql = "
		SELECT nilai FROM nilai WHERE `pengguna_id`='".$pengguna."' AND `bidang_kode`='".$bidang."'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getTotalScore($bidang){
		$sql = "
		SELECT SUM(nilai) as total FROM `nilai` WHERE `bidang_kode` = '".$bidang."'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getHasilTipe1(){
		$sql = "
		SELECT * FROM bidang_relasi, bidang1 WHERE bidang_relasi.tipe = 1 AND bidang1.b1_kode = bidang_relasi.b1 ORDER BY bidang_relasi.score DESC";
		$data = $this->db->query($sql);
		return $data->result_array();
	}
	
	public function getHasilTipe2(){
		$sql = "
		SELECT * FROM bidang_relasi, bidang1 WHERE bidang_relasi.tipe = 2 AND bidang1.b1_kode = bidang_relasi.b1 ORDER BY bidang_relasi.score DESC";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getHasilTipe3(){
		$sql = "
		SELECT * FROM bidang_relasi, bidang1 WHERE bidang_relasi.tipe = 3 AND bidang1.b1_kode = bidang_relasi.b1 ORDER BY bidang_relasi.score DESC";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getHasilTipe4(){
		$sql = "
		SELECT * FROM bidang_relasi, bidang1 WHERE bidang_relasi.tipe = 4 AND bidang1.b1_kode = bidang_relasi.b1 ORDER BY bidang_relasi.score DESC";
		$data = $this->db->query($sql);
		return $data->result_array();
	}
	
	
	

	public function getTipe1(){
		$sql = "
		SELECT count(*) as total FROM bidang_relasi WHERE tipe = 1";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getTipe2(){
		$sql = "
		SELECT count(*) as total FROM bidang_relasi WHERE tipe = 2";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getTipe3(){
		$sql = "
		SELECT count(*) as total FROM bidang_relasi WHERE tipe = 3";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getTipe4(){
		$sql = "
		SELECT count(*) as total FROM bidang_relasi WHERE tipe = 4";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getDetailMasjid($id){
		$sql = "
		SELECT * FROM bidang1,bidang2,bidang3,bidang4,bidang_relasi WHERE 	
			bidang_relasi.bidang_kode = '".$id."' AND
			bidang1.b1_kode = bidang_relasi.b1 AND
			bidang2.b2_kode = bidang_relasi.b2 AND
			bidang3.b3_kode = bidang_relasi.b3 AND
			bidang4.b4_kode = bidang_relasi.b4 AND
			bidang_relasi.status_flag = 0";

		$data = $this->db->query($sql);
		return $data->result_array();
	}
	
	public function getDataMasjidTakmir($id){
		$sql = "
		SELECT * FROM bidang1,bidang2,bidang3,bidang4,bidang_relasi WHERE 	
			bidang_relasi.pengguna_id = '".$id."' AND
			bidang1.b1_kode = bidang_relasi.b1 AND
			bidang2.b2_kode = bidang_relasi.b2 AND
			bidang3.b3_kode = bidang_relasi.b3 AND
			bidang4.b4_kode = bidang_relasi.b4 AND
			bidang_relasi.status_flag = 0";

		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getDataMasjidB1($id){
		$data = $this->db->query("SELECT * FROM bidang1,bidang_relasi WHERE bidang_relasi.bidang_kode = (SELECT bidang_kode FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1) AND bidang1.b1_kode = bidang_relasi.b1");
		return $data->result_array();
	}

	public function getDataMasjidB2($id){
		$data = $this->db->query("SELECT * FROM bidang2,bidang_relasi WHERE bidang_relasi.bidang_kode = (SELECT bidang_kode FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1) AND bidang2.b2_kode = bidang_relasi.b2");
		return $data->result_array();
	}

	public function getDataMasjidB3($id){
		$data = $this->db->query("SELECT * FROM bidang3,bidang_relasi WHERE bidang_relasi.bidang_kode = (SELECT bidang_kode FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1) AND bidang3.b3_kode = bidang_relasi.b3");
		return $data->result_array();
	}

	public function getDataMasjidB4($id){
		$data = $this->db->query("SELECT * FROM bidang4,bidang_relasi WHERE bidang_relasi.bidang_kode = (SELECT bidang_kode FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1) AND bidang4.b4_kode = bidang_relasi.b4");
		return $data->result_array();
	}	

	public function delPengguna($id){
		
		$delb1 = $this->db->query("DELETE FROM bidang1 WHERE b1_kode = (SELECT b1 FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1)");
		$delb2 = $this->db->query("DELETE FROM bidang2 WHERE b2_kode = (SELECT b2 FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1)");
		$delb3 = $this->db->query("DELETE FROM bidang3 WHERE b3_kode = (SELECT b3 FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1)");
		$delb4 = $this->db->query("DELETE FROM bidang4 WHERE b4_kode = (SELECT b4 FROM bidang_relasi WHERE pengguna_id = '".$id."' LIMIT 1)");

		$delb = $this->db->query("DELETE FROM bidang_relasi WHERE pengguna_id = '".$id."'");

		$query = $this->db->query("DELETE FROM pengguna WHERE id_pengguna = '".$id."'");
		

		return $query;
	}

	public function updatePengguna($id,$nama,$password){
		$query = $this->db->query(" UPDATE `pengguna` SET `nama_lengkap`='".$nama."',`password`='".$password."' WHERE `id_pengguna`='".$id."'");
		return $query;
	}

	public function addPengguna($nama,$username,$password,$token,$level){
		$query = $this->db->query("INSERT INTO 	`pengguna`(	`nama_lengkap`, 
															`username`, 
															`password`, 
															`token`, 
															`level`) 
															VALUES (
															'".$nama."',
															'".$username."',
															'".$password."',
															'".$token."',
															'".$level."'	
															)"); 
		$id_pengguna = $this->db->insert_id();
		
		if($level==2){
			$query_b1 = $this->db->query("INSERT INTO `bidang1`(`b1_lainnya`) VALUES ('')");
			$id_b1 = $this->db->insert_id();
			$query_b2 = $this->db->query("INSERT INTO `bidang2`(`b2_namapapan`) VALUES ('')");
			$id_b2 = $this->db->insert_id();
			$query_b3 = $this->db->query("INSERT INTO `bidang3`(`b3_wudhu`) VALUES ('')");
			$id_b3 = $this->db->insert_id();
			$query_b4 = $this->db->query("INSERT INTO `bidang4`(`b4_tpa`) VALUES ('')");
			$id_b4 = $this->db->insert_id();

			$query_bidang = $this->db->query("INSERT INTO `bidang_relasi`(	`b1`, 
																			`b2`, 
																			`b3`, 
																			`b4`, 
																			`pengguna_id`) 
																			VALUES (
																			'".$id_b1."',
																			'".$id_b2."',
																			'".$id_b3."',
																			'".$id_b4."',	
																			'".$id_pengguna."'
																			)");
			$id_bidang = $this->db->insert_id();

			$query_nilai1 = $this->db->query("INSERT INTO `nilai`(	`pengguna_id`,
																	`bidang_kode`) 
																	VALUES (
																	'7',
																	'".$id_bidang."'
																	)");
			
			$query_nilai1 = $this->db->query("INSERT INTO `nilai`(	`pengguna_id`,
																	`bidang_kode`) 
																	VALUES (
																	'15',
																	'".$id_bidang."'
																	)");

			$query_nilai1 = $this->db->query("INSERT INTO `nilai`(	`pengguna_id`,
																	`bidang_kode`) 
																	VALUES (
																	'16',
																	'".$id_bidang."'
																	)");
		}
		
		return $query;

	}

	public function updateDataMasjidB1($data,$id){
		extract($data);

		$sql = "UPDATE `bidang1` SET 	`b1_nama`='$b1_nama',
										`b1_alamat`='$b1_alamat',
										`b1_imb`='$b1_imb',
										`b1_luas`='$b1_luas',
										`b1_luas_lahan`='$b1_luas_lahan',
										`b1_sertifikat`='$b1_sertifikat',
										`b1_status`='$b1_status',
										`b1_surat`='$b1_surat',
										`b1_asal`='$b1_asal',
										`b1_penduduk1`='$b1_penduduk1',
										`b1_penduduk2`='$b1_penduduk2',
										`b1_penduduk3`='$b1_penduduk3',
										`b1_penduduk4`='$b1_penduduk4',
										`b1_islam1`='$b1_islam1',
										`b1_islam2`='$b1_islam2',
										`b1_islam3`='$b1_islam3',
										`b1_non1`='$b1_non1',
										`b1_non2`='$b1_non1',
										`b1_longitude`='$b1_longitude',
										`b1_latitude`='$b1_latitude',
										`b1_lainnya`='$b1_lainnya' 
										WHERE 
										`b1_kode`= (SELECT b1 FROM bidang_relasi WHERE pengguna_id = $id)
										";
		return $query = $this->db->query($sql);
	}

	public function updateDataMasjidB2($data,$id,$foto){
		echo var_dump($foto);
		extract($data);
		extract($foto);
		$sql = "UPDATE `bidang2` SET    `b2_namapapan`='".$b2_namapapan."',
										`b2_maket`='".$b2_maket."',
										`b2_simbol`='".$b2_simbol."',
										`b2_artistik`='".$b2_artistik."',
										`b2_kemegahan`='".$b2_kemegahan."',
										`b2_kebersihan`='".$b2_kebersihan."',
										`b2_parkir`='".$b2_parkir."',
										`b2_nyaman`='".$b2_nyaman."',
										`b2_aman`='".$b2_aman."',
										`b2_artistik2`='".$b2_artistik2."',
										`b2_najis`='".$b2_najis."',
										`b2_indah`='".$b2_indah."',
										`b2_sehat`='".$b2_sehat."',
										`b2_fotodepan`='".$b2_fotodepan."',
										`b2_fotoutama`='".$b2_fotoutama."',
										`b2_fotowudhu`='".$b2_fotowudhu."',
										`b2_fotokamar`='".$b2_fotokamar."',
										`b2_ketua`='".$b2_ketua."',
										`b2_sekretaris`='".$b2_sekretaris."',
										`b2_bendahara`='".$b2_bendahara."',
										`b2_sertifikasi`='".$b2_sertifikasi."',
										`b2_imb`='".$b2_imb."',
										`b2_sholatsubuh`='".$b2_sholatsubuh."',
										`b2_sholatdzuhur`='".$b2_sholatdzuhur."',
										`b2_sholatmaghrib`='".$b2_sholatmaghrib."' 
										WHERE 
										`b2_kode`= (SELECT b2 FROM bidang_relasi WHERE pengguna_id = $id)
										";
		return $query = $this->db->query($sql);
	}

	public function updateDataMasjidB3($data,$id){
		extract($data);

		$sql = "UPDATE `bidang3` SET    `b3_wudhu`='".$b3_wudhu."',
										`b3_kamar`='".$b3_kamar."',
										`b3_air`='".$b3_air."',
										`b3_sound`='".$b3_sound."',
										`b3_gudang`='".$b3_gudang."',
										`b3_lahan`='".$b3_lahan."',
										`b3_kantor`='".$b3_kantor."',
										`b3_jarak`='".$b3_jarak."',
										`b3_perpustakaan`='".$b3_perpustakaan."',
										`b3_audio`='".$b3_audio."',
										`b3_projector`='".$b3_projector."',
										`b3_penginapan`='".$b3_penginapan."',
										`b3_taman`='".$b3_taman."',
										`b3_lainnya`='".$b3_lainnya."',
										`b3_petugas`='".$b3_petugas."',
										`b3_pengurus`='".$b3_pengurus."',
										`b3_surat`='".$b3_surat."',
										`b3_kualitassurat`='".$b3_kualitassurat."',
										`b3_visimisi`='".$b3_visimisi."',
										`b3_remaja`='".$b3_remaja."',
										`b3_yayasan`='".$b3_yayasan."' 
										WHERE 
										`b3_kode`= (SELECT b3 FROM bidang_relasi WHERE pengguna_id = $id)
										";
		return $query = $this->db->query($sql);
	}

	public function updateDataMasjidB4($data,$id){
		extract($data);

		$sql = "UPDATE `bidang4` SET    `b4_tpa`='".$b4_tpa."',
										`b4_anak`='".$b4_anak."',
										`b4_seni`='".$b4_seni."',
										`b4_haribesar`='".$b4_haribesar."',
										`b4_pengajian`='".$b4_pengajian."',
										`b4_olahraga`='".$b4_olahraga."',
										`b4_tadarus`='".$b4_tadarus."',
										`b4_keagamaan`='".$b4_keagamaan."',
										`b4_gender`='".$b4_gender."',
										`b4_pemberdayaan`='".$b4_pemberdayaan."',
										`b4_pendidikan`='".$b4_pendidikan."',
										`b4_pentas`='".$b4_pentas."',
										`b4_tafsir`='".$b4_tafsir."',
										`b4_madrasah`='".$b4_madrasah."',
										`b4_tk`='".$b4_tk."',
										`b4_sd`='".$b4_sd."',
										`b4_sltp`='".$b4_sltp."',
										`b4_slta`='".$b4_slta."',
										`b4_klinik`='".$b4_klinik."',
										`b4_tahfiz`='".$b4_tahfiz."'
										WHERE 
										`b4_kode`= (SELECT b4 FROM bidang_relasi WHERE pengguna_id = $id)
										";
		return $query = $this->db->query($sql);
	}

}
?>