<h2>Profil Anak</h2>

<div class="row">

    <div class="col-sm-4 col-md-4 the-details">
        <div class="form-group">
            <label class="label" for="name">Nama Anak</label>
            <p><?php echo $p['name_anak'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="age">Umur Anak (dalam bulan)</label>
            <p><?php echo $p['age_anak'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="sex">Jenis Kelamin Anak</label></br>
            <p><?php echo $p['sex'];?></p>    
        </div>
        <div class="form-group">
            <label class="label" for="pob">Tempat Lahir</label>
            <p><?php echo $p['pob'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="dob">Tanggal Lahir</label>
            <p><?php echo $p['dob'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="diarrhea_pre">Kondisi diare 3 bulan terakhir sebelum menjadi partisipan</label></br>
            <p><?php echo $p['diarrhea_pre'];?></p>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 the-details">
        <div class="form-group">
            <label class="label" for="diarrhea-post">Kondisi diare sejak mengkonsumsi Channa sirup</label></br>
            <p><?php echo $p['diarrhea_post'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="fever-pre">Kondisi deman 3 bulan terakhir sebelum menjadi partisipan</label></br>
            <p><?php echo $p['fever_pre'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="fever-post">Kondisi demam sejak mengkonsumsi Channa sirup</label></br>
            <p><?php echo $p['fever_post'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="appetite-pre">Kondisi nafsu makan 3 bulan terakhir sebelum menjadi partisipan</label></br>
            <p><?php echo $p['appetite_pre'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="appetite-post">Kondisi nafsu makan sejak mengkonsumsi Channa sirup</label></br>
            <p><?php echo $p['appetite_post'];?></p>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 the-details">
        <div class="form-group">
            <label class="label" for="access-posyandu">Seberapa sering anak dibawa ke Posyandu?</label></br>
            <p><?php echo $p['access_posyandu'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="circumstances-access-posyandu">Hal apa yang membuat anak tidak dibawa ke Posyandu?</label></br>
            <p><?php echo $p['circumstances_access_posyandu'];?></p>
        </div>
        <div class="form-group">
            <label class="label" for="suplemen">Suplemen tambahan yang diberikan kepada anak</label></br>
            <p><?php echo $p['suplemen'];?></p>
        </div>
    </div>

</div>
