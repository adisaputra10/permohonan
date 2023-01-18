<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koordinator extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "ss Ecommerce Dashboard"
		);

	


		if ($this->session->username!=''){
			redirect($this->uri->segment(1).'/admin/home');

		}else{

			$this->load->view('koordinator/auth-login', $data);
		

		}	        
		 		
	}


	public function verifikasilppc() {


		$data = array(
			'title' => "Data LPPC "
		);

		$data['record'] = $this->model_app->view_join_one('laporan','data_order','no_permohonan','','');  
		 $this->load->view('koordinator/verifikasi/list', $data);

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
		$this->load->view('koordinator/order/vieworder', $data);

	
	}


	public function order() {

		$data = array(
			'title' => "Data Order"
		);
	   
		$data['record'] = $this->model_app->view_ordering('data_order','id_order','DESC');
	
		 $this->load->view('koordinator/order/list', $data);
	}

	public function home() {
		$data = array(
			'title' => "General Dashboard"
		);
		$this->load->view('koordinator/home', $data);
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect($this->uri->segment(0).'/');
	}

	
 
}
