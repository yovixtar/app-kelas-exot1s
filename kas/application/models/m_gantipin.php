<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_gantipin extends CI_Model {
	public function update($table, $data, $where)
	{
		$dataUp = array('pin' => $data);
		return $this->db->update($table, $dataUp, $where);
	}
	
}
