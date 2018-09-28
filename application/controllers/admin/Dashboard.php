<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Loan_model');
    }

    public function index(){
		$this->load->view('admin/header_view');
		$this->load->view('admin/dashboard_view');
		$this->load->view('admin/footer_view');
    }
}