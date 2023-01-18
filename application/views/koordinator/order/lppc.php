<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('koordinator/_partials/header');
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
              <?php  ?>
                <div class="card">
                  <form class="needs-validation" action="formlppc" method="post" novalidate="">
                  
                 

                  <input type="hidden" name="no_permohonan"  readonly=true value="<?php echo $rows['no_permohonan'] ?>" class="form-control" required="">

                    <div class="card-header">
                    </div>
                    <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor  Permohonan (SPPC)</label>
                        <div class="col-sm-9">
                          <?php  echo $rows['no_permohonan'];   ?> 

                        </div>
                        <div class="col-sm-9"> 
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Diterima</label>
                        <div class="col-sm-9">
                          <input type="text" name="tanggalditerima"  readonly=true value="<?php echo $tgl; ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>
                      

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-9">
                          <input type="text" name="tanggalselesai" readonly=true value="<?php echo $nexttgl; ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus di isi.
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Volume Contoh</label>
                        <div class="col-sm-9">
                          <input type="text" name="volume"    class="form-control"   value="<?php echo $lppc['volume']; ?>" placeholder=" ml" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Wadah Contoh</label>
                        <div class="col-sm-9">
                        
                          <select class="form-control selectric" name="wadah">
                             <option  value="Botol">Botol Gelas</option>
                             <option  value="Plastik">Plastik</option>
                          </select>
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pengawetan</label>
                        <div class="col-sm-9">
                        
                          <select class="form-control selectric" name="pengawetan">
                             <option  value="Pengawatan">Pengawetan</option>
                             <option  value="Tanpa Pengawetan">Tanpa Pengawetan</option>
                          </select>
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pengambilan Contoh</label>
                        <div class="col-sm-9">
                          <input type="text" name="pengambilan"  value=" " class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Abnormalitas</label>
                        <div class="col-sm-9">
                        <input type="text" name="abnormalitas"  value=" " class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div><br>
                         
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi Contoh </label>
                        <div class="col-sm-9">
                        <select class="form-control selectric" name="kondisi">
                             <option  value="Utuh">Utuh</option>
                             <option  value="Rusak">Rusak</option>
                             <option  value="Bocor">Bocor</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Segel Contoh </label>
                        <div class="col-sm-9">
                          <select class="form-control selectric" name="segel">
                             <option  value="Ada">Ada</option>
                             <option  value="Tidak">Tidak</option>
                             <option  value="Rusak">Rusak</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi Fisik </label>
                        <div class="col-sm-9">
                           <select class="form-control selectric" name="kondisi">
                           
                             <option  value="Agak Keruh">Agak Keruh</option>
                             <option  value="Keruh">Keruh</option>
                             <option  value="Coklat">Coklat</option>
                             <option  value="Hitam">Hitam</option>
                             <option  value="Hijau">Hijau</option>
                            </select>
                        </div>
                      </div>
                

                   




                    </div>
                    <div class="card-footer text-right">
                    <a href="vieworder/<?php echo $row['id_order']; ?>" class="btn btn-primary">Cetak</a>
                      <button  type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>

                  
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          
 



<?php $this->load->view('koordinator/_partials/footer'); ?>