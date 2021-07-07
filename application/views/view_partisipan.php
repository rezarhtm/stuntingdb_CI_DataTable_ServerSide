  <div class="container formcon">
    <div class="row home-datatable-head">
      <h2>Partisipan</h2>
    </div>
        
    <table id="mytable_view_part" class="table table-hover display responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th data-priority="1">Nama Partisipan</th>
          <th>Bidan</th>
          <th>Puskesmas</th>
          <th data-priority="2">Laporan</th>
        </tr>
      </thead>

    </table>
  </div>

</body>
    <!-- Optional JavaScript -->
    <script type="text/javascript"> 
        $(document).ready(function() {
            $('#mytable_view_part').DataTable({
                "responsive": true,
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