<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar</h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Nama</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Konfirmasi Password</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                  <div class="form-divider">
                    Alamat
                  </div>
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Kota </label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Kode Pos</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Kota </label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Kode Pos</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                 
                 <div class="form-group col-6">
                   <label>Provinsi</label>
                   <select class="form-control selectric">
                     <option>West Java</option>
                     <option>East Java</option>
                   </select>
                 </div>
               </div>

                <br></br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('dist/_partials/js'); ?>