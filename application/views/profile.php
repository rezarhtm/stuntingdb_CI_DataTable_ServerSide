<div class="container formcon">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <h1>Profil</h1>
    <?php $level = $this->session->userdata('level');?>
            
    <div class="row the-form">
        <div class="col-md-12">
            ​​<table>
                <tr>
                    <th>ID </th>
                    <td></td>
                    <td><?php echo $profile['user_id'];?></td>
                </tr>
                <tr>
                    <th>Nama </th>
                    <td></td>
                    <td><?php echo $level ?> <?php echo $profile['user_firstname'];?></td>
                </tr>
                <tr>
                    <th>Email </th>
                    <td></td>
                    <td><?php echo $profile['user_email'];?></td>
                </tr>
                <tr>
                    <th>Supervisor </th>
                    <td></td>
                    <td><?php echo $profile['tag'];?></td>
                </tr>
                <tr>
                    <th>Tanggal Registrasi </th>
                    <td></td>
                    <td><?php echo $profile['reg_date'];?></td>
                </tr>
                <tr>
                    <th>Pembaruan Terakhir </th>
                    <td></td>
                    <td><?php echo $profile['last_update'];?></td>
                </tr>
            </table>
        </div>
    </div>
    <div style="padding-bottom:60px;"></div>
    <h1>Ganti Password</h1>
    <div class="row the-form">
        
        <form class="col-md-12" style="margin-bottom:60px;" method="POST" id="change_pass">

            <div class="form-group">
                <label class='label' for="old_pass">Password Lama</label>
                <input type="password" class="form-control" id="old_pass" required name="old_pass">
            </div>
            <div class="form-group">
                <label class='label' for="new_pass">Password Baru</label>
                <input type="password" class="form-control" id="new_pass" required name="new_pass">
            </div>
            <div class="form-group">
                <label class='label' for="renew_pass">Ulangi Password Baru</label>
                <input type="password" class="form-control" id="renew_pass" required name="renew_pass">
            </div>
            
            <button type="submit" class="btn btn-success btn-block" style="margin-bottom:15px;">Simpan</button>
            <center><a href="<?php echo base_url();?>index.php/home">Kembali</a></center>
            
        </form>
        
    </div>
            
</div>