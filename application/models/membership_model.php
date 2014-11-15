<?php

class Membership_model extends CI_Model {
	
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		
		if ($query->num_rows() == 1) {
			return TRUE;
		}
	}
	
	function create_member() {
		$username = $this->input->post('username');
		
		$new_member_insert_data = array(
									'username' => $this->input->post('username'),
									'password' => md5($this->input->post('password')),
								);
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
	
	function check_if_username_exists($username) {
		$this->db->where('username', $username);
		$result = $this->db->get('users');
		
		if ($result->num_rows() > 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
}

?>