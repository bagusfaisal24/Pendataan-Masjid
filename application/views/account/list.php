      
      <?php 
            $no = 1;
      ?>

<div class="row">
        <div class="col-md-9">
            Total Data : <?php echo count($account); ?>
        </div>
        <div class="col-md-3">
            <a href="<?php echo base_url('account/add'); ?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah </a>
        </div>
      </div>
      <hr>
        <table class="table" id="tabelmasjid">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Username</th>
                    <!-- <th scope="col">Status</th> -->
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody> 
            <?php foreach($account as $row){ ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo checkLevel($row['level']); ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <!-- <td>0</td> -->
                    <td> 
                        <?php if($row['level']==2) { ?>
                        <a href="<?php echo base_url()."/account/actDel/".$row['id_pengguna']; ?>" class="btn btn-sm btn-danger"> Hapus </a> 
                        <a href="<?php echo base_url()."/account/edit/".$row['id_pengguna']; ?>" class="btn btn-sm btn-primary"> Ubah </a> 
                        <?php } ?>
                    </td>
                </tr>
            <?php $no++; } ?>
            </tbody>
        </table>
        
    <script>
        $(document).ready(function () {
            $('#tabelmasjid').DataTable();
        });
    </script>
