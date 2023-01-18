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
                  <form class="needs-validation" action="formorder2" method="POST" novalidate="">
                    <div class="card-header">
                    </div>
                    <div class="card-body">


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor  Permohonan</label>
                        <div class="col-sm-9">
                          <?php echo "test";?>
                        </div>
                        <label class="col-sm-3 col-form-label"><?php echo $rows['nama_perusahaan'] ?>  </label>
                        <div class="col-sm-9">
                           
                        </div>
                      </div>
                    <div class="card-footer text-right">
                      Tanggal :  <input type="text" name="tanggal" readonly="true" value="<?php echo date('d-m-Y'); ?>" >
                      <br><br>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">1. Nama Pelanggan</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_pelanggan" value="<?php echo $rows['nama_pelanggan'] ?>"   readonly=true class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">2. Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" value="<?php echo $rows['alamat'] ?>"   readonly=true class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus di isi.
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">3. Nama Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_perusahaan" value="<?php echo $rows['nama_perusahaan'] ?>"   readonly=true class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">4. Alamat Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat_perusahaan"  value="<?php echo $rows['alamat_perusahaan'] ?>"   readonly=true class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">5. Jenis Usaha</label>
                        <div class="col-sm-9">
                          <input type="text" name="jenis_usaha" value="<?php echo $rows['jenis_usaha'] ?>"  readonly=true  class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">6. No Telepon</label>
                        <div class="col-sm-9">
                          <input type="text" name="no_telepon" class="form-control" value="<?php echo $rows['no_telepon'] ?>"   readonly=true required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div><br>
                          <a href="<?php echo base_url(); ?>web/editperusahaan" class="btn btn-primary">Edit Perusahaan</a>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">7. Jenis Pengujian</label>
                        <div class="col-sm-9">
                          <label class="custom-switch">
                            <input type="radio" name="jenisuji" onclick="getSelectedRadio()"  value="cair" class="custom-switch-input" checked>
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Parameter Limbah Cair</span>
                          </label><br>
                          <label class="custom-switch">
                            <input type="radio" name="jenisuji" onclick="getSelectedRadio()" value="air" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Parameter Air</span>
                          </label>
                        </div>
                      </div>
                

                   

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jumlah Parameter</label>
                        <div class="col-sm-9">
                        <select class="form-control selectric" name="jumlahparameter">
                          <?php  
                          for ($i = 1; $i <  20 ; $i++) {
                          ?>
                              <option  value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php 
                          }
                            ?>
                             
                            </select>
                        </div>
                    </div>
                    </div>

                    

                    <div class="card-footer text-right">
                      <button type="submit" name="submit"   class="btn btn-primary">Next</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          
 



<?php $this->load->view('web/_partials/footer'); ?>