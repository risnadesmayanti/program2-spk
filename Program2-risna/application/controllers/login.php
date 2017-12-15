<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
		//$this->load->library('input');
		$this->load->helper('url');
	}

	public function index()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		if ($user == 'admin' && $pass == '123') {
			$this->session->userdata('username', $user);
			//$this->session->userdata('password', $pass);

			redirect(site_url('index.php/welcome'));
		}elseif ($user == 'user' && $pass == '321') {
			# code...
			$this->session->userdata('username', $user);
			redirect(site_url(''));
		}
		else{
			$this->load->view('login');
		}		

	}

	public function admin_page()
	{
		$this->load->view('admin_page');
	}

	public function logout()
	{
		$this->session->unset_userdata(array('username' => '') );
		redirect(site_url(index.php/login));
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */