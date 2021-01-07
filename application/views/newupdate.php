<div class="container formcon">
    <h1>Pengukuran</h1>

    <?php
        $this->load->helper('url');
        $currentURL = current_url();
        $newstring = substr($currentURL, -9);
    ?>
    
    <div class="row">
        <form class="col-md-12" style="margin-bottom:60px;" method="POST" id="new_update"> 
            <div class="col-md-12 all-info infoComponent">
                <div class="form-group">
                    <label class="label" for="id">ID Partisipan</label>
                    
                    <input type="text" class="form-control" id="id" required name="id" value="<?php echo $newstring;?>">
                    
                </div>
                <div class="form-group">
                    <label class="label" for="date">Tanggal</label>
                    <input type="date" id="date" required name="date">  
                </div>
                <div class="form-group">
                    <label class="label" for="height">Tinggi Badan (cm)</label>
                    <input type="text" class="form-control" id="height" required name="height">   
                </div>
                <div class="form-group">
                    <label class="label" for="weight">Berat Badan (kg)</label>
                    <input type="text" class="form-control" id="weight" required name="weight">   
                </div>
                <div class="form-group">
                    <label class="label" for="head">Lingkar Kepala (cm)</label>
                    <input type="text" class="form-control" id="head" required name="head">   
                </div>
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </div>
        </form>
        
    </div>
    
</div>

