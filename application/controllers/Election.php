<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Election extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){//SELECT ELECTION
	    $data['page_title'] = "Election";
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		if($this->form_validation->run() == FALSE){
		    $this->load->view('header_view', $data);
			$this->load->view('election_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_election')){
				$data['election_type'] = $this->input->post('election_type');
				redirect( base_url().'election/state/'.$data['election_type'] );
			}else{
				echo 'no button';
			}
		}
	}
	
	public function state(){//echo 'here';exit;
		$data['page_title'] = "Election state";
		$data['etype'] = $this->Election_model->getElectionName($this->uri->segment(3));
		$data['states'] = $this->Election_model->getStates();
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		$this->form_validation->set_rules('election_state', 'Election State', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$data['election_type'] = $this->uri->segment(3);
			$this->load->view('header_view', $data);
			$this->load->view('state_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_state')){
				$data['election_type'] = $this->input->post('election_type');
				$data['election_state'] = $this->input->post('election_state');
				redirect(base_url("Election/lga/".$data['election_type']."/".$data['election_state']));
			}
		}
		
	}
	public function lga(){
		$data['page_title'] = "Election state";
		$data['etype'] = $this->Election_model->getElectionName($this->uri->segment(3));
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lgas'] = $this->Election_model->getLgas($this->uri->segment(4));
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		$this->form_validation->set_rules('election_state', 'Election State', 'trim|required');
		$this->form_validation->set_rules('election_lga', 'Election LGA', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$data['election_type'] = $this->uri->segment(3);
			$data['election_state'] = $this->uri->segment(4);
			$this->load->view('header_view', $data);
			$this->load->view('lga_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_lga')){
				$data['election_type'] = $this->input->post('election_type');
				$data['election_state'] = $this->input->post('election_state');
				$data['election_lga'] = $this->input->post('election_lga');
				redirect(base_url('election/ward/'.$data['election_type']
					.'/'.$data['election_state']
					.'/'.$data['election_lga']));
			}
		}
	}
	
	public function ward(){
		$data['page_title'] = "Election state";
		$data['etype'] = $this->Election_model->getElectionName($this->uri->segment(3));
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lga'] = $this->Election_model->getLgaName($this->uri->segment(4),$this->uri->segment(5));
		$data['wards'] = $this->Election_model->getWards($this->uri->segment(4),$this->uri->segment(5));
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		$this->form_validation->set_rules('election_state', 'Election State', 'trim|required');
		$this->form_validation->set_rules('election_lga', 'Election LGA', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$data['election_type'] = $this->uri->segment(3);
			$data['election_state'] = $this->uri->segment(4);
			$data['election_lga'] = $this->uri->segment(5);
			$this->load->view('header_view', $data);
			$this->load->view('ward_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_ward')){
				$data['election_type'] = $this->input->post('election_type');
				$data['election_state'] = $this->input->post('election_state');
				$data['election_lga'] = $this->input->post('election_lga');
				$data['election_ward'] = $this->input->post('election_ward');
				redirect(base_url('election/pu/'.$data['election_type']
					.'/'.$data['election_state']
					.'/'.$data['election_lga']
					.'/'.$data['election_ward']));
			}
		}
	}
	
	public function pu(){
		$data['page_title'] = "Election state";
		$data['etype'] = $this->Election_model->getElectionName($this->uri->segment(3));
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lga'] = $this->Election_model->getLgaName($this->uri->segment(4),$this->uri->segment(5));
		$data['ward'] = $this->Election_model->getWardName($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6));
		$data['pus'] = $this->Election_model->getPus($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6));
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		$this->form_validation->set_rules('election_state', 'Election State', 'trim|required');
		$this->form_validation->set_rules('election_lga', 'Election LGA', 'trim|required');
		$this->form_validation->set_rules('election_ward', 'Election Ward', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$data['election_type'] = $this->uri->segment(3);
			$data['election_state'] = $this->uri->segment(4);
			$data['election_lga'] = $this->uri->segment(5);
			$data['election_ward'] = $this->uri->segment(6);
			$this->load->view('header_view', $data);
			$this->load->view('pu_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_pu')){
				$data['election_type'] = $this->input->post('election_type');
				$data['election_state'] = $this->input->post('election_state');
				$data['election_lga'] = $this->input->post('election_lga');
				$data['election_ward'] = $this->input->post('election_ward');
				$data['election_pu'] = $this->input->post('election_pu');
				redirect(base_url('election/addResult/'.$data['election_type']
					.'/'.$data['election_state']
					.'/'.$data['election_lga']
					.'/'.$data['election_ward']
					.'/'.$data['election_pu']));
			}
		}
	}
	
	public function addResult(){
	    $data['page_title'] = "Add PU Result";
	    $data['etype'] = $this->Election_model->getElectionName($this->uri->segment(3));
		$data['state'] = $this->Election_model->getStateName($this->uri->segment(4));
		$data['lga'] = $this->Election_model->getLgaName($this->uri->segment(4),$this->uri->segment(5));
		$data['ward'] = $this->Election_model->getWardName($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6));
		$data['pu'] = $this->Election_model->getPuName($this->uri->segment(4),$this->uri->segment(5),$this->uri->segment(6),$this->uri->segment(7));
		$this->form_validation->set_rules('election_type', 'Election Type', 'trim|required');
		$this->form_validation->set_rules('election_state', 'Election State', 'trim|required');
		$this->form_validation->set_rules('election_lga', 'Election LGA', 'trim|required');
		$this->form_validation->set_rules('election_ward', 'Election Ward', 'trim|required');
		$this->form_validation->set_rules('election_pu', 'Election Polling Unit', 'trim|required');
		
		$this->form_validation->set_rules('reg_voters', 'Registered Voters', 'trim|required');
		$this->form_validation->set_rules('acr_voters', 'Accredited Voters', 'trim|required');
		$this->form_validation->set_rules('apc', 'APC', 'trim|required');
		$this->form_validation->set_rules('pdp', 'PDP', 'trim|required');
		$this->form_validation->set_rules('valid_votes', 'Valid Votes', 'trim|required');
		$this->form_validation->set_rules('invalid_votes', 'Invalid Votes', 'trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['election_type'] = $this->uri->segment(3);
			$data['election_state'] = $this->uri->segment(4);
			$data['election_lga'] = $this->uri->segment(5);
			$data['election_ward'] = $this->uri->segment(6);
			$data['election_pu'] = $this->uri->segment(7);
			$this->load->view('header_view', $data);
			$this->load->view('add_result_view');
			$this->load->view('footer_view');
		}else{
			if($this->input->post('add_result')){
				$data2['election_year'] = date('Y');
				
				$data2['election_type'] = $this->input->post('election_type');
				$data2['election_state'] = $this->input->post('election_state');
				$data2['election_lga'] = $this->input->post('election_lga');
				$data2['election_ward'] = $this->input->post('election_ward');
				$data2['election_pu'] = $this->input->post('election_pu');
				
				$data2['registered_voters'] = $this->input->post('reg_voters');
				$data2['accredited_voters'] = $this->input->post('acr_voters');
				
				$data2['adc'] = $this->input->post('adc');
				$data2['ann'] = $this->input->post('ann');
				$data2['adp'] = $this->input->post('adp');
				$data2['sdp'] = $this->input->post('sdp');
				$data2['apc'] = $this->input->post('apc');
				$data2['upn'] = $this->input->post('upn');
				$data2['lp'] = $this->input->post('lp');
				$data2['pdp'] = $this->input->post('pdp');
				$data2['ngp'] = $this->input->post('ngp');
				$data2['pdm'] = $this->input->post('pdm');
				$data2['gpn'] = $this->input->post('gpn');
				$data2['apga'] = $this->input->post('apga');
				$data2['spn'] = $this->input->post('spn');
				$data2['ydp'] = $this->input->post('ydp');
				
				$data2['invalid_votes'] = $this->input->post('invalid_votes');
				$data2['valid_votes'] = $this->input->post('valid_votes');
				
				//print_r($data);
				$result = $this->Election_model->addResult($data2);
				if($result > 0){
					$this->session->set_flashdata('success_msg', "result added successfully");
					redirect( base_url("Election/addResult/".$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$this->uri->segment(7)) );
				}else{
					$this->session->set_flashdata('error_msg', "result not added");
					redirect( base_url("Election/addResult/".$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6).'/'.$this->uri->segment(7)) );
				}
			}
		}
	}
	
	
	public function AddMobile(){
		try{
			if($this->input->post("sms")){
				$sms = trim($this->input->post("sms"));//"ELECTION=01:PU=09/07/09/003:RV=200,AV=445:APC=500,PDP=100,SDP=2:IV=20,VV=602";	
				$searches = array("\r","\n","\r\n");
				$sms = str_replace($searches,"", $sms);
				$sms = trim(preg_replace('!\s+!',"",$sms));
				$msg = explode(':', $sms);
				//print_r($msg);
				$etype = explode('=',trim($msg[0]));
				if(count($etype)<2)
					throw new Exception("Election type not set.");
				$data['election_type'] = trim($etype[1]);
				
				$edata = explode('/', explode('=',trim($msg[1]))[1]);
				$etitle = array('election_state', 'election_lga', 'election_ward', 'election_pu');
				$edt = array_combine($etitle, $edata);
				foreach($edt as $k=>$v){
					if( !is_int($v) && !empty($v) )
						$data[$k] = trim($v);
					else
						throw new Exception("Incomplete Polling Unit ID.");
				}	
					
				$rav = explode(',', trim($msg[2]));
				if(strcasecmp(trim(explode('=', trim($rav[0]))[0]), "RV")==0)
					$data['registered_voters'] = trim(explode('=', $rav[0])[1]);
				if(strcasecmp(trim(explode('=', trim($rav[1]))[0]), "AV")==0)
					$data['accredited_voters'] = trim(explode('=', $rav[1])[1]);
				
				$parties = array('ADC','ANN','ADP','SDP','APC','UPN','LP','PDP','NGP','PDM','GPN','APGA','SPN','YDP');
				$party = explode(',', trim($msg[3]));
				foreach($party as $pt){
					$pp = explode('=', trim($pt));
					if( in_array($pp[0], $parties) )
						$data[$pp[0]] = trim($pp[1]);
				}
				
				$ivv = explode(',', trim($msg[4]));
				if(strcasecmp(trim(explode('=', trim($ivv[0]))[0]), "IV")==0)
					$data['invalid_votes'] = trim(explode('=', $ivv[0])[1]);
				if(strcasecmp(trim(explode('=', trim($ivv[1]))[0]), "VV")==0)
					$data['valid_votes'] = trim(explode('=', $ivv[1])[1]);
				
				$data['election_year'] = date('Y');

				//print_r($data);exit;
				//if( $this->phoneExists( $this->input->post("sender") ) === false )
					//throw new Exception("Phone Number does not exists");
				$result = $this->Election_model->addResult($data);
				if($result > 0){	
					try{
						$data = array(
							'mid' => $this->input->post("mid")?$this->input->post("mid"):'',
							'message' => $this->input->post("sms")?$this->input->post("sms"):'',
							'sender' => $this->input->post("sender")?$this->input->post("sender"):'',
							'parsed' => 1
						);
						$this->Election_model->addMessage($data);
					}catch(Exception $e){}finally{
						echo "Result posted successfully.";
					}	
				}else{
					echo "Result not posted.";
				}
			}else{
				echo "Parameters not sent";
			}
		}catch(Exception $e){
			try{
				$data = array(
					'mid' => $this->input->post("mid")?$this->input->post("mid"):'',
					'message' => $this->input->post("sms")?$this->input->post("sms"):'',
					'sender' => $this->input->post("sender")?$this->input->post("sender"):''
				);
				$this->Election_model->addMessage($data);
			}catch(Exception $e){}finally{
				echo "Wrong SMS format.";	
			}
		}
	}
	
	function refactor($msgid){
		$data['page_title'] = "Election Message Refactor";
		$data['msgid'] = $msgid;
		$data['sms'] = $this->Election_model->getSms($msgid);
		
		$this->load->view('header_view', $data);
		$this->load->view('election_message_refactor_view');
		$this->load->view('footer_view');
	}
	
	function phoneExists($number){
		if($this->startsWith($number, '+234')){
			$number = str_replace("+234", "0", $number);
		}elseif($this->startsWith($number, '234')){
			$number = str_replace("234", "0", $number);
		}
		if($number)
		$ph = $this->Election_model->getPhone($number);
		if($ph > 0)
			return true;
		else
			return false;
	}
	
	function startsWith($haystack, $needle)
	{
		 $length = strlen($needle);
		 return (substr($haystack, 0, $length) === $needle);
	}

	function endsWith($haystack, $needle)
	{
		$length = strlen($needle);
		if ($length == 0) {
			return true;
		}

		return (substr($haystack, -$length) === $needle);
	}
	
}
