<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_Auth
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 *
 */

class M_Auth extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function check_admin($email, $password)
	{
		$this->db->select('*');
		$this->db->from('auth');
		$this->db->where('email', $email);
		$this->db->where('password', sha1($password));
		$query = $this->db->get();

		return $query;
	}
	// ------------------------------------------------------------------------
	
	// ------------------------------------------------------------------------
	public function check_rt($email, $password)
	{
		$this->db->select('*');
		$this->db->from('rt');
		$this->db->where('email', $email);
		$this->db->where('password', sha1($password));
		$query = $this->db->get();

		return $query;
  	}
	// ------------------------------------------------------------------------
}

/* End of file M_Auth_model.php */
/* Location: ./application/models/M_Auth_model.php */
