<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_Rt_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class M_Rt extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function get_data($table)
    {
        return $this->db->get($table);
    }
 	// ------------------------------------------------------------------------

  	// ------------------------------------------------------------------------
  	public function insert_data($data,$table)
    {
		$this->db->insert($table,$data);
    }
  	// ------------------------------------------------------------------------

}

/* End of file M_Rt_model.php */
/* Location: ./application/models/M_Rt_model.php */
