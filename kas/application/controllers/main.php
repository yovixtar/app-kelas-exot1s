<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_gantipin');
		$this->load->model('m_timemanager');
	}
	public function index()
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('main', array('login' => $login));
		$this->load->view('footer');
	}
	public function gantipin()
	{
		$this->load->view('gantipin');
	}
	public function aksi_gantipin()
	{
		$pinlama = $this->input->post('pinlama');
		$md5_pinlama=md5($pinlama);
		
		$pinbaru = $this->input->post('pinbaru');
		$md5_pinbaru=md5($pinbaru);
		
		$where = array('pin' => $md5_pinlama);
		$update = $this->m_gantipin->update('login_kas', $md5_pinbaru, $where);
		
		if ($this->db->affected_rows() > 0) {
			redirect(base_url('main/success_gp'));
		}else{
			redirect(base_url('main/failed_gp'));
		}
	}
	public function success_gp()
	{
		$this->load->view('success_gp');
	}
	public function success_data()
	{
		$this->load->view('success_data');
	}
	public function failed_gp()
	{
		$this->load->view('failed_gp');
	}
	
	//Main Page
	public function timemanager()
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('timemanager');
		$this->load->view('footer');
	}
	public function d_timemanager($idx)
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('d_timemanager',array('idx' => $idx));
		$this->load->view('footer');
	}
	public function aksi_timemanager()
	{
		$idx = $this->input->post('idx');
		$mount = $this->input->post('mount');
		$week = $this->input->post('week');
		$day = $this->input->post('day');
		$dataUp = array('mount_mk' => $mount, 'week_mk' => $week, 'day_mk' => $day);
		
		$where = array('id_mk' => $idx);		
		$this->m_timemanager->update('manage_kas', $dataUp, $where);
		
		if ($this->db->affected_rows() > 0) {
			redirect(base_url('main/success_data'));
		}
	}
	public function select_bk()
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('select_bk');
		$this->load->view('footer');
	}
	public function bayarkas($idx)
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('bayarkas', array('idx' => $idx));
		$this->load->view('footer');
	}
	public function aksi_bayarkas()
	{
		$idSiswa = $this->input->post('idSiswa');
		$mountSelect = $this->input->post('mount');
		$payKas = $this->input->post('pay');
		
		$array1 = array('siswa_bk' => $idSiswa, 'bulan_bk' => $mountSelect);
		$this->db->where($array1);
		$this->db->from('bayarkas');
		if ($this->db->count_all_results() == 0) {
			$data2 = $this->db->get_where('manage_kas', array('id_mk' => $mountSelect));
			foreach ($data2->result_array() as $value2) {
				$jumlahDay = $value2['week_mk'] * $value2['day_mk'];
				$kurangdb = $jumlahDay - $payKas;
				$tanggal = date('Y-m-d');
				
				$dataInsert = array(
					'siswa_bk' => $idSiswa,
					'bulan_bk' => $mountSelect,
					'kurang_bk' => $kurangdb,
					'tanggal_bk' => $tanggal
					);
				for ($x=1; $x <= $payKas ; $x++) { 
					$this->db->insert('bayarkas', $dataInsert);
				}
				redirect(base_url('main/success_data'));
			}
		}else{
			$jumlahBaruBayar=$this->db->query("SELECT kurang_bk FROM bayarkas WHERE siswa_bk=".$idSiswa." AND bulan_bk=".$mountSelect." ORDER BY id_bk DESC LIMIT 1");
			foreach ($jumlahBaruBayar->result_array() as $value3) {
				$kurangdb2 = $value3['kurang_bk'] - $payKas;
				
				if ($kurangdb2 < 0) {
					redirect(base_url('main/kelebihanbayar/'.$value3['kurang_bk']));
				}else{
					$tanggal2 = date('Y-m-d');
					$dataInsert2 = array(
						'siswa_bk' => $idSiswa,
						'bulan_bk' => $mountSelect,
						'kurang_bk' => $kurangdb2,
						'tanggal_bk' => $tanggal2
						);
					for ($y=1; $y <= $payKas ; $y++) { 
						$this->db->insert('bayarkas', $dataInsert2);
					}
					redirect(base_url('main/success_data'));
				}
			}
		}
	}
	public function kelebihanbayar($k)
	{
		$this->load->view('kelebihanbayar', array('k' => $k));
	}
	
	public function select_listkas()
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('select_listkas');
		$this->load->view('footer');
	}
	public function listkas()
	{
		$idSiswa = $this->input->post('id_siswa');
		$mountSelect = $this->input->post('mount');
		$this->load->view('listkas', array('idSiswa' => $idSiswa, 'mountSelect' => $mountSelect));
	}
	
	public function select_rekapkasbulan()
	{
		$this->load->view('select_rekapkasbulan');
	}
	public function rekapkas_bulan()
	{
		if ($this->session->userdata('login') != "admin") {$login = 0;}else{$login = 1;}
		$this->load->view('nav', array('login' => $login));
		$this->load->view('rekapkas_bulan');
		$this->load->view('footer');
	}
}
