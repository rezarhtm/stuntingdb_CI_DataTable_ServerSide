<div class="container">
  <div class="row home-datatable-head">
    
    <h2>Puskesmas</h2>
    <?php if ($this->session->userdata('level')==='DINKES') { ?>
    <a href="<?php echo base_url();?>dinkes/add_puskesmas/">
      <button type="button" class="btn-lg btn-primary">Daftar</button>
    </a>
    <?php } else { echo " ";}?>
  </div>
      
  <table class="table table-hover" id="mytable">
    <thead>
      <tr>
        <th>Kode Registrasi</th>
        <th>Puskesmas</th>
        <th>Waktu Registrasi</th>
        <th>Supervisi</th>
        <th></th>
      </tr>
    </thead>

    <?php
    
    foreach($puskesmas as $p) {
      $getid = $p->user_id;
    ?>

    <tbody>
      <tr>
        <td><?php echo $getid ?></td>
        <td><?php echo $p->user_firstname ?></td>
        <td><?php echo $p->reg_date ?></td>
        <td><?php echo $p->tag ?></td>
        <?php if ($this->session->userdata('level')==='DINKES') { ?>
        <td>
          <!--<button type="button" class="btn btn-danger">Edit</button>-->
          <a href="<?php echo base_url();?>dinkes/edit_puskesmas/<?php echo $getid ?>"><button type="button" class="btn btn-info">Edit</button></a>
          <a href="<?php echo base_url();?>dinkes/delete_puskesmas/<?php echo $getid ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
        </td>
        <?php } else { echo " ";}?>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>