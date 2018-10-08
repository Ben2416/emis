<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accounts extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Account_model');
	}
	
	public function index(){
		//list bank accounts
		$data['page_title'] = 'Add New Bank Account';
		$data['accounts'] = $this->Account_model->getAccounts();
		$this->load->view('admin/header_view');
		$this->load->view('admin/Accounts/list_bank_account_view', $data);
		$this->load->view('admin/footer_view');
	}
	
	public function create(){
		//create bank account
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('account_name','Account Name','trim|required');
        $this->form_validation->set_rules('account_number','Account Number','trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('bank_name','Bank Name','trim|required');
        $this->form_validation->set_rules('account_officer','Account Officer','trim|required');
        $this->form_validation->set_rules('account_phone_number','Accountant Phone Number','trim|required');
        $this->form_validation->set_rules('account_notes','Accountant Notes','trim|required');
        
		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/header_view');
			$this->load->view('admin/Accounts/create_bank_account_view');
			$this->load->view('admin/footer_view');
		}else{
			if($this->input->post('create_bank_account_btn')){
				if($this->Account_model->addAccount()){
					$this->session->set_flashdata('rsuccess_msg', 'Account successful created.');
					redirect(base_url().'admin/Accounts');
				}else{
					$this->session->set_flashdata('error_msg', 'Account was not created.');
					redirect(base_url().'admin/Accounts/create');
				}
			}	
		}
		
	}
	
	public function fund(){
		//fund bank account
		$data['accounts'] = $this->Account_model->getAccounts();
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('account','Account Name','trim|required');
        $this->form_validation->set_rules('amount','Amount','trim|required|numeric');
        $this->form_validation->set_rules('fund_source','Fund Source','trim|required');
        
		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/header_view');
			$this->load->view('admin/Accounts/fund_bank_account_view', $data);
			$this->load->view('admin/footer_view');
		}else{
			if($this->input->post('fund_account_btn')){
				$fund_approval_data = array();
				
				$name = 'fund_approval_'.time();
				$fa_config['upload_path'] = './assets_admin/approvals/';
				$fa_config['allowed_types'] = 'jpg|png';
				$fa_config['max_size'] = '512';
				$fa_config['file_name'] = $name;
				$this->upload->initialize($fa_config);
				if(!$this->upload->do_upload('fund_approval')){
					$errors = array('error' => $this->upload->display_errors());
					$erm = "";
					foreach($errors as $er){
						$erm.=$er.'<br>';
					}
					$this->session->set_flashdata('error_msg', $erm);
					$this->load->view('admin/header_view');
					$this->load->view('admin/Accounts/fund_bank_account_view', $data);
					$this->load->view('admin/footer_view');
				}else{
					$fund_approval_data = $this->upload->data();
					$name = $name.$fund_approval_data['file_ext'];
					if($this->Account_model->fundAccount($name)){
						$this->session->set_flashdata('success_msg', 'Account has been successfully funded.');
						redirect(base_url().'admin/Accounts');
					}else{
						$this->session->set_flashdata('error_msg', 'Account was not funded.');
						redirect(base_url().'admin/Accounts/fund');
					}
				}	
			}
		}
	}
}