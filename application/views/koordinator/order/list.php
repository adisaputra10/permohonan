<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('koordinator/_partials/header');
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
                    <h4>Data Permohonan Pemeriksaaan</h4>
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
                            <th>Status</th>
                            <th> </th>
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
                            <td>  <a href='vieworder/<?=$row['id_order']?>'> <?=$row['no_permohonan']?>  </td>
                            <td> <?=$row['status']?> </td>
                          <td> </td>
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
<?php $this->load->view('koordinator/_partials/footer'); ?>