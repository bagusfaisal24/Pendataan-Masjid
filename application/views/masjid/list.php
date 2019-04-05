
      <?php
            $no = 1;
      ?>
      <div class="row">
        <div class="col-md-9">
            Total Data : <?php echo count($masjid); ?>
        </div>
        <div class="col-md-3">
            <a href="<?php echo base_url('refresh/dore/masjid'); ?>" class="btn btn-success pull-right"><i class="fa fa-refresh"></i> Refresh </a>
        </div>
      </div>
      <hr>
        <table class="table" id="tabelmasjid">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Progress Input</th>
                    <th scope="col">Score</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($masjid as $row){ ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo echoData($row['b1_nama']); ?></td>
                    <td><?php echo echoData($row['b1_alamat']); ?></td>
                    <td><?php echo $row['tipe']; ?></td>
                    <td> <span class="badge badge-success"><?php echo $row['progress']; ?> %</span> </td>
                    <td><?php echo $row['score']; ?></td>
                    <td> <a href="<?php echo base_url('masjid/detail/'.$row['bidang_kode']); ?>" class="btn btn-sm btn-secondary"> Detail </a> </td>
                </tr>
            <?php $no++; } ?>
            </tbody>
        </table>

    <script>
        $(document).ready(function () {
            $('#tabelmasjid').DataTable();
        });
    </script>
