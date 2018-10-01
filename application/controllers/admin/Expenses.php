<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expenses extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		//list bank accounts
		$this->load->view('admin/header_view');
		$this->load->view('admin/expenses/list_expenses_view');
		$this->load->view('admin/footer_view');
	}
	
	public function create(){
		//create bank account
		$this->load->view('admin/header_view');
		$this->load->view('admin/expenses/create_expenses_view');
		$this->load->view('admin/footer_view');
	}
	
	public function manage(){
		//fund bank account
		$this->load->view('admin/header_view');
		$this->load->view('admin/expenses/manage_expenses_view');
		$this->load->view('admin/footer_view');
	}
}