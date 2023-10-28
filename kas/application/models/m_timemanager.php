<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_timemanager extends CI_Model {
	public function update($table, $data, $where)
	{
		return $this->db->update($table, $data, $where);
	}
	
}
