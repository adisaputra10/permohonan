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
                  <form class="needs-validation" action="simpanorder" method="post" novalidate="">
                  <input type="hidden" name="id_perusahaan"  readonly=true value="<?php echo $rows['id_perusahaan'] ?>" class="form-control" required="">
                    <div class="card-header">
                    </div>
                    <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor  Permohonan</label>
                        <div class="col-sm-9">
                          <?php  echo sprintf("%04d",($order['id_order']+1));   ?> 
                        </div>
                        <label class="col-sm-3 col-form-label"><?php echo $rows['nama_perusahaan'] ?> </label>
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
                          <input type="text" name="nama_pelanggan"  readonly=true value="<?php echo $rows['nama_pelanggan'] ?>" class="form-control" required="">
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
                          <input type="text" name="nama_perusahaan" readonly=true value="<?php echo $rows['nama_perusahaan'] ?>"  class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">4. Alamat Perusahaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat_perusahaan"  readonly=true value="<?php echo $rows['alamat_perusahaan'] ?>" class="form-control" required="">
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

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">7. Jenis Pengujian </label>
                        <div class="col-sm-9">
                          <?php
                          if(  $jenisuji == "cair" ){
                            ?> 
                              <label class="custom-switch">
                            <input type="radio" name="jenisuji"    value="cair" class="custom-switch-input" checked>
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Parameter Limbah Cair</span>
                          </label><br>
                            <?php

                          }
                          else if( $jenisuji == "air"  ){
                            ?>
                          <label class="custom-switch">
                            <input type="radio" name="jenisuji"   value="air" class="custom-switch-input" checked>
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Parameter Air</span>
                          </label>
                            <?php
                          }
                          ?>
                        </div>
                      </div>
                

                   

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jumlah Parameter</label>
                        <div class="col-sm-9">
                        <input type="text" name="jumlahparameter" value="<?php echo $jumlahparameter; ?>" readonly=true class="form-control" required="">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Baku Mutu</label>
                        <div class="col-sm-9">
                            <select class="form-control selectric" name="bakumutu">
                              <?php
                                 foreach ($bakumutu as $row){
                                    echo "<option value='$row[id_bakumutu]'>$row[bakumutu]</option>";
                                } ?>
                            </select>
                        </div>
                    </div>

                    <?php    if( $jenisuji == "air"  ){ ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kelas</label>
                        <div class="col-sm-9">
                            <select class="form-control selectric" name="kelas">
                                <?php for ($j = 1; $j <= 10; $j++) { ?>
                                  <option  value="<?php echo $j?>"><?php echo $j?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    <?php } ?>

                    <?php for ($i = 1; $i <= $jumlahparameter; $i++) { ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"><?php echo $i;?>. Parameter <br><br>
                        <select class="form-control selectric" name="parameter<?php echo $i?>" >
                               <?php
                                 foreach ($parameter as $row){
                                    echo "<option value='$row[id_parameter]'>$row[parameter]</option>";
                                } ?>
                            </select>
                        </label>
                        <label class="col-sm-3 col-form-label">Jumlah <br><br>
                          <select class="form-control selectric" name="jumlah<?php echo $i?>">
                          <?php for ($j = 1; $j <= 10; $j++) { ?>
                              <option  value="<?php echo $j?>"><?php echo $j?></option>
                           <?php } ?>
                            </select>
                          </label>
                        <label class="col-sm-3 col-form-label">Metode<br><br>
                        <select class="form-control selectric" name="metode<?php echo $i?>">
                              <?php
                                 foreach ($metode as $row){
                                    echo "<option value='$row[id_metode]'>$row[metode]</option>";
                                } ?>
                          </select>
                        </label>
                    </div>
                  <?php } ?>


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