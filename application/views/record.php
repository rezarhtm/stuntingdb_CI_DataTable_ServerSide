<div class="container formcon">
    <h1>Edit Pengukuran</h1>

    <?php
        $this->load->helper('url');
        $currentURL = current_url();
        $newstring = substr($currentURL, -9);

        function date_compare($element1, $element2) { 
            $datetime1 = strtotime($element1['date']); 
            $datetime2 = strtotime($element2['date']); 
            return $datetime1 - $datetime2; 
        }  
        usort($record, 'date_compare');
    ?>
    
    <div class="row">
        <form class="col-md-12" style="margin-bottom:60px;" method="POST" id="new_update"> 
            <div class="col-md-12 all-info infoComponent">
                <div class="form-group">
                    <label class="label" for="id">ID Partisipan</label>
                    
                    <input type="text" class="form-control" id="id" required name="id" value="<?php echo $newstring;?>">
                    
                </div>
                <div class="table-responsive">          
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Berat Badan (kg)</th>
                            <th>Tinggi Badan (cm)</th>
                            <th>Lingkar Kepala (cm)</th>
                            <th>Hapus</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($record as $x)
                        {
                            
                        ?>
                        <tr>
                            <td><?php echo $x['date']?></td>
                            <td><input type="text" class="form-control" id="weight" name="weight" value="<?php echo $x['weight']?>"></td>
                            <td><input type="text" class="form-control" id="height" name="height" value="<?php echo $x['height']?>"></td>
                            <td><input type="text" class="form-control" id="head" name="head" value="<?php echo $x['head']?>"></td>
                            <td>
                                <a href="<?php echo base_url();?>home/delrecord/<?php echo $x['update_id'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-success btn-block" disabled style="margin-bottom:15px;">Simpan</button>
                <center><a href="<?php echo base_url();?>index.php/home">Kembali</a></center>
                
            </div>
        </form>
        
    </div>
    
</div>

