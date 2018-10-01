<?php
class Student_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getStudents(){
		$this->db->join('users', 'users.user_id=loan_details.user_id');
		$query = $this->db->get('loan_details');
		return $query->result_array();
	}
	
	function getStudentProfile($id){
		
	}
	
	function getCompleteProfiles(){
		$this->db->join('users', 'users.user_id=loan_details.user_id');
		$this->db->where('loan_details.status',1);
		$query = $this->db->get('loan_details');
		return $query->result_array();
	}
	function getIncompleteProfiles(){
		$this->db->join('users', 'users.user_id=loan_details.user_id');
		$this->db->where('loan_details.status',0);
		$query = $this->db->get('loan_details');
		return $query->result_array();
	}
}