<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_User
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author   	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 */

class M_User extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function get_data($id = NULL)
    {
		$this->db->from('user');
		if ($id != NULL) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
	}
	
	public function check_img($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query;
	}
 	
}

/* End of file M_Rt_model.php */
/* Location: ./application/models/M_Rt_model.php */
