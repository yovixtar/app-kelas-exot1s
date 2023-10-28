<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListFol extends CI_Controller {
	public function index()
	{
		$this->load->view('nav');
		$this->load->view('listfol');
		$this->load->view('footer');
	}
}
