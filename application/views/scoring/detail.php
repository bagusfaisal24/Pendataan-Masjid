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
        <div class="card col-md-12" style="padding:15px;">
            <?php // var_dump($score); ?>
            <form method="post" action="<?php echo base_url('scoring/simpan/'.$masjid['bidang_kode']); ?>">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pertanyaan</label>
                    <div class="col-sm-9">    
                        <p class="col-form-label"> 
                        Bagaimana Kualitas Administrasi Masjid (Surat, Pengartipan, Pencatatan) ?
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jawaban</label>
                    <div class="col-sm-9">
                        <p class="col-form-label"> 
                        <?php echo echoData($masjid['b3_kualitassurat']); ?>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nilai</label>
                    <div class="col-sm-7">
                        <?php 
                        $nilai_stat = "required"; 
                        if($score['nilai']!=0) $nilai_stat="readonly";
                        ?>
                        <input type="number" name="nilai" id="nilai" class="form-control" value="<?php echo $score['nilai']; ?>" min="<?php echo $settings['setting_false']; ?>" max="<?php echo $settings['setting_true']; ?>" <?php echo $nilai_stat; ?>>
                        <small class="form-text text-muted">Perhatian. nilai yang dapat diberikan antara rentang <?php echo $settings['setting_false']; ?> sampai <?php echo $settings['setting_true']; ?></small>
 
                    </div>
                    <div class="col-sm-2">
                    <?php 
                        if($score['nilai']!=0){
                    ?>
                        <a href="#" id="ubahnilai" class="btn btn-sm btn-primary btn-block pull-right">Ubah</a>
                    <?php } ?>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary pull-right" name="submit" value="Simpan">
            </form>
        </div>
    </div>
</div>

<script>
    var statustrue = true;
    
    $('#ubahnilai').click(function(){
        if(statustrue){
            $('#nilai').removeAttr('readonly');
            $("#nilai").attr('required', 'required');
            statustrue = false;
        }else{
            $('#nilai').removeAttr('required');
            $("#nilai").attr('readonly', 'readonly');
            statustrue = true;
        }
    });
</script>