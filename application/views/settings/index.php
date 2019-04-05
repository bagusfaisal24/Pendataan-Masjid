<div class="row">
    <div class="col-md-6">
        <form method="post" action="<?php echo base_url("settings/update"); ?>">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-5 col-form-label">Nilai Ya/Ada</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="s_true" class="form-control" id="field_true" value="<?php echo $settings['setting_true']; ?>">
                </div>
                <div class="col-md-3">
                    <a href="#" id="ubah_true" class="btn btn-primary">Ubah</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-5 col-form-label">Nilai Tidak</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="s_false"  class="form-control" id="field_false" value="<?php echo $settings['setting_false']; ?>">
                </div>
                <div class="col-md-3">
                    <a href="#" id="ubah_false" class="btn btn-primary">Ubah</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-5 col-form-label">Tanggal Mulai Pengisian</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="s_start"  class="form-control" id="field_start" value="<?php echo $settings['setting_start']; ?>">
                </div>
                <div class="col-md-3">
                    <a href="#" id="ubah_start" class="btn btn-primary">Ubah</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-5 col-form-label">Tanggal Tutup Pengisian</label>
                <div class="col-sm-4">
                    <input type="text" readonly name="s_end"  class="form-control" id="field_end" value="<?php echo $settings['setting_end']; ?>">
                </div>
                <div class="col-md-3">
                    <a href="#" id="ubah_end" class="btn btn-primary">Ubah</a>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </form>
    </div>
</div>

<script>
    var statustrue = true;
    var statusfalse = true;
    var statusstart = true;
    var statusend = true;
    
    $('#ubah_true').click(function(){
        if(statustrue){
            $('#field_true').removeAttr('readonly');
            statustrue = false;
        }else{
            $("#field_true").attr('readonly', 'readonly');
            statustrue = true;
        }
    });
    $('#ubah_false').click(function(){
        if(statusfalse){
            $('#field_false').removeAttr('readonly');
            statusfalse = false;
        }else{
            $("#field_false").attr('readonly', 'readonly');
            statusfalse = true;
        }
    });
    $('#ubah_start').click(function(){
        if(statusstart){
            $('#field_start').removeAttr('readonly');
            statusstart = false;
        }else{
            $("#field_start").attr('readonly', 'readonly');
            statusstart = true;
        }
    });
    $('#ubah_end').click(function(){
        if(statusend){
            $('#field_end').removeAttr('readonly');
            statusend = false;
        }else{
            $("#field_end").attr('readonly', 'readonly');
            statusend = true;
        }
    });
</script>