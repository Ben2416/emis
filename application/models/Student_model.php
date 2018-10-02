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
		$this->db->join('loan_details', 'loan_details.user_id=users.user_id');
		$this->db->where('users.user_id', $id);
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
	function getStudentLoans($id){
		$this->db->where('user_id',$id);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	
	function getStudentLoansTotal($id){
		$this->db->select('sum(loan_amount) as sum_total');
		$this->db->where('user_id', $id);
		$query = $this->db->get('loan_applications');
		return $query->row();
	}
	
	function getStudentApprovedLoansTotal($id){
		$this->db->select('sum(loan_amount) as sum_total');
		$this->db->where('user_id', $id);
		$this->db->where('status', 3);//approved loans = 3
		$query = $this->db->get('loan_applications');
		return $query->row();
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