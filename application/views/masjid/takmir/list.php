<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#1" role="tab" aria-controls="home" aria-selected="true">Bidang 1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#2" role="tab" aria-controls="profile" aria-selected="false">Bidang 2</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#3" role="tab" aria-controls="contact" aria-selected="false">Bidang 3</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#4" role="tab" aria-controls="contact" aria-selected="false">Bidang 4</a>
    </li>
</ul>


<div class="tab-content" id="myTabContent" style="margin-top: 20px;">

    <div class="tab-pane fade  show active" id="1" role="tabpanel" aria-labelledby="home-tab">
        <form action="<?php echo base_url()."/api/updateb1/".$user['token']."/".$user['id']; ?>" method="post">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Profil Masjid</th>
                        </tr>
                        <tr>
                            <td>Nama Masjid</td>
                            <td>
                                <input type="text" class="form-control" name="b1_nama" value="<?php echo $masjid['b1_nama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" class="form-control" name="b1_alamat" value="<?php echo $masjid['b1_alamat']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>IMB</td>
                            <td>
                                <input type="text" class="form-control" name="b1_imb" value="<?php echo $masjid['b1_imb']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Luas Masjid</td>
                            <td>
                                <input type="text" class="form-control" name="b1_luas" value="<?php echo $masjid['b1_luas']; ?>"> M
                                <sup>2
                                    <sup>
                            </td>
                        </tr>
                        <tr>
                            <td>Luas Lahan</td>
                            <td>
                                <input type="text" class="form-control" name="b1_luas_lahan" value="<?php echo $masjid['b1_luas_lahan']; ?>"> M
                                <sup>2
                                    <sup>
                            </td>
                        </tr>
                        <tr>
                            <td>Sertifikat</td>
                            <td>
                                <input type="text" class="form-control" name="b1_sertifikat" value="<?php echo $masjid['b1_sertifikat']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <input type="text" class="form-control" name="b1_status" value="<?php echo $masjid['b1_status']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Surat Wakaf</td>
                            <td>
                                <input type="text" class="form-control" name="b1_surat" value="<?php echo $masjid['b1_surat']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Asal Jemaah</td>
                            <td>
                                <input type="text" class="form-control" name="b1_asal" value="<?php echo $masjid['b1_asal']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Latitude Masjid</td>
                            <td>
                                <input type="text" class="form-control" name="b1_latitude" value="<?php echo $masjid['b1_latitude']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Longitude Masjid</td>
                            <td>
                                <input type="text" class="form-control" name="b1_longitude" value="<?php echo $masjid['b1_longitude']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>
                                <input type="text" class="form-control" name="b1_lainnya" value="<?php echo $masjid['b1_lainnya']; ?>">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Data Penduduk</th>
                        </tr>
                        <tr>
                            <td>Umur kurang dari 12 tahun</td>
                            <td>
                                <input type="text" class="form-control" name="b1_penduduk1" value="<?php echo $masjid['b1_penduduk1']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Umur 12 s.d 17 tahun</td>
                            <td>
                                <input type="text" class="form-control" name="b1_penduduk2" value="<?php echo $masjid['b1_penduduk2']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Umur 18 s.d 60 tahun</td>
                            <td>
                                <input type="text" class="form-control" name="b1_penduduk3" value="<?php echo $masjid['b1_penduduk3']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Umur diatas 60 tahun</td>
                            <td>
                                <input type="text" class="form-control" name="b1_penduduk4" value="<?php echo $masjid['b1_penduduk4']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="table-title">Data Agama</th>
                        </tr>
                        <tr>
                            <td>Islam - Tidak Shalat</td>
                            <td>
                                <input type="text" class="form-control" name="b1_islam1" value="<?php echo $masjid['b1_islam1']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Islam - Shalat</td>
                            <td>
                                <input type="text" class="form-control" name="b1_islam2" value="<?php echo $masjid['b1_islam2']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Islam - Aktif dimasjid</td>
                            <td>
                                <input type="text" class="form-control" name="b1_islam3" value="<?php echo $masjid['b1_islam3']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Non Muslim - Aktif ibadah</td>
                            <td>
                                <input type="text" class="form-control" name="b1_sertifikat" value="<?php echo $masjid['b1_sertifikat']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Non Muslim - Aktif ibadah</td>
                            <td>
                                <input type="text" class="form-control" name="b1_non1" value="<?php echo $masjid['b1_non1']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Non Muslim - Tidak aktif ibadah</td>
                            <td>
                                <input type="text" class="form-control" name="b1_non2" value="<?php echo $masjid['b1_non2']; ?>">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane fade " id="2" role="tabpanel" aria-labelledby="profile-tab">
        <form action="<?php echo base_url()."/api/updateb2/".$user['token']."/".$user['id']; ?>" method="post" enctype="multipart/form-data">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>

            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" scope="row" class="table-title">Identitas Masjid</th>
                        </tr>
                        <tr>
                            <td>Nama & Papan Nama Masjid</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_namapapan" value="ada" <?php if($masjid[ 'b2_namapapan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_namapapan" value="tidak" <?php if($masjid[ 'b2_namapapan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="table-title">Pembangunan Masjid</th>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid berdasarkan maket yang disiapkan terlebih dahulu</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_maket" value="ya" <?php if($masjid[ 'b2_maket']=='ya' ){echo "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_maket" value="tidak" <?php if($masjid[ 'b2_maket']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid memperhatikan simbol-simbol budaya </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_simbol" value="ya" <?php if($masjid[ 'b2_simbol']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_simbol" value="tidak" <?php if($masjid[ 'b2_simbol']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid memenuhi aspek artistik </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_artistik" value="ya" <?php if($masjid[ 'b2_artistik']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_artistik" value="tidak" <?php if($masjid[ 'b2_artistik']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid memenuhi kriteria kekokohan/ kemegahan </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_kemegahan" value="ya" <?php if($masjid[ 'b2_kemegahan']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_kemegahan" value="tidak" <?php if($masjid[ 'b2_kemegahan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid memenuhi kriteria kebersihan dan kesehatan </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_kebersihan" value="ya" <?php if($masjid[ 'b2_kebersihan']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_kebersihan" value="tidak" <?php if($masjid[ 'b2_kebersihan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid menyediakan lahan parkir </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_parkir" value="ya" <?php if($masjid[ 'b2_parkir']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_parkir" value="tidak" <?php if($masjid[ 'b2_parkir']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembangunan masjid memperhatikan kenyamanan lingkungan</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_nyaman" value="ya" <?php if($masjid[ 'b2_nyaman']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_nyaman" value="tidak" <?php if($masjid[ 'b2_nyaman']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Sertifikasi</td>
                            <td colspan="3">
                                <input type="text" class="form-control" name="b2_sertifikasi" value="<?php echo $masjid['b2_sertifikasi']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>IMB</td>
                            <td colspan="3">
                                <input type="text" class="form-control" name="b2_imb" value="<?php echo $masjid['b2_imb']; ?>">
                            </td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Foto Masjid</th>
                        </tr>
                        <tr>
                            <td>Depan Masjid </td>
                            <td>
<?php if($masjid['b2_fotodepan']!="-") { ?>
                                Foto Sekarang : <img src="<?php echo base_url()."/upload/".$masjid['b2_fotodepan']; ?>" width="100" alt="">
<?php } ?>
                                <input type="file" class="form-control" name="b2_fotodepan" value="<?php echo $masjid['b2_fotodepan']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Ruang Utama </td>
                            <td>
<?php if($masjid['b2_fotoutama']!="-") { ?>
                                Foto Sekarang : <img src="<?php echo base_url()."/upload/".$masjid['b2_fotoutama']; ?>" width="100" alt="">
<?php } ?>
                                <input type="file" class="form-control" name="b2_fotoutama" value="<?php echo $masjid['b2_fotoutama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Wudhu </td>
                            <td>
<?php if($masjid['b2_fotowudhu']!="-") { ?>
                                Foto Sekarang : <img src="<?php echo base_url()."/upload/".$masjid['b2_fotowudhu']; ?>" width="100" alt="">
<?php } ?>         
                                <input type="file" class="form-control" name="b2_fotowudhu" value="<?php echo $masjid['b2_fotowudhu']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Kamar Mandi </td>
                            <td>
<?php if($masjid['b2_fotowudhu']!="-") { ?>
                                Foto Sekarang : <img src="<?php echo base_url()."/upload/".$masjid['b2_fotowudhu']; ?>" width="100" alt="">
<?php } ?>                            
                                <input type="file" class="form-control" name="b2_fotokamar" value="<?php echo $masjid['b2_fotokamar']; ?>">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Pemeliharaan Masjid</th>
                        </tr>
                        <tr>
                            <td>Pemeliharaan/perawatan bangunan fisik masjid memenuhi persyaratan keamanan </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_aman" value="ya" <?php if($masjid[ 'b2_aman']=='ya' ){echo "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_aman" value="tidak" <?php if($masjid[ 'b2_aman']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pemeliharaan/perawatan bangunan fisik masjid memenuhi persyaratan keartistikan </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_artistik2" value="ya" <?php if($masjid[ 'b2_artistik2']=='ya' ){echo
                                        "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_artistik2" value="tidak" <?php if($masjid[ 'b2_artistik2']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pemeliharaan/perawatan masjid memenuhi kriteria kebersihan dan terbebas dari najis </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_najis" value="ya" <?php if($masjid[ 'b2_najis']=='ya' ){echo "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_najis" value="tidak" <?php if($masjid[ 'b2_najis']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pemeliharaan/perawatan masjid memenuhi kriteria keindahan dan kenyamanan lingkungan </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_indah" value="ya" <?php if($masjid[ 'b2_indah']=='ya' ){echo "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_indah" value="tidak" <?php if($masjid[ 'b2_indah']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pemeliharaan/perawatan masjid memenuhi kriteria kesehatan </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_sehat" value="ya" <?php if($masjid[ 'b2_sehat']=='ya' ){echo "checked";}?> >Ya</td>
                                <td>
                                    <input type="radio" class="form-control" name="b2_sehat" value="tidak" <?php if($masjid[ 'b2_sehat']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Kontak Takmir Masjid</th>
                        </tr>
                        <tr>
                            <td>Ketua </td>
                            <td>
                                <input type="text" class="form-control" name="b2_ketua" value="<?php echo $masjid['b2_ketua']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Sekretaris </td>
                            <td>
                                <input type="text" class="form-control" name="b2_sekretaris" value="<?php echo $masjid['b2_sekretaris']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Bendahara </td>
                            <td>
                                <input type="text" class="form-control" name="b2_bendahara" value="<?php echo $masjid['b2_bendahara']; ?>">
                            </td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Jumlah Jemaah Sholat</th>
                        </tr>
                        <tr>
                            <td>Subuh </td>
                            <td>
                                <input type="text" class="form-control" name="b2_sholatsubuh" value="<?php echo $masjid['b2_sholatsubuh']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Dzuhur dan Ashar </td>
                            <td>
                                <input type="text" class="form-control" name="b2_sholatdzuhur" value="<?php echo $masjid['b2_sholatdzuhur']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Magrib dan Isya </td>
                            <td>
                                <input type="text" class="form-control" name="b2_sholatmaghrib" value="<?php echo $masjid['b2_sholatmaghrib']; ?>">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="contact-tab">
        <form action="<?php echo base_url()."/api/updateb3/".$user['token']."/".$user['id']; ?>" method="post">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>

            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Sarana dan Prasarana</th>
                        </tr>
                        <tr>
                            <td>Ketersediaan tempat wudhu</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_wudhu" value="ada" <?php if($masjid[ 'b3_wudhu']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_wudhu" value="tidak" <?php if($masjid[ 'b3_wudhu']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Ketersediaan kamar mandi/toilet </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_kamar" value="ada" <?php if($masjid[ 'b3_kamar']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_kamar" value="tidak" <?php if($masjid[ 'b3_kamar']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>>
                            </td>
                        </tr>
                        <tr>
                            <td>Ketersediaan/ kecukupan air </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_air" value="ada" <?php if($masjid[ 'b3_air']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_air" value="tidak" <?php if($masjid[ 'b3_air']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Terdapat sound system </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_sound" value="ada" <?php if($masjid[ 'b3_sound']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_sound" value="tidak" <?php if($masjid[ 'b3_sound']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Gudang penyimpanan barang </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_gudang" value="ada" <?php if($masjid[ 'b3_gudang']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_gudang" value="tidak" <?php if($masjid[ 'b3_gudang']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Terdapat lahan parkir </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_lahan" value="ada" <?php if($masjid[ 'b3_lahan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_lahan" value="tidak" <?php if($masjid[ 'b3_lahan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Terdapat Ruang/kantor takmir</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_kantor" value="ada" <?php if($masjid[ 'b3_kantor']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_kantor" value="tidak" <?php if($masjid[ 'b3_kantor']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Ada jarak antara tempat wudlu dengan kamar mandi/toilet</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_jarak" value="ada" <?php if($masjid[ 'b3_jarak']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_jarak" value="tidak" <?php if($masjid[ 'b3_jarak']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Perpustaan: ketersediaan pustaka dan ruang baca </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_perpustakaan" value="ada" <?php if($masjid[ 'b3_perpustakaan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_perpustakaan" value="tidak" <?php if($masjid[ 'b3_perpustakaan']=='tidak'
                                        ){echo "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Sound system, Audio Visual</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_audio" value="ada" <?php if($masjid[ 'b3_audio']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_audio" value="tidak" <?php if($masjid[ 'b3_audio']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Mempunyai LCD Proyektor</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_projector" value="ada" <?php if($masjid[ 'b3_projector']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_projector" value="tidak" <?php if($masjid[ 'b3_projector']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Terdapat Penginapan tamu</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_penginapan" value="ada" <?php if($masjid[ 'b3_penginapan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_penginapan" value="tidak" <?php if($masjid[ 'b3_penginapan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Taman yang menjadi pemisah antara tempat wudlu dengan toilet</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_taman" value="ada" <?php if($masjid[ 'b3_taman']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_taman" value="tidak" <?php if($masjid[ 'b3_taman']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Perpustaan: ketersediaan pustaka, ruang baca, dan kelengkapan lainnya (komputer, internet, dll)</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_lainnya" value="ada" <?php if($masjid[ 'b3_lainnya']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_lainnya" value="tidak" <?php if($masjid[ 'b3_lainnya']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        </tr>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Organisasi</th>
                        </tr>
                        <tr>
                            <td>Memiliki muadzin, imam, marbot </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_petugas" value="ada" <?php if($masjid[ 'b3_petugas']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_petugas" value="tidak" <?php if($masjid[ 'b3_petugas']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Memiliki kepengurusan takmir</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_pengurus" value="ada" <?php if($masjid[ 'b3_pengurus']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_pengurus" value="tidak" <?php if($masjid[ 'b3_pengurus']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td> Surat-menyurat dan/atau dokumentasi (meliputi: Pengarsipan surat-menyurat dan Administrasi keuangan)
                            </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_surat" value="ada" <?php if($masjid[ 'b3_surat']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_surat" value="tidak" <?php if($masjid[ 'b3_surat']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Surat-menyurat dan/atau dokumentasi (meliputi: Kualitas surat-menyurat, Pengarsipan surat-menyurat,
                                dan Administrasi keuangan) dan catatan inventaris. </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_kualitassurat" value="ada" <?php if($masjid[ 'b3_kualitassurat']=='ada'
                                        ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_kualitassurat" value="tidak" <?php if($masjid[ 'b3_kualitassurat']=='tidak'
                                        ){echo "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Visi dan misi </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_visimisi" value="ada" <?php if($masjid[ 'b3_visimisi']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_visimisi" value="tidak" <?php if($masjid[ 'b3_visimisi']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pengurus Remaja Masjid (Remas)</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_remaja" value="ada" <?php if($masjid[ 'b3_remaja']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_remaja" value="tidak" <?php if($masjid[ 'b3_remaja']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Yayasan yang menaungi masjid </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_yayasan" value="ada" <?php if($masjid[ 'b3_yayasan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b3_yayasan" value="tidak" <?php if($masjid[ 'b3_yayasan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="contact-tab">
        <form action="<?php echo base_url()."/api/updateb4/".$user['token']."/".$user['id']; ?>" method="post">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>

            <div class="row">
                <div class="col-md-6">
                    <table class="table">

                        <tr>
                            <th colspan="2" class="table-title">Sarana dan Prasarana</th>
                        </tr>
                        <tr>
                            <td>Kegiatan TPA (Belajar Membaca Al Qur\92an)</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tpa" value="ada" <?php if($masjid[ 'b4_tpa']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tpa" value="tidak" <?php if($masjid[ 'b4_tpa']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Pengajian anak-anak (Belajar ttg keimanan, taharah, doa-doa, dll) </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_anak" value="ada" <?php if($masjid[ 'b4_anak']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_anak" value="tidak" <?php if($masjid[ 'b4_anak']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kegiatan seni budaya </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_seni" value="ada" <?php if($masjid[ 'b4_seni']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_seni" value="tidak" <?php if($masjid[ 'b4_seni']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Peringatan Hari Besar Islam </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_haribesar" value="ada" <?php if($masjid[ 'b4_haribesar']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_haribesar" value="tidak" <?php if($masjid[ 'b4_haribesar']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Penyelenggaraan pengajian umum </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pengajian" value="ada" <?php if($masjid[ 'b4_pengajian']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pengajian" value="tidak" <?php if($masjid[ 'b4_pengajian']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kegiatan seni budaya dan olahraga </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_olahraga" value="ada" <?php if($masjid[ 'b4_olahraga']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_olahraga" value="tidak" <?php if($masjid[ 'b4_olahraga']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kegiatan Tadarus </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tadarus" value="ada" <?php if($masjid[ 'b4_tadarus']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tadarus" value="tidak" <?php if($masjid[ 'b4_tadarus']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kajian keagamaan (selain tafsir dan hadits)</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_keagamaan" value="ada" <?php if($masjid[ 'b4_keagamaan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_keagamaan" value="tidak" <?php if($masjid[ 'b4_keagamaan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Penyelenggaraan pengajian berdasarkan gender dan/atau usia </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_gender" value="ada" <?php if($masjid[ 'b4_gender']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_gender" value="tidak" <?php if($masjid[ 'b4_gender']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kegiatan pemberdayaan masyarakat</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pemberdayaan" value="ada" <?php if($masjid[ 'b4_pemberdayaan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pemberdayaan" value="tidak" <?php if($masjid[ 'b4_pemberdayaan']=='tidak'
                                        ){echo "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kegiatan kependidikan (kursus khatib/imam/muadzin dan pendidikan kader)</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pendidikan" value="ada" <?php if($masjid[ 'b4_pendidikan']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pendidikan" value="tidak" <?php if($masjid[ 'b4_pendidikan']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Penyelenggaraan aktivitas (pentas, pergelaran, pameran, bazaar, dll)</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pentas" value="ada" <?php if($masjid[ 'b4_pentas']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_pentas" value="tidak" <?php if($masjid[ 'b4_pentas']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Kajian tafsir dan hadits </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tafsir" value="ada" <?php if($masjid[ 'b4_tafsir']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tafsir" value="tidak" <?php if($masjid[ 'b4_tafsir']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        </tr>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th colspan="2" class="table-title">Amal Usaha</th>
                        </tr>
                        <tr>
                            <td>Madrasah </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_madrasah" value="ada" <?php if($masjid[ 'b4_madrasah']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_madrasah" value="tidak" <?php if($masjid[ 'b4_madrasah']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Taman kanak kanak (TK) </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tk" value="ada" <?php if($masjid[ 'b4_tk']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tk" value="tidak" <?php if($masjid[ 'b4_tk']=='tidak' ){echo "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Sekolah dasar (SD) </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_sd" value="ada" <?php if($masjid[ 'b4_sd']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_sd" value="tidak" <?php if($masjid[ 'b4_sd']=='tidak' ){echo "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Sekolah menengah pertama </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_sltp" value="ada" <?php if($masjid[ 'b4_sltp']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_sltp" value="tidak" <?php if($masjid[ 'b4_sltp']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Sekolah menengah atas (SMA) </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_slta" value="ada" <?php if($masjid[ 'b4_slta']=='ada' ){echo "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_slta" value="tidak" <?php if($masjid[ 'b4_slta']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Klinik</td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_klinik" value="ada" <?php if($masjid[ 'b4_klinik']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_klinik" value="tidak" <?php if($masjid[ 'b4_klinik']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Rumah tahfidz </td>
                            <td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tahfiz" value="ada" <?php if($masjid[ 'b4_tahfiz']=='ada' ){echo
                                        "checked";}?> >Ada</td>
                                <td>
                                    <input type="radio" class="form-control" name="b4_tahfiz" value="tidak" <?php if($masjid[ 'b4_tahfiz']=='tidak' ){echo
                                        "checked";}?> >Tidak</td>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>