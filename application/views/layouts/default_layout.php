<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/white/pace-theme-minimal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css"> -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script> -->
    <style>
        body {
            padding-top: 5rem;
        }
        .progress {
            margin: 3px;
        }
        .table-title{
            text-align:center;
        }
    </style>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>

</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?php if($this->session->userdata('level')!=2) echo base_url("home"); 
                    else echo base_url('home/takmir');?>">Masjid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            
            
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                    <a class="nav-link" href="<?php if($this->session->userdata('level')!=2) echo base_url("home"); 
                    else echo base_url('home/takmir');?>">Dashboard
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <?php if($this->session->userdata('level')==0){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("masjid"); ?>">Data Masjid</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("masjid/report"); ?>">Laporan Lomba</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("map"); ?>">Peta Masjid</a>
                </li>
                <?php } ?>
                <?php if($this->session->userdata('level')==1){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("scoring"); ?>">Penilaian</a>
                </li>
                <?php } ?>
                <?php if($this->session->userdata('level')==2){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("masjid/takmir"); ?>">Data Masjid</a>
                </li>
                <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Pengaturan</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <?php if($this->session->userdata('level')==0){ ?>
                        <a class="dropdown-item" href="<?php echo base_url("account"); ?>"> <i class="fa fa-user"></i> Akun</a>
                        <a class="dropdown-item" href="<?php echo base_url("settings"); ?>"> <i class="fa fa-gear"></i> Sistem</a>
                    <?php } ?> 
                        <a class="dropdown-item" href="<?php echo base_url("profile"); ?>"> <i class="fa fa-user"></i> Profile</a>
                    </div>
                </li>
            </ul>



            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("logout"); ?>"> <i class="fa fa-power-off"></i> Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">
        <?php echo createBreadcrumb($breadc); ?>
        <hr>
        <?php echo $contents; ?>
    </main>
    
</body>

</html>