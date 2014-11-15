<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		if($this->session->userdata('username')) {
			$this->load->view('includes/header');
			$this->load->view('view_home');
			$this->load->view('includes/footer');
		} else {
			$data['title'] = 'Product Information Exchange';
			$data['header'] = 'Price Monitoring Board';
			$this->load->view('view_index', $data);
			$this->load->view('includes/footer');
		}
	}
	
	function validate_credentials()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$this->load->model('model_permissions');
			$this->load->model('model_users');
			
			$sess = array(
						'username' => $this->input->post('username'),
						'permission' => 'asdqwe',
						'is_logged_in' => true,
					);
			$this->session->set_userdata($sess);
			
			$id = $this->model_users->getId($this->input->post('username'));
			
			$row = $this->model_permissions->getPermissions($id);
			
			$data['manage_crops'] = $row['manage_crops'];
			$data['manage_announcements'] = $row['manage_announcements'];
			$data['manage_report'] = $row['manage_report'];
			
			$this->load->view('includes/header', $data);
			$this->load->view('view_home');
			$this->load->view('includes/footer');
		}
	}

	function check_database($password) {
		$username = $this->input->post('username');
		
		$this->load->model('model_users');
		
		$query = $this->model_users->validate($username, $password);
		
		if($query) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	function logout() {
		$this->session->sess_destroy();
		
		$data['title'] = 'Product Information Exchange';
		$data['header'] = 'Price Monitoring Board';
		$this->load->view('view_index', $data);
		$this->load->view('includes/footer');
	}
}