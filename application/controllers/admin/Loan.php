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
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/all_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function approvedLoan(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/approved_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function declinedLoan(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/declined_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function disbursedLoan(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/disbursed_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function partialDisbursedLoan(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/partial_disbursed_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function pendingLoan(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/pending_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function withdrawnLoan(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/withdrawnLoan_loan_view');
		$this->load->view('admin/footer_view');
    }
}
