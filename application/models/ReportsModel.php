<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportsModel extends CI_Model {

	public function get_cities(){
		$this->load->database("findme");
		$result = $this->db->query("select * from cities");
		$cities = $result->result_array();
		return $cities;
	}

	public function get_reports(){
		$this->load->database("findme");
		$result = $this->db->query("select * from reports");
		$reports = $result->result_array();
		return $reports;
	}
}
