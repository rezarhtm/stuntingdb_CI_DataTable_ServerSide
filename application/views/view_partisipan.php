  <div class="container formcon">
    <div class="row home-datatable-head">
      <h2>Partisipan</h2>
    </div>
        
    <table id="mytable_view_part" class="table table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Partisipan</th>
          <th>Bidan</th>
          <th>Puskesmas</th>
          <th>Laporan</th>
        </tr>
      </thead>

    </table>
  </div>

</body>
    <!-- Optional JavaScript -->
    <script type="text/javascript"> 
        $(document).ready(function() {
            $('#mytable_view_part').DataTable({
                "serverSide": true,
                "processing": true,
                "order": [],
                "ajax": {
                    "url": "<?php base_url('index.php/Home/get_all_part');?>",
                    "type": "POST",
                },
                
                "columnDefs": [{
                    "target":[-1],
                    "orderable": false
                }]
            });
        } );
    </script>