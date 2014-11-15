<?php
	class Model_users extends CI_Model {
			
		function __construct() {
			parent::__construct();
		}
		
		function getId($username) {
			$this->db->where('username', $username);
			$query = $this->db->query('SELECT id FROM users');
			
			$row = $query->row();
			return $row->id;
		}
		
		function validate($username, $password) {
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query = $this->db->get('users');
			
			if ($query->num_rows() == 1) {
				return TRUE;
			}
		}
	}
