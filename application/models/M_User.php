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
 	
}

/* End of file M_Rt_model.php */
/* Location: ./application/models/M_Rt_model.php */
