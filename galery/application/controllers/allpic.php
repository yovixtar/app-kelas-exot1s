<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AllPic extends CI_Controller {
	public function all()
	{
		$this->load->view('nav');
		$this->load->view('allpic');
		$this->load->view('footer');
	}
	public function folderpic($namaFolder)
	{
		$this->load->view('nav');
		$this->load->view('folderpic',array('whereFolder' => $namaFolder));
		$this->load->view('footer');
	}
}
