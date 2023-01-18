<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyelia extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "ss Ecommerce Dashboard"
		);

	


		if ($this->session->username!=''){
			redirect($this->uri->segment(1).'/admin/home');

		}else{
			$this->load->view('admin/auth-login', $data);
		}	        
		 		
	}


	public function home() {
		$data = array(
			'title' => "General Dashboard"
		);
		$this->load->view('penyelia/home', $data);
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect($this->uri->segment(0).'/');
	}

	
	


	public function order() {

		$data = array(
			'title' => "Data Order"
		);
	   
		$data['record'] = $this->model_app->view_ordering('data_order','id_order','DESC');
	
		 $this->load->view('penyelia/order/list', $data);
	}


	public function lppc() {

		$data = array(
			'title' => "Data LPPC "
		);
		//$data['record'] = $this->model_app->view_ordering('laporan','id_laporan','DESC');
		$data['record'] = $this->model_app->view_join_one('laporan','data_order','no_permohonan','','');  
		//view_join_one($table1,$table2,$field,$order,$ordering)


		 $this->load->view('penyelia/laporan/list', $data);

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
		$this->load->view('penyelia/order/vieworder', $data);

	
	}


	
	public function viewformlppc() {


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
				
				$this->load->view('penyelia/order/viewformlppc', $data);

		
	}

	public function verifikasilppc() {


		$data = array(
			'title' => "Data LPPC "
		);

		$data['record'] = $this->model_app->view_join_one('laporan','data_order','no_permohonan','','');  
		 $this->load->view('penyelia/verifikasi/list', $data);

    }


	  public function saveverifikasilppc() {



		$jumlahparameter = $this->input->post('jumlahparameter',TRUE);
	 

		for ($i = 1; $i <= $jumlahparameter; $i++) {

			$idop = $this->input->post("idop$i",TRUE);
			$digunakan = $this->input->post("digunakan$i",TRUE);
			$sisa = $this->input->post("sisa$i",TRUE);
			$tanggal = $this->input->post("tanggal$i",TRUE);

			$hasil = $this->input->post("hasil$i",TRUE);
			$d = $this->input->post("d$i",TRUE);
			$r = $this->input->post("r$i",TRUE);

		
			
            $keterangan = $this->input->post("keterangan$i",TRUE);
	
 

			
			$data = array('digunakan'=>$this->db->escape_str( $digunakan ),
				'sisa'=>$this->db->escape_str( $sisa ),
				'tanggal'=>$this->db->escape_str( $tanggal ),
				'hasil'=>$this->db->escape_str( $hasil ),
				'4d'=>$this->db->escape_str( $d ),
				'result'=>$this->db->escape_str( $r ),
				'keterangan'=>$this->db->escape_str( $keterangan )  );
				//var_dump($data);

			$where = array('id_data_order_parameter' => $idop  );
			$this->model_app->update('data_order_parameter', $data, $where);

			


		}
		
		redirect($this->uri->segment(1).'/verifikasilppc');
	  }


	  public function bukaverifikasilppc() {

		$id = $this->uri->segment(3);	  
		$proses  = $this->model_app->edit('data_order', array('id_order' => $id))->row_array();
		$parameter_uji  = $this->model_app->get_parameter_uji($proses['id_order'])->result_array();
		$ket_lppc_var = $this->model_app->get_parameter('ket_lppc','5')->result_array(); 
		 
		$data = array(
			'title' => "Data LPPC",
			'parameter_uji' => $parameter_uji,
			'length_parameter' => $length_parameter,
			'ket_lppc_var' => $ket_lppc_var
		);


		 $this->load->view('penyelia/verifikasi/bukaverifikasi', $data);




		
	 }



}
