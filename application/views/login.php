<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
            <h1>StuntingDB</h1>
            <p>Sistem Informasi Pengawasan Pertumbuhan Anak Gizi Buruk</p>
            </center>  
        </div>
        <div class="col-md-12 login-form">
            <center>
            <form class="form-signin col-md-6" action="<?php echo site_url('login/auth');?>" method="post" style="padding:60px ; background: transparent !important;">
                
                <?php echo $this->session->flashdata('msg');?>
                <label for="username" class="sr-only">Username</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            </center>
        </div>
    </div>
  </div>
</div>