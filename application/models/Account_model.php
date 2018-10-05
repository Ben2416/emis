<?php
class Account_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getAccounts(){
		$query = $this->db->get('accounts');
		return $query->result_array();
	}
	
	/*function getAccountProfile($id){
		
		return $query->result_array();
	}*/
	
	function addAccount(){
		$data = array(
			'account_name' => $this->input->post('account_name'),
			'account_number' => $this->input->post('account_number'),
			'bank_name' => $this->input->post('bank_name'),
			'account_officer' => $this->input->post('account_officer'),
			'account_phone_number' => $this->input->post('account_phone_number'),
			'account_notes' => $this->input->post('account_notes'),
			'addedby' => $this->session->user_id
		);
		$this->db->insert('accounts', $data);
		if($this->db->affected_rows()>0)
			return true;
		else 
			return false;
	}
	
	function fundAccount($appr){
		$data = array(
			'account' => $this->input->post('account'),
			'amount' => $this->input->post('amount'),
			'fund_source' => $this->input->post('fund_source'),
			'fund_approval' => $appr,
			'addedby' => $this->session->user_id
		);
		$this->db->insert('funds', $data);
		if($this->db->affected_rows()>0)
			return true;
		else 
			return false;
	}
	
	function getTotalFunds(){
		$this->db->select('sum(amount) as sum_total');
		$query = $this->db->get('funds');
		return $query->row();
	}
	
	function getLoansReleased(){
		$this->db->select('sum(loan_amount) as sum_total');
		//$this->db->where('loan_applications.status',4);
		$query = $this->db->get('loan_applications');
		return $query->row();
	}
	
}