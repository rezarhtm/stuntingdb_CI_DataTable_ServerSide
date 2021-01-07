<h2>Profil Anak</h2>
<div class="form-group">
    <label class="label" for="name">Nama Anak</label>
    <input type="text" class="form-control" required name="name_anak" id="name_anak">
</div>
<div class="form-group">
    <label class="label" for="age">Umur Anak (dalam bulan)</label>
    <input type="text" class="form-control" required name="age_anak" id="age_anak">
</div>
<div class="form-group">
    <label class="label" for="sex">Jenis Kelamin Anak</label></br>
    <label class="radio"><input type="radio" id="sex" required name="sex" value="Laki-Laki"> Laki-Laki</label>
    <label class="radio"><input type="radio" id="sex" required name="sex" value="Perempuan"> Perempuan</label>
</div>
<div class="form-group">
    <label class="label" for="pob">Tempat Lahir</label>
    <input type="text" class="form-control" required name="pob" id="pob">
</div>
<div class="form-group">
    <label class="label" for="dob">Tanggal Lahir</label>
    <input type="date" class="form-control" required name="dob" id="dob">
</div>
<!--
<div class="form-group">
    <label class="label" for="height-child">Tinggi (dalam cm)</label>
    <input type="text" class="form-control" required name="height_child" id="height_child">
</div>
<div class="form-group">
    <label class="label" for="weight-child">Berat (dalam kg)</label>
    <input type="text" class="form-control" required name="weight_child" id="weight_child">
</div>
<div class="form-group">
    <label class="label" for="head-circumference">Lingkar Kepala (dalam cm)</label>
    <input type="text" class="form-control" required name="head_circumference" id="head_circumference">
</div>
-->
<div class="form-group">
    <label class="label" for="diarrhea_pre">Kondisi diare 3 bulan terakhir sebelum menjadi partisipan</label></br>
    <label class="radio-inline"><input type="radio" id="diarrhea_pre" required name="diarrhea_pre" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" required name="diarrhea_pre" id="diarrhea_pre" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" required name="diarrhea_pre" id="diarrhea_pre" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="diarrhea-post">Kondisi diare sejak mengkonsumsi Channa sirup</label></br>
    <label class="radio-inline"><input type="radio" id="diarrhea_post"  required name="diarrhea_post" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="diarrhea_post" required name="diarrhea_post" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" id="diarrhea_post" required name="diarrhea_post" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="fever-pre">Kondisi deman 3 bulan terakhir sebelum menjadi partisipan</label></br>
    <label class="radio-inline"><input type="radio" id="fever_pre" required name="fever_pre" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="fever_pre" required name="fever_pre" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" id="fever_pre" required name="fever_pre" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="fever-post">Kondisi demam sejak mengkonsumsi Channa sirup</label></br>
    <label class="radio-inline"><input type="radio" id="fever_post" required name="fever_post" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="fever_post" required name="fever_post" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" id="fever_post" required name="fever_post" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="appetite-pre">Kondisi nafsu makan 3 bulan terakhir sebelum menjadi partisipan</label></br>
    <label class="radio-inline"><input type="radio" id="appetite_pre" required name="appetite_pre" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="appetite_pre" required name="appetite_pre" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" id="appetite_pre" required name="appetite_pre" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="appetite-post">Kondisi nafsu makan sejak mengkonsumsi Channa sirup</label></br>
    <label class="radio-inline"><input type="radio" id="appetite_post" required name="appetite_post" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="appetite_post" required name="appetite_post" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" id="appetite_post" required name="appetite_post" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="access-posyandu">Seberapa sering anak dibawa ke Posyandu?</label></br>
    <label class="radio-inline"><input type="radio" id="access_posyandu" required name="access_posyandu" value="Tidak Pernah"> Tidak Pernah</label>
    <label class="radio-inline"><input type="radio" id="access_posyandu" required name="access_posyandu" value="Jarang"> Jarang</label>
    <label class="radio-inline"><input type="radio" id="access_posyandu" required name="access_posyandu" value="Sering"> Sering</label>
    <small class="form-text text-muted">* Tidak pernah: 0-2 kali, jarang: 4-6 kali, sering: lebih dari 6 kali.</small>
</div>
<div class="form-group">
    <label class="label" for="circumstances-access-posyandu">Hal apa yang membuat anak tidak dibawa ke Posyandu?</label></br>
    
    <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Terlalu Jauh"> Terlalu jauh
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Sibuk dengan aktivitas lain"> Sibuk dengan aktivitas lain
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Tidak ada transportasi"> Tidak ada transportasi
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Tidak mengetahui jadwal penyelenggaraan Posyandu"> Tidak mengetahui jadwal penyelenggaraan Posyandu
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="circumstances_access_posyandu" required name="circumstances_access_posyandu" value="Tidak tahu nilai penting Posyandu dan segala pelayanannya"> Tidak tahu nilai penting Posyandu dan segala pelayanannya
      </label>
    </div>
</div>
<div class="form-group">
    <label class="label" for="suplemen">Suplemen tambahan yang diberikan kepada anak</label></br>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Makanan berbahan dasar kacang-kacangan"> Makanan berbahan dasar kacang-kacangan
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Makanan/minuman berbahan dasar susu"> Makanan/minuman berbahan dasar susu
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Buah/sayuran segar"> Buah/sayuran segar
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Kombinasi dari bahan dasar kacang-kacangan, susu, buah, sayuran segar"> Kombinasi dari bahan dasar kacang-kacangan, susu, buah, sayuran segar
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="suplemen" required name="suplemen" value="Makanan mengandung penyedap rasa buatan"> Makanan mengandung penyedap rasa buatan
      </label>
    </div>
</div>