<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function aksi_login()
	{
		$pin = $this->input->post('pin');
		$where = array('pin' => md5($pin));
		$cek = $this->m_login->cek_login('login_kas' , $where)->num_rows();
		
		if ($cek > 0) {
			$data_session = array('login' => 'admin');
			
			$this->session->set_userdata($data_session);
			
			redirect(base_url('main'));
		}else{
			redirect(base_url('login/salahpin'));
		}
	}
	public function salahpin()
	{
		$this->load->view('salahpin');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
