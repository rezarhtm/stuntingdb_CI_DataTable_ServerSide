
    <div class="container formcon">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <h1>Edit Profil Partisipan</h1>
        <div class="row">
            
            <form class="col-md-12" style="margin-bottom:60px;" method="POST">
                <div class="divider"></div>
                <div class="form-group">
                    <label class="label" for="date">Tanggal Pendaftaran </label>
                    <p><?php echo $partisipan['reg_date']; ?></p>
                </div>
                <div class="form-group">
                    <label class="label" for="kd_lokasi">Kode Lokasi</label>
                    <input type="text" class="form-control" id="kd_lokasi" required name="kd_lokasi" value="<?php echo $partisipan['kd_lokasi']; ?>">
                    <small class="form-text text-muted">* 3 angka terakhir kode pos</small>
                </div>
                <div class="form-group ck-status">
                    <label class="label" for="status">Status</label></br>
                    <label class="radio-inline"><input type="radio" id="status" required name="status" value="Case" <?php echo ($partisipan['status'] == 'Case' ? 'checked' : ''); ?>> Case</label>
                    <label class="radio-inline"><input type="radio" id="status" required name="status" value="Control" <?php echo ($partisipan['status'] == 'Control' ? 'checked' : ''); ?>> Control</label>
                </div>
                <div class="form-group nutr-status">
                    <label class="label" for="nutr_status">Status Gizi Anak</label></br>
                    <label class="radio-inline"><input type="radio" required name="status_gizi" value="Gizi Buruk" <?php echo ($partisipan['status_gizi'] == 'Gizi Buruk' ? 'checked' : ''); ?>> Gizi Buruk</label>
                    <label class="radio-inline"><input type="radio" required name="status_gizi" value="Gizi Kurang" <?php echo ($partisipan['status_gizi'] == 'Gizi Kurang' ? 'checked' : ''); ?>> Gizi Kurang</label>
                    <label class="radio-inline"><input type="radio" required name="status_gizi" value="Gizi Baik" <?php echo ($partisipan['status_gizi'] == 'Gizi Baik' ? 'checked' : ''); ?>> Gizi Baik</label>
                </div>
                <div class="divider"></div>
                <?php include 'edit_anak.php';?>
                <div class="divider"></div>
                <?php include 'edit_ayah.php';?>
                <div class="divider"></div>
                <?php include 'edit_ibu.php';?>

                
                <button type="submit" class="btn btn-success btn-block" style="margin-bottom: 15px;">Simpan</button>
                <center><a href="<?php echo base_url();?>index.php/home">Kembali</a></center>

            </form>

        </div>
    </div>
