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
                    <h4>Data Perusahaan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <a href="<?php echo base_url(); ?>admin/tambahperusahaan" class="btn btn-primary">Tambah Perusahaan</a>
                    <br><br>
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                        
                            <th>Nama</th>
                     
              
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
                           
                            <td> <?=$row['nama']?> </td>
                             
                        
                            <td>  <?=$row['alamat']?> </td>
                          <td>
                              <a href="editperusahaan/<?php echo $row['id_perusahaan']; ?>" class="btn btn-primary">Edit</a>
                              <a href="hapusperusahaan/<?php echo $row['id_perusahaan']; ?>" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"  class="btn btn-primary">Hapus</a>
                          
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