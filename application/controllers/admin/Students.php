<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
		$this->load->model('Student_model');
    }

    public function index(){
		$all_students = $this->Student_model->getStudents();
		$data['students'] = $all_students;
		//print_r($data['students']);//exit;
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/all_students_view', $data);
		$this->load->view('admin/footer_view');
    }
    
    public function studentProfile($id){
		$data['profile'] = $this->Student_model->getStudentProfile($id)[0];
		$data['loans'] = $this->Student_model->getStudentLoans($id);
		//print_r($data['loans']);//exit;
		$data['loans_applied'] = count($data['loans']);
		$data['loans_total'] = $this->Student_model->getStudentLoansTotal($id);
		//print_r($data['loans']['loans_total']);
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/student_view', $data);
		$this->load->view('admin/footer_view');
    }
	
    public function completeProfiles(){
		$all_students = $this->Student_model->getCompleteProfiles();
		$data['students'] = $all_students;
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/list_complete_profiles_view', $data);
		$this->load->view('admin/footer_view');
    }
	
    public function incompleteProfiles(){
		$all_students = $this->Student_model->getIncompleteProfiles();
		$data['students'] = $all_students;
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/list_incomplete_profiles_view', $data);
		$this->load->view('admin/footer_view');
    }
}