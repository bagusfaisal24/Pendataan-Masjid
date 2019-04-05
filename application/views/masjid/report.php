<div class="col-md-12"> Total Masjid :
    <span class="badge badge-primary">
        <?php echo ($tipe1+$tipe2+$tipe3+$tipe4); ?>
    </span>
</div>
<hr>
<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item active">Ranking Masjid Tipe 1
                <span class="badge badge-success">
                    <?php echo $tipe1; ?>
                </span>
            </li>
            <?php
            for($i=0;$i<$max_ranking;$i++){
                if($i==count($hasil_tipe1)) break;
                ?>
                <li class="list-group-item">
                <?php echo ($i+1).". ".echoData($hasil_tipe1[$i]["b1_nama"]); ?>
                </li>
                <?php
                
            }
            ?>
        </ul>
    </div>
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item active">Ranking Masjid Tipe 2
                <span class="badge badge-success">
                    <?php echo $tipe2; ?>
                </span>
            </li>
            <?php
            for($i=0;$i<$max_ranking;$i++){
                if($i==count($hasil_tipe2)) break;
                ?>
                <li class="list-group-item">
                <?php echo ($i+1).". ".echoData($hasil_tipe2[$i]["b1_nama"]); ?>
                </li>
                <?php
                
            }
            ?>
        </ul>
    </div>
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item active">Ranking Masjid Tipe 3
                <span class="badge badge-success">
                    <?php echo $tipe3; ?>
                </span>
            </li>
            <?php
            for($i=0;$i<$max_ranking;$i++){
                if($i==count($hasil_tipe3)) break;
                ?>
                <li class="list-group-item">
                <?php echo ($i+1).". ".echoData($hasil_tipe3[$i]["b1_nama"]); ?>
                </li>
                <?php
                
            }
            ?>
        </ul>
    </div>
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item active">Ranking Masjid Tipe 4
                <span class="badge badge-success">
                    <?php echo $tipe4; ?>
                </span>
            </li>
            <?php
            for($i=0;$i<$max_ranking;$i++){
                if($i==count($hasil_tipe3)) break;
                ?>
                <li class="list-group-item">
                <?php echo ($i+1).". ".echoData($hasil_tipe3[$i]["b1_nama"]); ?>
                </li>
                <?php
                
            }
            ?>
        </ul>
    </div>
</div>