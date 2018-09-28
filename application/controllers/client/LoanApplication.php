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
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		$this->form_validation->set_rules('programme_start_date','Start Date','trim|required');
        $this->form_validation->set_rules('programme_end_date','End Date','trim|required');
        $this->form_validation->set_rules('university_level','Level','trim|required');
        $this->form_validation->set_rules('semester_level','Level','trim|required');
        $this->form_validation->set_rules('loan_type','Loan Type','trim|required');
        $this->form_validation->set_rules('loan_amount','Amount','trim|required');
        
		if($this->form_validation->run() == FALSE){
			$this->load->view('client/header_view', $data);
			$this->load->view('client/loan_application_view');
		}else{
			if($this->Loan_model->addLoan($name) > 0){
				$this->session->set_flashdata('rsuccess_msg', 'Your loan application is successfully.');
				redirect(base_url().'client/dashboard');
			}else{
				$this->session->set_flashdata('error_msg', "Your loan application wasn't successful.");
				$this->load->view('client/loan_application_view');
			}
		}
    }
}