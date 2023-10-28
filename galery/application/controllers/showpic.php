<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowPic extends CI_Controller {
	public function img($idImg)
	{
		$this->load->view('nav');
		$this->load->view('showpic',array('idpic' => $idImg));
	}
}
