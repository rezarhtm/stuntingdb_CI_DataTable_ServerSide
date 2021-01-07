    <div class="container formcon">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <h1>Profil Partisipan</h1>
        <p>Mohon isi formulir berikut berdasarkan profil anak, ibu, dan ayah!</p>
        
        <div class="row">
        
            <form class="col-md-12" style="margin-bottom:60px;" method="POST" id="add_profile">
                
                <div class="divider"></div>
                <div class="form-group">
                    <label class="label" for="bidan">Bidan</label>
                    <input type="text" id="bidan" name="bidan" value="<?php echo $this->session->userdata('username');?>"> 
                </div>
                <div class="form-group">
                    <label class="label" for="puskesmas">Puskesmas</label>
                    <input type="text" id="puskesmas" name="puskesmas" value="<?php echo $this->session->userdata('tag');?>"> 
                </div>
                <div class="form-group">
                    <label class="label" for="date">Tanggal Pendaftaran </label>
                    <input type="date" id="reg_date" required name="reg_date">
                </div>
                <div class="form-group">
                    <label class="label" for="kd_lokasi">Kode Lokasi</label>
                    <input type="text" class="form-control" id="kd_lokasi" required name="kd_lokasi">
                    <small class="form-text text-muted">* 3 angka terakhir kode pos</small>
                </div>
                <div class="form-group ck-status">
                    <label class="label" for="status">Status</label></br>
                    <label class="radio-inline"><input type="radio" id="status" required name="status" value="Case"> Case</label>
                    <label class="radio-inline"><input type="radio" id="status" required name="status" value="Control"> Control</label>
                </div>
                <div class="form-group nutr-status">
                    <label class="label" for="nutr_status">Status Gizi Anak</label></br>
                    <label class="radio-inline"><input type="radio" required name="status_gizi" value="Gizi Buruk"> Gizi Buruk</label>
                    <label class="radio-inline"><input type="radio" required name="status_gizi" value="Gizi Kurang"> Gizi Kurang</label>
                    <label class="radio-inline"><input type="radio" required name="status_gizi" value="Gizi Baik"> Gizi Baik</label>
                </div>
                <div class="divider"></div>
                <?php include 'survey_anak.php';?>
                <div class="divider"></div>
                <?php include 'survey_ayah.php';?>
                <div class="divider"></div>
                <?php include 'survey_ibu.php';?>

                
                <button type="submit" class="btn btn-success btn-block">Simpan</button>

            </form>

        </div>
    </div>
