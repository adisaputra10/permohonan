<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Selamat Datang"
		);

		if (isset($_POST['submit'])){

           

	 

			$username = $this->input->post('email',TRUE);
			$role = $this->input->post('role',TRUE);
			$password = hash("sha512", md5($this->input->post('password',TRUE)));
			$cek = $this->model_app->cek_login_role($username,$password,$role,'users');

			$row = $cek->row_array();
			$total = $cek->num_rows();
		 
		 
             
				if ($total > 0){
				
					$this->session->set_userdata(array('username'=>$row['username'],
									   'nama'=>$row['nama'],
                                       'id_session'=>$row['id_session']));

                    if ($role == "Admin") {
						redirect($this->uri->segment(0).'/admin/home');
					}
					else if($role == "Petugas") {
						redirect($this->uri->segment(0).'/petugas/home');
					}									   
					else if($role == "Kepala Lab") {
						redirect($this->uri->segment(0).'/kepala/home');
					}
					else if($role == "Penyelia") {
						redirect($this->uri->segment(0).'/penyelia/home');
					}
					else if($role == "Koordinator") {
						redirect($this->uri->segment(0).'/koordinator/home');
					}			


				}else{

					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Pastika Username , Password dan Role sesuai!!</center></div>');
    				redirect($this->uri->segment(1).'/');

					
				}


			

		}
		else{

 

		if ($this->session->username!=''){
			redirect($this->uri->segment(0).'/admin/home');

		}else{

			$data['role'] = $this->model_app->get_parameter('role','5')->result_array(); 	
			$this->load->view('admin/auth-login', $data);
	
 

		}	        
		} 		
	}


	public function home() {
		$data = array(
			'title' => "Dashboard" ,
			'username' => $this->session->username,
			'nama' => $this->session->nama
		);
 
		$this->load->view('admin/home', $data);
	}

	 
	
	function logout(){
		$this->session->sess_destroy();
		redirect($this->uri->segment(0).'/admin');
	}

	public function modules_datatables() {
		$data = array(
			'title' => "Modules &rsaquo; Datatables"
		);
		$this->load->view('admin/modules-datatables', $data);
	}

// User management
	public function users() {

		$data = array(
			'title' => "Data Users"
		);
		$data['record'] = $this->model_app->view_ordering('users','id_user','DESC');

		
		$this->load->view('admin/users/list_user', $data);
	}

	public function saveusers() {

	
		$password = $this->input->post('password',TRUE);
		$upassword = $this->input->post('upassword',TRUE);
		if( $password != $upassword )
		{
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Password tidak sama</center></div>');
			redirect($this->uri->segment(1).'/tambahuser');
		}else{

			$data = array('username'=>$this->db->escape_str($this->input->post('email')),
                                    'password'=>hash("sha512", md5($this->input->post('password',TRUE))),
                                    'nama'=>$this->db->escape_str($this->input->post('nama')),
                                    'role'=>$this->db->escape_str($this->input->post('role')),
                                    'blokir'=> 'N',
                                    'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis')  );
			$this->model_app->insert('users',$data);
			redirect($this->uri->segment(1).'/users');


		}


	}
	public function tambahuser() {

		$data = array(
			'title' => "Data Users"
		);
		$this->load->view('admin/users/tambah-user', $data);
	}
	public function hapususer() {

		$id = array('id_user' => $this->uri->segment(3));
        $this->model_app->delete('users',$id);
		redirect($this->uri->segment(1).'/users');
	}


	public function edituser() {
		$id = $this->uri->segment(3);

		if (isset($_POST['submit'])){

			$data = array('nama'=>$this->db->escape_str($this->input->post('nama')),
			'username'=>$this->db->escape_str($this->input->post('email')),
			'role'=>$this->db->escape_str($this->input->post('role')));
			$where = array('id_user' => $this->input->post('id'));
            $this->model_app->update('users', $data, $where);
			redirect($this->uri->segment(1).'/users');


		}else{
		$proses  = $this->model_app->edit('users', array('id_user' => $id))->row_array();
	
		$data = array('rows' => $proses, 'title' => "Edit Users");
		$data['select'] = $this->model_app->view_ordering('role','id_role','ASC');
	 
		$this->load->view('admin/users/edit-user', $data );
	   }
	}

// User Management

// Perusahaan

public function saveperusahaan() {

	
		$data = array('nama'=>$this->db->escape_str($this->input->post('nama')),
		              'alamat'=>$this->db->escape_str($this->input->post('alamat'))
					 );
		$this->model_app->insert('perusahaan',$data);
		redirect($this->uri->segment(1).'/perusahaan');
}

public function perusahaan() {

	$data = array(
		'title' => "Data Perusahaan"
	);
	$data['record'] = $this->model_app->view_ordering('perusahaan','id_perusahaan','DESC');

	
	$this->load->view('admin/perusahaan/list', $data);
}
public function tambahperusahaan() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/perusahaan/tambah', $data);
}

public function editperusahaan() {

	$id = $this->uri->segment(3);

	if (isset($_POST['submit'])){

		$data = array('nama'=>$this->db->escape_str($this->input->post('nama')),
		'alamat'=>$this->db->escape_str($this->input->post('alamat')) );
		$where = array('id_perusahaan' => $this->input->post('id'));
		$this->model_app->update('perusahaan', $data, $where);
		redirect($this->uri->segment(1).'/perusahaan');


	}else{
	$proses  = $this->model_app->edit('perusahaan', array('id_perusahaan' => $id))->row_array();

	$data = array('rows' => $proses, 'title' => "Edit Perusahaan");
	 
 
	$this->load->view('admin/perusahaan/edit', $data );
   }



}

public function hapusperusahaan(){
   
		$id = array('id_perusahaan' => $this->uri->segment(3));
        $this->model_app->delete('perusahaan',$id);
		redirect($this->uri->segment(1).'/perusahaan');

}
// Perusahaan 

// Invoice
public function invoice() {

	$data = array(
		'title' => "Data Users"
	);
	$data['record'] = $this->model_app->view_ordering('users','id_user','DESC');

	
	$this->load->view('admin/invoice/list', $data);
}
public function tambahinvoice() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/invoice/tambah', $data);
}

public function editinvoice() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/invoice/tambah', $data);
}
// Invoice


// Hasil Uji
public function hasiluji() {

	$data = array(
		'title' => "Data Users"
	);
	$data['record'] = $this->model_app->view_ordering('users','id_user','DESC');

	
	$this->load->view('admin/hasiluji/list', $data);
}

public function rekaphasiluji() {

	$data = array(
		'title' => "Data Users"
	);
	$data['record'] = $this->model_app->view_ordering('users','id_user','DESC');

	
	$this->load->view('admin/hasiluji/rekaplist', $data);
}

public function tambahhasiluji() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/hasiluji/tambah', $data);
}

public function edithasiluji() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/hasiluji/tambah', $data);
}
// Hasil Uji

// Order
public function order() {

	$data = array(
		'title' => "Data Users"
	);
	$data['record'] = $this->model_app->view_ordering('users','id_user','DESC');

	
	$this->load->view('admin/order/list', $data);
}

public function orderlabel() {

	$data = array(
		'title' => "Data Users"
	);
	$data['record'] = $this->model_app->view_ordering('users','id_user','DESC');

	
	$this->load->view('admin/order/list-label', $data);
}



public function tambahorder() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/order/tambah', $data);
}

public function editorder() {

	$data = array(
		'title' => "Data Users"
	);
	$this->load->view('admin/order/tambah', $data);
}
// Order

	public function bootstrap_alert() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Alert"
		);
		$this->load->view('admin/bootstrap-alert', $data);
	}

	public function forms_validation() {
		$data = array(
			'title' => "Forms &rsaquo; Validation"
		);
		$this->load->view('admin/forms-validation', $data);
	}

	public function credits() {
		$data = array(
			'title' => "Credits"
		);
		$this->load->view('admin/credits', $data);
	}
}
