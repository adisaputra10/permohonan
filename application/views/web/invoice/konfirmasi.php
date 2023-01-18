<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('web/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
         
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">


                <div class="card">
                <div class="card-header">
                    <h4>Konfirmasi Pembayaran</h4>
                  </div>
                  <?php 
                   $attributes = array('class'=>'needs-validation','role'=>'form');
                   echo form_open_multipart($this->uri->segment(1).'/konfirmasinvoice',$attributes); 
                  ?>
           
                    <div class="card-header">
                    </div>
                    <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No Permohonan Pemeriksaan</label>
                        <div class="col-sm-9">
                        <select class="form-control selectric" name="no_permohonan">

                        <option  value=""> Silakan Pilih</option>
                          <?php  
 
                          foreach ($record as $row){
                          ?>
                              <option  value="<?=$row['no_permohonan']?>">   <?=$row['no_permohonan']?> </option>
                            <?php 
                          }
                            ?>
                             
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Bukti Pembayaran</label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name="filename" id="filename"   required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bank Penerima</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="bankpenerima" id="bankpenerima"   required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Rekening Penerima</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="rekpenerima" id="rekpenerima"   required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Transfer</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal" id="tanggal"   required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Pembayaran</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="totalpembayaran" id="totalpembayaran"   required="">
                        </div>
                    </div>

                </div>

                    
                    <div class="card-footer text-right">
                      <button type="submit" name="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
                    </div>
              
                </div>
              </div>
            </div>
          </div>
  <?php 
        echo form_close();
  ?>
          
 



<?php $this->load->view('web/_partials/footer'); ?>