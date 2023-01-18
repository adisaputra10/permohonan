<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>web/index">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>web/index">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'home' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'home' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/home">Dashboard</a></li>
             </ul>
            </li>

            <li class="menu-header">Data</li>
            <li class="<?php echo $this->uri->segment(2) == 'statusorder' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/dataperusahaan"><i class="fas fa-pencil-ruler"></i> <span>Data Perusahaan</span></a></li>
          

           <li class="dropdown <?php echo $this->uri->segment(2) == 'bootstrap_alert' || $this->uri->segment(2) == 'bootstrap_badge' || $this->uri->segment(2) == 'bootstrap_breadcrumb' || $this->uri->segment(2) == 'bootstrap_buttons' || $this->uri->segment(2) == 'bootstrap_card' || $this->uri->segment(2) == 'bootstrap_carousel' || $this->uri->segment(2) == 'bootstrap_collapse' || $this->uri->segment(2) == 'bootstrap_dropdown' || $this->uri->segment(2) == 'bootstrap_form' || $this->uri->segment(2) == 'bootstrap_list_group' || $this->uri->segment(2) == 'bootstrap_media_object' || $this->uri->segment(2) == 'bootstrap_modal' || $this->uri->segment(2) == 'bootstrap_nav' || $this->uri->segment(2) == 'bootstrap_navbar' || $this->uri->segment(2) == 'bootstrap_pagination' || $this->uri->segment(2) == 'bootstrap_popover' || $this->uri->segment(2) == 'bootstrap_progress' || $this->uri->segment(2) == 'bootstrap_table' || $this->uri->segment(2) == 'bootstrap_tooltip' || $this->uri->segment(2) == 'bootstrap_typography' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pemeriksaaan</span></a>
              <ul class="dropdown-menu">
              <br>
              <li class="<?php echo $this->uri->segment(2) == 'formorder' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/formorder" >Permohonan Pemeriksaaan</a></li>
              <br>
              <li class="<?php echo $this->uri->segment(2) == 'order' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/order">Lihat Permohonan</a></li>
              <li class="<?php echo $this->uri->segment(2) == 'sampling' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/sampling">Jadwal Sampling</a></li>  
              </ul>
            </li>

            <li class="<?php echo $this->uri->segment(2) == 'statusorder' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/statusorder"><i class="fas fa-pencil-ruler"></i> <span>Status Order</span></a></li>
          

           <li class="dropdown <?php echo $this->uri->segment(2) == 'hasiluji' || $this->uri->segment(2) == 'bootstrap_badge' || $this->uri->segment(2) == 'bootstrap_breadcrumb' || $this->uri->segment(2) == 'bootstrap_buttons' || $this->uri->segment(2) == 'bootstrap_card' || $this->uri->segment(2) == 'bootstrap_carousel' || $this->uri->segment(2) == 'bootstrap_collapse' || $this->uri->segment(2) == 'bootstrap_dropdown' || $this->uri->segment(2) == 'bootstrap_form' || $this->uri->segment(2) == 'bootstrap_list_group' || $this->uri->segment(2) == 'bootstrap_media_object' || $this->uri->segment(2) == 'bootstrap_modal' || $this->uri->segment(2) == 'bootstrap_nav' || $this->uri->segment(2) == 'bootstrap_navbar' || $this->uri->segment(2) == 'bootstrap_pagination' || $this->uri->segment(2) == 'bootstrap_popover' || $this->uri->segment(2) == 'bootstrap_progress' || $this->uri->segment(2) == 'bootstrap_table' || $this->uri->segment(2) == 'bootstrap_tooltip' || $this->uri->segment(2) == 'bootstrap_typography' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Sertifikasi Hasil Uji</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'cetakhasiluji' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/cetakhasiluji">Lihat Sertifikasi Hasil Uji</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'hasiluji1' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/hasiluji">Cetak Sertifikasi Hasil Uji</a></li>  
              </ul>
            </li>
        
            <li class="dropdown <?php echo $this->uri->segment(2) == 'invoice' || $this->uri->segment(2) == 'bootstrap_badge' || $this->uri->segment(2) == 'bootstrap_breadcrumb' || $this->uri->segment(2) == 'bootstrap_buttons' || $this->uri->segment(2) == 'bootstrap_card' || $this->uri->segment(2) == 'bootstrap_carousel' || $this->uri->segment(2) == 'bootstrap_collapse' || $this->uri->segment(2) == 'bootstrap_dropdown' || $this->uri->segment(2) == 'bootstrap_form' || $this->uri->segment(2) == 'bootstrap_list_group' || $this->uri->segment(2) == 'bootstrap_media_object' || $this->uri->segment(2) == 'bootstrap_modal' || $this->uri->segment(2) == 'bootstrap_nav' || $this->uri->segment(2) == 'bootstrap_navbar' || $this->uri->segment(2) == 'bootstrap_pagination' || $this->uri->segment(2) == 'bootstrap_popover' || $this->uri->segment(2) == 'bootstrap_progress' || $this->uri->segment(2) == 'bootstrap_table' || $this->uri->segment(2) == 'bootstrap_tooltip' || $this->uri->segment(2) == 'bootstrap_typography' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pembayaran</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'invoice' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/invoice">Cetak Pembayaran</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'konfirmasinvoice' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>web/konfirmasinvoice">Konfirmasi Pembayaran</a></li>  
              </ul>
            </li>

          


        </aside>
      </div>
