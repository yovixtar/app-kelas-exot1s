<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fungsion extends CI_Controller {
	public function addimg()
	{
		$this->load->view('nav');
		$this->load->view('addimg');
		$this->load->view('footer');
	}
	public function editimg($idImg){
		$this->load->view('nav');
		$this->load->view('editimg', array('idImg' => $idImg));
		$this->load->view('footer');
	}
	public function addfol(){
		$this->load->view('nav');
		$this->load->view('addfol');
		$this->load->view('footer');
	}
}
