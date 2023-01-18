<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "ss Ecommerce Dashboard"
		);

	


		if ($this->session->username!=''){
			redirect($this->uri->segment(1).'/petugas/home');

		}else{

			$this->load->view('petugas/auth-login', $data);
		

		}	        
		 		
	}


	public function home() {
		$data = array(
			'title' => "General Dashboard" ,
			'username' => $this->session->username,
			'nama' => $this->session->nama
		);
		$this->load->view('petugas/home', $data);
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect($this->uri->segment(0).'/');
	}

	public function index_0() {
		$data = array(
			'title' => "General Dashboard"
		);
		$this->load->view('petugas/index-0', $data);
	}


	public function order() {

		$data = array(
			'title' => "Data Order"
		);
	   
		$data['record'] = $this->model_app->view_ordering('data_order','id_order','DESC');
	
		 $this->load->view('petugas/order/list', $data);
	}

	
	public function lppc() {

		$data = array(
			'title' => "Data LPPC "
		);
	
	
		 $data['record'] = $this->model_app->view_ordering('laporan','id_laporan','DESC');
		 $this->load->view('petugas/laporan/list', $data);

	}

	public function vieworder() {

		$id = $this->uri->segment(3);
		$proses  = $this->model_app->edit('data_order', array('id_order' => $id))->row_array();
        $iduser = $proses['id_perusahaan'];
		$perusahaan  = $this->model_app->edit('perusahaan', array('id_perusahaan' => $iduser))->row_array();
		$bakumutu  = $this->model_app->edit('bakumutu', array('id_bakumutu' => $proses['id_bakumutu']))->row_array();
		$parameter_uji  = $this->model_app->get_parameter_uji($proses['id_order'])->result_array();
		//var_dump($proses['id_order']);
		$data = array('rows' => $proses, 'perusahaan' => $perusahaan,
		'bakumutu' => $bakumutu,
		'parameter_uji' => $parameter_uji,
		'title' => "View Pemeriksaan");
		$this->load->view('petugas/order/vieworder', $data);

	
	}


	public function formlppc() {


		if (isset($_POST['submit'])){
	 
            

			$no_permohonan = $this->input->post('no_permohonan',TRUE);
			$tanggalditerima = $this->input->post('tanggalditerima',TRUE);
			$tanggalselesai = $this->input->post('tanggalselesai',TRUE);
			$wadah = $this->input->post('wadah',TRUE);
			$volume = $this->input->post('volume',TRUE);
			$pengawetan = $this->input->post('pengawetan',TRUE);
			$pengambilan = $this->input->post('pengambilan',TRUE);
			$abnormalitas = $this->input->post('abnormalitas',TRUE);
			$kondisi = $this->input->post('kondisi',TRUE);
			$segel = $this->input->post('segel',TRUE);

	
	
			$data = array('no_permohonan'=>$this->db->escape_str( $no_permohonan ),
				'tanggal_diterima'=>$this->db->escape_str( $tanggalditerima ),
				'tanggal_selesai'=>$this->db->escape_str( $tanggalselesai ),
				'volume'=>$this->db->escape_str( $volume ),
				'wadah'=>$this->db->escape_str( $wadah ),
				'pengawetan'=>$this->db->escape_str( $pengawetan ),
				'abnormalitas'=>$this->db->escape_str( $abnormalitas ),
				'kondisi_fisik'=>$this->db->escape_str( $kondisi ),
				'segel'=>$this->db->escape_str( $segel ),
			    'pengambilan'=>$this->db->escape_str( $no_permohonan )  );
	
	
			$this->model_app->insert('laporan',$data);
	
	
			redirect($this->uri->segment(1).'/lppc');


		}else {
		$id = $this->uri->segment(3);
		$proses  = $this->model_app->edit('data_order', array('id_order' => $id))->row_array();
        $iduser = $proses['id_perusahaan'];
		$perusahaan  = $this->model_app->edit('perusahaan', array('id_perusahaan' => $iduser))->row_array();
		$bakumutu  = $this->model_app->edit('bakumutu', array('id_bakumutu' => $proses['id_bakumutu']))->row_array();
		$parameter_uji  = $this->model_app->get_parameter_uji($proses['id_order'])->result_array();
		

		$tgl = date('d-m-Y');
		
		$nexttgl= $this->model_app->manipulasiTanggal($tgl,'14','days');
		
		$data = array('rows' => $proses, 'perusahaan' => $perusahaan,
		'bakumutu' => $bakumutu,
		'tgl'   => $tgl, 
		'statusform' => $statusform,
		'nexttgl'   => $nexttgl , 
		'parameter_uji' => $parameter_uji,
		'title' => "View Pemeriksaan");
		  $this->load->view('petugas/order/lppc', $data);
		

		}
		
	
	}


	public function editformlppc() {


		if (isset($_POST['submit'])){
			$no_permohonan = $this->input->post('no_permohonan',TRUE);
			$tanggalditerima = $this->input->post('tanggalditerima',TRUE);
			$tanggalselesai = $this->input->post('tanggalselesai',TRUE);
			$wadah = $this->input->post('wadah',TRUE);
			$volume = $this->input->post('volume',TRUE);
			$pengawetan = $this->input->post('pengawetan',TRUE);
			$pengambilan = $this->input->post('pengambilan',TRUE);
			$abnormalitas = $this->input->post('abnormalitas',TRUE);
			$kondisi = $this->input->post('kondisi',TRUE);
			$segel = $this->input->post('segel',TRUE);

	
	
			$data = array('tanggal_diterima'=>$this->db->escape_str( $tanggalditerima ),
				'tanggal_selesai'=>$this->db->escape_str( $tanggalselesai ),
				'volume'=>$this->db->escape_str( $volume ),
				'wadah'=>$this->db->escape_str( $wadah ),
				'pengawetan'=>$this->db->escape_str( $pengawetan ),
				'abnormalitas'=>$this->db->escape_str( $abnormalitas ),
				'kondisi_fisik'=>$this->db->escape_str( $kondisi ),
				'segel'=>$this->db->escape_str( $segel ),
			    'pengambilan'=>$this->db->escape_str( $pengambilan )  );

			$where = array('no_permohonan' => $no_permohonan  );
			$this->model_app->update('laporan', $data, $where);
	
			redirect($this->uri->segment(1).'/lppc'); }
			else {

			
				$id = $this->uri->segment(3);
				$proses  = $this->model_app->edit('data_order', array('id_order' => $id))->row_array();
				$iduser = $proses['id_perusahaan'];
				$perusahaan  = $this->model_app->edit('perusahaan', array('id_perusahaan' => $iduser))->row_array();
				$bakumutu  = $this->model_app->edit('bakumutu', array('id_bakumutu' => $proses['id_bakumutu']))->row_array();
				$parameter_uji  = $this->model_app->get_parameter_uji($proses['id_order'])->result_array();
				$pengawetan_var = $this->model_app->get_parameter('pengawetan','5')->result_array(); 
				$kondisi_var = $this->model_app->get_parameter('kondisi','5')->result_array(); 
				$segel_var = $this->model_app->get_parameter('segel','5')->result_array(); 
				$kondisi_fisik_var = $this->model_app->get_parameter('kondisi_fisik','5')->result_array(); 	
				$wadah_var = $this->model_app->get_parameter('wadah','5')->result_array(); 		
				
				$lppc  = $this->model_app->edit('laporan', array('no_permohonan' => $proses['no_permohonan']))->row_array();
				$tgl = $lppc['tanggal_diterima'];
				
				$nexttgl= $lppc['tanggal_selesai'];
				
				$data = array('rows' => $proses, 'perusahaan' => $perusahaan,
				'bakumutu' => $bakumutu,
				'tgl' => $tgl,
				'pengawetan_var' => $pengawetan_var, 
				'kondisi_fisik_var' => $kondisi_fisik_var,
				'kondisi_var' => $kondisi_var,
				'wadah_var' => $wadah_var,
				'segel_var' => $segel_var,
				'lppc' => $lppc,
				'nexttgl'   => $nexttgl , 
				'parameter_uji' => $parameter_uji,
				'title' => "View Pemeriksaan");
				
				$this->load->view('petugas/order/lppcedit', $data);

		}
	}

	
	public function simpanlppc() {

		$no_permohonan = $this->input->post('no_permohonan',TRUE);
		$tanggalditerima = $this->input->post('tanggalditerima',TRUE);
		$tanggalselesai = $this->input->post('tanggalselesai',TRUE);
		$wadah = $this->input->post('wadah',TRUE);
		$pengawetan = $this->input->post('pengawetan',TRUE);

		$pengambilan = $this->input->post('pengambilan',TRUE);
		$abnormalitas = $this->input->post('abnormalitas',TRUE);
		$kondisi = $this->input->post('kondisi',TRUE);
		$segel = $this->input->post('segel',TRUE);


		$data = array('no_permohonan'=>$this->db->escape_str( $no_permohonan ),
		'tanggal_diterima'=>$this->db->escape_str( $no_permohonan ),
		'tanggal_selesai'=>$this->db->escape_str( $no_permohonan ),
		'volume'=>$this->db->escape_str( $no_permohonan ),
		'wadah'=>$this->db->escape_str( $no_permohonan ),
		'pengawetan'=>$this->db->escape_str( $no_permohonan ),
		'abnormalitas'=>$this->db->escape_str( $abnormalitas ),
		'kondisi'=>$this->db->escape_str( $kondisi ),
		'segel'=>$this->db->escape_str( $segel ),
		'pengambilan'=>$this->db->escape_str( $pengambilan )  );


		$this->model_app->insert('laporan',$data);


		redirect($this->uri->segment(1).'/lppc');



	}


	 
}
