<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accounts extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		//list bank accounts
		$this->load->view('admin/header_view');
		$this->load->view('admin/account/list_bank_account_view');
		$this->load->view('admin/footer_view');
	}
	
	public function create(){
		//create bank account
		$this->load->view('admin/header_view');
		$this->load->view('admin/account/create_bank_account_view');
		$this->load->view('admin/footer_view');
	}
	
	public function fund(){
		//fund bank account
		$this->load->view('admin/header_view');
		$this->load->view('admin/account/fund_bank_account_view');
		$this->load->view('admin/footer_view');
	}
}