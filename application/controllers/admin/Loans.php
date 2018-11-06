<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loans extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
		$this->load->model('Student_model');
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

    public function loanProfile($id){
      $data['profile'] = $this->Loan_model->getLoanProfile($id)[0];
      $data['loans'] = $this->Student_model->getStudentLoans($id);
	  $data['current_loan'] = $this->Loan_model->getCurrentLoan($id)[0];
	  
  		//print_r($data['current_loan']);//exit;
  		$data['loans_applied'] = count($data['loans']);
  		$data['loans_total'] = $this->Student_model->getStudentLoansTotal($id);
  		$this->load->view('admin/header_view');
  		$this->load->view('admin/loan/loan_student_view', $data);
  		$this->load->view('admin/footer_view');
    }
	
	public function setLoanStatus($userid, $loanid, $status){
		$sli = $this->Loan_model->setLoanStatus($loanid, $status);
		//echo $sli.'df'; exit;
		if($sli == true){
			$this->session->set_flashdata('success_msg','Loan status has been set successfully.');
			redirect(base_url().'admin/loans/loanProfile/'.$userid, 'refresh');
		}else{
			$this->session->set_flashdata('error_msg','Loan status not set.');
			redirect(base_url().'admin/loans/loanProfile/'.$userid, 'refresh');
		}
	}

}
