<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('petugas/_partials/header');
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
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data LPPC</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                   
                    <br><br>
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nomor Permohonan Pemeriksaaan</th>
                            <th>Tanggal Diterima</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                          
                     
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody> 
                          
                        
                        <?php 
                      $no = 1;
                  
                      foreach ($record as $row){  ?>

                     
                          <tr>
                            <td>
                              <?=$no?>
                            </td>
                            <td> <?=$row['no_permohonan']?> </td>
                            <td> <?=$row['tanggal_diterima']?> </td>
                            <td> <?=$row['tanggal_selesai']?> </td>
                            <td> <?=$row['status']?> </td>
                        
                          <td>
                              <a href="vieworder/<?php echo $row['id_order']; ?>" class="btn btn-primary">Detail</a>
                              <a href="vieworder/<?php echo $row['id_order']; ?>" class="btn btn-primary">Edit</a>
                              <a href="vieworder/<?php echo $row['id_order']; ?>" class="btn btn-primary">Cetak</a>
                         
                          
                          </td>
                          </tr>

                      <?php 
                          $no++; 
                       }
                      
                      ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </section>
      </div>
<?php $this->load->view('petugas/_partials/footer'); ?>