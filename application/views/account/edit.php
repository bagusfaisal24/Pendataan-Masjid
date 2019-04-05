<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>/account/actUpdate/<?php echo $id; ?>" onsubmit="return cekData();">
            <div class="form-group">
                <label>Nama Takmir</label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama" value="<?php echo $account['nama_lengkap']; ?>" required>
            </div>

            <div class="form-group">
                <label>Password Baru</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Konfirmasi Password" >
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>

<script>
function cekData(){
    password = $('#password').val();
    cpassword = $('#cpassword').val();
    
    if(password==cpassword) return true;
    else {

        alert("Pastikan Konfimasi Password benar"); 
        return false;
    }
}

</script>