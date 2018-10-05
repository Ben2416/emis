<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
		$this->load->model('Account_model');
    }

    public function index(){
		$data['total_borrowers'] = $this->Loan_model->getTotalBorrowers();
		$data['loans_released'] = $this->Account_model->getLoansReleased()->sum_total;//'N21,000,000';//$this->Loan_model->getLoansReleased();
		$data['available_funds'] = $this->Account_model->getTotalFunds()->sum_total - $data['loans_released'];//'N70,000,000';//$this->Loan_model->getAmountPaid();
		//$data['returning_users'] = $this->Loan_model->getReturningUsers();
		
		//pending 1, declined 2, approved 3, disbursed 4
		
		$data['pending_loans'] = $this->Loan_model->getPendingLoans();
		$data['approved_loans'] = $this->Loan_model->getApprovedLoans();
		$data['disbursed_loans'] = $this->Loan_model->getDisbursedLoans();
		$data['loans_declined'] = $this->Loan_model->getDeclinedLoans();
		//print_r($data['totalBorrowers']);exit;
		$this->load->view('admin/header_view');
		$this->load->view('admin/dashboard_view', $data);
		$this->load->view('admin/footer_view');
    }
}