<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['page_title'] = 'Results';
		$data['states'] = $this->Election_model->getStates();
		
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		$this->form_validation->set_rules('state', 'Election State', 'trim|required');
		//$this->form_validation->set_rules('lga', 'Election LGA', 'trim|required');
		//$this->form_validation->set_rules('ward', 'Election Ward', 'trim|required');
		//$this->form_validation->set_rules('pu', 'Election Polling Unit', 'trim|required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('results_view');
			$this->load->view('footer_view');
		}else{
			//print_r($this->input->post());exit;
			$res = $this->Election_model->getResults(date('Y'),
				$this->input->post('election_type'),
				$this->input->post('state'),
				$this->input->post('lga'),
				$this->input->post('ward'),
				$this->input->post('pu') );
			if($res){
				$data['result'] = $res;
				//print_r($res);
				$this->load->view('header_view', $data);
				$this->load->view('results_view');
				$this->load->view('footer_view');
			}else{
				echo 'no result to show';
			}
		}	
		
	}
	
	public function election(){
		$data['page_title'] = 'Result Election';
		$this->load->view('header_view', $data);
		$this->load->view('results_election_view');
		$this->load->view('footer_view');
	}
	
	public function state(){
		$data['page_title'] = 'Result:: States Summary';
		$states = $this->Election_model->getStates();
		if(isset($states) && !empty($states))
			$data['states'] = $states;
		$data['lurl'] = $this->uri->segment(3);
		
		$this->form_validation->set_rules('pdf', 'PDF', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('results_state_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post("gen_pdf")){
				$this->pdf_print($data);
			}
		}
	}
	
	public function lga(){
		$data['page_title'] = 'Result:: LGAs Summary';
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$lgas = $this->Election_model->getLgas($this->uri->segment(4));
		if(isset($lgas) && !empty($lgas))
			$data['lgas'] = $lgas;
		$data['lurl'] = $this->uri->segment(3).'/'.$this->uri->segment(4);
		$res = $this->Election_model->getStateResult(date('Y')
					,$this->uri->segment(3)
					,$this->uri->segment(4)
					,$this->uri->segment(5) );
		if(isset($res) && !empty($res) )
			$data['result'] = $res[0];
		else
			$data['result'] = array(
			'registered_voters'=>0,'accredited_voters'=>0,
			'adc'=>0,'ann'=>0,'adp'=>0,'sdp'=>0,
			'apc'=>0,'upn'=>0,'lp'=>0,'pdp'=>0,
			'ngp'=>0,'pdm'=>0,'gpn'=>0,'apga'=>0,'spn'=>0,'ydp'=>0,
			'invalid_votes'=>0,'valid_votes'=>0
		);
		
		$this->form_validation->set_rules('pdf', 'PDF', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('results_lga_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post("gen_pdf")){
				$this->pdf_print($data);
			}
		}
	}
	
	public function ward(){
		$data['page_title'] = 'Result:: Wards summary';
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lga'] = $this->Election_model->getLgaName($this->uri->segment(4),$this->uri->segment(5));
		$wards = $this->Election_model->getWards($this->uri->segment(4),$this->uri->segment(5));
		if(isset($wards) && !empty($wards))
			$data['wards'] = $wards;
		$data['lurl'] = $this->uri->segment(3)
					.'/'.$this->uri->segment(4)
					.'/'.$this->uri->segment(5);
		$res = $this->Election_model->getLgaResult(date('Y')
					,$this->uri->segment(3)
					,$this->uri->segment(4)
					,$this->uri->segment(5)
					,$this->uri->segment(6) );
		if(isset($res) && !empty($res) )
			$data['result'] = $res[0];
		else
			$data['result'] = array(
			'registered_voters'=>0,'accredited_voters'=>0,
			'adc'=>0,'ann'=>0,'adp'=>0,'sdp'=>0,
			'apc'=>0,'upn'=>0,'lp'=>0,'pdp'=>0,
			'ngp'=>0,'pdm'=>0,'gpn'=>0,'apga'=>0,'spn'=>0,'ydp'=>0,
			'invalid_votes'=>0,'valid_votes'=>0
		);
		
		$this->form_validation->set_rules('pdf', 'PDF', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('results_ward_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post("gen_pdf")){
				$this->pdf_print($data);
			}
		}
	}
	
	public function pu(){
		$data['page_title'] = 'Result:: Polling Units Summary';
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lga'] = $this->Election_model->getLgaName($this->uri->segment(4),$this->uri->segment(5));
		$data['ward'] = $this->Election_model->getWardName($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6));
		$pus = $this->Election_model->getPus($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6));
		if(isset($pus) && !empty($pus))
			$data['pus'] = $pus;
		$data['lurl'] = $this->uri->segment(3)
					.'/'.$this->uri->segment(4)
					.'/'.$this->uri->segment(5)
					.'/'.$this->uri->segment(6);
		$res = $this->Election_model->getWardResult(date('Y')
					,$this->uri->segment(3)
					,$this->uri->segment(4)
					,$this->uri->segment(5)
					,$this->uri->segment(6)
					,$this->uri->segment(7) );
		if(isset($res) && !empty($res) )
			$data['result'] = $res[0];
		else
			$data['result'] = array(
			'registered_voters'=>0,'accredited_voters'=>0,
			'adc'=>0,'ann'=>0,'adp'=>0,'sdp'=>0,
			'apc'=>0,'upn'=>0,'lp'=>0,'pdp'=>0,
			'ngp'=>0,'pdm'=>0,'gpn'=>0,'apga'=>0,'spn'=>0,'ydp'=>0,
			'invalid_votes'=>0,'valid_votes'=>0
		);
		
		$this->form_validation->set_rules('pdf', 'PDF', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('results_pu_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post("gen_pdf")){
				$this->pdf_print($data);
			}
		}
	}
	
	public function center(){
		$data['page_title'] = 'Result:: Center Summary';
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lga'] = $this->Election_model->getLgaName($this->uri->segment(4),$this->uri->segment(5));
		$data['ward'] = $this->Election_model->getWardName($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6));
		$data['pu'] = $this->Election_model->getPuName($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6),$this->uri->segment(7));
		$data['lurl'] = $this->uri->segment(3)
					.'/'.$this->uri->segment(4)
					.'/'.$this->uri->segment(5)
					.'/'.$this->uri->segment(6);
		$res = $this->Election_model->getPuResult(date('Y')
					,$this->uri->segment(3)
					,$this->uri->segment(4)
					,$this->uri->segment(5)
					,$this->uri->segment(6)
					,$this->uri->segment(7) );
		if(isset($res) && !empty($res) )
			$data['result'] = $res[0];
		else
			$data['result'] = array(
			'registered_voters'=>0,'accredited_voters'=>0,
			'adc'=>0,'ann'=>0,'adp'=>0,'sdp'=>0,
			'apc'=>0,'upn'=>0,'lp'=>0,'pdp'=>0,
			'ngp'=>0,'pdm'=>0,'gpn'=>0,'apga'=>0,'spn'=>0,'ydp'=>0,
			'invalid_votes'=>0,'valid_votes'=>0
		);
		
		$this->form_validation->set_rules('pdf', 'PDF', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header_view', $data);
			$this->load->view('results_center_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post("gen_pdf")){
				$this->pdf_print($data);
			}
		}
	}
	
	public function pdf_print($data){
		//$html = $this->load->view('header_view', $data, TRUE);
		$html = $this->load->view('results_print_view', $data,TRUE);
		//$html .= $this->load->view('footer_view', '', TRUE);
		include "includes/test_dompdf.php";
		//echo $html;
	}
	
	public function receiver(){
		$data['page_title'] = 'Result Entries';
		//$data['entries'] = $this->Election_model->getEntries();
		$this->load->view('header_view', $data);
		$this->load->view('results_entries_view');
		$this->load->view('footer_view');
	}
	
	public function getJsonEntries(){
		$last_id = $this->input->post("last_id");
		$state = $this->input->post("state");
		$ent = $this->Election_model->getEntries($last_id, $state);
		echo json_encode($ent);
	}
	
	
	public function messages(){
		$data['page_title'] = 'Result Messages';
		$this->load->view('header_view', $data);
		$this->load->view('results_messages_view');
		$this->load->view('footer_view');
	}
	
	public function getJsonMessages(){
		$last_id = $this->input->post("last_id");
		$state = $this->input->post("state");
		$msg = $this->Election_model->getMessages($last_id, $state);
		echo json_encode($msg);
	}
	
}