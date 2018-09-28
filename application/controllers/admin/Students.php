<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
    }

    public function index(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/all_students_view');
		$this->load->view('admin/footer_view');
    }
    
    public function studentProfile(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/student_view');
		$this->load->view('admin/footer_view');
    }
	
    public function completeProfiles(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/list_complete_profiles_view');
		$this->load->view('admin/footer_view');
    }
	
    public function incompleteProfiles(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/list_incomplete_profiles_view');
		$this->load->view('admin/footer_view');
    }
}