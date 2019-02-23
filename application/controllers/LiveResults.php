<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveResults extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['page_title'] = 'Live Results';
		$this->load->view('header_view', $data);
		$this->load->view('live_results_view');
		$this->load->view('footer_view');
	}
	
	public function presidential(){
		$data['page_title'] = "Live Results: Presidential";
		//$data['state'] = $this->Election_model->getStateName($this->session->state);
		//$data['districts'] = $this->Election_model->getDistricts($data['state']->state_id);
		//print_r($data);//exit;
		$this->load->view('header_view', $data);
		$this->load->view('live_results_presidential_view');
		$this->load->view('footer_view');
	}
	public function getPresidential(){//echo json_encode($this->input->post());exit;
		$pres = $this->Election_model->getCountryResult($this->input->post("etype"));
		echo json_encode($pres);
	}
	
	public function senatorial(){
		$data['page_title'] = "Live Results: Senatorial";
		$data['state'] = $this->Election_model->getStateName($this->session->state);
		$data['districts'] = $this->Election_model->getDistricts($data['state']->state_id);
		$this->load->view('header_view', $data);
		$this->load->view('live_results_senatorial_view');
		$this->load->view('footer_view');
	}
	public function getSenatorial(){
		$sen = $this->Election_model->getDistrictResult($this->input->post("district"),$this->input->post("etype"));
		echo json_encode($sen);
	}
	
	public function representatives(){
		$data['page_title'] = "Live Results: Representative";
		$data['state'] = $this->Election_model->getStateName($this->session->state);
		$data['constituents'] = $this->Election_model->getConstituents($data['state']->state_id);
		$this->load->view('header_view', $data);
		$this->load->view('live_results_representative_view');
		$this->load->view('footer_view');
	}
	public function getRepresentative(){
		$rep = $this->Election_model->getConstituentResult($this->input->post("constituent"),$this->input->post("etype"));
		echo json_encode($rep);
	}
	
	public function gubernatorial(){
		$data['page_title'] = "Live Results: Gubernatorial";
		$data['state'] = $this->Election_model->getStateName($this->session->state);
		$this->load->view('header_view', $data);
		$this->load->view('live_results_gubernatorial_view');
		$this->load->view('footer_view');
	}
	public function getGubernatorial(){
		$gub = $this->Election_model->getGuberResult($this->input->post("state"),$this->input->post("etype"));
		echo json_encode($gub);
	}
	
	public function statehouse(){
		$data['page_title'] = "Live Results: State House";
		$data['state'] = $this->Election_model->getStateName($this->session->state);
		$data['state_constituents'] = $this->Election_model->getStateConstituencies($data['state']->state_id);
		$this->load->view('header_view', $data);
		$this->load->view('live_results_state_house_view');
		$this->load->view('footer_view');
	}
	public function getStateHouse(){
		$sha = $this->Election_model->getStateConstituencyResult($this->input->post("state_constituent"),$this->input->post("etype"));
		echo json_encode($sha);
	}
	
}