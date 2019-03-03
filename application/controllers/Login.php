<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['page_title'] = "Login";
		
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('login_view', $data);
		}else{
			$user = $this->Election_model->login($this->input->post("username"), $this->input->post("password"));
			$details = $this->Election_model->getUserDetails($this->input->post("username"));
			if($details > 0){
				$this->session->set_userdata($details);
				$this->session->set_flashdata("success_msg", "Welcome!");
				redirect(base_url("LiveResults"));
			}else{
				$this->session->set_flashdata("error_msg", "Login was unsuccessful!");
				redirect(base_url('Login'));
			}
		}
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
        $this->session->set_flashdata('info_msg', 'You have been logged out.');
        redirect(base_url().'Login', 'refresh');
	}
	
}