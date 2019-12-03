<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="panel-atas"><a href="<?php echo base_url() ?>panel_informasi"><span class="ml-4 pp">Discount 15%Off
                <img src="<?php echo base_url(); ?>assets/img/pna.png" alt="workingspace" class="img-fluid  p-1 ml-5 mb-2"></span>
        </a></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="container">

            <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url(); ?>assets/img/ss.jpeg" width="30" height="30" alt=""><span class="ml-2 "> Suji Shoes</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="  nav-link" href="<?php echo base_url() ?>About">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>Contact_us">Contact us</a>
                    </li>




                    <li class="nav-item mt-2 ml-auto">
                        <a class="" href="<?php echo base_url() ?>Auth/Login" aria-disabled="true"><i class="fas fa-users-cog fa-2x  " style="color: 	#00CED1"> </i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>