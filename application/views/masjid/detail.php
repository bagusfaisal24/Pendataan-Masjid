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
<?php //var_dump($masjid); ?>
<div class="tab-content" id="myTabContent" style="margin-top: 20px;">
    <div class="tab-pane fade  show active" id="1" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th colspan="2" class="table-title">Profil Masjid</th>
                    </tr>
                    <tr>
                        <td>Nama Masjid</td>
                        <td>
                            <?php echo echoData($masjid['b1_nama']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <?php echo echoData($masjid['b1_alamat']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>IMB</td>
                        <td>
                            <?php echo echoData($masjid['b1_imb']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Luas Masjid</td>
                        <td>
                            <?php echo echoData($masjid['b1_luas']); ?> M
                            <sup>2
                                <sup>
                        </td>
                    </tr>
                    <tr>
                        <td>Luas Lahan</td>
                        <td>
                            <?php echo echoData($masjid['b1_luas_lahan']); ?> M
                            <sup>2
                                <sup>
                        </td>
                    </tr>
                    <tr>
                        <td>Sertifikat</td>
                        <td>
                            <?php echo echoData($masjid['b1_sertifikat']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <?php echo echoData($masjid['b1_status']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Surat Wakaf</td>
                        <td>
                            <?php echo echoData($masjid['b1_surat']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Jemaah</td>
                        <td>
                            <?php echo echoData($masjid['b1_asal']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Koordinat Masjid</td>
                        <td>
                            <?php echo echoData($masjid['b1_longitude'].",".$masjid['b1_latitude']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Lainnya</td>
                        <td>
                            <?php echo echoData($masjid['b1_lainnya']); ?>
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
                            <?php echo echoData($masjid['b1_penduduk1']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Umur 12 s.d 17 tahun</td>
                        <td>
                            <?php echo echoData($masjid['b1_penduduk2']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Umur 18 s.d 60 tahun</td>
                        <td>
                            <?php echo echoData($masjid['b1_penduduk3']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Umur diatas 60 tahun</td>
                        <td>
                            <?php echo echoData($masjid['b1_penduduk4']); ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" class="table-title">Data Agama</th>
                    </tr>
                    <tr>
                        <td>Islam - Tidak Shalat</td>
                        <td>
                            <?php echo echoData($masjid['b1_islam1']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Islam - Shalat</td>
                        <td>
                            <?php echo echoData($masjid['b1_islam2']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Islam - Aktif dimasjid</td>
                        <td>
                            <?php echo echoData($masjid['b1_islam3']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Non Muslim - Aktif ibadah</td>
                        <td>
                            <?php echo echoData($masjid['b1_sertifikat']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Non Muslim - Aktif ibadah</td>
                        <td>
                            <?php echo echoData($masjid['b1_non1']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Non Muslim - Tidak aktif ibadah</td>
                        <td>
                            <?php echo echoData($masjid['b1_non2']); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade " id="2" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th colspan="2" scope="row" class="table-title">Identitas Masjid</th>
                    </tr>
                    <tr>
                        <td>Nama & Papan Nama Masjid</td>
                        <td>
                            <?php echo echoData($masjid['b2_namapapan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" class="table-title">Pembangunan Masjid</th>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid berdasarkan maket yang disiapkan terlebih dahulu</td>
                        <td>
                            <?php echo echoData($masjid['b2_maket']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid memperhatikan simbol-simbol budaya </td>
                        <td>
                            <?php echo echoData($masjid['b2_simbol']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid memenuhi aspek artistik </td>
                        <td>
                            <?php echo echoData($masjid['b2_artistik']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid memenuhi kriteria kekokohan/ kemegahan </td>
                        <td>
                            <?php echo echoData($masjid['b2_kemegahan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid memenuhi kriteria kebersihan dan kesehatan </td>
                        <td>
                            <?php echo echoData($masjid['b2_kebersihan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid menyediakan lahan parkir </td>
                        <td>
                            <?php echo echoData($masjid['b2_parkir']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan masjid memperhatikan kenyamanan lingkungan</td>
                        <td>
                            <?php echo echoData($masjid['b2_nyaman']); ?>
                        </td>
                    </tr>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th colspan="2" scope="row" class="table-title">Foto Masjid</th>
                    </tr>
                    <tr>
                        <td>Foto Depan</td>
                        <td>
                        
                            <?php if($masjid['b2_fotodepan']!="-") { ?>
                            <img src="<?php echo base_url()."/upload/".$masjid['b2_fotodepan']; ?>" width="100"
                                alt="">
                            <?php }else echo echoData(""); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Utama</td>
                        <td>
                        
                            <?php if($masjid['b2_fotoutama']!="-") { ?>
                            <img src="<?php echo base_url()."/upload/".$masjid['b2_fotoutama']; ?>" width="100"
                                alt="">
                            <?php }else echo echoData(""); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Wudhu</td>
                        <td>
                        
                            <?php if($masjid['b2_fotowudhu']!="-") { ?>
                            <img src="<?php echo base_url()."/upload/".$masjid['b2_fotowudhu']; ?>" width="100"
                                alt="">
                            <?php }else echo echoData(""); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Kamar Mandi</td>
                        <td>
                        
                            <?php if($masjid['b2_fotokamar']!="-") { ?>
                            <img src="<?php echo base_url()."/upload/".$masjid['b2_fotokamar']; ?>" width="100"
                                alt="">
                            <?php }else echo echoData(""); ?>
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
                            <?php echo echoData($masjid['b2_aman']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemeliharaan/perawatan bangunan fisik masjid memenuhi persyaratan keartistikan </td>
                        <td>
                            <?php echo echoData($masjid['b2_artistik2']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemeliharaan/perawatan masjid memenuhi kriteria kebersihan dan terbebas dari najis </td>
                        <td>
                            <?php echo echoData($masjid['b2_najis']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemeliharaan/perawatan masjid memenuhi kriteria keindahan dan kenyamanan lingkungan </td>
                        <td>
                            <?php echo echoData($masjid['b2_indah']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemeliharaan/perawatan masjid memenuhi kriteria kesehatan </td>
                        <td>
                            <?php echo echoData($masjid['b2_sehat']); ?>
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
                            <?php echo echoData($masjid['b2_ketua']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sekretaris </td>
                        <td>
                            <?php echo echoData($masjid['b2_sekretaris']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Bendahara </td>
                        <td>
                            <?php echo echoData($masjid['b2_bendahara']); ?>
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
                            <?php echo echoData($masjid['b2_sholatsubuh']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Dzuhur dan Ashar </td>
                        <td>
                            <?php echo echoData($masjid['b2_sholatdzuhur']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Maghrib dan Isya </td>
                        <td>
                            <?php echo echoData($masjid['b2_sholatmaghrib']); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row">
            <div class="col-md-6">
                <table class="table">

                    <tr>
                        <th colspan="2" class="table-title">Sarana dan Prasarana</th>
                    </tr>
                    <tr>
                        <td>Ketersediaan tempat wudhu</td>
                        <td>
                            <?php echo echoData($masjid['b3_wudhu']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ketersediaan kamar mandi/toilet </td>
                        <td>
                            <?php echo echoData($masjid['b3_kamar']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ketersediaan/ kecukupan air </td>
                        <td>
                            <?php echo echoData($masjid['b3_air']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Terdapat sound system </td>
                        <td>
                            <?php echo echoData($masjid['b3_sound']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Gudang penyimpanan barang </td>
                        <td>
                            <?php echo echoData($masjid['b3_gudang']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Terdapat lahan parkir </td>
                        <td>
                            <?php echo echoData($masjid['b3_lahan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Terdapat Ruang/kantor takmir</td>
                        <td>
                            <?php echo echoData($masjid['b3_kantor']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ada jarak antara tempat wudlu dengan kamar mandi/toilet</td>
                        <td>
                            <?php echo echoData($masjid['b3_jarak']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Perpustaan: ketersediaan pustaka dan ruang baca </td>
                        <td>
                            <?php echo echoData($masjid['b3_perpustakaan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sound system, Audio Visual</td>
                        <td>
                            <?php echo echoData($masjid['b3_audio']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mempunyai LCD Proyektor</td>
                        <td>
                            <?php echo echoData($masjid['b3_projector']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Terdapat Penginapan tamu</td>
                        <td>
                            <?php echo echoData($masjid['b3_penginapan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Taman yang menjadi pemisah antara tempat wudlu dengan toilet</td>
                        <td>
                            <?php echo echoData($masjid['b3_taman']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Perpustaan: ketersediaan pustaka, ruang baca, dan kelengkapan lainnya (komputer, internet, dll)</td>
                        <td>
                            <?php echo echoData($masjid['b3_lainnya']); ?>
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
                            <?php echo echoData($masjid['b3_petugas']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Memiliki kepengurusan takmir</td>
                        <td>
                            <?php echo echoData($masjid['b3_pengurus']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td> Surat-menyurat dan/atau dokumentasi (meliputi: Pengarsipan surat-menyurat dan Administrasi keuangan)
                            </td>
                        <td>
                            <?php echo echoData($masjid['b3_surat']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Surat-menyurat dan/atau dokumentasi (meliputi: Kualitas surat-menyurat, Pengarsipan surat-menyurat,
                            dan Administrasi keuangan) dan catatan inventaris. </td>
                        <td>
                            <?php echo echoData($masjid['b3_kualitassurat']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Visi dan misi </td>
                        <td>
                            <?php echo echoData($masjid['b3_visimisi']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengurus Remaja Masjid (Remas)</td>
                        <td>
                            <?php echo echoData($masjid['b3_remaja']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Yayasan yang menaungi masjid </td>
                        <td>
                            <?php echo echoData($masjid['b3_yayasan']); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row">
            <div class="col-md-6">
                <table class="table">

                    <tr>
                        <th colspan="2" class="table-title">Sarana dan Prasarana</th>
                    </tr>
                    <tr>
                        <td>Kegiatan TPA (Belajar Membaca Al Qur\92an)</td>
                        <td>
                            <?php echo echoData($masjid['b4_tpa']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pengajian anak-anak (Belajar ttg keimanan, taharah, doa-doa, dll) </td>
                        <td>
                            <?php echo echoData($masjid['b4_anak']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kegiatan seni budaya </td>
                        <td>
                            <?php echo echoData($masjid['b4_seni']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Peringatan Hari Besar Islam </td>
                        <td>
                            <?php echo echoData($masjid['b4_haribesar']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Penyelenggaraan pengajian umum </td>
                        <td>
                            <?php echo echoData($masjid['b4_pengajian']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kegiatan seni budaya dan olahraga </td>
                        <td>
                            <?php echo echoData($masjid['b4_olahraga']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kegiatan Tadarus </td>
                        <td>
                            <?php echo echoData($masjid['b4_tadarus']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kajian keagamaan (selain tafsir dan hadits)</td>
                        <td>
                            <?php echo echoData($masjid['b4_keagamaan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Penyelenggaraan pengajian berdasarkan gender dan/atau usia </td>
                        <td>
                            <?php echo echoData($masjid['b4_gender']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kegiatan pemberdayaan masyarakat</td>
                        <td>
                            <?php echo echoData($masjid['b4_pemberdayaan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kegiatan kependidikan (kursus khatib/imam/muadzin dan pendidikan kader)</td>
                        <td>
                            <?php echo echoData($masjid['b4_pendidikan']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Penyelenggaraan aktivitas (pentas, pergelaran, pameran, bazaar, dll)</td>
                        <td>
                            <?php echo echoData($masjid['b4_pentas']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kajian tafsir dan hadits </td>
                        <td>
                            <?php echo echoData($masjid['b4_tafsir']); ?>
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
                            <?php echo echoData($masjid['b4_madrasah']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Taman kanak kanak (TK) </td>
                        <td>
                            <?php echo echoData($masjid['b4_tk']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sekolah dasar (SD) </td>
                        <td>
                            <?php echo echoData($masjid['b4_sd']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sekolah menengah pertama </td>
                        <td>
                            <?php echo echoData($masjid['b4_sltp']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sekolah menengah atas (SMA) </td>
                        <td>
                            <?php echo echoData($masjid['b4_slta']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Klinik</td>
                        <td>
                            <?php echo echoData($masjid['b4_klinik']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Rumah tahfidz </td>
                        <td>
                            <?php echo echoData($masjid['b4_tahfiz']); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>