<div class="container formcon">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <h1>Edit Bidan</h1>
        <p>Mohon perhatikan formulir berikut!</p>
        
                
        <div class="row the-form">
        
            <form class="col-md-12" style="margin-bottom:60px;" method="POST" id="add_profile">
                <div class="divider"></div>
                <div class="form-group">
                    <label class="label" for="reg_date">Tanggal Edit</label>
                    <input type="text" id="reg_date" required name="reg_date" value="<?php echo date("Y-m-d h:i:s"); ?>">
                </div>
                <div class="form-group">
                    <label class='label' for="user_firstname">Nama Bidan</label>
                    <input type="text" class="form-control" id="user_firstname" required name="user_firstname" value="<?php echo $bidan['user_firstname'];?>">
                </div>

                <div class="form-group">
                    <label class='label' for="user_email">Email</label>
                    <input type="text" class="form-control" id="user_email" required name="user_email" value="<?php echo $bidan['user_email'];?>">
                </div>

                <div class="form-group">
                    <label class='label' for="puskesmas">Puskesmas</label>
                    <input type="text" class="form-control" id="puskesmas" required name="puskesmas" value="<?php echo $bidan['tag'];?>" disabled>
                </div>
                
                <button type="submit" class="btn btn-success btn-block" style="margin-bottom:15px;">Simpan</button>
                <center><a href="<?php echo base_url();?>index.php/home">Kembali</a></center>
                
            </form>

        </div>
    </div>
