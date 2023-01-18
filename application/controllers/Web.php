<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Selamat Datang"
		);

		if (isset($_POST['submit'])){

			$username = $this->input->post('email',TRUE);
			$role = "perusahaan";
			$password = hash("sha512", md5($this->input->post('password',TRUE)));
			$cek = $this->model_app->cek_login_role($username,$password,$role,'users');
			$row = $cek->row_array();
			$total = $cek->num_rows();
			
			//view_where($table,$data)
		 
				if ($total > 0){
				    $id_perusahaan = $this->model_app->view_where("perusahaan",array('id_user' => $row['id_user'] ))->row_array();

			
					$this->session->set_userdata(array('username'=>$row['username'],
    								   'id_user'=>$row['id_user'],
									   'nama'=>$row['nama'],
									   'id_perusahaan' => $id_perusahaan['id_perusahaan'],
                                       'id_session'=>$row['id_session']));

				   redirect($this->uri->segment(0).'/web/home');

                 			
				}else{

					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Pastika Username , Password dan Role sesuai!!</center></div>');
    				redirect($this->uri->segment(1).'/');

					
				}

		}
		else{



		if ($this->session->username!=''){
			redirect($this->uri->segment(1).'/web/home');

		}else{

			$this->load->view('web/auth-login', $data);
		

		}	        
		} 		
	}


	public function home() {
		$data = array(
			'title' => "Halaman Depan" ,
			'username' => $this->session->username,
			'nama' => $this->session->nama
		);
 
		$this->load->view('web/home', $data);
	}

	 
	
	function logout(){
		$this->session->sess_destroy();
		redirect($this->uri->segment(0).'/');
	}

// Order
public function order() {

	$data = array(
		'title' => "Data Order"
	);


	$data['record'] = $this->model_app->view_where('data_order',array('id_perusahaan' => $this->session->id_perusahaan ) )->result_array();

	 $this->load->view('web/order/list', $data);
}

public function statusorder() {

	$data = array(
		'title' => "Data Status"
	);
	$data['record'] = $this->model_app->view_ordering('data_order','id_order','DESC');

	
	$this->load->view('web/order/statuslist', $data);
}
public function tambahorder() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('web/order/tambah', $data);
}

public function editorder() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('web/order/tambah', $data);
}

public function sampling() {


	if (isset($_POST['submit'])){

		 
		$no_permohonan = $this->input->post('no_permohonan',TRUE);
		$mulai = $this->input->post('mulai',TRUE);


		



		$cek  = $this->model_app->edit('jadwal', array('mulai' => $mulai ));

		$total = $cek->num_rows();

			if ($total > 0){
				 
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Jadwal Telah di Booking!</center></div>');
    			redirect($this->uri->segment(1).'/sampling');

			}else{
 
				$edit = array('jadwal'=>$this->db->escape_str("1"));
				$where = array('no_permohonan' => $no_permohonan );
				$this->model_app->update('data_order', $edit, $where);

				$data = array('kegiatan'=>$this->db->escape_str($no_permohonan),
								'mulai'=>$this->db->escape_str($mulai),
								'selesai'=>$this->db->escape_str($mulai)
							);

				$this->model_app->insert('jadwal',$data);

				redirect($this->uri->segment(1).'/sampling');

			}

 
	} else{

		$data = array(
			'title' => "Jadwal Sampling"
		);
	    
		$data['order'] = $this->model_app->view_where('data_order',array('id_perusahaan' => $this->session->id_perusahaan, 'jadwal' => '0' ) )->result_array();
		$data['record'] = $this->model_app->view_ordering('jadwal','id_jadwal','DESC');
		$this->load->view('web/order/sampling', $data);
	}
	
}

public function dataperusahaan() {

	$iduser = $this->session->id_user;
	$proses  = $this->model_app->edit('perusahaan', array('id_user' => $iduser))->row_array();
	$data = array('rows' => $proses, 'title' => "Data Perusahaan");

	$this->load->view('web/order/dataperusahaan', $data);
}

public function editperusahaan() {

	$iduser = $this->session->id_user;

	if (isset($_POST['submit'])){

		$data = array('nama_pelanggan'=>$this->db->escape_str($this->input->post('nama_pelanggan')),
		'alamat'=>$this->db->escape_str($this->input->post('alamat')),
		'alamat_perusahaan'=>$this->db->escape_str($this->input->post('alamat_perusahaan')),
		'jenis_usaha'=>$this->db->escape_str($this->input->post('jenis_usaha')),
		'no_telepon'=>$this->db->escape_str($this->input->post('no_telepon')),
		'nama_perusahaan'=>$this->db->escape_str($this->input->post('nama_perusahaan'))
	     );
		$where = array('id_user' => $this->session->id_user );
		$this->model_app->update('perusahaan', $data, $where);
		redirect($this->uri->segment(1).'/dataperusahaan');



	}else{

    $proses  = $this->model_app->edit('perusahaan', array('id_user' => $iduser))->row_array();
	$data = array('rows' => $proses, 'title' => "Edit Perusahaan");
	$this->load->view('web/order/editperusahaan', $data);
    }
}


 



public function formorder() {

    $iduser = $this->session->id_user;
	$proses  = $this->model_app->edit('perusahaan', array('id_user' => $iduser))->row_array();
	$data = array('rows' => $proses, 'title' => "Form Order");
	
	$this->load->view('web/order/formorder', $data);
}




public function vieworder() {

	$id = $this->uri->segment(3);
	$iduser = $this->session->id_user;
	$proses  = $this->model_app->edit('data_order', array('id_order' => $id))->row_array();
	$perusahaan  = $this->model_app->edit('perusahaan', array('id_user' => $iduser))->row_array();
	$bakumutu  = $this->model_app->edit('bakumutu', array('id_bakumutu' => $proses['id_bakumutu']))->row_array();
	$parameter_uji  = $this->model_app->get_parameter_uji($proses['id_order'])->result_array();
	//var_dump($proses['id_order']);
	$data = array('rows' => $proses, 'perusahaan' => $perusahaan,
	'bakumutu' => $bakumutu,
	'parameter_uji' => $parameter_uji,
	'title' => "View Pemeriksaan");
	
	$this->load->view('web/order/vieworder', $data);

}



public function formorder2() {

	$jumlahparameter = $this->input->post('jumlahparameter',TRUE);
	$jenisuji = $this->input->post('jenisuji',TRUE);
	$iduser = $this->session->id_user;
	$order = $this->model_app->cek_last_id('id_order','data_order')->row_array();
	
	$proses  = $this->model_app->edit('perusahaan', array('id_user' => $iduser))->row_array();
	$data = array('rows' => $proses, 'title' => "Form Order",
	'jumlahparameter' => $jumlahparameter,
	'jenisuji' => $jenisuji,
	 'order' => $order
     );

	 $data['bakumutu'] = $this->model_app->view_ordering('bakumutu','id_bakumutu','ASC');
	 $data['parameter'] = $this->model_app->view_ordering('parameter','id_parameter','ASC');
	 $data['metode'] = $this->model_app->view_ordering('metode','id_metode','ASC');
 
 
	
	$this->load->view('web/order/formorder2', $data);
}


public function simpanorder() {

	$id_perusahaan = $this->input->post('id_perusahaan',TRUE);
	$nama_perusahaan = $this->input->post('nama_perusahaan',TRUE);

	$bakumutu = $this->input->post('bakumutu',TRUE);
	$kelas = $this->input->post('kelas',TRUE);
	$status = "Order";

	
	
	$jumlahparameter = $this->input->post('jumlahparameter',TRUE);
	$jenisuji = $this->input->post('jenisuji',TRUE);
	$lastorder = $this->model_app->cek_last_id('id_order','data_order')->row_array();
	$idlastorder=$lastorder['id_order']+1;
	//echo $idlastorder;

	$noorder=sprintf("%05d",($idlastorder));
	//echo $noorder;
	 
	

	$data = array('no_permohonan'=>$this->db->escape_str($noorder),
		              'id_perusahaan'=>$this->db->escape_str($id_perusahaan),
					  'id_bakumutu'=>$this->db->escape_str($bakumutu),
					  'jenis_pengujian'=>$this->db->escape_str($jenisuji),
					  'kelas'=>$this->db->escape_str($kelas),
					  'status'=>$this->db->escape_str($status),
					  'jumlah_parameter'=>$this->db->escape_str($jumlahparameter),
					  'nama_perusahaan'=>$this->db->escape_str($nama_perusahaan)
					 );

	$this->model_app->insert('data_order',$data);


	for ($i = 1; $i <= $jumlahparameter; $i++) {

		$parameter = $this->input->post("parameter$i",TRUE);
		$jumlah = $this->input->post("jumlah$i",TRUE);
		$metode = $this->input->post("metode$i",TRUE);

		$data = array('id_parameter'=>$this->db->escape_str($parameter),
		              'id_metode'=>$this->db->escape_str($metode),
					  'jumlah'=>$this->db->escape_str($jumlah),
					  'id_order'=>$this->db->escape_str($idlastorder)
					 );
		$this->model_app->insert('data_order_parameter',$data);

	
	}
 
	redirect($this->uri->segment(1).'/order');
}
// Order



// Invoice
public function invoice() {

	$data = array(
		'title' => "Data invoice"
	);
	 
	$data['record'] = $this->model_app->view_where('data_order',array('id_perusahaan' => $this->session->id_perusahaan ) )->result_array();

	
	$this->load->view('web/invoice/list', $data);
}
public function tambahinvoice() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('web/invoice/tambah', $data);
}

public function editinvoice() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('web/invoice/tambah', $data);
}

public function konfirmasinvoice() {

	if (isset($_POST['submit'])){

		$tanggal = $this->input->post("tanggal$i",TRUE);
		$no_permohonan = $this->input->post("no_permohonan$i",TRUE);
		$rekpenerima = $this->input->post("rekpenerima$i",TRUE);
		$bankpenerima = $this->input->post("bankpenerima$i",TRUE);
		$totalpembayaran = $this->input->post("totalpembayaran$i",TRUE);


		$config['upload_path'] = 'assets/file/pembayaran';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PDF|pdf|doc|DOC|DOCX|docx';
		$config['max_size'] = '10000'; // kb
		$this->load->library('upload', $config);
		$this->upload->do_upload('filename');
		$hasil=$this->upload->data();
 

		$data = array('no_permohonan'=>$this->db->escape_str($no_permohonan),
				'totalpembayaran'=>$this->db->escape_str($totalpembayaran),
				'bankpenerima'=>$this->db->escape_str($bankpenerima),
				'rekeningpenerima'=>$this->db->escape_str($rekpenerima),
				'tanggal'=>$this->db->escape_str($tanggal),
				'buktipembayaran'=>$this->db->escape_str($hasil['file_name'])
			);
        $this->model_app->insert('pembayaran',$data);

		$idpembayaran = $this->model_app->cek_last_id('id_pembayaran','pembayaran')->row_array();
		$edit = array( 'status_pembayaran' => 'Menunggu Konfirmasi',  'id_pembayaran' =>  $idpembayaran['id_pembayaran'] );
		$where = array('no_permohonan' => $no_permohonan );
		$this->model_app->update('data_order', $edit, $where);
		redirect($this->uri->segment(1).'/invoice');
	 


	}else {

	
		$data = array(
			'title' => "Konfirmasi Pembayaran"
		);
		$data['record'] = $this->model_app->view_where('data_order',array( 'id_perusahaan' => $this->session->id_perusahaan, 'id_pembayaran' => '0' ) )->result_array();
		$this->load->view('web/invoice/konfirmasi', $data);

	}




}
// Invoice

// Hasil Uji
public function hasiluji() {

	$data = array(
		'title' => "Data hasiluji"
	);
	$data['record'] = $this->model_app->view_ordering('data_hasiluji','id_hasiluji','DESC');

	
	$this->load->view('web/hasiluji/list', $data);
}

public function cetakhasiluji() {

	$data = array(
		'title' => "Data hasiluji"
	);
	$data['record'] = $this->model_app->view_ordering('data_hasiluji','id_hasiluji','DESC');

	
	$this->load->view('web/hasiluji/list', $data);
}

public function tambahhasiluji() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('web/hasiluji/tambah', $data);
}

public function edithasiluji() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('web/hasiluji/tambah', $data);
}

 
// Hasil Uji
	
	

	public function credits() {
		$data = array(
			'title' => "Credits"
		);
		$this->load->view('web/credits', $data);
	}
}
