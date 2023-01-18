<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('web/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
           
<br><br>
          <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                <div class="card-header">
                    <h4>Jadwal Sampling</h4>
                         </div>
                    <div class="card">
                        <form action="sampling" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-label">Nomor Permohonan Pemeriksaaan </div>
                           
                                        <select class="form-control selectric" name="no_permohonan">
                                        <option  value=""> Silakan Pilih</option>
                                          <?php foreach ($order as $o) { 
                                             if ($o['no_permohonan'] == NULL ){}else{
                                            ?>
                                                  <option  value="<?php echo $o['no_permohonan']; ?>"><?php echo $o['no_permohonan']; ?></option>
                                          <?php
                                                 }

                                           }  ?>
                                     
                                     </select>



                                </div>
                                <div class="form-group mt-4">
                                    <div class="form-label">Tgl Mulai</div>
                                    <input type="date" class="form-control" name="mulai" id="mulai"   required="">
                                    <div class="invalid-feedback">
                                       Harus Di isi
                                   </div>
                                </div>
                         
                                <div class="form-group mt-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <?php 
                                         echo $this->session->flashdata('message');
          
                                 ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: [     <?php 

 
//melakukan looping
foreach ($record as $row) {     
?>
{
title: '<?php echo $row['kegiatan']; ?>', //menampilkan title dari tabel
start: '<?php echo $row['mulai']; ?>', //menampilkan tgl mulai dari tabel
end: '<?php echo $row['selesai']; ?>' //menampilkan tgl selesai dari tabel
},
<?php } ?> ],
                    selectOverlap: function (event) {
                        return event.rendering === 'background';
                    }
                });
    
                calendar.render();
            });
        </script>





          </div>
        </section>
      </div>
<?php $this->load->view('web/_partials/footer'); ?>