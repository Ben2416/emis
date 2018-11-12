<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoanApplication extends CI_Controller
{
    public function __construct(){
        parent::__construct();
		$this->load->library('upload');
		$this->load->model('Loan_model');
    }

    public function index(){

		$data['page_title'] = 'Loan Application';
		$data['current_batch'] = $this->Loan_model->getCurrentBatch()->bid;

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		$this->form_validation->set_rules('programme_start_date','Start Date','trim|required');
        $this->form_validation->set_rules('programme_end_date','End Date','trim|required');
        $this->form_validation->set_rules('academic_year','Year','trim|required');
        $this->form_validation->set_rules('semester_level','Level','trim|required');
        $this->form_validation->set_rules('loan_type','Loan Type','trim|required');
        $this->form_validation->set_rules('loan_amount','Amount','trim|required');

		$this->form_validation->set_rules('guarantor_title','Title','trim|required');
		$this->form_validation->set_rules('guarantor_fname','First Name','trim|required');
		$this->form_validation->set_rules('guarantor_lname','Last Name','trim|required');
		$this->form_validation->set_rules('guarantor_phone','Phone','trim|required');
		$this->form_validation->set_rules('guarantor_altphone','Alternate Phone','trim|required');
		$this->form_validation->set_rules('guarantor_address','Address','trim|required');
		$this->form_validation->set_rules('guarantor_state','State','trim|required');
		$this->form_validation->set_rules('guarantor_occupation','Occupation','trim|required');
		$this->form_validation->set_rules('guarantor_emp','Employer','trim|required');
		$this->form_validation->set_rules('guarantor_position','Position','trim|required');
		$this->form_validation->set_rules('guarantor_relatn','Relation','trim|required');

		if($this->form_validation->run() == FALSE){
			//$this->load->view('client/header_view', $data);
			$this->load->view('client/loan_application_view',$data);
		}else{
			if($this->Loan_model->addLoan() > 0){
				$this->session->set_userdata('status', 4);
				$this->session->set_flashdata('success_msg', 'Your loan application is successful.');
				redirect(base_url().'client/dashboard');
			}else{
				$this->session->set_flashdata('error_msg', "Your loan application wasn't successful.");
				$this->load->view('client/loan_application_view');
			}
		}
    }
}
