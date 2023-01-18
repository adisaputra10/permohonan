<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('penyelia/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">

      <form class="needs-validation" action="../saveverifikasilppc" method="post" novalidate="">


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


                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jumlah Parameter : <input type="text" name="jumlahparameter" value="<?php echo count($parameter_uji); ?>" readonly=true class="form-control" size="1" > <br> <br><br>
                        
                  <label class="col-sm-4 col-form-label">Kode Contoh 
                        <select class="form-control"  name="kodecontoh">
                              <option>life.js</option>
                              <option>afterlife.js</option>
                            </select>
                        </label>
                        
                    </div>


                    <div class="table-responsive">
                 
           

                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Parameter</th>
                            <th>Digunakan</th>
                            <th>Sisa</th>
                            <th>Tanggal</th>
                            <th>Metode</th>
                            <th>Satuan</th>
                            <th>Hasil</th>
                            <th>% 14D</th>
                            <th>% R</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody> 
                    
              
                       
                        <?php 
                      $i = 1;
                      foreach ($parameter_uji as $row){  ?>
                          <tr>
                            <td>
                              <?=$i?>
                               
                              <input type="hidden" name="idop<?php echo $i?>" value="<?php echo $row['id_data_order_parameter']; ?>" readonly=true >

                            </td>
                            <td>    <?=$row['parameter']?>  </td>
                            <td>    <input type="text" class="form-control" required=""  name="digunakan<?php echo $i?>" value="<?=$row['digunakan']?>"  size="5">  </td>
                            <td>      <input type="text" class="form-control" required=""   name="sisa<?php echo $i?>"  value="<?=$row['sisa']?>"  size="5">  </td>
                            <td>      <input type="date" class="form-control" required="" size="5"   name="tanggal<?php echo $i?>" value="<?=$row['tanggal']?>"   >   </td>
                            <td>    <?=$row['metode']?>  </td>
                            <td>    <?=$row['satuan']?>  Satuan </td>
                            <td>       <input type="text" class="form-control" required=""   name="hasil<?php echo $i?>" value="<?=$row['hasil']?>" size="5">   </td>
                            <td>      <input type="text" class="form-control" required=""  name="d<?php echo $i?>" value="<?=$row['4d']?>" size="5">  </td>
                            <td>      <input type="text" class="form-control" required=""  name="r<?php echo $i?>" size="5" value="<?=$row['result']?>"  >  </td>
                            <td> 
                          
                            <select class="form-control"  name="keterangan<?php echo $i?>" >

                            <?php
                                 foreach ($ket_lppc_var as $ket_lppc_vars){
                                  if ( $ket_lppc_vars['atribute'] == $row['keterangan'] ){
                                    echo "<option value='$ket_lppc_vars[atribute]' selected>$ket_lppc_vars[atribute]</option>";
                                  }
                                  else{
                                    echo "<option value='$ket_lppc_vars[atribute]'>$ket_lppc_vars[atribute]</option>";
                                  }
                                } ?>

                            </select>
                          </td>
                          </tr>
                      <?php 
                          $i++; 
                       }
                      ?>
                        </tbody>
                      </table>
                    
                   <div class="card-footer text-right">
                      <button class="btn btn-primary">Simpan</button>
                    </div>
            
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

       </form>
      </div>
<?php $this->load->view('penyelia/_partials/footer'); ?>