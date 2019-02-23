<?php

class Election_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function login($user, $pass){
        $data = array('email'=>$user, 'password'=>sha1($pass));
        $query = $this->db->get_where('election_users',$data);
        return $query->num_rows();
    }
	
	function getUserDetails($username){
        $query = $this->db->get_where('election_users', array('email'=>$username));
        return $query->row_array();
    }
	
	function addResult($edata){
		$data = $edata;
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('results',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			return 1;//$this->db->affected_rows();
		}else{
			return 0;
		}
	}
	
	function addMessage($edata){
		$data = $edata;
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('election_messages',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ) return 1;
		else return 0;
	}
	
	function getResults($eyear, $etype, $estate="", $elga="", $eward="", $epu=""){
		if(isset($elga) && !empty($elga))
			$this->db->where('election_lga', $elga);
		if(isset($eward) && !empty($eward))
			$this->db->where('election_ward', $eward);
		if(isset($epu) && !empty($epu))
			$this->db->where('election_pu', $epu);
		
		$this->db->where('election_year', $eyear);
		$this->db->where('election_type', $etype);
		$this->db->where('election_state', $estate);
		$this->db->from('results');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	/**************************
		RESULTS
	**************************/
	
	function getStateResult($year, $type, $state){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->where('election_year',$year);
		$this->db->where('election_type',$type);
		$this->db->where('election_state',$state);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getLgaResult($year, $type, $state, $lga){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->where('election_year',$year);
		$this->db->where('election_type',$type);
		$this->db->where('election_state',$state);
		$this->db->where('election_lga',$lga);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getWardResult($year, $type, $state, $lga, $ward){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->where('election_year',$year);
		$this->db->where('election_type',$type);
		$this->db->where('election_state',$state);
		$this->db->where('election_lga',$lga);
		$this->db->where('election_ward',$ward);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getPuResult($year, $type, $state, $lga, $ward, $pu){
		$this->db->where('election_year',$year);
		$this->db->where('election_type',$type);
		$this->db->where('election_state',$state);
		$this->db->where('election_lga',$lga);
		$this->db->where('election_ward',$ward);
		$this->db->where('election_pu',$pu);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	/*******************************
				GET
	*******************************/
	function getElectionName($type){
	    $this->db->where('etype_id', $type);
	    $query = $this->db->get('election_type');
	    return $query->row();
	}
	function getStates(){
		$query = $this->db->get('election_states');
		return $query->result_array();
	}
	function getStateName($state){
		$this->db->where('state_id', $state);
		$query = $this->db->get('election_states');
		return $query->row();
	}
	
	function getLgas($state){
		$this->db->where('state_id', $state);
		$query = $this->db->get('election_lgas');
		return $query->result_array();
	}
	function getLgaName($state, $lga){
		$this->db->where('state_id', $state);
		$this->db->where('lga_id', $lga);
		$query = $this->db->get('election_lgas');
		return $query->row();
	}
	
	function getWards($state, $lga){
		$this->db->where('state_id', $state);
		$this->db->where('lga_id', $lga);
		$query = $this->db->get('election_wards');
		return $query->result_array();
	}
	function getWardName($state, $lga, $ward){
		$this->db->where('state_id', $state);
		$this->db->where('lga_id', $lga);
		$this->db->where('ward_id', $ward);
		$query = $this->db->get('election_wards');
		return $query->row();
	}
	
	function getPus($state, $lga, $ward){
		$this->db->where('state_id', $state);
		$this->db->where('lga_id', $lga);
		$this->db->where('ward_id', $ward);
		$query = $this->db->get('election_pus');
		return $query->result_array();
	}
	function getPuName($state, $lga, $ward, $pu){
		$this->db->where('state_id', $state);
		$this->db->where('lga_id', $lga);
		$this->db->where('ward_id', $ward);
		$this->db->where('pu_id', $pu);
		$query = $this->db->get('election_pus');
		return $query->row();
	}
	
	function getEntries($id, $state){
		if(!isset($id) || empty($id))$id=0;
		$this->db->order_by("rid", "asc");
		if(isset($state) && !empty($state) )$this->db->where("results.election_state", $state);
		$this->db->where("rid > ".$id);
		
		$this->db->join('election_states','election_states.state_id=results.election_state');
		$this->db->join('election_lgas','election_lgas.lga_id=results.election_lga AND election_lgas.state_id=results.election_state');
		$this->db->join('election_wards','election_wards.ward_id=results.election_ward AND election_wards.lga_id=results.election_lga AND election_wards.state_id=results.election_state');
		$this->db->join('election_pus','election_pus.pu_id=results.election_pu AND election_pus.ward_id=results.election_ward AND election_pus.lga_id=results.election_lga AND election_pus.state_id=results.election_state');
		$this->db->join('election_type','election_type.etype_id=results.election_type');
		
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getMessages($id, $state){
		if(!isset($id) || empty($id))$id=0;
		$this->db->order_by("mid", "asc");
		//if(isset($state) && !empty($state) )$this->db->where("results.election_state", $state);
		$this->db->where("mid > ".$id);
		
		$query = $this->db->get('election_messages');
		return $query->result_array();
	}
	
	function getSMS($id){
		$this->db->where("mid", $id);
		$query = $this->db->get('election_messages');
		return $query->row();
	}
	
	function getPhone($number){
		$this->db->where("phone1", $number);
		$this->db->or_where("phone2", $number);
		$query = $this->db->get('election_agents');
		return $query->num_rows();
	}
	
	
	/************************
		AGENTS
	***********************/
	function getAgents($date){
		$state = $this->input->post('state');
		$lga = $this->input->post('lga');
		$ward = $this->input->post('ward');
		$pu = $this->input->post('pu');
		
		$this->db->where('election_agents.year', $date);
		$this->db->where('election_agents.state_id', $state);
		$this->db->join('election_states','election_states.state_id=election_agents.state_id');
		$this->db->join('election_lgas','election_lgas.lga_id=election_agents.lga_id AND election_lgas.state_id=election_agents.state_id');
		$this->db->join('election_wards','election_wards.ward_id=election_agents.ward_id AND election_wards.lga_id=election_agents.lga_id AND election_wards.state_id=election_agents.state_id');
		$this->db->join('election_pus','election_pus.pu_id=election_agents.pu_id AND election_pus.ward_id=election_agents.ward_id AND election_pus.lga_id=election_agents.lga_id AND election_pus.state_id=election_agents.state_id');
		if(isset($lga)&&!empty($lga)){
			$this->db->where('election_agents.lga_id', $lga);
			if(isset($ward)&&!empty($ward)){
				$this->db->where('election_agents.ward_id', $ward);
				if(isset($pu)&&!empty($pu)){
					$this->db->where('election_agents.pu_id', $pu);
				}
			}
		}
		
		$query = $this->db->get('election_agents');
		return $query->result_array();
		
	}
	
	function addAgents($date){
		$data = array(
			'year'=>$date,
			'state_id'=>$this->input->post('state'),
			'lga_id'=>$this->input->post('lga'),
			'ward_id'=>$this->input->post('ward'),
			'pu_id'=>$this->input->post('pu'),
			
			'agent1'=>$this->input->post('agent1'),
			'phone1'=>$this->input->post('phone1'),
			'agent2'=>$this->input->post('agent2'),
			'phone2'=>$this->input->post('phone2')//,
			//'agent3'=>$this->input->post('agent3'),
			//'phone3'=>$this->input->post('phone3')
		);
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('election_agents',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			return 1;
		}else{
			return 0;
		}
	}
	
	function addWardAgents($date){
		$data = array(
			'year'=>$date,
			'state_id'=>$this->input->post('state'),
			'lga_id'=>$this->input->post('lga'),
			'ward_id'=>$this->input->post('ward'),
			
			'agent1'=>$this->input->post('agent1'),
			'phone1'=>$this->input->post('phone1')
		);
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('wardagents',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			return 1;
		}else{
			return 0;
		}
	}
	
	/*******************************
		POPULATE
	*******************************/
	function addLga(){
		$data = array(
			'state_id' => $this->input->post('state'),
			'lga_id' => $this->input->post('lga_code'),
			'lga_name' => $this->input->post('lga_name')
		);
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('election_lgas',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			return 1;
		}else{
			return 0;
		}
	}
	
	function addWard(){
		$data = array(
			'state_id' => $this->input->post('state'),
			'lga_id' => $this->input->post('lga'),
			'ward_id' => $this->input->post('ward_code'),
			'ward_name' => $this->input->post('ward_name')
		);
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('election_wards',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			return 1;
		}else{
			return 0;
		}
	}
	
	function addPu(){
		$data = array(
			'state_id' => $this->input->post('state'),
			'lga_id' => $this->input->post('lga'),
			'ward_id' => $this->input->post('ward'),
			'pu_id' => $this->input->post('pu_code'),
			'pu_name' => $this->input->post('pu_name')
		);
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'";
		}
		$sql = $this->db->insert_string('election_pus',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			return 1;
		}else{
			return 0;
		}
	}
	
	/****************************
		LIVE RESULTS
	****************************/
	function getDistricts($state){
		$this->db->where('state_id', $state);
		$query = $this->db->get('election_districts');
		return $query->result_array();
	}
	
	function getDistrictResult($district, $etype){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		//$this->db->join('election_districts', 'election_lgas.district_id='.$district);
		$this->db->join('election_states','election_states.state_id=results.election_state');
		$this->db->join('election_lgas','election_lgas.lga_id=results.election_lga AND election_lgas.state_id=results.election_state AND election_lgas.district_id='.$district);
		//$this->db->join("election_lgas", "election_lgas.district_id=".$district);
		$this->db->join('election_wards','election_wards.ward_id=results.election_ward AND election_wards.lga_id=results.election_lga AND election_wards.state_id=results.election_state');
		$this->db->join('election_pus','election_pus.pu_id=results.election_pu AND election_pus.ward_id=results.election_ward AND election_pus.lga_id=results.election_lga AND election_pus.state_id=results.election_state');
		$this->db->join('election_type','election_type.etype_id=results.election_type');
		$this->db->where("results.election_type", $etype);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getConstituents($state){
		$this->db->where('state_id', $state);
		$query = $this->db->get('election_constituents');
		return $query->result_array();
	}
	
	function getConstituentResult($constituent, $etype){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->join('election_states','election_states.state_id=results.election_state');
		$this->db->join('election_lgas','election_lgas.lga_id=results.election_lga AND election_lgas.state_id=results.election_state AND election_lgas.constituent_id='.$constituent);
		$this->db->join('election_wards','election_wards.ward_id=results.election_ward AND election_wards.lga_id=results.election_lga AND election_wards.state_id=results.election_state');
		$this->db->join('election_pus','election_pus.pu_id=results.election_pu AND election_pus.ward_id=results.election_ward AND election_pus.lga_id=results.election_lga AND election_pus.state_id=results.election_state');
		$this->db->join('election_type','election_type.etype_id=results.election_type');
		$this->db->where("results.election_type", $etype);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getGuberResult($state, $etype){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->join('election_states','election_states.state_id=results.election_state');
		$this->db->join('election_lgas','election_lgas.lga_id=results.election_lga AND election_lgas.state_id=results.election_state AND election_lgas.state_id='.$state);
		$this->db->join('election_wards','election_wards.ward_id=results.election_ward AND election_wards.lga_id=results.election_lga AND election_wards.state_id=results.election_state');
		$this->db->join('election_pus','election_pus.pu_id=results.election_pu AND election_pus.ward_id=results.election_ward AND election_pus.lga_id=results.election_lga AND election_pus.state_id=results.election_state');
		$this->db->join('election_type','election_type.etype_id=results.election_type');
		$this->db->where("results.election_type", $etype);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	function getCountryResult($etype){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->join('election_states','election_states.state_id=results.election_state');
		$this->db->join('election_lgas','election_lgas.lga_id=results.election_lga AND election_lgas.state_id=results.election_state');
		$this->db->join('election_wards','election_wards.ward_id=results.election_ward AND election_wards.lga_id=results.election_lga AND election_wards.state_id=results.election_state');
		$this->db->join('election_pus','election_pus.pu_id=results.election_pu AND election_pus.ward_id=results.election_ward AND election_pus.lga_id=results.election_lga AND election_pus.state_id=results.election_state');
		$this->db->join('election_type','election_type.etype_id=results.election_type');
		$this->db->where("results.election_type", $etype);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
	
	//state house
	function getStateConstituencies($state){
		$this->db->where('state_id', $state);
		$query = $this->db->get('election_state_constituents');
		return $query->result_array();
	}
	
	function getStateConstituencyResult($state_constituent, $etype){
		$this->db->select("sum(registered_voters) as registered_voters,
			sum(accredited_voters) as accredited_voters,
			sum(adc) as adc,sum(ann) as ann,sum(sdp) as sdp,sum(apc) as apc,
			sum(upn) as upn,sum(lp) as lp,sum(pdp) as pdp,sum(ngp) as ngp,
			sum(pdm) as pdm,sum(gpn) as gpn,sum(apga) as apga,sum(spn) as spn,
			sum(ydp) as ydp,sum(adp) as adp,
			sum(valid_votes) as valid_votes,sum(invalid_votes) as invalid_votes");
		$this->db->join('election_states','election_states.state_id=results.election_state');
		$this->db->join('election_lgas','election_lgas.lga_id=results.election_lga AND election_lgas.state_id=results.election_state');
		$this->db->join('election_wards','election_wards.ward_id=results.election_ward AND election_wards.lga_id=results.election_lga AND election_wards.state_id=results.election_state AND election_wards.state_constituent_id='.$state_constituent);
		$this->db->join('election_pus','election_pus.pu_id=results.election_pu AND election_pus.ward_id=results.election_ward AND election_pus.lga_id=results.election_lga AND election_pus.state_id=results.election_state');
		$this->db->join('election_type','election_type.etype_id=results.election_type');
		$this->db->where("results.election_type", $etype);
		$query = $this->db->get('results');
		return $query->result_array();
	}
	
}