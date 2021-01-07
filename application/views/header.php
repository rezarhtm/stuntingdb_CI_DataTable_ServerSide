<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <?php
      $source = 'https://code.jquery.com/jquery-3.5.1.js';
      $get_url = $_SERVER['REQUEST_URI'];
      $the_last = substr($get_url,16);
      $the_first = substr($the_last,0,6);

      if ($the_first == "detail") {
        $source = 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js';
      }
    ?>
    
    <script type="text/javascript" src="<?php echo $source;?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>-->  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>public/mystyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    

    

    <style>
      li{padding: 10px;};
      li a {color: white;};
      li a:hover {color: yellow;};
    </style>

    <title>StuntingDB</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>index.php/home" >StuntingDB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="nav navbar-nav">
      <?php if ($this->session->userdata('level')==='DINKES') {
      ?>
      <li class="active"><a href="<?php echo base_url();?>index.php/home">Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/home/get_all_part">Data Partisipan</a></li>
      <li><a href="<?php echo base_url();?>index.php/home/get_all_bidan">Data Bidan</a></li> 
      <li><a href="<?php echo base_url();?>index.php/home/get_all_puskesmas">Data Puskesmas</a></li>
      <?php } elseif ($this->session->userdata('level')==='PUSKESMAS') {
      ?>
      <li class="active"><a href="<?php echo base_url();?>index.php/home">Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/home/get_all_part">Data Partisipan</a></li>
      <li><a href="<?php echo base_url();?>index.php/home/get_all_bidan">Data Bidan</a></li> 
      <?php } else { ?>
      <li class="active"><a href="<?php echo base_url();?>index.php/home">Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/home/get_all_part">Data Partisipan</a></li>
      <?php } ?>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li><a href="<?php echo base_url();?>index.php/home/profile">Profil</a></li>
      <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
    </ul>
  </div>
</nav>
