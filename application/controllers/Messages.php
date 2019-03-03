<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data["page_title"] = "Send SMS";
		
		$this->form_validation->set_rules("etype","Election Type", "trim|required");
		$this->form_validation->set_rules("egroup","Election Group", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$data["elections"] = $this->Election_model->getElections();
			$this->load->view("header_view", $data);
			$this->load->view("messages_send_view");
			$this->load->view("footer_view");
		}else{
			if($this->input->post('send_format_btn')){
				
				$username= 'xtreemhackzone@gmail.com';
				$password='password';
				$sender='EMIS';
				$agents = $this->Election_model->getAgentsList( date('Y'), $this->session->state, $this->input->post('egroup') );
				$multiCurl = array();
				$result = array();
				$mh = curl_multi_init();
				foreach($agents as $i=>$ag){
					$msg = "ELECTION=".$this->input->post('etype').": \n";
					$msg .= ($this->input->post('egroup') == "ward")
						? "PU=".$ag['state_id']."/".$ag['lga_id']."/".$ag['ward_id']."/XXX: \n"
						: "PU=".$ag['state_id']."/".$ag['lga_id']."/".$ag['ward_id']."/".$ag['pu_id'].": \n";
					$msg .= "RV=0, AV=0: \n";
					$msg .= "SDP=0, APC=0, LP=0, PDP=0, NGP=0: \n";
					$msg .= "IV=0, VV=0";
					//echo $msg."<br/>";
					$mobile = ($this->input->post('egroup') == "ward")
						? $this->formatPhone($ag['phone1'])
						: $this->formatPhone($ag['phone1']).','.$this->formatPhone($ag['phone2']);
					$text = urlencode($msg);
					$url="http://sms.bbnplace.com/bulksms/bulksms.php?username=$username&password=$password&mobile=$mobile&sender=$sender&message=$text";
					//echo $url."<br/>";
					$multiCurl[$i] = curl_init();
					curl_setopt($multiCurl[$i], CURLOPT_URL,$url);
					curl_setopt($multiCurl[$i], CURLOPT_HEADER,0);
					curl_setopt($multiCurl[$i], CURLOPT_RETURNTRANSFER,1);
					curl_multi_add_handle($mh, $multiCurl[$i]);
				}
				$index=null;
				do{
					curl_multi_exec($mh, $index);
				}while($index > 0);
				foreach($multiCurl as $k=>$ch){
					$result[$k] = curl_multi_getcontent($ch);
					curl_multi_remove_handle($mh, $ch);
				}
				curl_multi_close($mh);
				//print_r($result);
				
				$data['agents'] = $agents;
				$data['result'] = $result;
				$table = "<table border='1'>";
				$table.="<tr><td>SN</td><td>Agent</td><td>Phone</td><td>Status</td></tr>";
				for($i=0;$i<count($agents);$i++){
					$table.= "<tr>";
					$table.= "<td>".($i+1)."</td>";
					$table.= "<td>".$agents[$i]['agent1'].( ($this->input->post('egroup') != "ward")?", ".$agents[$i]['agent2']:"" )."</td>";
					$table.= "<td>".$agents[$i]['phone1'].( ($this->input->post('egroup') != "ward")?", ".$agents[$i]['phone2']:"" )."</td>";
					$reply = $result[$i];
					$table.= "<td>".(($reply == "1801" || $reply == 1801)?"Success":"Failed")."</td>";
					$table.="</tr>";
				}
				//echo $table;
				
				$this->load->view("header_view", $data);
				$this->load->view("messages_sent_view");
				$this->load->view("footer_view");
			}
		}
	}
	
	function formatPhone($phone){
		if(substr($phone,0,1) == 0){
			return '234'.substr($phone,1,11);
		}
		else return $phone;
	}
	
}