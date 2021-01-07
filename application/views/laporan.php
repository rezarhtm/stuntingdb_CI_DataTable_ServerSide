
<div class="container formcon">
    <?php
    foreach ($partisipan as $p){
        //$temp = array();
        //$temp[] = ['date'];
        //echo (count($temp));
        } 
    ?>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2 style="font-weight: bold;">Laporan Pertumbuhan Anak</h2>
        </div>
        <div class="col-md-6 col-sm-6" style="text-align: right;">
            <h5 style="font-weight: bold;"><?php echo $p['id'];?></h5>
            <h2><?php echo $p['name_anak'];?></h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12 col-md-12 all-info infoComponent">
            <div class="row header-info">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label class="label" for="bidan">Nama Bidan </label></br>
                        <p><?php echo $p['bidan'];?></p>
                    </div>
                    <div class="form-group">
                        <label class="label" for="puskesmas">Puskesmas</label></br>
                        <p><?php echo $p['puskesmas'];?></p>
                    </div>
                    <div class="form-group">
                        <label class="label" for="date">Tanggal Pendaftaran </label></br>
                        <p><?php echo $p['reg_date'];?></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label class="label" for="status">Status</label></br>
                        <p><?php echo $p['status'];?></p>
                    </div>
                    <div class="form-group">
                        <label class="label" for="nutr_status">Status Gizi Anak</label></br>
                        <p><?php echo $p['status_gizi'];?></p>
                    </div>
                    <div class="form-group">
                        <label class="label" for="kd_lokasi">Kode Lokasi</label>
                        <p><?php echo $p['kd_lokasi'];?></p>   
                    </div>
                </div>
                <div class=".d-none .d-sm-none .d-md-block col-md-4 col-lg-4 report-buttons">
                <button type="button" onclick="window.print()" class="btn btn-primary btn-lg btn-block" style="font-size:24px;"><i class='fas fa-print'></i> Print</button>
                <a href="<?php echo $_SERVER['HTTP_REFERER'];?>"><button type="button" class="btn btn-danger btn-lg btn-block" style="font-size:24px;"><i class='fas fa-arrow-circle-left'></i> Tutup</button></a>
                    
                </div>
            </div><!--end row-->
        </div><!--end infocomp-->
    
    </div><!--end row-->

    <div class="row all-info infoComponent" style="min-height:500px;">
        <?php
            function date_compare($element1, $element2) { 
                $datetime1 = strtotime($element1['date']); 
                $datetime2 = strtotime($element2['date']); 
                return $datetime1 - $datetime2; 
            }  
        ?>

        

        <div class="col-sm-4 col-md-4 all-graphs">
            <?php include 'graph_weight.php';?>
        </div>
        <div class="col-sm-4 col-md-4">
            <?php include 'graph_height.php';?>
        </div>
        <div class="col-sm-4 col-md-4">
            <?php include 'graph_head.php';?>
        </div>
    </div>



    
    <div class="row">
        <div class="all-details col-sm-12 col-md-12 header-info">
            <?php include 'lap_anak.php';?>
        </div>
        <div class="all-details col-sm-12 col-md-12 header-info">
            <?php include 'lap_ibu.php';?> 
        </div>
        <div class="all-details col-sm-12 col-md-12 header-info">
            <?php include 'lap_ayah.php';?>
        </div>
    </div><!--end row-->

</div><!--end container formcon-->