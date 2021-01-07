<h2>Data Anak</h2>
<div class="form-group">
    <label class="label" for="name">Nama Anak</label>
    <input type="text" class="form-control" required name="name_anak" id="name_anak" value="<?php echo $partisipan['name_anak'];?>">
</div>
<div class="form-group">
    <label class="label" for="age">Umur Anak (dalam bulan)</label>
    <input type="text" class="form-control" required name="age_anak" id="age_anak" value="<?php echo $partisipan['age_anak'];?>">
</div>
<div class="form-group">
    <label class="label" for="sex">Jenis Kelamin Anak</label></br>
    <label class="radio"><input type="radio" id="sex" required name="sex" value="Laki-Laki" <?php echo ($partisipan['sex'] == 'Laki-Laki' ? 'checked' : ''); ?>> Laki-Laki</label>
    <label class="radio"><input type="radio" id="sex" required name="sex" value="Perempuan" <?php echo ($partisipan['sex'] == 'Perempuan' ? 'checked' : ''); ?>> Perempuan</label>
</div>
<div class="form-group">
    <label class="label" for="pob">Tempat Lahir</label>
    <input type="text" class="form-control" required name="pob" id="pob" value="<?php echo $partisipan['pob'];?>">
</div>
<div class="form-group">
    <label class="label" for="dob">Tanggal Lahir</label>
    <input type="date" class="form-control" required name="dob" id="dob" value="<?php echo $partisipan['dob'];?>">
</div>
<div class="form-group">
    <label class="label" for="diarrhea_pre">Kondisi diare 3 bulan terakhir sebelum menjadi partisipan</label></br>
    <label class="radio-inline"><input type="radio" id="diarrhea_pre" required name="diarrhea_pre" value="Tidak Pernah" <?php echo ($partisipan['diarrhea_pre'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" required name="diarrhea_pre" id="diarrhea_pre" value="Jarang" <?php echo ($partisipan['diarrhea_pre'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" required name="diarrhea_pre" id="diarrhea_pre" value="Sering" <?php echo ($partisipan['diarrhea_pre'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="diarrhea-post">Kondisi diare sejak mengkonsumsi Channa sirup</label></br>
    <label class="radio-inline"><input type="radio" id="diarrhea_post"  required name="diarrhea_post" value="Tidak Pernah" <?php echo ($partisipan['diarrhea_post'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="diarrhea_post" required name="diarrhea_post" value="Jarang" <?php echo ($partisipan['diarrhea_post'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="diarrhea_post" required name="diarrhea_post" value="Sering" <?php echo ($partisipan['diarrhea_post'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="fever-pre">Kondisi deman 3 bulan terakhir sebelum menjadi partisipan</label></br>
    <label class="radio-inline"><input type="radio" id="fever_pre" required name="fever_pre" value="Tidak Pernah" <?php echo ($partisipan['fever_pre'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="fever_pre" required name="fever_pre" value="Jarang" <?php echo ($partisipan['fever_pre'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="fever_pre" required name="fever_pre" value="Sering" <?php echo ($partisipan['fever_pre'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="fever-post">Kondisi demam sejak mengkonsumsi Channa sirup</label></br>
    <label class="radio-inline"><input type="radio" id="fever_post" required name="fever_post" value="Tidak Pernah" <?php echo ($partisipan['fever_post'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="fever_post" required name="fever_post" value="Jarang" <?php echo ($partisipan['fever_post'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="fever_post" required name="fever_post" value="Sering" <?php echo ($partisipan['fever_post'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="appetite-pre">Kondisi nafsu makan 3 bulan terakhir sebelum menjadi partisipan</label></br>
    <label class="radio-inline"><input type="radio" id="appetite_pre" required name="appetite_pre" value="Tidak Pernah" <?php echo ($partisipan['appetite_pre'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="appetite_pre" required name="appetite_pre" value="Jarang" <?php echo ($partisipan['appetite_pre'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="appetite_pre" required name="appetite_pre" value="Sering" <?php echo ($partisipan['appetite_pre'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="appetite-post">Kondisi nafsu makan sejak mengkonsumsi Channa sirup</label></br>
    <label class="radio-inline"><input type="radio" id="appetite_post" required name="appetite_post" value="Tidak Pernah" <?php echo ($partisipan['appetite_post'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="appetite_post" required name="appetite_post" value="Jarang" <?php echo ($partisipan['appetite_post'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="appetite_post" required name="appetite_post" value="Sering" <?php echo ($partisipan['appetite_post'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="access-posyandu">Seberapa sering anak dibawa ke Posyandu?</label></br>
    <label class="radio-inline"><input type="radio" id="access_posyandu" required name="access_posyandu" value="Tidak Pernah" <?php echo ($partisipan['access_posyandu'] == 'Tidak Pernah' ? 'checked' : ''); ?>> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="access_posyandu" required name="access_posyandu" value="Jarang" <?php echo ($partisipan['access_posyandu'] == 'Jarang' ? 'checked' : ''); ?>> Jarang</label>
    <label class="radio-inline"><input type="radio" id="access_posyandu" required name="access_posyandu" value="Sering" <?php echo ($partisipan['access_posyandu'] == 'Sering' ? 'checked' : ''); ?>> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="circumstances-access-posyandu">Hal apa yang membuat anak tidak dibawa ke Posyandu?</label></br>
    
    <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Terlalu Jauh" <?php echo ($partisipan['circumstances_access_posyandu'] == 'Terlalu Jauh' ? 'checked' : ''); ?>> Terlalu jauh
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Sibuk dengan aktivitas lain" <?php echo ($partisipan['circumstances_access_posyandu'] == 'Sibuk dengan aktivitas lain' ? 'checked' : ''); ?>> Sibuk dengan aktivitas lain
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Tidak ada transportasi" <?php echo ($partisipan['circumstances_access_posyandu'] == 'Tidak ada transportasi' ? 'checked' : ''); ?>> Tidak ada transportasi
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Tidak mengetahui jadwal penyelenggaraan Posyandu" <?php echo ($partisipan['circumstances_access_posyandu'] == 'Tidak mengetahui jadwal penyelenggaraan Posyandu' ? 'checked' : ''); ?>> Tidak mengetahui jadwal penyelenggaraan Posyandu
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Tidak tahu nilai penting Posyandu dan segala pelayanannya" <?php echo ($partisipan['circumstances_access_posyandu'] == 'Tidak tahu nilai penting Posyandu dan segala pelayanannya' ? 'checked' : ''); ?>> Tidak tahu nilai penting Posyandu dan segala pelayanannya
      </label>
    </div>
</div>
<div class="form-group">
    <label class="label" for="suplemen">Suplemen tambahan yang diberikan kepada anak</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Makanan berbahan dasar kacang-kacangan" <?php echo ($partisipan['suplemen'] == 'Makanan berbahan dasar kacang-kacangan' ? 'checked' : ''); ?>> Makanan berbahan dasar kacang-kacangan
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Makanan/minuman berbahan dasar susu" <?php echo ($partisipan['suplemen'] == 'Makanan/minuman berbahan dasar susu' ? 'checked' : ''); ?>> Makanan/minuman berbahan dasar susu
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Buah/sayuran segar" <?php echo ($partisipan['suplemen'] == 'Buah/sayuran segar' ? 'checked' : ''); ?>> Buah/sayuran segar
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Kombinasi dari bahan dasar kacang-kacangan, susu, buah, sayuran segar" <?php echo ($partisipan['suplemen'] == 'Kombinasi dari bahan dasar kacang-kacangan, susu, buah, sayuran segar' ? 'checked' : ''); ?>> Kombinasi dari bahan dasar kacang-kacangan, susu, buah, sayuran segar
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Makanan mengandung penyedap rasa buatan" <?php echo ($partisipan['suplemen'] == 'Makanan mengandung penyedap rasa buatan' ? 'checked' : ''); ?>> Makanan mengandung penyedap rasa buatan
      </label>
    </div>
</div>