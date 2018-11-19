<?php
	$this->session->set_userdata('last_page', current_url());
	if ( !$this->input->server('HTTP_REFERER')
		|| empty($this->session->userdata('user_id')))
	{
		if(empty($this->session->userdata('user_id'))){
			$this->session->set_flashdata('error_msg', 'Session Expired. Log in.');
			//redirect(base_url(), 'refresh');
		}else{
			$this->session->set_flashdata('error_msg', 'Url Access disabled. Log in.');
			//redirect(base_url(), 'refresh');
		}
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Bayelsa State Higher Education Student Loan Board | Personal Details</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?=base_url()?>assets/clients/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/clients/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?=base_url()?>assets/clients/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('<?=base_url()?>assets/examples/images/login.jpg')">
	    <!--   Creative Tim Branding   -->


		

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
		                    <form action="<?=base_url('client/PersonalDetails')?>" enctype="multipart/form-data" method="post">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">

									<h5>Welcome <?=$this->session->firstname.' '.$this->session->lastname?>, complete the form below. | <a href="login/logout">Logout</a></h5>
									<p style="color:red;"><?= validation_errors(); ?></p>
								</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#loantype" data-toggle="tab">Loan Type</a></li>
			                            <li><a href="#personal" data-toggle="tab">Personal</a></li>
			                            <li><a href="#university" data-toggle="tab">University</a></li>
										<li><a href="#declaration" data-toggle="tab">Declaration</a></li>

			                        </ul>
								</div>

		                        <div class="tab-content">

		                            <div class="tab-pane" id="loantype">
		                                <h4 class="info-text">Select your preferred loan type</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-3">
		                                            <!--<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This loan category is for students currently undergoing their Undergraduate programme.">-->
		                                                <input type="radio" name="loancat" value="Undergraduate" <?php echo  set_radio('loancat', 'Undergraduate');?> >
		                                                <div class="icon">
		                                                    <i class="material-icons">Undergraduate</i>
		                                                </div>
		                                                <h6>Undergraduate</h6>
		                                            <!--</div>-->
		                                        </div>
		                                        <div class="col-sm-3">
		                                            <!--<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Bayelsans who are seeking for funds to further their education to acquire a Masters Degree">-->
		                                                <input type="radio" name="loancat" value="Postgraduate" <?php echo  set_radio('loancat', 'Postgraduate');?> >
		                                                <div class="icon">
		                                                    <i class="material-icons">Postgraduate</i>
		                                                </div>
		                                                <h6>Postgraduate</h6>
		                                            <!--</div>-->
		                                        </div>
													<div class="col-sm-3">
		                                            <!--<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Bayelsans currently undergoing their mandantory one(1) year law school">-->
		                                                <input type="radio" name="loancat" value="Law" <?php echo  set_radio('loancat', 'Law');?> >
		                                                <div class="icon">
		                                                    <i class="material-icons">Law</i>
		                                                </div>
		                                                <h6>Law</h6>
		                                            <!--</div>-->
		                                        </div>
													<div class="col-sm-3">
		                                            <!--<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Medical students">-->
		                                                <input type="radio" name="loancat" value="Health" <?php echo  set_radio('loancat', 'Health');?> >
		                                                <div class="icon">
		                                                    <i class="material-icons">Health</i>
		                                                </div>
		                                                <h6>Health</h6>
		                                            <!--</div>-->
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>


									<div class="tab-pane" id="personal">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Let's start with the basic details.</h4>
			                            	</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="first_name"> First Name : <span class="danger">*</span> </label>
																							<input type="text" class="form-control required" id="first_name" name="first_name" value="<?=$this->session->firstname?>"> </div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="last_name"> Last Name : <span class="danger">*</span> </label>
																							<input type="text" class="form-control required" id="last_name" name="last_name" value="<?=$this->session->lastname?>"> </div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="email_add"> Email Address : <span class="danger">*</span> </label>
																							<input type="email" class="form-control required" id="email_add" name="email_add" value="<?=$this->session->email?>"> </div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="phone_number">Phone Number :</label>
																							<input type="tel" class="form-control required" name="phone_number" id="phone_number" value="<?=$this->session->phone?>"> </div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="wdate2">Date of Birth :</label>
																							<input type="date" class="form-control required" id="dob" name="dob" value="<?php echo set_value('dob'); ?>"> </div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="State_of_origin"> Upload Birth Certificate : <span class="danger">*</span> </label>
																							<div class="form-group">
																								<input type="file" class="form-control-file" id="dob_file" name="dob_file" style="opacity: 1; position:inherit;">
																								<!--  <div class="fileinput fileinput-new input-group" data-provides="fileinput">
																											<div class="form-control" data-trigger="fileinput">
																													<i class="fa fa-file fileinput-exists"></i>
																													<span class="fileinput-filename"></span>
																											</div>
																											<span class="input-group-addon btn btn-secondary btn-file">
																																			<span class="fileinput-new">Select file</span>
																																			<span class="fileinput-exists">Change</span>
																																			<input type="file" name="dob_file" id="dob_file">
																																			</span>
																											<a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a> </div> -->
																							</div>
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="email_add"> Residential Address(Home) : <span class="danger">*</span> </label>
																							<input type="text" class="form-control required" id="address" name="address" value="<?=$this->session->address?>"> </div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="phone_number">State of Residence :</label>
																							<select class="form-control required" id="state_of_residence" name="state_of_residence" required>
																									<option selected disabled>Select State</option>
																									<option value="Bayelsa" <?= set_select('state_of_residence','Bayelsa'); ?>>Bayelsa</option>
																							</select>
																					</div>
																			</div>
																	</div>

																	<h4 class="card-title">Applicant State of Origin</h4>
																	<h6 class="card-subtitle">Complete the form below</h6>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="State_of_origin"> State of Origin : <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="state_of_origin" name="state_of_origin">
																									<option value="">Select State</option>
																									<option value="Bayelsa" <?= set_select('state_of_origin','Bayelsa'); ?>>Bayelsa</option>
																							</select>
																					</div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="senatorial_district"> Senatorial District : <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="senatorial_district" name="senatorial_district">
																									<option value="">Select Senatorial District</option>
																									<option value="Bayelsa Central" <?= set_select('senatorial_district','Bayelsa Central'); ?>>Bayelsa Central</option>
																									<option value="Bayelsa East" <?= set_select('senatorial_district','Bayelsa East'); ?>>Bayelsa East</option>
																									<option value="Bayelsa West" <?= set_select('senatorial_district','Bayelsa West'); ?>>Bayelsa West</option>
																							</select>
																					</div>
																			</div>
																	</div>
																	<div class="row">

																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="lga"> Local Government Area : <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="lga" name="lga">
																									<option value="">Select LGA</option>
																									<option value="Brass" <?= set_select('lga','Brass'); ?>>Brass</option>
																									<option value="Ekeremor" <?= set_select('lga','Ekeremor'); ?>>Ekeremor</option>
																									<option value="Kolokuma/Opokuma" <?= set_select('lga','Kolokuma/Opokuma'); ?>>Kolokuma/Opokuma</option>
																									<option value="Nembe" <?= set_select('lga','Nembe'); ?>>Nembe</option>
																									<option value="Ogbia" <?= set_select('lga','Ogbia'); ?>>Ogbia</option>
																									<option value="Sagbama" <?= set_select('lga','Sagbama'); ?>>Sagbama</option>
																									<option value="Southern Ijaw" <?= set_select('lga','Southern Ijaw'); ?>>Southern Ijaw</option>
																									<option value="Yenagoa" <?= set_select('lga','Yenagoa'); ?>>Yenagoa</option>
																							</select>
																					</div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="town_of_origin"> Constituency : <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="town_of_origin" name="town_of_origin">
																									<option value="">Select Constituency</option>
																									<option value="Constituency I" <?= set_select('town_of_origin','Constituency I'); ?>>Constituency I</option>
																									<option value="Constituency II" <?= set_select('town_of_origin','Constituency II'); ?>>Constituency II</option>
																									<option value="Constituency III" <?= set_select('town_of_origin','Constituency III'); ?>>Constituency III</option>
																							</select>
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="village_of_origin"> Village : <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="village_of_origin" name="village_of_origin">
																									<option value="">Select Village of Origin</option>
																									<option value="Bayelsa" <?= set_select('village_of_origin','Bayelsa'); ?>>Bayelsa</option>
																							</select>
																					</div>
																			</div>

																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="State_of_origin"> Upload Local Government Identification : <span class="danger">*</span> </label>
																							<div class="form-group">
																								<input type="file" class="form-control-file" id="lga_file" name="lga_file" style="opacity: 1; position:inherit;">
																									<!--<div class="fileinput fileinput-new input-group" data-provides="fileinput">
																											<div class="form-control" data-trigger="fileinput">
																													<i class="fa fa-file fileinput-exists"></i>
																													<span class="fileinput-filename"></span>
																											</div>
																											<span class="input-group-addon btn btn-secondary btn-file">
																																			<span class="fileinput-new">Select file</span>
																																			<span class="fileinput-exists">Change</span>
																																			<input type="file" name="lga_file" id="lga_file">
																																			</span>
																											<a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a> </div> -->
																							</div>
																					</div>
																			</div>

																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="mode_identity"> Mode of Identity <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="mode_identity" name="mode_identity">
																									<option value="">Select</option>
																									<option value="International Passport" <?= set_select('mode_identity','International Passport'); ?>>International Passport</option>
																									<option value="National Identity Card" <?= set_select('mode_identity','National Identity Card'); ?>>National Identity Card</option>
																									<option value="Voters Card" <?= set_select('mode_identity','Voters Card'); ?>>Voter's Card</option>

																							</select>
																					</div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label>Upload Identification</label>
																								<input type="file" class="form-control-file" id="mid_file" name="mid_file" style="opacity: 1; position:inherit;">
																						<!--  <div class="fileinput fileinput-new input-group" data-provides="fileinput">
																									<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
																									<input type="hidden">
																									<input type="hidden"><input type="file" name="mid_file" id="mid_file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div> -->
																					</div>
																			</div>

																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="reference_signed"> Upload Signed Reference Form : <span class="danger">*</span> </label>
																							<div class="form-group">
																								<input type="file" class="form-control-file" id="ref_file" name="ref_file" style="opacity: 1; position:inherit;">

																							</div>
																					</div>
																			</div>
																			<div class="col-md-6">

																			</div>
																	</div>

																	<h4 class="card-title">Parent's Details</h4>
																	<h6 class="card-subtitle">Complete the form below</h6>

																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="father_name"> Father's Full Name : <span class="danger">*</span> </label>
																							<input type="text" class="form-control required" id="father_name" name="father_name" value="<?=set_value('father_name')?>" autocomplete="off"> </div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="mother_name"> Mother's Full Name : <span class="danger">*</span> </label>
																							<input type="text" class="form-control required" id="mother_name" name="mother_name" value="<?=set_value('mother_name')?>" autocomplete="off"> </div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="father_phone"> Phone Number : <span class="danger">*</span> </label>
																							<input type="tel" class="form-control required" id="father_phone" name="father_phone" value="<?=set_value('father_phone')?>" Placeholder="Provide your Father's Phone Number" autocomplete="off"> </div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="mother_number">Phone Number :</label>
																							<input type="tel" class="form-control required" name="mother_phone" id="mother_phone" value="<?=set_value('mother_phone')?>" Placeholder="Provide your Mother's Phone Number" autocomplete="off" > </div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="father_State_of_origin"> Father State of Origin : <span class="danger">*</span> </label>
																							<select class="custom-select form-control required" id="father_state_of_origin" name="father_state_of_origin">
																									<option value="">Select State</option>
																									<option value="Bayelsa" <?= set_select('father_state_of_origin','Bayelsa'); ?>>Bayelsa</option>
																							</select>
																					</div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<div class="form-group">
																									<label for="mother_State_of_origin"> Mother State of Origin : <span class="danger">*</span> </label>
																									<select class="custom-select form-control required" id="mother_state_of_origin" name="mother_state_of_origin">
																											<option value="">Select State</option>
																											<option value="Bayelsa" <?= set_select('mother_state_of_origin','Bayelsa'); ?>>Bayelsa</option>
																									</select>
																							</div>
																					</div>
																			</div>
																	</div>

																	<h4 class="card-title">Bank Details</h4>
																	<h6 class="card-subtitle">Complete the form below</h6>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<div class="form-group">
																									<label for="bank_name"> Bank Name<span class="danger">*</span> </label>
																									<select class="custom-select form-control required" id="bank_name" name="bank_name">
																											<option value="">Select Bank</option>
																											<option value="Diamond Bank" <?= set_select('bank_name','Diamond Bank'); ?>>Diamond Bank</option>
																									</select>
																							</div>
																					</div>
																			</div>
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="account_number">Account Number</label>
																							<input type="text" class="form-control required" id="account_number" name="account_number" value="<?php echo set_value('account_number'); ?>"> </div>
																			</div>

																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label for="bvn">Bank Verification Number</label>
																							<input type="text" class="form-control required" id="bvn" name="bvn" value="<?php echo set_value('bvn'); ?>"> </div>
																			</div>
																	</div>
																</div>

																<!-- start University form -->
		                            <div class="tab-pane" id="university">
		                                <div class="row">
		                                    <h4 class="info-text"> Drop us a small description.</h4>
		                                </div>
																		<div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <?php if($details['loan_type']=='Health'){?>
																		                                      <label for="universityName">Name of Institution</label>
																		                  <?php }else{ ?>
																		                                      <label for="universityName">University Name</label>
																		                  <?php } ?>
																		                  <select class="custom-select form-control required" id="university_name" name="university_name">
																		                      <option value="">Select University</option>
																		                      <option value="Niger Delta University" <?= set_select('university_name','Niger Delta University'); ?>>Niger Delta University</option>
																		                  </select>
																		              </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="universityState">University State</label>
																		                  <select class="custom-select form-control required" id="university_state" name="university_state">
																		                      <option value="">Select State</option>
																		                      <option value="Bayelsa" <?= set_select('university_state','Bayelsa'); ?>>Bayelsa</option>
																		                  </select>
																		              </div>
																		          </div>

																		      </div>
																		      <div class="row">
																		          <div id="ouni" class="col-md-6 hide">
																		              <div class="form-group">
																		                  <label for="otherUniversity">Other University: (Please specify if not listed above)</label>
																		                  <input type="text" class="" id="other_university" name="other_university" value="<?php echo set_value('other_university'); ?>"> </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="universityCity">City</label>
																		                  <input type="text" class="form-control required" id="university_city" name="university_city" value="<?php echo set_value('university_city'); ?>"> </div>
																		          </div>
																		      </div>
																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="course">Course of Study</label>
																		                  <input type="text" class="form-control required" id="course_of_study" name="course_of_study" value="<?php echo set_value('course_of_study'); ?>"> </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="anticipatedDegree">Anticipated Degree</label>
																		                  <?php if($details['loan_type']=='Health'){
																		?>
																		<input type="text" class="form-control required" id="anticipated_degree" name="anticipated_degree" value="<?php echo set_value('anticipated_degree'); ?>" placeholder="Please specify your degree on graduation, Example: BSc">
																		<?php
																		}else{?>
																		<select class="custom-select form-control required" id="anticipated_degree" name="anticipated_degree" >
																		<option value=''>Select Anticipated Degree</option>
																		</select>
																		<?php } ?>
																		</div>
																		          </div>

																		      </div>
																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="UniversityLevel">University Level</label>
																		                  <select class="custom-select form-control required" id="university_level" name="university_level">
																		                      <option value="">Select University Level</option>
																		                      <option value="Year 1" <?= set_select('university_level','Year 1'); ?>>Year 1</option>
																		                      <option value="Year 2" <?= set_select('university_level','Year 2'); ?>>Year 2</option>
																		                      <option value="Year 3" <?= set_select('university_level','Year 3'); ?>>Year 3</option>
																		                      <option value="Year 4" <?= set_select('university_level','Year 4'); ?>>Year 4</option>
																		                      <option value="Year 5" <?= set_select('university_level','Year 5'); ?>>Year 5</option>
																		                      <option value="Year 6" <?= set_select('university_level','Year 6'); ?>>Year 6</option>
																		                      <option value="Year 7" <?= set_select('university_level','Year 7'); ?>>Year 7</option>
																		                  </select>
																		                </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="semesterLevel">Semester Level</label>
																		                  <select class="custom-select form-control required" id="semester_level" name="semester_level">
																		                      <option value="">Select University Level</option>
																		                      <option value="Semester 1" <?= set_select('semester_level','Semester 1'); ?>>Semester 1</option>
																		                      <option value="Semester 2" <?= set_select('semester_level','Semester 2'); ?>>Semester 2</option>

																		                  </select>
																		              </div>
																		          </div>
																		      </div>

																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="student_id_number">Student's ID Number</label>
																		                  <input type="text" class="form-control required" id="student_id_number" name="student_id_number" value="<?php echo set_value('student_id_number'); ?>"> </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="matric_number">Matric Number :</label>
																		                  <input type="text" class="form-control required" name="matric_number" id="matric_number" value="<?php echo set_value('matric_number'); ?>">
																		              </div>
																		          </div>
																		      </div>
																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label>Upload Admission Letter</label>
																											<input type="file" class="form-control-file" id="adl_file" name="adl_file" style="opacity: 1; position:inherit;">

																		                 <!-- <div class="fileinput fileinput-new input-group" data-provides="fileinput">
																		                      <div class="form-control" data-trigger="fileinput">  <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
																		                              <input type="hidden">
																		                              <input type="hidden"><input type="file" name="adl_file" name="adl_file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div> -->
																		              </div>
																		          </div>
																		          <div class="col-md-6">

																		            <div class="form-group">
																		                <label for="course_duration">Course Duration</label>
																		                <select class="custom-select form-control required" id="course_duration" name="course_duration">
																		                    <option value="">Select Course Duration</option>
																		                    <option value="1 Year" <?= set_select('course_duration','1 Year'); ?>>1 Year</option>
																		                    <option value="2 Years" <?= set_select('course_duration','2 Years'); ?>>2 Years</option>
																		                    <option value="3 Years" <?= set_select('course_duration','3 Years'); ?>>3 Years</option>
																		                    <option value="4 Years" <?= set_select('course_duration','4 Years'); ?>>4 Years</option>
																		                    <option value="5 Years" <?= set_select('course_duration','5 Years'); ?>>5 Years</option>
																		                    <option value="6 Years" <?= set_select('course_duration','6 Years'); ?>>6 Years</option>
																		                    <option value="7 Years" <?= set_select('course_duration','7 Years'); ?>>7 Years</option>
																		                </select></div>

																		          </div>

																		      </div>
																		<?php if($details['loan_type'] == 'Health' || $details['loan_type'] == 'Law'): ?>
																		      <div class="row">
																		<div class="col-md-12" id="pd">
																		<div class="row">
																		<div class="col-md-6">
																		<div class="form-group">
																		  <label for="uni_contact_person">Previous Degree Acquired</label>
																		  <input type="text" class="form-control required" name="previous_degree_acquired[]" id="previous_degree_acquired[]" value="<?php echo set_value('previous_degree_acquired[]'); ?>" placeholder="">
																		</div>
																		</div>
																		<div class="col-md-6">
																		<div class="form-group">
																		  <label>Upload Previous Result</label>
																		  <input type="file" class="form-control-file" id="pda_file[]" name="pda_file[]" style="opacity: 1; position:inherit;">

																		</div>
																		</div>
																		</div>
																		</div>
																		<div class="row">
																		<input type="button" value="+ Add more previous degrees" id="add_pd" style=" font-size: small; margin-left: 30px; "/>
																		<input type="button" value="- Remove previous degrees" id="rem_pd" style=" font-size: small;"/>
																		</div>
																		</div>
																		<?php endif; ?>
																		      <div class="row">

																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="currentResult">Indicate Current Result</label>
																		                  <select class="custom-select form-control required" id="current_result" name="current_result">
																		                      <option value="">Select Current Result</option>
																		                      <option value="Semester Result" <?= set_select('current_result','Semester Result'); ?>>Semester Result</option>
																		                      <option value="Foundation/Pre-Degree Result" <?= set_select('current_result','Foundation/Pre-Degree Result'); ?>>Foundation/Pre-Degree Result</option>
																		                      <option value="O-Level Result" <?= set_select('current_result','O-Level Result'); ?>>O-Level Result</option>
																		                  </select>
																		              </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label>Upload Current Result</label>
																											<input type="file" class="form-control-file" id="csr_file" name="csr_file" style="opacity: 1; position:inherit;">
																		                 <!-- <div class="fileinput fileinput-new input-group" data-provides="fileinput">
																		                      <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
																		                              <input type="hidden">
																		                              <input type="hidden"><input type="file" name="csr_file" id="csr_file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div> -->
																		              </div>
																		          </div>

																		      </div>

																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="program_start_date"> Programme Start Date:</label>
																		                  <input type="date" class="form-control required" id="program_start_date" name="program_start_date" value="<?php echo set_value('program_start_date'); ?>">
																		              </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="program_end_date"> Programme End Date:</label>
																		                  <input type="date" class="form-control required" id="program_end_date" name="program_end_date" value="<?php echo set_value('program_end_date'); ?>">
																		              </div>
																		          </div>

																		      </div>
																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="uni_contact_person">University Contact(Dean / Head of Student Affairs)</label>
																		                  <input type="text" class="form-control required" name="uni_contact_person" id="uni_contact_person" value="<?php echo set_value('uni_contact_person'); ?>">
																		              </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="uni_contact_person_phone">Phone Number</label>
																		                  <input type="text" class="form-control required" id="uni_contact_person_phone" name="uni_contact_person_phone" value="<?php echo set_value('uni_contact_person_phone'); ?>"> </div>
																		          </div>

																		      </div>
																		      <div class="row">
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="std_housing">Student's Housing</label>
																		                  <select class="custom-select form-control required" id="std_housing" name="std_housing">
																		                      <option value="">Select Current Result</option>
																		                      <option value="Hostel (on campus)" <?= set_select('std_housing','Hostel (on campus)'); ?>>Hostel (on campus)</option>
																		                      <option value="Hostel (off campus)" <?= set_select('std_housing','Hostel (off campus)'); ?>>Hostel (off campus)</option>
																		                      <option value="Student Apartment (off campus)" <?= set_select('std_housing','Student Apartment (off campus)'); ?>>Student Apartment (off campus)</option>
																		                      <option value="Living with relative" <?= set_select('std_housing','Living with relative'); ?>>Living with relative</option>
																		                  </select>
																		              </div>
																		          </div>
																		          <div class="col-md-6">
																		              <div class="form-group">
																		                  <label for="std_address">Student Hostel / Apartment Address</label>
																		                  <input type="text" class="form-control required" id="std_address" name="std_address" value="<?php echo set_value('std_address'); ?>">
																		              </div>
																		          </div>

																		      </div>

		                            </div>
																<!-- End of University Form -->

																<!-- start University form -->
		                            <div class="tab-pane" id="declaration">
		                                <div class="row">
		                                    <h4 class="info-text"> Declaration</h4>
		                                </div>
																		<div class="row">

																	      <div class="col-sm-3">
																	          <div class="picture-container">
																	              <div class="picture">
																	                <img src="<?=base_url()?>assets/passports/<?=$this->session->passport?>" class="picture-src" id="wizardPicturePreview" title=""/>

																	              </div>

																	          </div>
																	      </div>
																	      <div class="col-sm-8">
																	          <div class="input-group">
																			            <div class="form-group label-floating">
																			                 <label for="behName1">I <b><?=$this->session->firstname.' '.$this->session->lastname?></b> hereby apply for this loan with Bayelsa State Higher Education Student Loan Board. I understand that the information given herein and the documents supplied are on the basis for accessing this loan. I therefore affirm that the information submitted is correct and if upon verification on the authenticity of the details/documents contained in this application is false either in part or in full, then my loan request will be withdrawn or declined.</label>
																			             </div>
																									 <div class="form-group">

                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="agree" name="agree" value="agree"  <?php echo set_checkbox('agree', 'agree'); ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">I agree</span>
                                            </label>
                                        </div>
																	          </div>


																	      </div>

																	  </div>
		                            </div>
																<!-- End of University Form -->

		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />


	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            Developed By <a href="#">o3interactive Technologies</a>
	        </div>
	    </div>
	</div>

		<!--   Core JS Files   -->
		<script src="<?=base_url()?>assets/clients/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/clients/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/clients/js/jquery.bootstrap.js" type="text/javascript"></script>

		<!--  Plugin for the Wizard -->
		<script src="<?=base_url()?>assets/clients/js/material-bootstrap-wizard.js"></script>

		<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
		<script src="<?=base_url()?>assets/clients/js/jquery.validate.min.js"></script>
		
		<script src="<?=base_url()?>assets/toastr.js"></script>
	<?php if ($this->session->flashdata('success_msg')
			&& $this->session->flashdata('success_msg') != ""): ?>
			<script>
					toastr.success('<?php echo $this->session->flashdata('success_msg');?>', 'Success:');
			</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('info_msg')
			&& $this->session->flashdata('info_msg') != ""): ?>
			<script>
					toastr.info('<?php echo $this->session->flashdata('info_msg');?>', 'Info:');
			</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('warning_msg')
			&& $this->session->flashdata('warning_msg') != ""): ?>
			<script>
					toastr.warning('<?php echo $this->session->flashdata('warning_msg');?>', 'Warning:');
			</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('error_msg')
			&& $this->session->flashdata('error_msg') != ""): ?>
			<script>
					toastr.error('<?php echo $this->session->flashdata('error_msg');?>', 'Error:');
			</script>
	<?php endif; ?>

	<script>
		var lga_array = new Array("Brass","Ekeremor","Kolokuma/Opokuma","Nembe","Ogbia","Sagbama","Southern Ijaw","Yenagoa");
		var village_array = new Array(
			"",
			"Abadikiri|Abedigbene|Abolikiri|Abulobiri|Adaakou|Adamkiri|Agbakabiriyai|Agubagaha|Akasa|Akipelai|Amagbefeu|Ampogu|Aparanbio|Arumhikiri|Atuba|Awajeakiri|Awazakiri|Ayagirikiri|Bamankiri|Beletiama|Benkiri|Biantubu|Boama|Bonneykiri|Brass|Buogboko|Burukiri|Cape Formosa|Captninakiri|Clarendon|Curpen|Duokumgbene|Ebelegbene|Ebikiri|Edebarikiri|Egbedekiri|Egbilaba|Egekiri|Egeletia|Egeregere|Egereogo|Egwema|Egwema Pogu|Ekemakiri|Ekesitoko|Elgitekin|Eluenigbene|Enegalogo|Ereweibio|Etabolagone|Ewediri|Eweisuo|Ewoama|Ewokiri|Eyenkiri|Fantuo|Fiwaritimi|Ganigbene|Gbene Ghama|Gold Coast|Golubokiri|Guorogbene|lbelebiekiri|lbtufra-Makiri|ldema|lgbabele|lgbabopiri|ljawki|lmbiri|lniedoyey-Ekiri|lsikara|lwoama|Jekegbene|Kabuke|Kalabilema|Kallah Oroba Island|Kamikiri|Kemmers Town|Kinkiamabugo|Kirigupo|Kirikakiri|Kongho|Kpangbokiri|Kurogbaba|Liama|Location|Mabokubu|Mansiorkiri|Mbaskiri|Mileokiri|Minibeleu|Misakiri|Moborokiri|Monikiri|Munighakiri|Namatebe|Nampoju|Oaroweiama|Obama|Obi|Obudogbene|Odioma|Ofo Market|Ogalkiri|Ogbonotroko|Oimiekiri|Okiinibiriba|Okinbiriboteu|Okobotruo|Okoribukio|Okparanaba|Okpoama|Okpokiri|Olugama|Olukama|Olukugbene|Omonikiri|Omugopogu|Onunu|Onunwypele|Opolochi|Oporoma|Opu Akassa|Opuorubo|Orawo|Oro-Foniweitoro|Orukiri|Orukutu| Osugbene| Otatubei|Otolo|Otufor|Peribe|Philippa|Sabatoru|Saikiri|Sanekubo|Sangana|Sounkiri|Sowegbene|Spiffis Town|Tana|Tengikiri|Tereke|Ton Kiri|Tuluama|Wabokiri|Wagite|Waribokikiri|Warise Gbene|Warri",
			"Aiegbe |Aleibiri |Amabulour |Ananagbene|Angalawei-gbene|Ayamassa|Bown-Adagbabiri |Ebikeme-Gbene |Eduwini |Ekeremor |Feremoama |Fontoru-Gbene |lsampou|Isreal o-|Zion |Lalagbene |Ndoro |Norhene |Obrigbene |Ogbogbene |Ogbosuwar |Oporoma |Oyiakiri|Peretou-Gbene |Tamogbene |Tamu-Gbene |Tarakiri |Tietiegbene|Toru-Foutorugbene",
			"Akaibiri |Aya-Ama |Ayibabiri |Ayokoroma |Gbarama |lgbanwa |lgbedi |Kalama|Odi |Ofonibiri |Okolobaa |Oloibiri |Oyobu |Sabagreia |Sampou",
			"Adukiri |Agada |Agrisaba |Akakumana |Allagaokiri |Amasara |Benkiri|Dorgu-Ewoama |Dumobi-Kumakiri |Ekpeikiri |Elemuama |Enyumuana |Etieme|Ewokiri|Fekorukiri|lgbeta-Ewoama |lkensi|lsaiahkiri|lseleogona |lserekiri |Mini |Nembe|Obiama |Obiata |Odekiri |Okokokiri |Okoroba |Ologoma |Olusasiri |Oromabiri |Otumakiri |Sabatoru |Sangakubu |Shellkiri |Tengelkiri |Tengikokiri |Tombi",
			"Abobir |Akolomani |Amorokeni |Amuruto |Anyama |Egeleama |Elebele |Emadike |Emago |Emakalakala |Emegai |Epebu |Ewama|Ewoi lgbo |lmiringi |lyakiri |Kola |Obakilolo |Obelebiri |Obuaba |Ogbia |Ogboama|Ogireyankiri|Okiki |Okodi |Olobiri |Ologi|Ologoghe|Oluaganagu |Onuebum |Opume |Oruma |Otegila |Otegwe |Otuabagi |Otuabai 1|Otuabula 1|Otuabula 11|Otuaganagu |Otuakeme |Otuedu |Otuegwe |Otuekpein |Otuogidi |Otuogori |Otuokpoti |Qutar |Sagatama |Sobo Camp |Warbugoama",
			"Abuku |Adagbabiri |Agbere |Agoro |Agorogbene |Akeddei |Angalabiri |Anibeze |Asamabiri |Bolou-Oirua |Dagnnama |Ebendebiri|Egbepulougbene |Ekperiware |Elemebiri|lgoni |lkpidiama |Kanan |Odoni |Ofoni |Ogobiri|Ogobokiriama|Ogoni |Okumbiri |Osibiri |Osssiama |Sagbama|Toru-Angiama|Toru-Ebeni |Trofani |Tungbabiri |Tungbo",
			"--District I--|Akaragbene |Akpobeleiowei |Alagbene |Alisogbene |Amataugbene |Apoi|Arikaripo Aziama |Sabatonogbene |Sayentorugbene |Sikirubogbene |Sirieigbene |Sirisyegbene |Sitou |Sokomgbene |Suragbene |Surukububo |Consingbere |Diogbegbene |Donkerogbene |Douglasgbene |Dubagbene |Ebatimogbene |Ebidargbene |Eduregbene |Egberime 1|Egberime 11|Ekeogbene |Ekinigbene |Erebugbene |Etemere |Fiesigbene |Foniweitoro |Fungbene |Gbaran |Glologbene |Guaregbene |Hewigbene |Hittargbene |Hopin Point |lbikologbene |ldebugbene |lzonagbene |Kalarogbene |Kalawarigbene |Kamboira Soria |Kasoma |Kogbene |Kokologbene |Koluama|Komobiama|Komoforagbene |Kugbogbene |Lasota|Labia |Lofamagbene |Loinbirikibi |Magbogbene |Ngakoro |Ngukuiagbene |North Point |Nyuseyegbene |Obomikorogbene |Odeigbene |Ofmiegbene |Ofogbene |Ogbogbene |Ogbogero |Ogboidigbene |Ogodikoro |Ogolangorugbene |Okoboudob |Okpofuwari|Olobia Olodi |Oloogbene |Oporogbene |Osugbene |Paratubo |Pepegbene |Pepelegbene|Peresisofogbene |Petugbene |Piebolegbene |Pisegbene|Port-Harcourt-gbene |Rituagbene Saugagbene |Segpe|Sonamadingbene |Sonotubogbene |Tacadosgene |Talegbene |Tangagae |Tebitubufor |Teibidaba|Tipama |Tofiagbene |Tologbene|Tologbene|Tuimpeigbene |Ukptatube |Ukubie|Watchmangbene |Yedogbene|--District II--|Abagbene|Abolgbene |Agidigbere |Aguobiri |Aleegbene |Amassoma |Angiama |Angiama-|gbene Ayama |Ayougbene |Azuzuama |Saberegbene |Setterland |Siabugbene |Siagbogbene |Solongbene |Soma|Climonbene|Diebu |Egarebeni |Ekeni |Ekowe |Emete |Eniwari|Erefumakomogbene|Ezetu |Foinbiri |Furopa |Gboloketise |lgbomatoru |lkebiri |lkeingbabiri |lkiambiri|lkoromogbene |lkpirigbene |lsaihgbene |Jermaih-gbene |Kemeligbene |Keregbene |Korokorsei |Korumogbene |Laisukugbene|Lalgbene|Livergbene |Luckygbene |Luduon |Nengigbene |Nicholas-Gbene |Ogilagbene |Ogoubiri |Ohugbabiri |Okigbene |Okpolububo |Olobobene |Olugbogbene |Ondewari |Onyoma |Oporoma |Opuama|Orikowe |Osiama |Otuan |Oweikorogba |Oyeregbene |Ozezebiri |Peremabiri",
			"Abasere |Agbia |Agbobiri |Agorogbene |Agudama|Agudama-Epie|Akada |Akpide |Akunomi |Amarata |Amasso |Anyamabele |Atissa |Azikoro |Bebelibiri |Betaland |Biogbolo |Biseni |Bumodi|Ede-Pie |Egbebiri |Ekeki |Ekpetiama |Emblama |Epie |Fangbe|Freetown |Gbarain |Gbaramtoru |lbia |lgbogene |lkarama |lkibiri|lkolo |Jackbiri |Kaiama |Kalaba |Karama |Korama |Kpansia |Nyanbiri |Obungha |Ogbolomo |Ogoniforu |Ogu |Ojogbolo |Okolobiri |Okorodia |Okotiama |Okutukutu |Omom |Onura |Opolo |Ovelemini |Polaku |Tein |Tombia |Tuburu |Yenegwe|Yeniozue-Epie |Zarama |Zarama Epie"
		);

		function lga(lga_element){
			$('#'+lga_element).empty();
			createOption(lga_element, '', 'Select LGA');
			for(var a=0;a<lga_array.length; a++){
				createOption(lga_element, lga_array[a], lga_array[a]);
			}
		}

		lga('lga');
		$('#lga').change(function(){
			$('#village_of_origin').empty();
			createOption('village_of_origin', '', 'Select Village of Origin');
			var village_sub_array = village_array[document.getElementById('lga').selectedIndex].split("|");

			for(var v=0; v<village_sub_array.length; v++){
				createOption('village_of_origin', village_sub_array[v], village_sub_array[v]);
			}
		});

		function createOption(select_id, id, value) {
			el = document.createElement('option');
			el.value = id;
			el.innerHTML = value;
			el.id = value;
			document.getElementById(select_id).appendChild(el);
		}

		var state_array = new Array("ABIA","ADAMAWA","AKWA IBOM","ANAMBRA","BAUCHI","BAYELSA","BENUE","BORNO","CROSS RIVER","DELTA","EBONYI","EDO","EKITI","ENUGU","FEDERAL CAPITAL TERRITORY","GOMBE","IMO","JIGAWA","KADUNA","KANO","KATSINA","KEBBI","KOGI","KWARA","LAGOS","NASSARAWA","NIGER","OGUN","ONDO","OSUN","OYO","PLATEAU","RIVERS","SOKOTO","TARABA","YOBE","ZAMFARA");
		function state(state_element){
			$('#'+state_element).empty();
			createOption(state_element, '', 'Select State');
			for(var i=0; i<state_array.length; i++){
				createOption(state_element, state_array[i], state_array[i]);
			}
		}
		//state('state_of_origin');
		state('state_of_residence');
		state('father_state_of_origin');
		state('mother_state_of_origin');
		state('university_state');

		var bank_array = new Array("Access Bank Plc","Diamond Bank Plc","Fidelity Bank Plc","First City Monument Bank Plc","First Bank of Nigeria Limited","Guaranty Trust Bank Plc","Polaris Bank Limited","Union Bank of Nigeria Plc","United Bank for Africa Plc","Zenith Bank Plc","Citi Bank Nigeria Limited","Ecobank Nigeria Plc","Heritage Banking Company Limited","Keystone Bank Limited","Stanbic IBTC Bank Plc","Standard Chartered","Sterling Bank Plc","Unity Bank Plc","Wema Bank Plc","SunTrust Bank Nigeria Limited","Providus Bank Limited","Jaiz Bank Plc","Coronation Merchant Bank","FBNQuest Merchant Bank[3]","FSDH Merchant Bank","Rand Merchant Bank","Nova Merchant Bank");
		function banks(){
			$('#bank_name').empty();
			createOption('bank_name', '', 'Select Bank');
			for(var b=0;b<bank_array.length;b++){
				createOption('bank_name', bank_array[b], bank_array[b]);
			}
		}
		banks();

		var loan_type = '<?=$details['loan_type']?>';

		if(loan_type == 'Law'){
			var degree_array = new Array("LLB","LLM");
		}else{
			var degree_array = new Array("BA","BAcc","BAdm","BArch","BDent","B.Ed.","BEng","BMath","BMedSc","BPharm","BSc","BTech","LLA","LLB","BMed");
		}
		function degrees(){
			$('#anticipated_degree').empty();
			createOption('anticipated_degree', '', 'Select Anticipated Degree');
			for(var d=0;d<degree_array.length;d++){
				createOption('anticipated_degree', degree_array[d], degree_array[d]);
			}
		}
		degrees();


		if(loan_type == 'Health'){
			var university_array = new Array("OSUN STATE SCHOOL OF HEALTH TECHNOLOGY, ILESHA","ABIA STATE COLLEGE  OF HEALTH SCIENCES AND MANAGEMENT TECHNOLOGY, ABA","AKWA IBOM STATE SCHOOL OF HEALTH TECHNOLOGY, ETINAN","DELTA STATE SCHOOL OF HEALTH TECHNOLOGY, UFUOMA UGHELLI ","LAGOS STATE COLLEGE OF HEALTH TECHNOLOGY, YABA","NIGERIAN ARMY SCHOOL OF MEDICAL SCIENCES, OJO CANTONMENT","JIGAWA STATE SCHOOL OF HEALTH TECHNOLOGY, JAHUN","SCHOOL OF HEALTH TECHNOLOGY, KEFFI","ONDO STATE SCHOOL OF HEALTH TECHNOLOGY, AKURE","COLLEGE  OF HEALTH SCIENCES AND TECHNOLOGY, IJERO","RIVERS STATE COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, PORT HARCOURT","CROSS RIVER STATE COLLEGE OF HEALTH TECHNOLOGY, CALABAR","FAVOUR SCHOOL OF HEALTH TECHNOLOGY, IKOM","PLATEAU STATE COLLEGE OF HEALTH TECHNOLOGY, ZAWAN","PLATEAU STATE SCHOOL OF HEALTH TECHNOLOGY, PANKSHIN","KWARA STATE COLLEGE OF HEALTH TECHNOLOGY, OFFA","OYO STATE SCHOOL OF HYGIENE, ELEYELE","SULTAN ABDUR-RAHAMAN SCHOOL OF HEALTH TECHNOLOGY, GWADABAWA","COLLEGE OF HEALTH TECHNOLOGY, TSAFE","EDO STATE SCHOOL OF HEALTH TECHNOLOGY, BENIN","COLLEGE  OF HEALTH SCIENCES AND TECHNOLOGY, IDAH","BORNO STATE SCHOOL OF HEALTH TECHNOLOGY, MAIDUGURI","SCHOOL OF HEALTH TECHNOLOGY, KANO","BAYELSA STATE COLLEGE OF HEALTH TECHNOLOGY, OTUOGIDI","SCHOOL OF HEALTH TECHNOLOGY, EZZAMGBO","EBONYI STATE SCHOOL OF HEALTH TECHNOLOGY, NGBO","OGUN STATE COLLEGE OF HEALTH TECHNOLOGY, ILESE","POGIL COLLEGE OF HEALTH TECHNOLOGY, IJEBU-ODE","KATSINA STATE COLLEGE OF HEALTH SCIENCES, DAURA","SHEHU IDRIS COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, MAKARFI","NKST COLLEGE OF HEALTH TECHNOLOGY, MKAR GBOKO","IMO STATE COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, AMAIGBO","COLLEGE  OF HEALTH TECHNOLOGY, NINGI","KEBBI STATE COLEGE OF HEALTH TECHNOLOGY, JEGA","NIGER STATE SCHOOL OF HEALTH TECHNOLOGY, MINNA","SCHOOL OF HEALTH TECHNOLOGY, KADUNA,","KADUNA SCHOOL OF HEALTH INFORMATION MANAGEMENT, KADUNA","MUSLIM COMMUNITY SCHOOL OF HEALTH TECHNOLOGY, FUNTUA","MILLENIUM COLLEGE OF HEALTH TECHNOLOGY, AKURE","NORTH-SOUTH COLLEGE OF HEALTH TECHNOLOGY, KWARA","RIVERS STATE COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, RIVERS","ECWA COLLEGE OF HEALTH TECHNOLOGY, KAGORO","COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, IJERO","FABOTAS COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, ADO EKITI","PAN AFRICAN SCHOOL OF HEALTH TECHNOLOGY, BOJI BOJI","ADEGOKE OLUBUMMO COLLEGE OF HEALTH TECHNOLOGY, ORIN","ROYAL INSTITUTE OF HEALTH TECHNOLOGY, IFO","GARU ISLAMIC COLLEGE OF HEALTH TECHNOLOGY, BAUCHI","OWOCHE SCHOOL OF HEALTH TECHNOLOGY, BEWO BEKWARRA","MAKAMA DOGO SCHOOL OF HEALTH TECHNOLOGY, NASARAWA","FOREIGN LINKS COLLEGE OF HEALTH TECHNOLOGY, MORO ILE-IFE","NIGERIAN NAVY SCHOOL OF HEALTH SCIENCES, IRRA OFFA","NEWGATE COLLEGE OF HEALTH TECHNOLOGY, MINNA","COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, KALTUNGO","TARABA STATE COLLEGE OF HEALTH TECHNOLOGY, TAKUM","WOMENHOOD SCHOOL OF SCIENCES, KADUNA","JAMAATU SCHOOL OF HEALTH TECHNOLOGY, ZARIA","LAMIDO SCHOOL OF HYGIENE AND HEALTH SCIENCES, GOMBE","PATHFINDER SCHOOL OF HEALTH TECHNOLOGY, IRAGBIJI","AL-AMEEN COLLEGE OF HEALTH TECHNOLOGY, ANGWAN MU'AZU	","COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, ADO EKITI","BETHSAIDA COLLEGE OF HEALTH TECHNOLOGY, OGBOMOSO","COLLEGE OF HEALTH TECHNOLOGY, MICHIKA","GAMJI SCHOOL OF HEALTH TECHNOLOGY, SOKOTO","ISLAMIC MEDICAL FOUNDATION OF NIGERIA SCHOOL OF HEALTH TECHNOLOGY, TUDUN WADA","ALHASAN IBRAHIM DAWANAU COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, KANO","SAHLAN SCHOOL OF HEALTH TECHNOLOGY, JOS","COLLEGE OF HEALTH TECHNOLOGY, SOKOTO","CHRISLIA COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, AFAO EKITI","CRESTFIELD COLLEGE OF HEALTH TECHNOLOGY, ERIN OSUN","AMINU DABO COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, KANO","EMIRATES COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, KABUGA KANO","USMAN MAIRIGA COLLEGE OF HEALTH TECHNOLOGY, SAMINAKA","MALIKIYA COLLEGE OF HEALTH SCIENCES, BAUCHI","LALA INTERNATIONAL SCHOOL OF HEALTH AND SCIENCES TECHNOLOGY, GUSAU","SIR SANUSI SCHOOL OF HEALTH TECHNOLOGY, KANO","MATER CHRISTI CATHOLIC COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, IGEDE EKITI","VISION COLLEGE OF MEDICAL SCIENCES AND HEALTH TECHNOLOGY, MBAISE","SCHOOL OF HEALTH TECHNOLOGY, LAFIA","BARTHOLOMEW COLLEGE OF HEALTH TECHNOLOGY, KWARA","MWAGHAVUL COLLEGE OF HEALTH TECHNOLOGY, PUSHIT","CITY COLLEGE OF HEALTH SCIENCES AND TECHNOLOGY, ZARIA","STEDURON COLLEGE OF HEALTH TECHNOLOGY, AYOBO OGUN","SCHOOL OF ALLIED HEALTH AND ENVIRONMENT SERVICES, KWARA","CHERISH ENTERPRISE INSTITUTE, BATSARI","SCHOOL OF HEALTH TECHNOLOGY, BEBEJI");
		}else{
			var university_array = new Array("*List of All Universities*","Abia State University, Uturu","Abubakar Tafawa Balewa University, Bauchi","Achievers University, Owo","Adamawa State University, Mubi","Adekunle Ajasin University, Akungba Akoko ","Adeleke University, Ede","Admiralty University of Nigeria, Sapele","Afe Babalola University, Ado-Ekiti","African University of Science and Technology, Abuja","Ahmadu Bello University, Zaria","Ajayi Crowther University, Oyo Town","Akwa Ibom State University, Uyo","Alex Ekwueme Federal University, Ndufu-Alike","Al-Hikmah University, Ilorin","Al-Qalam University, Katsina","Ambrose Alli University, Ekpoma","American University of Nigeria,	Yola","Anchor University, Lagos	","Arthur Jarvis University, Calabar","Atiba University, Oyo Town","Augustine University, Ilara","Babcock University, Ilishan-Remo","Bauchi State University, Gadau","Bayero University, Kano","Baze University, Abuja","Bells University of Technology, Ota","Benson Idahosa University, Benin City","Benue State University, Makurdi","Bingham University, Auta Balifi","Borno State University, Maiduguri","Bowen University, Iwo","Caleb University, Imota","Caritas University, Enugu","Chrisland University, Abeokuta","Christopher University, Mowe","Chukwuemeka Odumegwu Ojukwu University, Uli","Clifford University, Ihie","Coal City University, Enugu","Covenant University, Ota","Crawford University, Igbesa","Crescent University, Abeokuta","Cross River University of Technology, Calabar","Crown Hill University, Ilorin","Delta State University, Abraka","Dominican University, Ibadan","Eastern Palm University, Ogboko","Ebonyi State University, Abakaliki","Edo University	Iyamho","Edwin Clark University, Kiagbodo","Ekiti State University, Ado Ekiti","Eko University of Medical and Health Sciences, Ijanikin","Elizade University, Ilara-Mokin","Enugu State University of Science and Technology, Enugu","Evangel University, Akaeze-Enugu","Federal University of Agriculture, Abeokuta","Federal University of Petroleum Resources, Effurun","Federal University of Technology, Akure","Federal University of Technology, Minna","Federal University of Technology, Owerri","Federal University, Birnin Kebbi","Federal University, Dutse","Federal University, Dutsin-Ma","Federal University, Gashua","Federal University, Gusau","Federal University, Kashere","Federal University, Lafia","Federal University, Lokoja","Federal University, Otuoke","Federal University, Oye-Ekiti","Federal University, Wukari","Fountain University, Oshogbo","Godfrey Okoye University, Ugwuomu-Nike","Gombe State University, Gombe","Gombe State University of Science and Technology, Kumo","Gregory University, Uturu","Hallmark University, Ijebu-Itele","Hezekiah University, Umudi","Ibrahim Badamasi Babangida University, Lapai","Igbinedion University Okada","Ignatius Ajuru University of Education,	Port Harcourt","Imo State University, Owerri","Joseph Ayo Babalola University, Ikeji-Arakeji","Kaduna State University	Kaduna","Kano University of Science and Technology, Wudil","Kebbi State University of Science and Technology, Aliero","Kings University, Odeomu","Kogi State University, Anyigba","Kola Daisi University, Ibadan","Kwara State University, Ilorin","Kwararafa University, Wukari","Ladoke Akintola University of Technology, Ogbomoso","Lagos State University, Ojo","Landmark University, Omu-Aran","Lead City University, Ibadan","Legacy University, Okija","Madonna University, Okija","Mcpherson University, Seriki-Sotayo","Michael and Cecilia Ibru University, Agbara-Otor","Michael Okpara University of Agriculture, Umuahia","Modibbo Adama University of Technology, Yola","Moshood Abiola University of Science and Technology, Abeokuta","Mountain Top University, Makogi Oba","Nasarawa State University, Keffi","Niger Delta University, Wilberforce Island","Nigerian Maritime University, Okerenkoko","Nile University of Nigeria, Abuja","Nnamdi Azikiwe University, Awka","Novena University, Ogume","Obafemi Awolowo University, Ile-Ife","Obong University, Obong Ntak","Oduduwa University, Ile Ife","Olabisi Onabanjo University, Ago Iwoye","Ondo State University of Science and Technology,mOkitipupa","Osun State University, Oshogbo","PAMO University of Medical Sciences, Port-Harcourt","Pan-Atlantic University, Lagos","Paul University, Awka","Plateau State University, Bokkos","Precious Cornerstone University, Ibadan","Redeemer's University, Mowe","Renaissance University, Enugu","Rhema University, Aba","Ritman University, Ikot Ekpene","Rivers State University of Science and Technology, Port Harcourt","Salem University, Lokoja","Samuel Adegboyega University, Ogwa","Skyline University, Kano","Sokoto State University,Sokoto","Southwestern University, Okun Owa","Spiritan University, Nneochi","Sule Lamido University, Kafin Hausa","Summit University, Offa","Tai Solarin University of Education, Ijebu-Ode","Tansian University, Umunya","Taraba State University, Jalingo","The Technical University, Ibadan","Umaru Musa Yar'Adua University, Katsina","University of Abuja, Abuja","University of Africa, Toru-Orua","University of Agriculture, Makurdi","University of Benin, Benin City","University of Calabar, Calabar","University of Ibadan, Ibadan","University of Ilorin, Ilorin","University of Jos, Jos","University of Lagos, Lagos","University of Maiduguri, Maiduguri","University of Medical Sciences, Ondo City","University of Mkar, Mkar","University of Nigeria, Nsukka","University of Port Harcourt, Port Harcourt","University of Uyo, Uyo","Usmanu Danfodio University, Sokoto","Veritas University, Abuja","Wellspring University, Benin City","Wesley University of Science and Technology, Ondo City","Western Delta University, Oghara","Yobe State University, Damaturu","Yusuf Maitama Sule University Kano, Kano","Zamfara State University, Talata Mafara"
		,"","*Nigerian polytechnics*","Abia State polytechnic","Adamawa State polytechnic, Yola","Akanu Ibiam Federal polytechnic, Unwana","Allover central polytechnic, Sango-Ota Ogun State","Akwa Ibom State polytechnic","Auchi polytechnic, Auchi","Dorben polytechnic (formerly Abuja School of Accountancy and Computer Studies)","Delta state polytechnic, Ozoro","Federal polytechnic, Ado – Ekiti","Federal polytechnic Offa","Federal polytechnic Bida","Federal polytechnic, Bauchi","Federal polytechnic, Idah","Federal polytechnic, Ilaro","Federal polytechnic, Damaturu","Federal polytechnic, Nassarawa","Federal polytechnic, Mubi","Federal polytechnic, Nekede","Federal polytechnic, Oko","Federal polytechnic, Ede","Federal polytechnic, Birnin-Kebbi","Federal coll. of Animal health & production Tech., Ibadan","Gateway polytechnic Saapade","Hussaini Adamu Federal polytechnic, kazaure","Institute of Management Technology, Enugu","Kaduna polytechnic","Kano State polytechnic, Kano","Kwara State polytechnic","Lagos City polytechnic","Lagos City Computer College","Lagos State polytechnic","Niger State polytechnic, Zungeru","Nigerian Coll. of Aviation Tech., Zaira","Maritime Academy of Nigeria, Oron","Moshood Abiola polytechnic, Abeokuta","Nuhu Bamalli polytechnic, Zaria, Kaduna State","Osun State College of Technology, Esa-Oke","Osun State polytechnic, Iree","Ramat polytechnic, Maiduguri","River State polytechnic, Bori","Rufus Giwa polytechnic, Owo","Shaka polytechnic","The polytechnic, Ibadan","Yaba College of Tech"
		,"","*Colleges of Education*","Adeniran Ogunsanya College of Education","Adeyemi College of Education, Ondo","College of Education, Agbor","College of Education, Afaha-Nsit","College of Education, Akwanga","College of Education, Ekiadolor","College of Education, Ikere Ekiti","College of Education, Katsina Ala","College of Education, Zuba","College of Education, Oro, Kwara State","College of Education, Azare","College of Education, Warri","College of Education, Agbor","College of Education, Akwanga","College of Education, Gindiri","College of Education, Katsina-Ala","FCT College of Education, Zuba","Federal College of Education, Zaira","Federal College of Education, Okene","Federal College of Education, Akoka","Federal College of Education, Omoku","Federal College of Education (Special), Oyo","Federal College of Education, Zaria","Federal College of Education (Technical) Gombe","Federal College of Education, Obudu","Federal College of Education, pankshin","Federal College of Education, (Technical) Bich","Federal College of Education (Technical) Gusau","Federal College of Education, Yola","Kano State College of Education, Kano","Kwara State College of Education","National Teachers Institute, kaduna","Nwafor Orizu College of Education","Osun State College of Education, Ilesa","Osun State College of Education, Ila-Orangun","Oyo State College Of Education, Oyo","Rivers State College of Education", "Other");
		}
		function universities(){
			$('#university_name').empty();
			createOption('university_name', '', 'Select University Name');
			for(var u=0;u<university_array.length;u++){
				createOption('university_name', university_array[u], university_array[u]);
			}
		}
		universities();

		$('#university_name').change(function(){
			if($('#university_name').val() == "Other"){
				$('#ouni').removeClass('hide');
				$('#ouni').show();
			}else{
				//$('#ouni').addClass('hide');
				$('#ouni').hide();
			}
		});


		if(loan_type == 'Law' || loan_type == 'Health'){
			$('#add_pd').click(function(){
				var html = '<div class="row pdrow"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control required" name="previous_degree_acquired[]" id="previous_degree_acquired[]" value="<?php echo set_value('previous_degree_acquired[]'); ?>" placeholder=""></div></div><div class="col-md-6"><div class="form-group"><div class="fileinput fileinput-new input-group" data-provides="fileinput"><div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span><input type="hidden"><input type="hidden"><input type="file" name="pda_file[]" id="pda_file[]"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div></div></div></div>';
				if($('.pdrow').length<2)
					$('#pd').append(html);
			});
			$('#rem_pd').click(function(){
				$('body').find('.pdrow:last').remove();
			});
		}

	</script>
		
		

</body>

</html>
