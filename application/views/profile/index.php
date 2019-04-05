<div class="row">
    <div class="col-md-6">
        <div class="card col-md-12" style="padding:15px;">
            <?php // var_dump($score); ?>
            <form method="post" action="<?php echo base_url('profile/update'); ?>" onsubmit="return validasi();">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">    
                        <p class="col-form-label"> 
                        <?php echo $profile['username']; ?>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <p class="col-form-label"> 
                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $profile['nama_lengkap']; ?>" required>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sandi Baru</label>
                    <div class="col-sm-9">
                        <p class="col-form-label"> 
                        <input type="password" class="form-control" name="sandi" id="pass">
                        <small class="form-text text-muted">Isi jika ingin mengubah sandi</small>
 
                        </p>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Konfirmasi Sandi</label>
                    <div class="col-sm-9">
                        <p class="col-form-label"> 
                        <input type="password" class="form-control" id="cpass">
                        </p>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary pull-right" name="submit" value="Ubah">
            </form>
        </div>
    </div>
</div>

<script>

    function validasi(){
        pass = $('#pass').val();
        cpass = $('#cpass').val();
    
        if(pass==cpass) return true;
        else {
            alert("Konfirmasi Harus Benar");
            return false;
        }
    }

</script>