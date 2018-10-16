<?php

class Loan_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	function addPersonalDetails($dob_name,$lga_name,$mid_name,$ref_name,$adl_name,$csr_name,$pda_name){
		$data = array(
			'user_id' => $this->session->user_id,
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_add' => $this->input->post('email_add'),
			'phone_number' => $this->input->post('phone_number'),
			'dob' => $this->input->post('dob'),
			'address' => $this->input->post('address'),
			'state_of_residence' => $this->input->post('state_of_residence'),
			'state_of_origin' => $this->input->post('state_of_origin'),
			'senatorial_district' => $this->input->post('senatorial_district'),
			'lga' => $this->input->post('lga'),
			'town_of_origin' => $this->input->post('town_of_origin'),
			'village_of_origin' => $this->input->post('village_of_origin'),
			'mode_identity' => $this->input->post('mode_identity'),

			'father_name' => $this->input->post('father_name'),
			'mother_name' => $this->input->post('mother_name'),
			'father_phone' => $this->input->post('father_phone'),
			'mother_phone' => $this->input->post('mother_phone'),
			'father_state_of_origin' => $this->input->post('father_state_of_origin'),
			'mother_state_of_origin' => $this->input->post('mother_state_of_origin'),

			'bank_name' => $this->input->post('bank_name'),
			'account_number' => $this->input->post('account_number'),
			'bvn' => $this->input->post('bvn'),

			'university_name' => $this->input->post('university_name'),
			'university_state' => $this->input->post('university_state'),
			'other_university' => $this->input->post('other_university'),
			'university_city' => $this->input->post('university_city'),
			'course_of_study' => $this->input->post('course_of_study'),
			'anticipated_degree' => $this->input->post('anticipated_degree'),
			'university_level' => $this->input->post('university_level'),
			'semester_level' => $this->input->post('semester_level'),
			'student_id_number' => $this->input->post('student_id_number'),
			'matric_number' => $this->input->post('matric_number'),
			'current_result' => $this->input->post('current_result'),
			'program_start_date' => $this->input->post('program_start_date'),
			'program_end_date' => $this->input->post('program_end_date'),
			'uni_contact_person' => $this->input->post('uni_contact_person'),
			'uni_contact_person_phone' => $this->input->post('uni_contact_person_phone'),
			'std_housing' => $this->input->post('std_housing'),
			'std_address' => $this->input->post('std_address'),
			
			'previous_degree_acquired' => implode(',', $this->input->post('previous_degree_acquired')),
			
			'dob_file' => $dob_name,
			'lga_file' => $lga_name,
			'mid_file' => $mid_name,
			'ref_file' => $ref_name,
			'adl_file' => $adl_name,
			'csr_file' => $csr_name,
			'pda_file' => $pda_name,
			'status' => 1
		);
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'"; 
		}
		$sql = $this->db->insert_string('loan_details',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if( $insert ){
			$data = array('status'=>2);
			$this->db->where('user_id', $this->session->user_id);
			return $this->db->update('users',$data);
		}else{
			return 0;
		}
		//return $this->db->insert('loan_details', $data);
	}

	function addLoan(){
		$data = array(
			'user_id' => $this->session->user_id,
			'programme_start_date' => $this->input->post('programme_start_date'),
			'programme_end_date' => $this->input->post('programme_end_date'),
			'academic_year' => $this->input->post('academic_year'),
			'semester_level' => $this->input->post('semester_level'),
			'loan_type' => $this->input->post('loan_type'),
			'loan_amount' => $this->input->post('loan_amount'),
			'batch' => $this->input->post('batch'),

			'guarantor_title' => $this->input->post('guarantor_title'),
			'guarantor_fname' => $this->input->post('guarantor_fname'),
			'guarantor_lname' => $this->input->post('guarantor_lname'),
			'guarantor_phone' => $this->input->post('guarantor_phone'),
			'guarantor_altphone' => $this->input->post('guarantor_altphone'),
			'guarantor_address' => $this->input->post('guarantor_address'),
			'guarantor_state' => $this->input->post('guarantor_state'),
			'guarantor_occupation' => $this->input->post('guarantor_occupation'),
			'guarantor_emp' => $this->input->post('guarantor_emp'),
			'guarantor_position' => $this->input->post('guarantor_position'),
			'guarantor_relatn' => $this->input->post('guarantor_relatn')
		);
		
		$udata = array();
		foreach($data as $k=>$v){
			$udata[] = $k.'='."'".$v."'"; 
		}
		$sql = $this->db->insert_string('loan_applications',$data)." ON DUPLICATE KEY UPDATE ".implode(', ',$udata) ;
		$insert = $this->db->query($sql);
		if($this->db->affected_rows()>0){
			$data = array('status'=>3);
			$this->db->where('user_id', $this->session->user_id);
			return $this->db->update('users',$data);
		}else{
			return 0;
		}
		
		//return $this->db->insert('loan_applications', $data);
		$this->db->insert('loan_applications', $data);
		if($this->db->affected_rows()>0){
			$data = array('status'=>3);
			$this->db->where('user_id', $this->session->user_id);
			return $this->db->update('users',$data);
		}else return 0;
	}
	
	function getCurrentBatch(){
		$this->db->limit(1);
		$this->db->order_by('bid', 'DESC');
		$query = $this->db->get('batches');
		return $query->row();
	}

	function getProfile($uid){
		$this->db->where('user_id',$uid);
		$query = $this->db->get('loan_details');
		return $query->result_array();
	}


    function getPersonalDetails(){
		$this->db->limit(1);
        $query = $this->db->get_where('users', array('user_id'=>$this->session->user_id));
        return $query->row_array();
    }

	function getLoans($uid){
		$this->db->order_by('loan_id', 'desc');
		$this->db->order_by('batch', 'desc');
		$this->db->where('user_id',$uid);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}

	function getTotalBorrowers(){
		$query = $this->db->get('loan_applications');
		return $query->num_rows();
	}
	
	function getAllLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}

	function getApprovedLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('loan_applications.status', 3);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	
	function getPendingLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('loan_applications.status', 1);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}

	function getDisbursedLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('loan_applications.status', 4);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	function getPartialDisbursedLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('loan_applications.status', 5);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	function getDeclinedLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('loan_applications.status', 2);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	function getWithdrawnLoans(){
		$this->db->join('users', 'loan_applications.user_id=users.user_id');
		$this->db->where('loan_applications.status', 6);
		$this->db->where('batch', $this->session->current_batch);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}


}
