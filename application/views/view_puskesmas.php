<div class="container formcon">
  <div class="row home-datatable-head">
    
    <h2>Puskesmas</h2>
  </div>
  <?php echo $output; ?>
  <table class="table table-hover display responsive nowrap" id="mytable-pus" style="width: 100%">
    <thead>
      <tr>
        <th>Kode Registrasi</th>
        <th class="mobile-p" data-priority="1">Puskesmas</th>
        <th>Terdaftar</th>
        <th  class="mobile-p" data-priority="2">Supervisi</th>
        <th></th>
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
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
</body>

<script type="text/javascript"> 
    $(document).ready(function() {
      
        $('#mytable-pus').DataTable({
            "responsive": true,
            "serverSide": true,
            "processing": true,
            "order": [],
            "ajax": {
                "url": "<?php base_url('index.php/Home/get_all_puskemas');?>",
                "type": "POST",
            },
            
            "columnDefs": [{
                "target":[-1],
                "orderable": false
            }]
        });
    } );
</script>