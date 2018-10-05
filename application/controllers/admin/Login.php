<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
    }

    public function index(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|min_length[2]');
        $this->form_validation->set_rules('password', 'Password','trim|required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('admin/login_view');
        }else{
            if($this->input->post('login_btn')){
				$usr_result = $this->Login_model->login_admin($email,$password);
                $usr_details = $this->Login_model->getAdminDetails($email);
                if($usr_result > 0){
					$this->session->set_userdata($usr_details);
					redirect(base_url()."admin/dashboard", 'refresh');
                }else{
                    $this->session->set_flashdata('error_msg','Invalid email and/or password!');
                    redirect(base_url().'admin/login', 'refresh');
                }
			}else{
                redirect(base_url().'admin/login', 'refresh');
            }
		}

    }

    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('info_msg', 'You have been logged out.');
        redirect(base_url().'admin/login', 'refresh');
    }
}
