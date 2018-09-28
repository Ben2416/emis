<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct(){
        parent::__construct();
		$this->load->model('Loan_model');
    }

    public function index(){
		$data['page_title'] = 'Dashboard';
		$this->session->set_flashdata('success_msg', 'Welcome!');
        $data['loans'] = $this->getLoans();
		$this->load->view('client/header_view', $data);
		$this->load->view('client/dashboard_view');
    }
	
	public function getLoans(){
		$loans = $this->Loan_model->getLoans($this->session->user_id);
		return $loans;
	}
	
	public function profile(){
		$data['page_title'] = 'Profile';
		$data['profile'] = $this->Loan_model->getProfile($this->session->user_id)[0];
		$this->load->view('client/header_view', $data);
		$this->load->view('client/loan_profile_view');
	}
	
}