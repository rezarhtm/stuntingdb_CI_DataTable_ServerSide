<div class="container">
  <div class="row home-datatable-head">
    <h2>Partisipan</h2>
    <?php
      if($this->session->userdata('level')==='BIDAN'){
        ?>
        <a href="<?php echo base_url();?>daftar">
          <button type="button" class="btn-lg btn-primary">Daftar</button>
        </a>
      <?php
      }
    ?>
  </div>
      
  <table class="table table-hover" id="mytable">
    <thead>
      <tr>
        <th>Nama Partisipan</th>
        <th>Bidan</th>
        <th>Puskesmas</th>
        <th></th>
      </tr>
    </thead>

    <?php
    foreach($partisipan as $p) {
      $getid = $p->id;
    ?>

    <tbody>
      <tr>
        <td><?php echo $p->name_anak ?></td>
        <td><?php echo $p->bidan ?></td>
        <td><?php echo $p->puskesmas ?></td>
        <td>
        <?php
          if($this->session->userdata('level')==='BIDAN'){
            ?>
              <a href="<?php echo base_url();?>home/editprofile/<?php echo $getid ?>"><button type="button" class="btn btn-info">Edit Profil</button></a>
              <a href="<?php echo base_url();?>home/newupdate/<?php echo $getid ?>"><button type="button" class="btn btn-success">Pengukuran</button></a>
              <a href="<?php echo base_url();?>home/editrecord/<?php echo $getid ?>"><button type="button" class="btn btn-info">Edit Pengukuran</button></a>
              <a href="<?php echo base_url();?>home/detail/<?php echo $getid ?>"><button type="button" class="btn btn-warning">Laporan</button></a>
              <a href="<?php echo base_url();?>home/delete/<?php echo $getid ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            <?php
          }else{
            ?>
            <a href="<?php echo base_url();?>home/detail/<?php echo $getid ?>"><button type="button" class="btn btn-warning">Laporan</button></a>
            <?php
          }
        ?>
          
        </td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>