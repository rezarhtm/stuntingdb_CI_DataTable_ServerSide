<h2>Profil Ibu</h2>
<div class="form-group">
    <label class="label" for="m_pob">Tempat Lahir</label>
    <input type="text" class="form-control" id="m_pob" required name="m_pob" value="<?php echo $partisipan['m_pob'];?>">
</div>
<div class="form-group">
    <label class="label" for="m_dob">Tanggal Lahir</label>
    <input type="date" class="form-control" id="m_dob" required name="m_dob" value="<?php echo $partisipan['m_dob'];?>">
</div>
<div class="form-group">
    <label class="label" for="m_ethnic">Etnisitas/Suku</label>
    <input type="text" class="form-control" id="m_ethnic" required name="m_ethnic" value="<?php echo $partisipan['m_ethnic'];?>">
</div>
<div class="form-group">
    <label class="label" for="num_child">Jumlah anak kandung</label>
    <input type="text" class="form-control" id="num_child" required name="num_child" value="<?php echo $partisipan['num_child'];?>">
</div>
<div class="form-group">
    <label class="label" for="num_preg">Kehamilan yang keberapa saat menjadi partisipan studi ini</label>
    <input type="text" class="form-control" id="num_preg" required name="num_preg" value="<?php echo $partisipan['num_preg'];?>">
</div>
<div class="form-group">
    <label class="label" for="freq_preg">Intensitas memeriksa kehamilan</label></br>
    <label class="radio-inline"><input type="radio" id="freq_preg" required name="freq_preg" value="Tidak Pernah" <?php echo ($partisipan['freq_preg'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="freq_preg" required name="freq_preg" value="Jarang" <?php echo ($partisipan['freq_preg'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="freq_preg" required name="freq_preg" value="Sering" <?php echo ($partisipan['freq_preg'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="m_height">Tinggi (dalam cm)</label>
    <input type="text" class="form-control" id="m_height" required name="m_height" value="<?php echo $partisipan['m_height'];?>">
</div>
<div class="form-group">
    <label class="label" for="m_weight">Berat (dalam kg)</label>
    <input type="text" class="form-control" required name="m_weight" required name="m_weight" value="<?php echo $partisipan['m_weight'];?>">
</div>
<div class="form-group">
    <label class="label" for="m_edu">Pendidikan terakhir</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_edu" required name="m_edu" value="Perguruan Tinggi" <?php echo ($partisipan['m_edu'] == 'Perguruan Tinggi' ? 'checked' : ''); ?>> Perguruan Tinggi
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_edu" required name="m_edu" value="SMA atau sederajat" <?php echo ($partisipan['m_edu'] == 'SMA atau sederajat' ? 'checked' : ''); ?>> SMA atau sederajat
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_edu" required name="m_edu" value="SMP atau sederajat" <?php echo ($partisipan['m_edu'] == 'SMP atau sederajat' ? 'checked' : ''); ?>> SMP atau sederajat
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_edu" required name="m_edu" value="SD" <?php echo ($partisipan['m_edu'] == 'SD' ? 'checked' : ''); ?>> SD
      </label>
    </div>
</div>
<div class="form-group">
    <label class="label" for="m_job">Pekerjaan</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_job" required name="m_job" value="PNS" <?php echo ($partisipan['m_job'] == 'PNS' ? 'checked' : ''); ?>> PNS
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_job" required name="m_job" value="Wirausaha" <?php echo ($partisipan['m_job'] == 'Wirausaha' ? 'checked' : ''); ?>> Wirausaha
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_job" required name="m_job" value="Pegawai Swasta" <?php echo ($partisipan['m_job'] == 'Pegawai Swasta' ? 'checked' : ''); ?>> Pegawai Swasta
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_job" required name="m_job" value="Wiraswasta" <?php echo ($partisipan['m_job'] == 'Wiraswasta' ? 'checked' : ''); ?>> Wiraswasta
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_job" required name="m_job" value="Petani" <?php echo ($partisipan['m_job'] == 'Petani' ? 'checked' : ''); ?>> Petani
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="m_job" required name="m_job" value="Lain-lain" <?php echo ($partisipan['m_job'] == 'Lain-lain' ? 'checked' : ''); ?>> Lain-lain
      </label>
    </div>
</div>
<div class="form-group">
    <label class="label" for="breastfeeding">Implementasi menyusui</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="breastfeeding" required name="breastfeeding" value="2 tahun penuh" <?php echo ($partisipan['breastfeeding'] == '2 tahun penuh' ? 'checked' : ''); ?>> 2 tahun penuh
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="breastfeeding" required name="breastfeeding" value="Eksklusif 6 bulan" <?php echo ($partisipan['breastfeeding'] == 'Eksklusif 6 bulan' ? 'checked' : ''); ?>> Eksklusif 6 bulan
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="breastfeeding" required name="breastfeeding" value="Kurang dari 6 bulan" <?php echo ($partisipan['breastfeeding'] == 'Kurang dari 6 bulan' ? 'checked' : ''); ?>> Kurang dari 6 bulan
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="breastfeeding" required name="breastfeeding" value="Tidak pernah menyusui anak" <?php echo ($partisipan['breastfeeding'] == 'Tidak pernah menyusui anak' ? 'checked' : ''); ?>> Tidak pernah menyusui anak
      </label>
    </div>
    
</div>
<div class="form-group">
    <label class="label" for="cb_method">Cara melahirkan anak yang menjadi pertisipan studi ini</label></br>
    <label class="radio-inline"><input type="radio" id="cb_method" required name="cb_method" value="Normal tanpa bantuan dokter/bidan" <?php echo ($partisipan['cb_method'] == 'Normal tanpa bantuan dokter/bidan' ? 'checked' : ''); ?>> Normal tanpa bantuan dokter/bidan</label>
    <label class="radio-inline"><input type="radio" id="cb_method" required name="cb_method" value="Normal dibantu dokter/bidan" <?php echo ($partisipan['cb_method'] == 'Normal dibantu dokter/bidan' ? 'checked' : ''); ?>> Normal dibantu dokter/bidan</label>
    <label class="radio-inline"><input type="radio" id="cb_method" required name="cb_method" value="Operasi sesar" <?php echo ($partisipan['cb_method'] == 'Operasi sesar' ? 'checked' : ''); ?>> Operasi sesar</label>
</div>
<div class="form-group">
    <label class="label" for="diabete_status">Status diabetes</label></br>
    <label class="radio-inline"><input type="radio" id="diabete_status" required name="diabete_status" value="Ya" <?php echo ($partisipan['diabete_status'] == 'Ya' ? 'checked' : ''); ?>> Ya</label>
    <label class="radio-inline"><input type="radio" id="diabete_status" required name="diabete_status" value="Tidak" <?php echo ($partisipan['diabete_status'] == 'Tidak' ? 'checked' : ''); ?>> Tidak</label>
</div>
<div class="form-group">
    <label class="label" for="m_supplement">Suplemen yang dikonsumsi Ibu dalam masa kehamilan</label></br>
    <label class="radio-inline"><input type="radio" id="m_supplement" required name="m_supplement" value="Tidak Pernah" <?php echo ($partisipan['m_supplement'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="m_supplement" required name="m_supplement" value="Jarang" <?php echo ($partisipan['m_supplement'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="m_supplement" required name="m_supplement" value="Sering" <?php echo ($partisipan['m_supplement'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="m_supplement_type">Tipe suplemen yang dikonsumsi Ibu dalam masa kehamilan</label></br>
    <label class="radio-inline"><input type="radio" id="m_supplement_type" required name="m_supplement_type" value="Zat besi" <?php echo ($partisipan['m_supplement_type'] == 'Zat besi' ? 'checked' : ''); ?>> Zat besi</label>
    <label class="radio-inline"><input type="radio" id="m_supplement_type" required name="m_supplement_type" value="Multivitamin" <?php echo ($partisipan['m_supplement_type'] == 'Multivitamin' ? 'checked' : ''); ?>> Multivitamin</label>
    <label class="radio-inline"><input type="radio" id="m_supplement_type" required name="m_supplement_type" value="Herbal" <?php echo ($partisipan['m_supplement_type'] == 'Herbal' ? 'checked' : ''); ?>> Herbal</label>
</div>