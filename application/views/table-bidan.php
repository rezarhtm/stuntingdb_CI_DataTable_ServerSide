<div class="container">
  <div class="row home-datatable-head">
    <h2>Bidan</h2>
    <?php if ($this->session->userdata('level')==='PUSKESMAS') { ?>
      <a href="<?php echo base_url();?>puskesmas/add_bidan">
        <button type="button" class="btn-lg btn-primary">Daftar</button>
      </a>
      
    <?php } else { echo ' ';} ?>
    
  </div>
      
  <table id="mytable">
    <thead>
      <tr>
        <th>Kode Registrasi</th>
        <th>Bidan</th>
        <th>Puskesmas</th>
        <th>Waktu Registrasi</th>
        <th></th>
      </tr>
    </thead>

    <?php
    foreach($bidan as $p) {
      $getid = $p->user_id;
    ?>

    <tbody>
      <tr>
        <td><?php echo $getid ?></td>
        <td><?php echo $p->user_firstname ?></td>
        <td><?php echo $p->tag ?></td>
        <td><?php echo $p->reg_date ?></td>
        <td>
          <?php if ($this->session->userdata('level')==='PUSKESMAS') { ?>
            <a href="<?php echo base_url();?>puskesmas/edit_bidan/<?php echo $getid ?>"><button type="button" class="btn btn-info">Edit Profil</button></a>
            <a href="<?php echo base_url();?>puskesmas/delete_bidan/<?php echo $getid ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
          <?php } else { echo ' ';} ?>
        </td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>