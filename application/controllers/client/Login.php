<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('Loan_model');
    }

    public function index(){

        $data['page_title'] = ucfirst('login');
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('username', 'Username','trim|required|min_length[2]');
        $this->form_validation->set_rules('password', 'Password','trim|required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('client/header',$data);
            $this->load->view('client/login_view');
            $this->load->view('client/footer');
        }else{
            if($this->input->post('login_btn')){
                $usr_result = $this->Login_model->login($username,$password);
                $usr_details = $this->Login_model->getUserDetails($username);
                if($usr_result > 0){
					$this->session->set_userdata($usr_details);
					$this->session->set_userdata('current_batch', $this->Loan_model->getCurrentBatch()->bid);
					if($this->session->status == 0)
					   redirect(base_url()."client/login/changePassword");
						//redirect(base_url()."client/login/loanCategory");
					elseif($this->session->status == 1)
						redirect(base_url()."client/PersonalDetails");
					elseif($this->session->status == 2)
						redirect(base_url()."client/LoanApplication");
					else
						redirect(base_url()."client/Dashboard");
                }else{
                    $this->session->set_flashdata('error_msg','Invalid username and/or password!');
                    redirect(base_url().'client/login');
                }
            }else{
                redirect(base_url().'client/login');
            }
        }
    }
	
	function loanCategory(){
		$data['page_title'] = ucfirst('Loan Category');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('loancat', 'Loan Category','trim|required');
        if($this->form_validation->run()==FALSE){
			$this->load->view('client/header',$data);
            $this->load->view('client/loan_category_view');
            $this->load->view('client/footer');
		}else{
			if($this->input->post('loan_category_btn')){
				$result = $this->Login_model->set_loan_category();
				if($result == true){
					$this->session->set_userdata('loan_type', $this->input->post('loancat'));
					$this->session->set_flashdata('rsuccess_msg', 'Loan category has been set.');
                    redirect(base_url().'client/PersonalDetails');
				}else{
					$this->session->set_flashdata('error_msg', 'Loan category not set.');
                    redirect(base_url().'client/login/loanCategory');
				}
			}
		}
	}
	
	function changePassword(){
		$data['page_title'] = ucfirst('Change Password');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('oldpass', 'Old Password','trim|required|min_length[6]');
        $this->form_validation->set_rules('newpass', 'New Password','trim|required|min_length[6]');
        $this->form_validation->set_rules('conpass', 'Confirm Password','trim|required|min_length[6]|matches[newpass]');
        if($this->form_validation->run()==FALSE){
			$this->load->view('client/header',$data);
            $this->load->view('client/change_password_view');
            $this->load->view('client/footer');
		}else{
			if($this->input->post('change_password_btn')){
				$result = $this->Login_model->change_password();
				if($result == true){
					$this->session->set_flashdata('rsuccess_msg', 'New password has been set.');
                    redirect(base_url().'client/login');
				}else{
					$this->session->set_flashdata('error_msg', 'Password not changed.');
                    redirect(base_url().'client/login/changePassword');
				}
			}
		}
	}

    function forgot_password(){
        $data['page_title'] = ucfirst('Forgot Password');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('email', 'Email','trim|valid_email|required|min_length[2]');
        $email = $this->input->post('email');

        if($this->form_validation->run()==FALSE){
            $this->load->view('client/header',$data);
            $this->load->view('client/forgot_password_view');
            $this->load->view('client/footer');
        }else{
            if($this->input->post('forgot_btn')){
                $result = $this->Login_model->forgot_password($email, $this->createPass(8));
                if($result == true){
                    $this->session->set_flashdata('rsuccess_msg', 'New password sent to email.');
                    redirect(base_url().'client/login');
                }else{
                    $this->session->set_flashdata('error_msg', 'User account not found.');
                    redirect(base_url().'client/login/forgot_password');
                }
            }else{
                redirect(base_url().'client/login/forgot_password');
            }
        }
    }

    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('info_msg', 'You have been logged out.');
        redirect(base_url().'client/login', 'refresh');
    }

    function createPass( $length = 6 ) {
        //$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
}
