<div class="block">
	<h2 style='color: #dd8229;border-bottom: 2px solid #dd8229;' class="list-title">Sekilas Info</h2>
	<ul class="article-block">
		<?php 
			$sekilas = $this->model_utama->view_ordering_limit('sekilasinfo','id_sekilas','DESC',0,2);
			foreach ($sekilas->result_array() as $row) {	
			$tgl = tgl_indo($row['tgl_posting']);
			echo "<a href='#' class='hover-effect'><img style='width:259px; height:242px;' src='".base_url()."asset/foto_info/logo.png' alt='' /></a> <li>
					<div class='article-photo'>";
						if ($row['gambar'] ==''){
							echo "<a href='#' class='hover-effect'><img style='width:59px; height:42px;' src='".base_url()."asset/foto_info/small_no-image.jpg' alt='' /></a>";
						}else{
							echo "<a href='#' class='hover-effect'><img style='width:59px; height:42px;' src='".base_url()."asset/foto_info/$row[gambar]' alt='' /></a>";
						}
					echo "</div>
					<div class='article-content'>
						<h4><a href='#'>$row[info]</a></h4>
						<span class='meta'>
							<a href='#'><span class='icon-text'>&#128340;</span>$tgl</a>
						</span>
					</div>
				  </li>";
			}
		?>
	</ul>
</div>

<!--<div class="block">
	<h2 class="list-title" style="color: green;border-bottom: 2px solid green;">Banner Link</h2>
	<ul class="article-list">
		<?php
		  /* $banner = $this->model_utama->view_ordering_limit('banner','id_banner','ASC',0,5);
		  foreach ($banner->result_array() as $b) {
					echo "<li><a target='_BLANK' href='$b[url]'>$b[judul]</a></li>";
		  } */
		?>
	</ul>
</div>-->

<div class="block">
  <h2 style='color:#000; border-bottom: 2px solid #000;' class="list-title">Berita Foto</h2>
  <div class="latest-galleries">
	  <div class="gallery-widget">
		  <div class="gallery-photo" rel="hover-parent">
			  <a href="#" class="slide-left icon-text"></a>
			  <a href="#" class="slide-right icon-text"></a>
			  <ul rel="4">
				  <?php 
				  	$album = $this->model_utama->view_where_ordering_limit('album',array('aktif' => 'Y'),'id_album','RANDOM',0,4);
					foreach ($album->result_array() as $row) {
					$jumlah = $this->model_utama->view_where('gallery',array('id_album' => $row['id_album']))->num_rows();
					echo "<li> 
							  <a href='".base_url()."albums/detail/$row[album_seo]' class='hover-effect delegate'>
								  <span class='cover'><i></i>
								  <img width='100%' src='".base_url()."asset/img_album/$row[gbr_album]' alt='$row[jdl_album] - (Ada $jumlah foto)'></span>
							  </a>
						  </li>";
					}
				  ?>
			  </ul>								
		  </div>		
	  </div>	
  </div>	
</div>

<div class="widget">
	<h2 class="list-title" style="color: #2277c6;border-bottom: 2px solid #2277c6;">Jejak Pendapat</h2>
		<?php
		  $t = $this->model_utama->view_where('poling',array('aktif' => 'Y','status' => 'Pertanyaan'))->row_array();
		  echo " <div style='color:#000; font-weight:bold;'>$t[pilihan] <br></div>";
		  echo "<form method=POST action='".base_url()."polling/hasil'>";
			  $pilih = $this->model_utama->view_where('poling',array('aktif' => 'Y','status' => 'Jawaban'));
			  foreach ($pilih->result_array() as $p) {
			  echo "<input class=marginpoling type=radio name=pilihan value='$p[id_poling]'/>
					<class style=\"color:#666;font-size:12px;\">&nbsp;&nbsp;$p[pilihan]<br />";}
			  echo "<br><center><input style='width: 110px; padding:2px' type=submit class=simplebtn value='PILIH' />
		  </form>
		  <a href='".base_url()."polling'>
		  <input style='width: 110px; padding:2px;' type=button class=simplebtn value='LIHAT HASIL' /></a></center>";
		?>
</div>

<div class="widget">
	<h3>Video Terbaru</h3>
	<div class="latest-galleries">
		<?php						  
		  $video = $this->model_utama->view_ordering_limit('video','id_video','DESC',0,2);
		  foreach ($video->result_array() as $d) {
		  $baca = $d['dilihat']+1;
		  $tgl = tgl_indo($d['tanggal']);
		  $judul = substr($d['jdl_video'],0,35);
		  echo "<div class='gallery-widget'>
					<div class='gallery-photo' rel='hover-parent'>
						<a href='#' class='slide-left icon-text'>&#59229;</a>
						<a href='#' class='slide-right icon-text'>&#59230;</a>
						<ul>
							<li>";
								if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $d['youtube'], $match)) {
                                    echo "<iframe width='100%' height='220' src='https://www.youtube.com/embed/".$match[1]."' frameborder='0' allowfullscreen></iframe>";
                                } 
							echo "</li>
						</ul>
					</div>
					<div class='gallery-content'>
						<h4><a href='".base_url()."playlist/watch/$d[video_seo]' title='$d[jdl_video]'>$judul . . .</a></h4>
						<span class='meta'>
							<span class='right'>$d[hari], $tgl - Dilihat $baca Kali</span>
							<a href='".base_url()."playlist/watch/$d[video_seo]'><span class='icon-text'>&#59212;</span>Lihat Video</a>
						</span>
					</div>
				</div>";
		  }
		?>
	</div>
<a href="<?php echo base_url()."playlist"; ?>" class="more">View All Video</a>
</div>

 

