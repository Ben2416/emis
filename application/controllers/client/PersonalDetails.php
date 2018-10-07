<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PersonalDetails extends CI_Controller
{
    public function __construct(){
        parent::__construct();
		$this->load->library('upload');
		$this->load->model('Loan_model');
    }

    public function index(){//print_r($this->session->userdata());exit;

		$data['page_title'] = 'Personal Details';
		$data['details'] = $this->Loan_model->getPersonalDetails();

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email_add','Email','trim|required|valid_email');//|is_unique[users.email]');
        $this->form_validation->set_rules('phone_number','Phone Number','trim|required|min_length[11]|max_length[11]');//|is_unique[users.phone]',array('is_unique'=>'This %s already exists.'));
        $this->form_validation->set_rules('dob','Birth Date','trim|required');
        $this->form_validation->set_rules('address','Address','trim|required');
        $this->form_validation->set_rules('state_of_residence','Residence State','trim|required');
        $this->form_validation->set_rules('state_of_origin','Origin State','trim|required');
        $this->form_validation->set_rules('senatorial_district','Senatorial District','trim|required');
        $this->form_validation->set_rules('lga','LGA','trim|required');
        $this->form_validation->set_rules('town_of_origin','Town / City','trim|required');
        $this->form_validation->set_rules('village_of_origin','Village','trim|required');
        $this->form_validation->set_rules('mode_identity','Mode of Identity','trim|required');

		$this->form_validation->set_rules('father_name','Father Name','trim|required');
		$this->form_validation->set_rules('mother_name','Mother Name','trim|required');
		$this->form_validation->set_rules('father_phone','Father Phone','trim|required');
		$this->form_validation->set_rules('mother_phone','Mother Phone','trim|required');
		$this->form_validation->set_rules('father_state_of_origin','Father Origin','trim|required');
		$this->form_validation->set_rules('mother_state_of_origin','Mother Origin','trim|required');

		$this->form_validation->set_rules('bank_name','Bank Name','trim|required');
		$this->form_validation->set_rules('account_number','Account Number','trim|required');
        $this->form_validation->set_rules('bvn','Bank Verification','trim|required');

        $this->form_validation->set_rules('university_name','University Name','trim|required');
        $this->form_validation->set_rules('university_state','University State','trim|required');
        if($this->input->post('university_name') == "Other")
			$this->form_validation->set_rules('other_university','Other University','trim|required');
        $this->form_validation->set_rules('university_city','University City','trim|required');
        $this->form_validation->set_rules('course_of_study','Course','trim|required');
        $this->form_validation->set_rules('anticipated_degree','Degree','trim|required');
        $this->form_validation->set_rules('university_level','Level','trim|required');
        $this->form_validation->set_rules('semester_level','Level','trim|required');
        $this->form_validation->set_rules('student_id_number','Student Number','trim|required');
		$this->form_validation->set_rules('matric_number','Matric No.','trim|required');
		$this->form_validation->set_rules('current_result','Result','trim|required');
        $this->form_validation->set_rules('program_start_date','Programme Start','trim|required');
        $this->form_validation->set_rules('program_end_date','Programme End','trim|required');
        $this->form_validation->set_rules('uni_contact_person','Contact Person','trim|required');
        $this->form_validation->set_rules('uni_contact_person_phone','Contact Phone','trim|required');
        $this->form_validation->set_rules('std_housing','Housing','trim|required');
        $this->form_validation->set_rules('std_address','Address Phone','trim|required');
        //$this->form_validation->set_rules('loan_id','Loan ID','trim|required');
        ///$this->form_validation->set_rules('loan_type','Loan Type','trim|required');
        ///$this->form_validation->set_rules('loan_amount','Amount','trim|required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('client/header_view', $data);
			$this->load->view('client/personal_details_view');
		}else{
			$this->load->view('client/header_view', $data);
			$dob_data = array();
			$lga_data = array();
			$mid_data = array();
			$ref_data = array();
			$adl_data = array();
			$csr_data = array();

			$name = $this->input->post('first_name').$this->input->post('first_name').time();

			//Birth Certificate upload
			$dob_config['upload_path'] = './assets/uploads/birth_certificate/';
			$dob_config['allowed_types'] = 'jpg|png';
			$dob_config['max_size'] = '512';
			$dob_config['file_name'] = $name;
			$this->upload->initialize($dob_config);
			if(!$this->upload->do_upload('dob_file')){
				$errors = array('error' => $this->upload->display_errors());
				$erm = "<b>LGA:</b><br>";
				foreach($errors as $er){
					$erm.=$er.'<br>';
				}
				$this->session->set_flashdata('error_msg', $erm);
				$this->load->view('client/personal_details_view');
			}else{
				$dob_data = $this->upload->data();//hold lga upload data
				$dob_name = $name.$dob_data['file_ext'];

				//LGA identification upload
				$lga_config['upload_path'] = './assets/uploads/lga/';
				$lga_config['allowed_types'] = 'jpg|png';
				$lga_config['max_size'] = '1024';
				$lga_config['file_name'] = $name;
				$this->upload->initialize($lga_config);
				if(!$this->upload->do_upload('lga_file')){
					$errors = array('error' => $this->upload->display_errors());
					$erm = "<b>LGA:</b><br>";
					foreach($errors as $er){
						$erm.=$er.'<br>';
					}
					$this->session->set_flashdata('error_msg', $erm);
					$this->load->view('client/personal_details_view');
				}else{
					$lga_data = $this->upload->data();//hold lga upload data
					$lga_name = $name.$lga_data['file_ext'];

					//MODE OF IDENTIFICATION upload
					$mid_config['upload_path'] = './assets/uploads/mode_of_identification/';
					$mid_config['allowed_types'] = 'jpg|png';
					$mid_config['max_size'] = '512';
					$mid_config['file_name'] = $name;
					$this->upload->initialize($mid_config);
					if(!$this->upload->do_upload('mid_file')){
						$errors = array('error' => $this->upload->display_errors());
						$erm = "<b>Mode of Identification:</b><br>";
						foreach($errors as $er){
							$erm.=$er.'<br>';
						}
						$this->session->set_flashdata('error_msg',$erm);
						$this->load->view('client/personal_details_view');
					}else{
						$mid_data = $this->upload->data();//hold mid upload data
						$mid_name = $name.$mid_data['file_ext'];

						//signed Reference Letter upload
						$ref_config['upload_path'] = './assets/uploads/reference_letter/';
						$ref_config['allowed_types'] = 'jpg|png';
						$ref_config['max_size'] = '512';
						$ref_config['file_name'] = $name;
						$this->upload->initialize($ref_config);
						if(!$this->upload->do_upload('ref_file')){
							$errors = array('error' => $this->upload->display_errors());
							$erm = "<b>Admission Letter:</b><br>";
							foreach($errors as $er){
								$erm.=$er.'<br>';
							}
							$this->session->set_flashdata('error_msg',$erm);
							$this->load->view('client/personal_details_view');
						}else{
							$ref_data = $this->upload->data();
							$ref_name = $name.$ref_data['file_ext'];

							//Admission Letter upload
							$adl_config['upload_path'] = './assets/uploads/admission_letter/';
							$adl_config['allowed_types'] = 'jpg|png';
							$adl_config['max_size'] = '512';
							$adl_config['file_name'] = $name;
							$this->upload->initialize($adl_config);
							if(!$this->upload->do_upload('adl_file')){
								$errors = array('error' => $this->upload->display_errors());
								$erm = "<b>Admission Letter:</b><br>";
								foreach($errors as $er){
									$erm.=$er.'<br>';
								}
								$this->session->set_flashdata('error_msg',$erm);
								$this->load->view('client/personal_details_view');
							}else{
								$adl_data = $this->upload->data();//hold adl upload data
								$adl_name = $name.$adl_data['file_ext'];

								//Current Session Result upload
								$csr_config['upload_path'] = './assets/uploads/current_session_result/';
								$csr_config['allowed_types'] = 'jpg|png';
								$csr_config['max_size'] = '512';
								$csr_config['file_name'] = $name;
								$this->upload->initialize($csr_config);
								if(!$this->upload->do_upload('csr_file')){
									$errors = array('error' => $this->upload->display_errors());
									$erm = "<b>Current Session Result:</b><br>";
									foreach($errors as $er){
										$erm.=$er.'<br>';
									}
									$this->session->set_flashdata('error_msg',$erm);
									$this->load->view('client/personal_details_view');
								}else{
									$csr_data = $this->upload->data();//hold csr upload data
									$csr_name = $name.$csr_data['file_ext'];

									if($this->Loan_model->addPersonalDetails($dob_name,$lga_name,$mid_name,$ref_name,$adl_name,$csr_name)){// > 0){
										$this->session->set_flashdata('rsuccess_msg', 'Your loan application is successfully.');
										redirect(base_url().'client/LoanApplication');
									}else{
										$this->session->set_flashdata('error_msg', "Your loan application wasn't successful.");
										$this->load->view('client/personal_details_view');
									}
								}
							}
						}
					}
				}
			}
		}
    }

}
