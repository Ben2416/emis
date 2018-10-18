<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
		$this->load->model('Account_model');
		$this->load->model('Student_model');
    }

    public function index(){
		$data['total_borrowers'] = $this->Loan_model->getTotalBorrowers();
		$data['accepted_applicants'] = $this->Student_model->getAcceptedApplicants();
		$data['rejected_applicants'] = $this->Student_model->getRejectedApplicants();
		
		
		$data['loans_released'] = $this->Account_model->getLoansReleased()->sum_total;//'N21,000,000';//$this->Loan_model->getLoansReleased();
		$data['available_funds'] = $this->Account_model->getTotalFunds()->sum_total - $data['loans_released'];//'N70,000,000';//$this->Loan_model->getAmountPaid();
		//$data['returning_users'] = $this->Loan_model->getReturningUsers();

	   //submitted 0, Accepted 1, Rejected 2, Approved 3, Declined 4, partial 5, disbursed 6, withdrawn 7

		$data['pending_loans'] = count($this->Loan_model->getPendingLoans());
		$data['approved_loans'] = count($this->Loan_model->getApprovedLoans());
		$data['disbursed_loans'] = count($this->Loan_model->getDisbursedLoans());
		$data['loans_declined'] = count($this->Loan_model->getDeclinedLoans());
		//print_r($data['totalBorrowers']);exit;
		$this->load->view('admin/header_view');
		$this->load->view('admin/dashboard_view', $data);
		$this->load->view('admin/footer_view');
    }
}
