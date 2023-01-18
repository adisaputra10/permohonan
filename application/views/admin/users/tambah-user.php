<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
           
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
          </div>

          <div class="section-body">
        
            <div class="row">
         
              <div class="col-12 col-md-6 col-lg-12">

                <div class="card">
                  <form method="POST" action="saveusers" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Tambah User    </h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi 
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email / Username</label>
                        <div class="col-sm-9">
                          <input type="email"  name="email"  class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi email.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password"  name="password"  class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ulang Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="upassword" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>


                   

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-9">
                            <select class="form-control selectric" name="role">
                              <option  value="petugas">Petugas</option>
                              <option  value="petugas">Perusahaan</option>
                              <option value="admin">Admin</option>
                            </select>
                        </div>
                      </div>



                    </div>
                    <div class="card-footer text-right">
                    <button type="submit" name="submit" class="btn btn-primary" >
                      Login
                    </button>
                    </div>

                   
                  </form>

                  <?php 
                    echo $this->session->flashdata('message');
          
                 ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('admin/_partials/footer'); ?>