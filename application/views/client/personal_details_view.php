<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- Validation wizard -->
    <div class="row" id="validation">
        <div class="col-12">
            <div class="card wizard-content">
                <div class="card-body">
                    <h4 class="card-title">Loan Application</h4>
                    <?= validation_errors(); ?>
                    <h6 class="card-subtitle">Complete the form below</h6>
                    <form method="post" action="<?=base_url()?>client/PersonalDetails" enctype="multipart/form-data" class="validation-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Personal Information</h6>
                        <section>
                            <img src="<?=base_url()?>assets/passports/<?=$this->session->passport?>" width="150" />
                            <br/>
                            <br/>
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
                                        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo set_value('dob'); ?>"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="State_of_origin"> Upload Birth Certificate : <span class="danger">*</span> </label>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="fa fa-file fileinput-exists"></i>
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-secondary btn-file">
                                                                <span class="fileinput-new">Select file</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="dob_file" id="dob_file">
                                                                </span>
                                                <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
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
                                        <select class="custom-select form-control required" id="state_of_residence" name="state_of_residence">
                                            <option value="">Select State</option>
                                            <option value="Bayelsa" <?= set_select('state_of_residence','Bayelsa'); ?>>Bayelsa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
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
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="fa fa-file fileinput-exists"></i>
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-secondary btn-file">
                                                                <span class="fileinput-new">Select file</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="lga_file" id="lga_file">
                                                                </span>
                                                <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
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
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="hidden">
                                            <input type="hidden"><input type="file" name="mid_file" id="mid_file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reference_signed"> Upload Signed Reference of Local Government Identification : <span class="danger">*</span> </label>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="fa fa-file fileinput-exists"></i>
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-secondary btn-file">
                                                                <span class="fileinput-new">Select file</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="ref_file" id="ref_file">
                                                                </span>
                                                <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            <hr>
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
                            <hr>
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

                        </section>
                        <!-- Step 2 -->
                        <h6>University Details</h6>
                        <section>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="universityName">University Name</label>
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
                                        <label for="otherUniversity">Other University: (Please specify if your university is not listed above)</label>
                                        <input type="text" class="form-control" id="other_university" name="other_university" value="<?php echo set_value('other_university'); ?>"> </div>
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
                                        <select class="custom-select form-control required" id="anticipated_degree" name="anticipated_degree" > 
											<option value=''>Select Anticipated Degree</option>
										</select>
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
                                        </select></div>
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
                                        <label for="student_id_number">Student ID Number</label>
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
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="hidden">
                                                    <input type="hidden"><input type="file" name="adl_file" name="adl_file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentResult">Indicate Current Result</label>
                                        <select class="custom-select form-control required" id="current_result" name="current_result">
                                            <option value="">Select Current Result</option>
                                            <option value="Semester Result" <?= set_select('current_result','Semester Result'); ?>>Semester Result</option>
                                            <option value="Foundation Result" <?= set_select('current_result','Foundation Result'); ?>>Foundation Result</option>
                                            <option value="O-Level Result" <?= set_select('current_result','O-Level Result'); ?>>O-Level Result</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload Result</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="hidden">
                                                    <input type="hidden"><input type="file" name="csr_file" id="csr_file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
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
                                        <label for="uni_contact_person">University Contact Person (Preferably Dean / Head of Student Affairs)</label>
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
                                        <label for="std_housing">Student Housing</label>
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
                                        <label for="std_address">Student's Hostel / Apartment Address</label>
                                        <input type="text" class="form-control required" id="std_address" name="std_address" value="<?php echo set_value('std_address'); ?>">
                                    </div>
                                </div>

                            </div>
                        </section>

                        <!-- Step 3 -->
                        <h6>Declaration</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="behName1">I <b><?=$this->session->firstname.' '.$this->session->lastname?></b> hereby apply for this loan with Bayelsa State Higher Education Student Loan Board. I understand that information give herein and the documents supplied are on the basis for accessing this loan. I therefore affirm that the information submitted is correct and if upon verification on the authenticity of the details/documents contained in this application is false either in part or in full, then my loan request will be withdrawn or declined.</label>

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
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer"> © 2018 Bayelsa Loan Management System by o3interactive Technologies </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url()?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=base_url()?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?=base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="<?=base_url()?>assets/js/custom.min.js"></script>
<script src="<?=base_url()?>assets/js/jasny-bootstrap.js"></script>

<!--Custom JavaScript -->
<script src="<?=base_url()?>assets/plugins/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="<?=base_url()?>assets/plugins/wizard/jquery.validate.min.js"></script>
<!-- Sweet-Alert  -->
<script src="<?=base_url()?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/plugins/wizard/steps.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--morris JavaScript -->
<script src="<?=base_url()?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?=base_url()?>assets/plugins/morrisjs/morris.min.js"></script>
<!-- Chart JS -->
<script src="<?=base_url()?>assets/js/dashboard1.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<!--Menu sidebar -->
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

	var state_array = new Array("ABIA","ADAMAWA","AKWA IBOM","ANAMBRA","BAUCHI","BAYELSA","BENUE","BORNO","CROSS RIVER","DELTA","EBONYI","EDO","EKITI","ENUGU","GOMBE","IMO","JIGAWA","KADUNA","KANO","KATSINA","KEBBI","KOGI","KWARA","LAGOS","NASSARAWA","NIGER","OGUN","ONDO","OSUN","OYO","PLATEAU","RIVERS","SOKOTO","TARABA","YOBE","ZAMFARA");
	function state(state_element){
		$('#'+state_element).empty();
		createOption(state_element, '', 'Select State');
		for(var i=0; i<state_array.length; i++){
			createOption(state_element, state_array[i], state_array[i]);
		}
	}
	state('state_of_origin');
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
	
	var degree_array = new Array("BA","BAcc","BAdm","BArch","BDent","B.Ed.","BEng","BMath","BMedSc","BPharm","BSc","BTech","LLA","LLB","BMed");
	function degrees(){
		$('#anticipated_degree').empty();
		createOption('anticipated_degree', '', 'Select Anticipated Degree');
		for(var d=0;d<degree_array.length;d++){
			createOption('anticipated_degree', degree_array[d], degree_array[d]);
		}
	}
	degrees();
	
	var university_array = new Array("*List of All Universities*","Abia State University, Uturu","Abubakar Tafawa Balewa University, Bauchi","Achievers University, Owo","Adamawa State University, Mubi","Adekunle Ajasin University, Akungba Akoko ","Adeleke University, Ede","Admiralty University of Nigeria, Sapele","Afe Babalola University, Ado-Ekiti","African University of Science and Technology, Abuja","Ahmadu Bello University, Zaria","Ajayi Crowther University, Oyo Town","Akwa Ibom State University, Uyo","Alex Ekwueme Federal University, Ndufu-Alike","Al-Hikmah University, Ilorin","Al-Qalam University, Katsina","Ambrose Alli University, Ekpoma","American University of Nigeria,	Yola","Anchor University, Lagos	","Arthur Jarvis University, Calabar","Atiba University, Oyo Town","Augustine University, Ilara","Babcock University, Ilishan-Remo","Bauchi State University, Gadau","Bayero University, Kano","Baze University, Abuja","Bells University of Technology, Ota","Benson Idahosa University, Benin City","Benue State University, Makurdi","Bingham University, Auta Balifi","Borno State University, Maiduguri","Bowen University, Iwo","Caleb University, Imota","Caritas University, Enugu","Chrisland University, Abeokuta","Christopher University, Mowe","Chukwuemeka Odumegwu Ojukwu University, Uli","Clifford University, Ihie","Coal City University, Enugu","Covenant University, Ota","Crawford University, Igbesa","Crescent University, Abeokuta","Cross River University of Technology, Calabar","Crown Hill University, Ilorin","Delta State University, Abraka","Dominican University, Ibadan","Eastern Palm University, Ogboko","Ebonyi State University, Abakaliki","Edo University	Iyamho","Edwin Clark University, Kiagbodo","Ekiti State University, Ado Ekiti","Eko University of Medical and Health Sciences, Ijanikin","Elizade University, Ilara-Mokin","Enugu State University of Science and Technology, Enugu","Evangel University, Akaeze-Enugu","Federal University of Agriculture, Abeokuta","Federal University of Petroleum Resources, Effurun","Federal University of Technology, Akure","Federal University of Technology, Minna","Federal University of Technology, Owerri","Federal University, Birnin Kebbi","Federal University, Dutse","Federal University, Dutsin-Ma","Federal University, Gashua","Federal University, Gusau","Federal University, Kashere","Federal University, Lafia","Federal University, Lokoja","Federal University, Otuoke","Federal University, Oye-Ekiti","Federal University, Wukari","Fountain University, Oshogbo","Godfrey Okoye University, Ugwuomu-Nike","Gombe State University, Gombe","Gombe State University of Science and Technology, Kumo","Gregory University, Uturu","Hallmark University, Ijebu-Itele","Hezekiah University, Umudi","Ibrahim Badamasi Babangida University, Lapai","Igbinedion University Okada","Ignatius Ajuru University of Education,	Port Harcourt","Imo State University, Owerri","Joseph Ayo Babalola University, Ikeji-Arakeji","Kaduna State University	Kaduna","Kano University of Science and Technology, Wudil","Kebbi State University of Science and Technology, Aliero","Kings University, Odeomu","Kogi State University, Anyigba","Kola Daisi University, Ibadan","Kwara State University, Ilorin","Kwararafa University, Wukari","Ladoke Akintola University of Technology, Ogbomoso","Lagos State University, Ojo","Landmark University, Omu-Aran","Lead City University, Ibadan","Legacy University, Okija","Madonna University, Okija","Mcpherson University, Seriki-Sotayo","Michael and Cecilia Ibru University, Agbara-Otor","Michael Okpara University of Agriculture, Umuahia","Modibbo Adama University of Technology, Yola","Moshood Abiola University of Science and Technology, Abeokuta","Mountain Top University, Makogi Oba","Nasarawa State University, Keffi","Niger Delta University, Wilberforce Island","Nigerian Maritime University, Okerenkoko","Nile University of Nigeria, Abuja","Nnamdi Azikiwe University, Awka","Novena University, Ogume","Obafemi Awolowo University, Ile-Ife","Obong University, Obong Ntak","Oduduwa University, Ile Ife","Olabisi Onabanjo University, Ago Iwoye","Ondo State University of Science and Technology,mOkitipupa","Osun State University, Oshogbo","PAMO University of Medical Sciences, Port-Harcourt","Pan-Atlantic University, Lagos","Paul University, Awka","Plateau State University, Bokkos","Precious Cornerstone University, Ibadan","Redeemer's University, Mowe","Renaissance University, Enugu","Rhema University, Aba","Ritman University, Ikot Ekpene","Rivers State University of Science and Technology, Port Harcourt","Salem University, Lokoja","Samuel Adegboyega University, Ogwa","Skyline University, Kano","Sokoto State University,Sokoto","Southwestern University, Okun Owa","Spiritan University, Nneochi","Sule Lamido University, Kafin Hausa","Summit University, Offa","Tai Solarin University of Education, Ijebu-Ode","Tansian University, Umunya","Taraba State University, Jalingo","The Technical University, Ibadan","Umaru Musa Yar'Adua University, Katsina","University of Abuja, Abuja","University of Africa, Toru-Orua","University of Agriculture, Makurdi","University of Benin, Benin City","University of Calabar, Calabar","University of Ibadan, Ibadan","University of Ilorin, Ilorin","University of Jos, Jos","University of Lagos, Lagos","University of Maiduguri, Maiduguri","University of Medical Sciences, Ondo City","University of Mkar, Mkar","University of Nigeria, Nsukka","University of Port Harcourt, Port Harcourt","University of Uyo, Uyo","Usmanu Danfodio University, Sokoto","Veritas University, Abuja","Wellspring University, Benin City","Wesley University of Science and Technology, Ondo City","Western Delta University, Oghara","Yobe State University, Damaturu","Yusuf Maitama Sule University Kano, Kano","Zamfara State University, Talata Mafara"
,"","*Nigerian polytechnics*","Abia State polytechnic","Adamawa State polytechnic, Yola","Akanu Ibiam Federal polytechnic, Unwana","Allover central polytechnic, Sango-Ota Ogun State","Akwa Ibom State polytechnic","Auchi polytechnic, Auchi","Dorben polytechnic (formerly Abuja School of Accountancy and Computer Studies)","Delta state polytechnic, Ozoro","Federal polytechnic, Ado – Ekiti","Federal polytechnic Offa","Federal polytechnic Bida","Federal polytechnic, Bauchi","Federal polytechnic, Idah","Federal polytechnic, Ilaro","Federal polytechnic, Damaturu","Federal polytechnic, Nassarawa","Federal polytechnic, Mubi","Federal polytechnic, Nekede","Federal polytechnic, Oko","Federal polytechnic, Ede","Federal polytechnic, Birnin-Kebbi","Federal coll. of Animal health & production Tech., Ibadan","Gateway polytechnic Saapade","Hussaini Adamu Federal polytechnic, kazaure","Institute of Management Technology, Enugu","Kaduna polytechnic","Kano State polytechnic, Kano","Kwara State polytechnic","Lagos City polytechnic","Lagos City Computer College","Lagos State polytechnic","Niger State polytechnic, Zungeru","Nigerian Coll. of Aviation Tech., Zaira","Maritime Academy of Nigeria, Oron","Moshood Abiola polytechnic, Abeokuta","Nuhu Bamalli polytechnic, Zaria, Kaduna State","Osun State College of Technology, Esa-Oke","Osun State polytechnic, Iree","Ramat polytechnic, Maiduguri","River State polytechnic, Bori","Rufus Giwa polytechnic, Owo","Shaka polytechnic","The polytechnic, Ibadan","Yaba College of Tech"
,"","*Colleges of Education*","Adeniran Ogunsanya College of Education","Adeyemi College of Education, Ondo","College of Education, Agbor","College of Education, Afaha-Nsit","College of Education, Akwanga","College of Education, Ekiadolor","College of Education, Ikere Ekiti","College of Education, Katsina Ala","College of Education, Zuba","College of Education, Oro, Kwara State","College of Education, Azare","College of Education, Warri","College of Education, Agbor","College of Education, Akwanga","College of Education, Gindiri","College of Education, Katsina-Ala","FCT College of Education, Zuba","Federal College of Education, Zaira","Federal College of Education, Okene","Federal College of Education, Akoka","Federal College of Education, Omoku","Federal College of Education (Special), Oyo","Federal College of Education, Zaria","Federal College of Education (Technical) Gombe","Federal College of Education, Obudu","Federal College of Education, pankshin","Federal College of Education, (Technical) Bich","Federal College of Education (Technical) Gusau","Federal College of Education, Yola","Kano State College of Education, Kano","Kwara State College of Education","National Teachers Institute, kaduna","Nwafor Orizu College of Education","Osun State College of Education, Ilesa","Osun State College of Education, Ila-Orangun","Oyo State College Of Education, Oyo","Rivers State College of Education", "Other");
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
	
</script>
</body>

</html>
