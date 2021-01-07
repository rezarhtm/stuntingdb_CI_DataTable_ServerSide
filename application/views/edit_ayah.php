<h2>Profil Ayah</h2>
<div class="form-group">
    <label class="label" for="f_pob">Tempat Lahir</label>
    <input type="text" class="form-control" required name="f_pob" value="<?php echo $partisipan['f_pob'];?>">
</div>
<div class="form-group">
    <label class="label" for="f_dob">Tanggal Lahir</label>
    <input type="date" class="form-control" required name="f_dob" value="<?php echo $partisipan['f_dob'];?>">
</div>
<div class="form-group">
    <label class="label" for="f_ethnic">Etnisitas/Suku</label>
    <input type="text" class="form-control" required name="f_ethnic" value="<?php echo $partisipan['f_ethnic'];?>">
</div>
<div class="form-group">
    <label class="label" for="f_edu">Pendidikan terakhir</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" required name="f_edu" value="Perguruan Tinggi" <?php echo ($partisipan['f_edu'] == 'Perguruan Tinggi' ? 'checked' : ''); ?>> Perguruan Tinggi
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" required name="f_edu" value="SMA atau sederajat" <?php echo ($partisipan['f_edu'] == 'SMA atau sederajat' ? 'checked' : ''); ?>> SMA atau sederajat
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" required name="f_edu" value="SMP atau sederajat" <?php echo ($partisipan['f_edu'] == 'SMP atau sederajat' ? 'checked' : ''); ?>> SMP atau sederajat
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" required name="f_edu" value="SD" <?php echo ($partisipan['f_edu'] == 'SD' ? 'checked' : ''); ?>> SD
      </label>
    </div>
</div>
<div class="form-group">
    <label class="label" for="f_job">Pekerjaan</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="f_job" required name="f_job" value="PNS" <?php echo ($partisipan['f_job'] == 'PNS' ? 'checked' : ''); ?>> PNS
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="f_job" required name="f_job" value="Wirausaha" <?php echo ($partisipan['f_job'] == 'Wirausaha' ? 'checked' : ''); ?>> Wirausaha
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="f_job" required name="f_job" value="Pegawai Swasta" <?php echo ($partisipan['f_job'] == 'Pegawai Swasta' ? 'checked' : ''); ?>> Pegawai Swasta
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="f_job" required name="f_job" value="Wiraswasta" <?php echo ($partisipan['f_job'] == 'Wiraswasta' ? 'checked' : ''); ?>> Wiraswasta
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="f_job" required name="f_job" value="Petani" <?php echo ($partisipan['f_job'] == 'Petani' ? 'checked' : ''); ?>> Petani
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="f_job" required name="f_job" value="Lain-lain" <?php echo ($partisipan['f_job'] == 'Lain-lain' ? 'checked' : ''); ?>> Lain-lain
      </label>
    </div>
</div>
<div class="form-group">
    <label class="label" for="f_eco">Status ekonomi</label></br>
    <label class="radio-inline"><input type="radio" id="f_eco" required name="f_eco" value="Pra-sejahtera" <?php echo ($partisipan['f_eco'] == 'Pra-sejahtera' ? 'checked' : ''); ?>> Pra-sejahtera</label>
    <label class="radio-inline"><input type="radio" id="f_eco" required name="f_eco" value="Sejahtera" <?php echo ($partisipan['f_eco'] == 'Sejahtera' ? 'checked' : ''); ?>> Sejahtera</label>
    <label class="radio-inline"><input type="radio" id="f_eco" required name="f_eco" value="Makmur" <?php echo ($partisipan['f_eco'] == 'Makmur' ? 'checked' : ''); ?>> Makmur</label>
</div>