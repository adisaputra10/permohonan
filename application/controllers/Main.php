<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
    								   'level'=>$row['level'],
									   'nama'=>$row['nama'],
                                       'id_session'=>$row['id_session']));

                    if ($role == "admin") {
						redirect($this->uri->segment(1).'/admin/home');
					}
					else if($role == "petugas") {
						redirect($this->uri->segment(1).'/petugas/home');
					}									   
					else if($role == "kepala") {
						redirect($this->uri->segment(1).'/kepala/home');
					}
					else if($role == "penyelia") {
						redirect($this->uri->segment(1).'/penyelia/home');
					}
					else if($role == "koordinator") {
						redirect($this->uri->segment(1).'/koordinator/home');
					}			


				}else{

					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Pastika Username , Password dan Role sesuai!!</center></div>');
    				redirect($this->uri->segment(1).'/');

					
				}


			

		}
		else{

			// if ($this->session->level!=''){
			// redirect($this->uri->segment(1).'/home');
			// }else{
			// 	redirect($this->uri->segment(1).'/admin/home');
				
			// }

		//	$this->load->view('admin/index', $data);

		if ($this->session->username!=''){
			redirect($this->uri->segment(1).'/admin/home');

		}else{

			$this->load->view('admin/auth-login', $data);
			//redirect($this->uri->segment(1).'/admin/home');

		}	        
		} 		
	}


	public function home() {
		$data = array(
			'title' => "General Dashboard" ,
			'username' => $this->session->username,
			'nama' => $this->session->nama
		);
 
		$this->load->view('admin/home', $data);
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect($this->uri->segment(0).'/');
	}

	public function index_0() {
		$data = array(
			'title' => "General Dashboard"
		);
		$this->load->view('admin/index-0', $data);
	}

	public function layout_default() {
		$data = array(
			'title' => "Layout &rsaquo; Default"
		);
		$this->load->view('admin/layout-default', $data);
	}

	public function layout_transparent() {
		$data = array(
			'title' => "Layout &rsaquo; Transparent Sidebar"
		);
		$this->load->view('admin/layout-transparent', $data);
	}

	public function layout_top_navigation() {
		$data = array(
			'title' => "Layout &rsaquo; Top Navigation"
		);
		$this->load->view('admin/layout-top-navigation', $data);
	}

	public function blank() {
		$data = array(
			'title' => "Blank Page"
		);
		$this->load->view('admin/blank', $data);
	}

	public function bootstrap_alert() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Alert"
		);
		$this->load->view('admin/bootstrap-alert', $data);
	}

	public function bootstrap_badge() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Badge"
		);
		$this->load->view('admin/bootstrap-badge', $data);
	}

	public function bootstrap_breadcrumb() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Breadcrumb"
		);
		$this->load->view('admin/bootstrap-breadcrumb', $data);
	}

	public function bootstrap_buttons() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Buttons"
		);
		$this->load->view('admin/bootstrap-buttons', $data);
	}

	public function bootstrap_card() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Card"
		);
		$this->load->view('admin/bootstrap-card', $data);
	}

	public function bootstrap_carousel() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Carousel"
		);
		$this->load->view('admin/bootstrap-carousel', $data);
	}

	public function bootstrap_collapse() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Collapse"
		);
		$this->load->view('admin/bootstrap-collapse', $data);
	}

	public function bootstrap_dropdown() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Dropdown"
		);
		$this->load->view('admin/bootstrap-dropdown', $data);
	}

	public function bootstrap_form() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Form"
		);
		$this->load->view('admin/bootstrap-form', $data);
	}

	public function bootstrap_list_group() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; List Group"
		);
		$this->load->view('admin/bootstrap-list-group', $data);
	}

	public function bootstrap_media_object() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Media Object"
		);
		$this->load->view('admin/bootstrap-media-object', $data);
	}

	public function bootstrap_modal() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Modal"
		);
		$this->load->view('admin/bootstrap-modal', $data);
	}

	public function bootstrap_nav() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Nav"
		);
		$this->load->view('admin/bootstrap-nav', $data);
	}

	public function bootstrap_navbar() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Navbar"
		);
		$this->load->view('admin/bootstrap-navbar', $data);
	}

	public function bootstrap_pagination() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Pagination"
		);
		$this->load->view('admin/bootstrap-pagination', $data);
	}

	public function bootstrap_popover() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Popover"
		);
		$this->load->view('admin/bootstrap-popover', $data);
	}

	public function bootstrap_progress() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Progress"
		);
		$this->load->view('admin/bootstrap-progress', $data);
	}

	public function bootstrap_table() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Table"
		);
		$this->load->view('admin/bootstrap-table', $data);
	}

	public function bootstrap_tooltip() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Tooltip"
		);
		$this->load->view('admin/bootstrap-tooltip', $data);
	}

	public function bootstrap_typography() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Typography"
		);
		$this->load->view('admin/bootstrap-typography', $data);
	}

	public function components_article() {
		$data = array(
			'title' => "Components &rsaquo; Article"
		);
		$this->load->view('admin/components-article', $data);
	}

	public function components_avatar() {
		$data = array(
			'title' => "Components &rsaquo; Avatar"
		);
		$this->load->view('admin/components-avatar', $data);
	}

	public function components_chat_box() {
		$data = array(
			'title' => "Components &rsaquo; Chat Box"
		);
		$this->load->view('admin/components-chat-box', $data);
	}

	public function components_empty_state() {
		$data = array(
			'title' => "Components &rsaquo; Empty State"
		);
		$this->load->view('admin/components-empty-state', $data);
	}

	public function components_gallery() {
		$data = array(
			'title' => "Components &rsaquo; Gallery"
		);
		$this->load->view('admin/components-gallery', $data);
	}

	public function components_hero() {
		$data = array(
			'title' => "Components &rsaquo; Hero"
		);
		$this->load->view('admin/components-hero', $data);
	}

	public function components_multiple_upload() {
		$data = array(
			'title' => "Components &rsaquo; Multiple Upload"
		);
		$this->load->view('admin/components-multiple-upload', $data);
	}

	public function components_pricing() {
		$data = array(
			'title' => "Components &rsaquo; Pricing"
		);
		$this->load->view('admin/components-pricing', $data);
	}

	public function components_statistic() {
		$data = array(
			'title' => "Components &rsaquo; Statistic"
		);
		$this->load->view('admin/components-statistic', $data);
	}

	public function components_tab() {
		$data = array(
			'title' => "Components &rsaquo; Tab"
		);
		$this->load->view('admin/components-tab', $data);
	}

	public function components_table() {
		$data = array(
			'title' => "Components &rsaquo; Table"
		);
		$this->load->view('admin/components-table', $data);
	}

	public function components_user() {
		$data = array(
			'title' => "Components &rsaquo; User"
		);
		$this->load->view('admin/components-user', $data);
	}

	public function components_wizard() {
		$data = array(
			'title' => "Components &rsaquo; Wizard"
		);
		$this->load->view('admin/components-wizard', $data);
	}

	public function forms_advanced_form() {
		$data = array(
			'title' => "Forms &rsaquo; Advanced Forms"
		);
		$this->load->view('admin/forms-advanced-form', $data);
	}

	public function forms_editor() {
		$data = array(
			'title' => "Forms &rsaquo; Editor"
		);
		$this->load->view('admin/forms-editor', $data);
	}

	public function forms_validation() {
		$data = array(
			'title' => "Forms &rsaquo; Validation"
		);
		$this->load->view('admin/forms-validation', $data);
	}

	public function gmaps_advanced_route() {
		$data = array(
			'title' => "Google Maps &rsaquo; Advanced Route"
		);
		$this->load->view('admin/gmaps-advanced-route', $data);
	}

	public function gmaps_draggable_marker() {
		$data = array(
			'title' => "Google Maps &rsaquo; Draggable Marker"
		);
		$this->load->view('admin/gmaps-draggable-marker', $data);
	}

	public function gmaps_geocoding() {
		$data = array(
			'title' => "Google Maps &rsaquo; Geocoding"
		);
		$this->load->view('admin/gmaps-geocoding', $data);
	}

	public function gmaps_geolocation() {
		$data = array(
			'title' => "Google Maps &rsaquo; Geolocation"
		);
		$this->load->view('admin/gmaps-geolocation', $data);
	}

	public function gmaps_marker() {
		$data = array(
			'title' => "Google Maps &rsaquo; Marker"
		);
		$this->load->view('admin/gmaps-marker', $data);
	}

	public function gmaps_multiple_marker() {
		$data = array(
			'title' => "Google Maps &rsaquo; Multiple Marker"
		);
		$this->load->view('admin/gmaps-multiple-marker', $data);
	}

	public function gmaps_route() {
		$data = array(
			'title' => "Google Maps &rsaquo; Route"
		);
		$this->load->view('admin/gmaps-route', $data);
	}

	public function gmaps_simple() {
		$data = array(
			'title' => "Google Maps &rsaquo; Simple"
		);
		$this->load->view('admin/gmaps-simple', $data);
	}

	public function modules_calendar() {
		$data = array(
			'title' => "Modules &rsaquo; Calendar"
		);
		$this->load->view('admin/modules-calendar', $data);
	}

	public function modules_chartjs() {
		$data = array(
			'title' => "Modules &rsaquo; ChartJS"
		);
		$this->load->view('admin/modules-chartjs', $data);
	}

	public function modules_datatables() {
		$data = array(
			'title' => "Modules &rsaquo; Datatables"
		);
		$this->load->view('admin/modules-datatables', $data);
	}

	public function modules_flag() {
		$data = array(
			'title' => "Modules &rsaquo; Flag"
		);
		$this->load->view('admin/modules-flag', $data);
	}

	public function modules_font_awesome() {
		$data = array(
			'title' => "Modules &rsaquo; Font Awesome"
		);
		$this->load->view('admin/modules-font-awesome', $data);
	}

	public function modules_ion_icons() {
		$data = array(
			'title' => "Modules &rsaquo; Ion Icons"
		);
		$this->load->view('admin/modules-ion-icons', $data);
	}

	public function modules_owl_carousel() {
		$data = array(
			'title' => "Modules &rsaquo; Owl Carousel"
		);
		$this->load->view('admin/modules-owl-carousel', $data);
	}

	public function modules_sparkline() {
		$data = array(
			'title' => "Modules &rsaquo; Sparkline"
		);
		$this->load->view('admin/modules-sparkline', $data);
	}

	public function modules_sweet_alert() {
		$data = array(
			'title' => "Modules &rsaquo; Sweet Alert"
		);
		$this->load->view('admin/modules-sweet-alert', $data);
	}

	public function modules_toastr() {
		$data = array(
			'title' => "Modules &rsaquo; Toastr"
		);
		$this->load->view('admin/modules-toastr', $data);
	}

	public function modules_vector_map() {
		$data = array(
			'title' => "Modules &rsaquo; Vector Map"
		);
		$this->load->view('admin/modules-vector-map', $data);
	}

	public function modules_weather_icon() {
		$data = array(
			'title' => "Modules &rsaquo; Weather Icon"
		);
		$this->load->view('admin/modules-weather-icon', $data);
	}

	public function auth_forgot_password() {
		$data = array(
			'title' => "Forgot Password"
		);
		$this->load->view('admin/auth-forgot-password', $data);
	}

	public function auth_login() {
		$data = array(
			'title' => "Login"
		);
		$this->load->view('admin/auth-login', $data);
	}

	public function auth_register() {
		$data = array(
			'title' => "Register"
		);
		$this->load->view('admin/auth-register', $data);
	}

	public function auth_reset_password() {
		$data = array(
			'title' => "Reset Password"
		);
		$this->load->view('admin/auth-reset-password', $data);
	}

	public function errors_503() {
		$data = array(
			'title' => "503"
		);
		$this->load->view('admin/errors-503', $data);
	}

	public function errors_403() {
		$data = array(
			'title' => "403"
		);
		$this->load->view('admin/errors-403', $data);
	}

	public function errors_404() {
		$data = array(
			'title' => "404"
		);
		$this->load->view('admin/errors-404', $data);
	}

	public function errors_500() {
		$data = array(
			'title' => "500"
		);
		$this->load->view('admin/errors-500', $data);
	}

	public function features_activities() {
		$data = array(
			'title' => "Activities"
		);
		$this->load->view('admin/features-activities', $data);
	}

	public function features_post_create() {
		$data = array(
			'title' => "Post Create"
		);
		$this->load->view('admin/features-post-create', $data);
	}

	public function features_posts() {
		$data = array(
			'title' => "Posts"
		);
		$this->load->view('admin/features-posts', $data);
	}

	public function features_profile() {
		$data = array(
			'title' => "Profile"
		);
		$this->load->view('admin/features-profile', $data);
	}

	public function features_settings() {
		$data = array(
			'title' => "Settings"
		);
		$this->load->view('admin/features-settings', $data);
	}

	public function features_setting_detail() {
		$data = array(
			'title' => "Setting Detail"
		);
		$this->load->view('admin/features-setting-detail', $data);
	}

	public function features_tickets() {
		$data = array(
			'title' => "Tickets"
		);
		$this->load->view('admin/features-tickets', $data);
	}

	public function utilities_contact() {
		$data = array(
			'title' => "Contact"
		);
		$this->load->view('admin/utilities-contact', $data);
	}

	public function utilities_invoice() {
		$data = array(
			'title' => "Invoice"
		);
		$this->load->view('admin/utilities-invoice', $data);
	}

	public function utilities_subscribe() {
		$data = array(
			'title' => "Subscribe"
		);
		$this->load->view('admin/utilities-subscribe', $data);
	}

	public function credits() {
		$data = array(
			'title' => "Credits"
		);
		$this->load->view('admin/credits', $data);
	}
}
