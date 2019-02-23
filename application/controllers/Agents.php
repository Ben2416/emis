<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		
		$data['page_title'] = 'View Agents';
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules('state','State','trim|required');
		//$this->form_validation->set_rules('lga','LGA','trim|required');
		//$this->form_validation->set_rules('ward','Ward','trim|required');
		//$this->form_validation->set_rules('pu','pu','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('agents_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('get_agents')){
				$getagents = $this->Election_model->getAgents( date('Y') );
				if($getagents)
					$data['agents'] = $getagents;
				$this->load->view('header_view', $data);
				$this->load->view('agents_view');
				$this->load->view('footer_view');
			}
		}
	}
	
	public function add(){
		$data['page_title'] = 'Add Agents';
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('lga','LGA','trim|required');
		$this->form_validation->set_rules('ward','Ward','trim|required');
		$this->form_validation->set_rules('pu','pu','trim|required');
		
		$this->form_validation->set_rules('agent1', '1<sup>st</sup> Agent\'s Name', 'trim|required');
		$this->form_validation->set_rules('phone1', '1<sup>st</sup> Agent\'s Phone Number', 'trim|required|max_length[11]|min_length[11]');
		$this->form_validation->set_rules('agent2', '2<sup>nd</sup> Agent\'s Name', 'trim|required');
		$this->form_validation->set_rules('phone2', '2<sup>nd</sup> Agent\'s Phone Number', 'trim|required|max_length[11]|min_length[11]');
		//$this->form_validation->set_rules('agent3', '3<sup>nd</sup> Agent\'s Name', 'trim|required');
		//$this->form_validation->set_rules('phone3', '3<sup>nd</sup> Agent\'s Phone Number', 'trim|required|max_length[11]|min_length[11]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('agents_add_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_agents')){
				$agent = $this->Election_model->addAgents( date('Y') );
				if($agent > 0){
					$this->session->set_flashdata('success_msg', "Agents have been added successfully.");
					redirect(base_url('Agents/add'));
				}else{
					$this->session->set_flashdata('error_msg', "Error adding agents.");
					redirect(base_url('Agents/add'));
				}
			}
		}
	}
	
	public function addWardAgent(){
		$data['page_title'] = 'Add Ward Agents';
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('lga','LGA','trim|required');
		$this->form_validation->set_rules('ward','Ward','trim|required');
		$this->form_validation->set_rules('agent1', '1<sup>st</sup> Agent\'s Name', 'trim|required');
		$this->form_validation->set_rules('phone1', '1<sup>st</sup> Agent\'s Phone Number', 'trim|required|max_length[11]|min_length[11]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('ward_agents_add_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_ward_agents')){
				$agent = $this->Election_model->addWardAgents( date('Y') );
				if($agent > 0){
					$this->session->set_flashdata('success_msg', "Agents have been added successfully.");
					redirect(base_url('Agents/addWardAgent'));
				}else{
					$this->session->set_flashdata('error_msg', "Error adding agents.");
					redirect(base_url('Agents/addWardAgent'));
				}
			}
		}
	}
	
	public function getLgas($state){
		$lgas = $this->Election_model->getLgas( $state );
		echo json_encode($lgas);
	}
	
	public function getwards($state, $lga){
		$wards = $this->Election_model->getWards( $state, $lga );
		echo json_encode($wards);
	}
	
	public function getpus($state, $lga, $ward){
		$pus = $this->Election_model->getPus( $state, $lga, $ward );
		echo json_encode($pus);
	}
	
}