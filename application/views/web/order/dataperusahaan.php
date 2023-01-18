<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('web/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Perusahaan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
         
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">

                <div class="card">
                  <form class="needs-validation" action="saveperusahaan" method="POST" novalidate="">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">1. Nama Pelanggan</label>
                        <div class="col-sm-9">
                          <input type="text" name="namapelanggan" readonly=true value="<?php echo $rows['nama_pelanggan'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">2. Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" readonly=true value="<?php echo $rows['alamat'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus di isi.
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">3. Nama Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_perusahaan" readonly=true value="<?php echo $rows['nama_perusahaan'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">4. Alamat Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat_perusahaan" readonly=true value="<?php echo $rows['alamat_perusahaan'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">5. Jenis Usaha</label>
                        <div class="col-sm-9">
                          <input type="text" name="jenis_usaha" readonly=true value="<?php echo $rows['jenis_usaha'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">6. No Telepon</label>
                        <div class="col-sm-9">
                          <input type="text" name="no_telepon" readonly=true value="<?php echo $rows['no_telepon'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div><br>

                          <a href="<?php echo base_url(); ?>web/editperusahaan" class="btn btn-primary">Edit Perusahaan</a>
                          
                        </div>
                      </div>
                    </div>
               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('web/_partials/footer'); ?>