<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "emailsms.php";
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $data['page_title'] = ucfirst('register');

        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('firstname','First Name','trim|required');
        $this->form_validation->set_rules('lastname','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[11]|max_length[11]|is_unique[users.phone]',array('is_unique'=>'This %s already exists.'));
        $this->form_validation->set_rules('sex', 'Sex', 'required');
        $this->form_validation->set_rules('address','Contact Address','trim|required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('client/header',$data);
            $this->load->view('client/register_view');
            $this->load->view('client/footer');
        }else{
            @$evop = $this->input->post("firstname")
                .$this->input->post("lastname")
                .$this->input->post('phone')
                .'.jpg';

            $upload_path = './assets/passports/';
            $encoded_data = $this->input->post('passport');
            $binary_data = base64_decode($encoded_data);
            $passport = file_put_contents($upload_path.$evop, $binary_data);

            if(!$passport){
                $this->session->set_flashdata('error_msg', "Could not save image!  Check file permissions.");
                redirect(base_url().'client/register');
            }else{
                $pass = $this->createPass(8);
                $this->Login_model->register($evop,$pass);
                //$es = new EmailSms($this->input->post('firstname'),$this->input->post('lastname'),$this->input->post('email'),$pass,$this->input->post('phone'));
                //$es->emailsms();
                $this->session->set_flashdata('rsuccess_msg', 'Your account has been created successfully. \nKindly login with\nEmail:'.$this->input->post("email").' \nTemporary Password:'.$pass);
                redirect(base_url().'client/login');
            }
        }
    }

    function createPass( $length = 6 ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
}
