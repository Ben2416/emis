<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loans extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
    }

    public function index(){
		$data['total_loans'] = count($this->Loan_model->getAllLoans());
		$data['approved_loans'] = count($this->Loan_model->getApprovedLoans());
		$data['disbursed_loans'] = count($this->Loan_model->getDisbursedLoans());
		$data['loans'] = $this->Loan_model->getAllLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/all_loan_view', $data);
		$this->load->view('admin/footer_view');
    }

    public function approvedLoans(){
		$data['total_loans'] = count($this->Loan_model->getAllLoans());
		$data['approved_loans'] = count($this->Loan_model->getApprovedLoans());
		$data['disbursed_loans'] = count($this->Loan_model->getDisbursedLoans());
		$data['loans'] = $this->Loan_model->getApprovedLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/approved_loan_view', $data);
		$this->load->view('admin/footer_view');
    }

    public function declinedLoans(){
		$data['total_loans'] = count($this->Loan_model->getAllLoans());
		$data['approved_loans'] = count($this->Loan_model->getApprovedLoans());
		$data['disbursed_loans'] = count($this->Loan_model->getDisbursedLoans());
		$data['loans'] = $this->Loan_model->getDeclinedLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/declined_loan_view', $data);
		$this->load->view('admin/footer_view');
    }

    public function disbursedLoans(){
		$data['loans'] = $this->Loan_model->getDisbursedLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/disbursed_loan_view',$data);
		$this->load->view('admin/footer_view');
    }

    public function partialDisbursedLoans(){
		$data['loans'] = $this->Loan_model->getPartialDisbursedLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/partial_disbursed_loan_view', $data);
		$this->load->view('admin/footer_view');
    }

    public function pendingLoans(){
		$data['total_loans'] = count($this->Loan_model->getAllLoans());
		$data['approved_loans'] = count($this->Loan_model->getApprovedLoans());
		$data['disbursed_loans'] = count($this->Loan_model->getDisbursedLoans());
		$data['loans'] = $this->Loan_model->getPendingLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/pending_loan_view', $data);
		$this->load->view('admin/footer_view');
    }

    public function withdrawnLoans(){
		$data['loans'] = $this->Loan_model->getWithdrawnLoans();
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/withdrawn_loan_view', $data);
		$this->load->view('admin/footer_view');
    }
}
