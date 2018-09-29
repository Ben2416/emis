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

    public function approvedLoans(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/approved_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function declinedLoans(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/declined_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function disbursedLoans(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/disbursed_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function partialDisbursedLoans(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/partial_disbursed_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function pendingLoans(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/pending_loan_view');
		$this->load->view('admin/footer_view');
    }

    public function withdrawnLoans(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/loan/withdrawn_loan_view');
		$this->load->view('admin/footer_view');
    }
}
