<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">
         
         

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Label</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <a href="<?php echo base_url(); ?>admin/tambahuser" class="btn btn-primary">Tambah User</a>
                    <br><br>
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Role</th>
              
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
                            <td> <?=$row['username']?> </td>
                            <td> <?=$row['nama']?> </td>
                            <td> <?=$row['role']?> </td>
                        
                            <td> <?php if ($row['blokir'] == "N"){
                             echo "Aktif";

                            }else{
                              echo "Di Blokir";

                            }   ?>  </td>
                          <td>
                              <a href="#" class="btn btn-primary">Edit</a>
                              <a href="#" class="btn btn-primary">Hapus</a>
                          
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
<?php $this->load->view('admin/_partials/footer'); ?>