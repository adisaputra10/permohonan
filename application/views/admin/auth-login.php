<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/_partials/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <!-- <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
              <br><br><br>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php $this->uri->segment(1).'/admin/index' ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="a@gmail.com" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Isi Email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Isi Password
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="email">Role</label>
                     <select name="role" class="form-control"> 
                     <?php
                                 foreach ($role as $roles){

                                
                                    echo "<option value='$roles[atribute]'>$roles[atribute]</option>";
                                
                                  
            
                                } ?>
                     </select>
                  </div>

                

                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <?php 
                    echo $this->session->flashdata('message');
          
                 ?>
           
           

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum punya akun? <a href="<?php echo base_url(); ?>admin/auth_register">Daftar</a>
            </div>
            <div class="simple-footer">
         
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('admin/_partials/js'); ?>