<?php
	class Model_permissions extends CI_Model {
			
		function __construct() {
			parent::__construct();
		}
		
		function getPermissions($id) {
			$this->db->where('user_id', $id);
			$query = $this->db->query('SELECT * FROM permissions');
			
			foreach ($query->result_array() as $row) {
				return $row;
			}
		}
	}