<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('web/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Form Validation</div>
            </div>
          </div>

          <div class="section-body">
          

            <div class="row">
         



              <div class="col-12 col-md-6 col-lg-12">

                <div class="card">
                  <form class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>JavaScript Validation (Horizontal Form)</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Your Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi email.
                          </div>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control">
                          <div class="valid-feedback">
                             
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pilihan</label>
                        <div class="col-sm-9">
                            <select class="form-control selectric">
                              <option>life.js</option>
                              <option>afterlife.js</option>
                            </select>
                          
                        </div>
                      </div>



                      <div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" required=""></textarea>
                          <div class="invalid-feedback">
                          Harus Di isi
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('web/_partials/footer'); ?>