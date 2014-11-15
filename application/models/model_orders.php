<?php
	class Model_orders extends CI_Model {
			
		function __construct() {
			parent::__construct();
		}
		
		function insert_order($order) {
			$sql = $this->db->insert_string('orders', $order);
			$query = $this->db->query($sql);
			
			if($query === TRUE) {
				return TRUE;
			} else {
				$last_query = $this->db->last_query();
				return $last_query;
			}
		}
	}