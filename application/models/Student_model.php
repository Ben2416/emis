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
		$this->db->join('users', 'users.user_id=loan_applications.user_id');
		$this->db->where('loan_applications.status',1);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	function getIncompleteProfiles(){
		$this->db->join('users', 'users.user_id=loan_applications.user_id');
		$this->db->where('loan_applications.status',0);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	
	function getAllProfilesType($loan_type){
		$this->db->join('users', 'users.user_id=loan_applications.user_id');
		$where = array(
			'loan_applications.loan_type' => $loan_type,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	function getCompleteProfilesType($loan_type){
		$this->db->join('users', 'users.user_id=loan_applications.user_id');
		//$this->db->where('loan_details.status',1);
		$where = array(
			'loan_applications.status' => 1,
			'loan_applications.loan_type' => $loan_type,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	function getIncompleteProfilesType($loan_type){
		$this->db->join('users', 'users.user_id=loan_applications.user_id');
		//$this->db->where('loan_details.status',0);
		$where = array(
			'loan_applications.status' => 0,
			'loan_applications.loan_type' => $loan_type,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	
	function getCompleteApplications(){
		$where = array(
			'status' => 1,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
	function getCompleteApplicationsType($loan_type){
		$where = array(
			'status' => 1,
			'loan_type' => $loan_type,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
	function getIncompleteApplications(){
		$where = array(
			'status' => 0,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
	function getIncompleteApplicationsType($loan_type){
		$where = array(
			'status' => 0,
			'loan_type' => $loan_type,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
	function getAcceptedApplications(){
		$where = array(
			'status' => 3,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
	function getAcceptedApplicationsType($loan_type){
		$where = array(
			'status' => 3,
			'loan_type' => $loan_type,
			'batch' => $this->session->current_batch
		);
		$this->db->where($where);
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
}