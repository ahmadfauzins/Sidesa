<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_Rekomendasi
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 *
 */

class  M_Rekomendasi extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function insert_data($data,$table)
    {
		$this->db->insert($table,$data);
    }
	// ------------------------------------------------------------------------
	
	public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

/* End of file M_Auth_model.php */
/* Location: ./application/models/M_Auth_model.php */
