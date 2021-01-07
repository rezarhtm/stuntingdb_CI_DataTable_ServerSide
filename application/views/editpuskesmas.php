<div class="container formcon">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <h1>Edit Puskesmas</h1>
        <p>Mohon perhatikan formulir berikut!</p>
        
                
        <div class="row the-form">
        
            <form class="col-md-12" style="margin-bottom:60px;" method="POST" id="add_profile">
                <div class="divider"></div>
                <div class="form-group">
                    <label class="label" for="reg_date">Tanggal Edit</label>
                    <input type="text" id="reg_date" required name="reg_date" value="<?php echo date("Y-m-d h:i:s"); ?>">
                </div>
                <div class="form-group">
                    <label class='label' for="user_firstname">Nama Puskesmas</label>
                    <input type="text" class="form-control" id="user_firstname" required name="user_firstname" value="<?php echo $puskesmas['user_firstname'];?>">
                </div>

                <div class="form-group">
                    <label class='label' for="user_email">Email</label>
                    <input type="text" class="form-control" id="user_email" required name="user_email" value="<?php echo $puskesmas['user_email'];?>">
                </div>

                <div class="form-group">
                    <label class='label' for="supervisi">Supervisi</label>
                    <input type="text" class="form-control" id="supervisi" required name="supervisi" value="<?php echo $puskesmas['tag'];?>" disabled>
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
                <a href="<?php echo base_url();?>index.php/home"><button type="submit" class="btn btn-danger btn-block">Batal</button></a>
                
            </form>

        </div>
    </div>
