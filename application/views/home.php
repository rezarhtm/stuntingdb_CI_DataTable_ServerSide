<?php
  if($this->session->userdata('level')==='BIDAN'){
    $salam = 'Bidan ';
  }elseif ($this->session->userdata('level')==='PUSKESMAS') {
    $salam = 'Puskesmas ';
  }elseif ($this->session->userdata('level')==='DINKES') {
    $salam = 'Petugas ';
}
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>
      Halo, <?php echo $salam . $this->session->userdata('username');?>!
    </h1>
  </div>
</div>

<?php
  if($this->session->userdata('level')==='BIDAN'){
    require 'table-partisipan.php';
  }elseif ($this->session->userdata('level')==='PUSKESMAS') {
    require 'table-bidan.php';
  }elseif ($this->session->userdata('level')==='DINKES') {
    require 'table-puskesmas.php';
}
?>