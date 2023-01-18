<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('web/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Surat Permohonan Pemeriksaaan Limbah Cair / Air / Limbah B3</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
         
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">

                <div class="card">
                  <form class="needs-validation" novalidate="">
                    <div class="card-header">
                    </div>
                    <div class="card-body">


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor  Permohonan</label>
                        <div class="col-sm-9">
                          <?php echo "test";?>
                        </div>
                        <label class="col-sm-3 col-form-label">PT </label>
                        <div class="col-sm-9">
                          <?php echo "test";?>
                        </div>
                      </div>
                    <div class="card-footer text-right">
                      Tanggal :  <input type="text" name="tanggal" readonly="true" value="<?php echo date('d-m-Y'); ?>" >
                      <br><br>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">1. Nama Pelanggan</label>
                        <div class="col-sm-9">
                          <input type="text" name="namapelanggan" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">2. Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus di isi.
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">3. Nama Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="namaperusahaan" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">4. Nama Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="namaperusahaan" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">5. Jenis Usaha</label>
                        <div class="col-sm-9">
                          <input type="text" name="jenisusaha" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">6. No Telepon</label>
                        <div class="col-sm-9">
                          <input type="text" name="notelepon" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div><br>
                          <a href="<?php echo base_url(); ?>web/tambahorder" class="btn btn-primary">Edit Perusahaan</a>
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