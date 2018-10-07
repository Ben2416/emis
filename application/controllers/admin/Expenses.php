<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expenses extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Account_model');
	}
	
	public function index(){
		//list bank accounts
		$data['expenses'] = $this->Account_model->getExpenses();
		$this->load->view('admin/header_view');
		$this->load->view('admin/expenses/list_expenses_view', $data);
		$this->load->view('admin/footer_view');
	}
	
	public function create(){
		//create bank account
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('expense_type','Expense Type','trim|required');
        $this->form_validation->set_rules('expense_note','Expense Note','trim|required');
        if($this->form_validation->run() == FALSE){
			$this->load->view('admin/header_view');
			$this->load->view('admin/expenses/create_expenses_view');
			$this->load->view('admin/footer_view');
		}else{
			$invoice_data = array();
			$name = 'invoice_'.time();
			$inv_config['upload_path'] = './assets_admin/invoices/';
			$inv_config['allowed_types'] = 'jpg|png';
			$inv_config['max_size'] = '512';
			$inv_config['file_name'] = $name;
			$this->upload->initialize($inv_config);
			if(!$this->upload->do_upload('expense_invoice')){
				$errors = array('error' => $this->upload->display_errors());
				$erm = "";
				foreach($errors as $er){
					$erm.=$er.'<br>';
				}
				$this->session->set_flashdata('error_msg', $erm);
				$this->load->view('admin/header_view');
				$this->load->view('admin/expenses/create_expenses_view');
				$this->load->view('admin/footer_view');
			}else{
				$invoice_data = $this->upload->data();
				$name = $name.$invoice_data['file_ext'];
				if($this->Account_model->addExpense($name)){
					$this->session->set_flashdata('success_msg', 'Expense has been added');
					redirect(base_url().'admin/expenses');
				}else{
					$this->session->set_flashdata('error_msg', 'Expense was not added');
					redirect(base_url().'admin/expenses');
				}
			}
		}
	}
	
	public function manage(){
		//fund bank account
		$this->load->view('admin/header_view');
		$this->load->view('admin/expenses/manage_expenses_view');
		$this->load->view('admin/footer_view');
	}
}