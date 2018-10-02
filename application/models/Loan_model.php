<?php

class Loan_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function addPersonalDetails($name){
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
			
			'lga_file' => $name,
			'mid_file' => $name,
			'adl_file' => $name,
			'csr_file' => $name,
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
		return $this->db->insert('loan_applications', $data);
	}
	
	function getProfile($uid){
		$this->db->where('user_id',$uid);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
	
	
    function getPersonalDetails(){
		$this->db->limit(1);	
        $query = $this->db->get_where('users', array('user_id'=>$this->session->user_id));
        return $query->row_array();
    }
	
	function getLoans($uid){
		$this->db->where('user_id',$uid);
		$query = $this->db->get('loan_applications');
		return $query->result_array();
	}
}