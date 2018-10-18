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
		$data['complete_applications'] = $this->Student_model->getCompleteApplications();
		$data['incomplete_applications'] = $this->Student_model->getIncompleteApplications();
		$data['accepted_applications'] = $this->Student_model->getAcceptedApplications();
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
	
	public function getAllProfilesType($loan_type){
		$all_students = $this->Student_model->getAllProfilesType($loan_type);
		$data['students'] = $all_students;
		$data['complete_applications'] = $this->Student_model->getCompleteApplicationsType($loan_type);
		$data['incomplete_applications'] = $this->Student_model->getIncompleteApplicationsType($loan_type);
		$data['accepted_applications'] = $this->Student_model->getAcceptedApplicationsType($loan_type);
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/all_students_view', $data);
		$this->load->view('admin/footer_view');
	}
	
	public function completeProfilesType($loan_type){
		$all_students = $this->Student_model->getCompleteProfilesType($loan_type);
		$data['students'] = $all_students;
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/list_complete_profiles_view', $data);
		$this->load->view('admin/footer_view');
    }
	
	public function acceptedProfilesType($loan_type){
		$all_students = $this->Student_model->getAcceptedProfilesType($loan_type);
		$data['students'] = $all_students;
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/list_complete_profiles_view', $data);
		$this->load->view('admin/footer_view');
    }
	
    public function incompleteProfilesType($loan_type){
		$all_students = $this->Student_model->getIncompleteProfilesType($loan_type);
		$data['students'] = $all_students;
		$this->load->view('admin/header_view');
		$this->load->view('admin/student/list_incomplete_profiles_view', $data);
		$this->load->view('admin/footer_view');
    }
	
	public function acceptApplication($id){
		if($this->Student_model->acceptApplication($id))
			$this->session->set_flashdata('success_msg', 'Application accepted.');
		else 
			$this->session->set_flashdata('error_msg', 'Application not accepted.');
		redirect(base_url().'admin/Students', 'refresh');
	}
	
	public function rejectApplication($id){
		if($this->Student_model->rejectApplication($id))
			$this->session->set_flashdata('success_msg', 'Application rejected.');
		else 
			$this->session->set_flashdata('error_msg', 'Application not rejected.');
		redirect(base_url().'admin/Students', 'refresh');
	}
	
	
	
}