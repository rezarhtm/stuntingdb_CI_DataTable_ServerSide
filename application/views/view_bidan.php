<div class="container formcon">
  <div class="row home-datatable-head">
    <h2>Bidan</h2>
    
  </div>
      
  <table class="table table-hover" id="mytable">
    <thead>
      <tr>
        <th>Kode Registrasi</th>
        <th>Bidan</th>
        <th>Puskesmas</th>
        <th>Waktu Registrasi</th>
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
        
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>