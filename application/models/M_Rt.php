<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_RT
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 *
 */

class M_Rt extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function get_data($id = NULL)
    {
		$this->db->from('rt');
		if ($id != NULL) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
    }
 	// ------------------------------------------------------------------------

  	// ------------------------------------------------------------------------
  	public function insert_data($data,$table)
    {
		$this->db->insert($table,$data);
    }
	// ------------------------------------------------------------------------
	  
	// ------------------------------------------------------------------------
	public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
	}
	// ------------------------------------------------------------------------
	  
	public function check_img($id)
	{
		$this->db->select('*');
		$this->db->from('rt');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query;
	}
	  
	public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}

/* End of file M_Rt_model.php */
/* Location: ./application/models/M_Rt_model.php */
