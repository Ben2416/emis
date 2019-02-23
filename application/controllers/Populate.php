<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Populate extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){}
	
	public function lga(){
		$data['page_title'] = "Populate LGA";
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules("state", "State", "trim|required");
		$this->form_validation->set_rules("lga_code", "LGA Code", "trim|required");
		$this->form_validation->set_rules("lga_name", "LGA Name", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$this->load->view("header_view", $data);
			$this->load->view("populate_lga_view");
			$this->load->view("footer_view");
		}else{
			if($this->input->post('add_lga_btn')){
				$lga = $this->Election_model->addLga();
				if($lga > 0){
					$this->session->set_flashdata("success_msg", "LGA added sucessfully");
					redirect(base_url('Populate/lga'));
				}else{
					$this->session->set_flashdata("error_msg", "LGA was not added");
					redirect(base_url('Populate/lga'));
				}
			}
		}
	}
	
	public function ward(){
		$data['page_title'] = "Populate Ward";
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules("state", "State", "trim|required");
		$this->form_validation->set_rules("lga", "LGA", "trim|required");
		$this->form_validation->set_rules("ward_code", "LGA Code", "trim|required");
		$this->form_validation->set_rules("ward_name", "LGA Name", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$this->load->view("header_view", $data);
			$this->load->view("populate_ward_view");
			$this->load->view("footer_view");
		}else{
			if($this->input->post('add_ward_btn')){
				$ward = $this->Election_model->addWard();
				if($ward > 0){
					$this->session->set_flashdata("success_msg", "Ward added sucessfully");
					redirect(base_url('Populate/ward'));
				}else{
					$this->session->set_flashdata("error_msg", "Ward was not added");
					redirect(base_url('Populate/ward'));
				}
			}
		}
	}
	
	public function pu(){
		$data['page_title'] = "Populate Ward";
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules("state", "State", "trim|required");
		$this->form_validation->set_rules("lga", "LGA", "trim|required");
		$this->form_validation->set_rules("ward", "Ward", "trim|required");
		$this->form_validation->set_rules("pu_code", "Polling Unit Code", "trim|required");
		$this->form_validation->set_rules("pu_name", "Polling Unit Name", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$this->load->view("header_view", $data);
			$this->load->view("populate_pu_view");
			$this->load->view("footer_view");
		}else{
			if($this->input->post('add_pu_btn')){
				$pu = $this->Election_model->addPu();
				if($pu > 0){
					$this->session->set_flashdata("success_msg", "Polling Unit added sucessfully");
					redirect(base_url('Populate/pu'));
				}else{
					$this->session->set_flashdata("error_msg", "Polling Unit was not added");
					redirect(base_url('Populate/pu'));
				}
			}
		}
	}
	
}