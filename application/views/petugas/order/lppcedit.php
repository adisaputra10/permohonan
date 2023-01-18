<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('petugas/_partials/header');
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
                  <form class="needs-validation" action="editformlppc" method="post" novalidate="">
                  
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
                          <input type="text" name="tanggalditerima"  value="<?php echo $tgl; ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                            Harus Di isi
                          </div>
                        </div>
                      </div>
                      

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-9">
                          <input type="text" name="tanggalselesai"  value="<?php echo $nexttgl; ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus di isi.
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Volume Contoh</label>
                        <div class="col-sm-9">
                          <input type="text" name="volume"  class="form-control"   value="<?php echo $lppc['volume']; ?>" placeholder=" ml" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Wadah Contoh</label>
                        <div class="col-sm-9">
                        <select class="form-control selectric" name="wadah">
                          <?php
                                 foreach ($wadah_var as $wadah_vars){

                                  if ( $wadah_vars['atribute'] == $lppc['wadah'] ){
                                    echo "<option value='$wadah_vars[atribute]' selected>$wadah_vars[atribute]</option>";
                                  }
                                  else{
                                    echo "<option value='$wadah_vars[atribute]'>$wadah_vars[atribute]</option>";
                                  }
                                  
                                   
                                } ?>


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

                            <?php
                                 foreach ($pengawetan_var as $pengawetan_vars){

                                  if ( $pengawetan_vars['atribute'] == $lppc['pengawetan'] ){
                                    echo "<option value='$pengawetan_vars[atribute]' selected>$pengawetan_vars[atribute]</option>";
                                  }
                                  else{
                                    echo "<option value='$pengawetan_vars[atribute]'>$pengawetan_vars[atribute]</option>";
                                  }
                                  
                                   
                                } ?>


                          </select>
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pengambilan Contoh</label>
                        <div class="col-sm-9">
                          <input type="text" name="pengambilan"  value="<?php echo $lppc['pengambilan']; ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Abnormalitas</label>
                        <div class="col-sm-9">
                        <input type="text" name="abnormalitas"  value="<?php echo $lppc['abnormalitas']; ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Harus Di isi.
                          </div><br>
                         
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi Contoh </label>
                        <div class="col-sm-9">
                        <select class="form-control selectric" name="kondisi">
                  
                        <?php
                                 foreach ($kondisi_var as $kondisi_vars){

                                  if ( $kondisi_vars['atribute'] == $lppc['kondisi'] ){
                                    echo "<option value='$kondisi_vars[atribute]' selected>$kondisi_vars[atribute]</option>";
                                  }
                                  else{
                                    echo "<option value='$kondisi_vars[atribute]'>$kondisi_vars[atribute]</option>";
                                  }
                                  
                                   
                                } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Segel Contoh </label>
                        <div class="col-sm-9">
                          <select class="form-control selectric" name="segel">
                          <?php
                                 foreach ($segel_var as $segel_vars){

                                  if ( $segel_vars['atribute'] == $lppc['segel'] ){
                                    echo "<option value='$segel_vars[atribute]' selected>$segel_vars[atribute]</option>";
                                  }
                                  else{
                                    echo "<option value='$segel_vars[atribute]'>$segel_vars[atribute]</option>";
                                  }
                                  
                                   
                                } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi Fisik </label>
                        <div class="col-sm-9">
                           <select class="form-control selectric" name="kondisi">
                           <?php
                                 foreach ($kondisi_fisik_var as $kondisi_fisik_vars){

                                  if ( $segel_vars['atribute'] == $lppc['kondisi_fisik'] ){
                                    echo "<option value='$kondisi_fisik_vars[atribute]' selected>$kondisi_fisik_vars[atribute]</option>";
                                  }
                                  else{
                                    echo "<option value='$kondisi_fisik_vars[atribute]'>$kondisi_fisik_vars[atribute]</option>";
                                  }
                                  
                                   
                                } ?>
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
          
          
 



<?php $this->load->view('petugas/_partials/footer'); ?>