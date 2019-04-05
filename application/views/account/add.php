<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>/account/actAdd" onsubmit="return cekData();">
            <div class="form-group">
                <label>Nama Takmir</label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Konfirmasi Password" required>
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