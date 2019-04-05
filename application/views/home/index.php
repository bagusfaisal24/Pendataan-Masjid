<div class="row">
    <div class="col-md-8">
        <h4>Data Tipe Masjid</h4>
        <canvas id="chart-area"></canvas>
    </div>
    <div class="col-md-4">
        <div class="alert alert-success" role="alert">
            Selamat Datang <strong><?php echo $level; ?></strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item active">Update Terbaru</li>
                    <li class="list-group-item">Total Masjid
                        <span class="badge badge-primary">
                            <?php echo ($tipe1+$tipe2+$tipe3+$tipe4); ?>
                        </span>
                    </li>
                    <li class="list-group-item">Tipe 1
                        <span class="badge badge-primary">
                            <?php echo $tipe1; ?>
                        </span>
                    </li>
                    <li class="list-group-item">Tipe 2
                        <span class="badge badge-success">
                            <?php echo $tipe2; ?>
                        </span>
                    </li>
                    <li class="list-group-item">Tipe 3
                        <span class="badge badge-warning">
                            <?php echo $tipe3; ?>
                        </span>
                    </li>
                    <li class="list-group-item">Tipe 4
                        <span class="badge badge-danger">
                            <?php echo $tipe4; ?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    // new Noty({
    // theme: 'sunset',
    // type: 'info',
    // layout: 'topRight',
    // text: 'Some notification text',
    // closeWith: ['click', 'button'],
    // }).show();
</script>
<script>
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    <?php echo $tipe1; ?>,
                    <?php echo $tipe2; ?>,
                    <?php echo $tipe3; ?>,
                    <?php echo $tipe4; ?>,
                ],
                backgroundColor: [
                    "#007bff",
                    "#28a745",
                    "#ffc107",
                    "#dc3545"
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Tipe Satu",
                "Tipe Dua",
                "Tipe Tiga",
                "Tipe Empat"
            ]
        },
        options: {
            responsive: true
        }
    };



    window.onload = function () {

        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);
    };
</script>