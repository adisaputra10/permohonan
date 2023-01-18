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
                  <form method="POST" action="../editperusahaan" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?php echo $rows['id_perusahaan'];?>" class="form-control" required="">
                    <div class="card-header">
                      <h4>Edit User    </h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" value="<?php echo $rows['nama'];?>" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi 
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text"  name="alamat" value="<?php echo $rows['alamat'];?>"  class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi alamat.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                    <button type="submit" name="submit" class="btn btn-primary" >
                      Simpan
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