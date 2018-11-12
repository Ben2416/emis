<?php
	$this->session->set_userdata('last_page', current_url());
	if ( !$this->input->server('HTTP_REFERER')
		|| empty($this->session->userdata('user_id')))
	{
		if(empty($this->session->userdata('user_id'))){
			$this->session->set_flashdata('error_msg', 'Session Expired. Log in.');
			redirect(base_url(), 'refresh');
		}else{
			$this->session->set_flashdata('error_msg', 'Url Access disabled. Log in.');
			redirect(base_url(), 'refresh');
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Bayelsa State Higher Education Student Loan Board | Loan Application</title>

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
	   <!-- <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a>
      -->


	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
		                    <form action="<?=base_url()?>client/LoanApplication" method="multipart/form-data">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">

									<h5>This information will let us know more about you.</h5>
                  <p><?= validation_errors(); ?></p>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#loanDetails" data-toggle="tab">Loan Application</a></li>
			                            <li><a href="#guarantor" data-toggle="tab">Loan Guarantor</a></li>

			                        </ul>
								</div>

		                        <div class="tab-content">

		                            <div class="tab-pane" id="loanDetails">
		                                <h4 class="info-text">Loan Details</h4>
		                               <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="loan_id">Loan ID:</label>
                                                    <input type="text" class="form-control required" id="loan_id" value="auto generated" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="loan_type"> Loan Type </label>
                                                    <input type="text" class="form-control required" name="loan_typed" id="loan_typed" value="<?=$this->session->loan_type?>" disabled>
                                                    <input type="hidden" class="form-control required" name="loan_type" id="loan_ype" value="<?=$this->session->loan_type?>">

                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="academicYear">Tuition Loan Request for Academic Year:</label>
                                                    <select class="custom-select form-control required" id="academic_year" name="academic_year">
                                                        <option value="">Select Academic Year</option>
                                                        <?php for($i=date('Y')-2; $i<date('Y')+2; $i++):?>
                                                        <option value="<?=$i.'/'.($i+1)?>" <?= set_select('academic_year',($i.'/'.($i+1))); ?>><?=$i.'/'.($i+1)?></option>
                                                        <?php endfor;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="loan_type"> Semester</label>
                                                    <select class="custom-select form-control required" id="semester_level" name="semester_level">
                                                        <option value="">Select Semester</option>
                                                        <option value="Semester 1" <?= set_select('semester_level','Semester 1'); ?>>Semester 1</option>
                                                        <option value="Semester 2" <?= set_select('semester_level','Semester 2'); ?>>Semester 2</option>

                                                    </select>

                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="programme_start_date"> Start Date for Academic Year:</label>
                                                    <input type="date" class="form-control required" id="programme_start_date" name="programme_start_date" value="<?php echo set_value('programme_start_date'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="programme_end_date"> End Date for Academic Year:</label>
                                                    <input type="date" class="form-control required" id="programme_end_date" name="programme_end_date" value="<?php echo set_value('programme_end_date'); ?>">
                                                </div>
                                            </div>

                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="loan_amount">Amount Requester (Tuition Loan):</label>
                                                    <input type="text" class="form-control required" name="loan_amount" id="loan_amount" value="<?php echo set_value('loan_amount'); ?>">
                                                </div>
                                            </div>

                                        </div>
		                            </div>


								<div class="tab-pane" id="guarantor">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text">Guarantor / Co-signee</h4>
												<p>I, hereby agree to guarantee and be liable for the payment of the student tuition loan been applied for, by the above applicant. This guarantee will remain in effect until full settlement / payments of the loan or upon termination.</p>
			                            	</div>
										</div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_salute"> Title</label>
                                                    <input type="text" class="form-control required" id="guarantor_title" name="guarantor_title" value="<?php echo set_value('guarantor_title'); ?>">

                                                  <!--  <select class="form-control" name="guarantor_title">
                                              				<option value="">&nbsp;</option>
                                              				<option value="Mr" <?php echo  set_select('guarantor_title', 'Mr'); ?>>Mr</option>
                                              				<option value="Mrs" <?php echo  set_select('guarantor_title', 'Mrs'); ?>>Mrs</option>
                                              				<option value="Miss" <?php echo  set_select('guarantor_title', 'Miss'); ?>>Miss</option>
                                              				<option value="Dr" <?php echo  set_select('guarantor_title', 'Dr'); ?>>Dr</option>
                                                      <option value="Prof" <?php echo  set_select('guarantor_title', 'Prof'); ?>>Prof</option>
                                              		</select> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_fname"> First Name: *</label>
                                                    <input type="text" class="form-control required" id="guarantor_fname" name="guarantor_fname" value="<?php echo set_value('guarantor_fname'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_lname"> Last Name: *</label>
                                                    <input type="text" class="form-control required" id="guarantor_lname" name="guarantor_lname" value="<?php echo set_value('guarantor_lname'); ?>">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_phone"> Phone Number: *</label>
                                                    <input type="text" class="form-control required" id="guarantor_phone" name="guarantor_phone" value="<?php echo set_value('guarantor_phone'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_altPhone"> Alternative Phone Number:</label>
                                                    <input type="text" class="form-control" id="guarantor_altphone" name="guarantor_altphone" value="<?php echo set_value('guarantor_altphone'); ?>">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_address"> Contact Address: *</label>
                                                    <input type="text" class="form-control required" id="guarantor_address" name="guarantor_address" value="<?php echo set_value('guarantor_address'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_state"> State:*</label>
                                                    <select class="custom-select form-control required" id="guarantor_state" name="guarantor_state">
                                                        <option value="">Select State</option>
                                                        <option value="Bayelsa" <?= set_select('guarantor_state','Bayelsa'); ?>>Bayelsa</option>
                                                    </select>                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_occupation"> Occupation: *</label>
                                                    <input type="text" class="form-control required" id="guarantor_occupation" name="guarantor_occupation" value="<?php echo set_value('guarantor_occupation'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_emp"> Employer:*</label>
                                                    <input type="text" class="form-control" id="guarantor_emp" name="guarantor_emp" value="<?php echo set_value('guarantor_emp'); ?>">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_position"> Position Held: *</label>
                                                    <input type="text" class="form-control " id="guarantor_position" name="guarantor_position" value="<?php echo set_value('guarantor_position'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="guarantor_relatn"> Relationship with applicant:*</label>
                                                    <input type="text" class="form-control required" id="guarantor_relatn" name="guarantor_relatn" value="<?php echo set_value('guarantor_relatn'); ?>">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="behName1">I, hereby agree to be a co-signer, co-maker, guarantor, endorser, or surety with respect to the above described loan or obligation.</label>

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
										<input type="hidden" name="batch" id="batch" value="<?=$current_batch?>" />
								</div>


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
state('guarantor_state');

</script>

</body>
	<!--   Core JS Files   -->
	<script src="<?=base_url()?>assets/clients/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/clients/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/clients/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?=base_url()?>assets/clients/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?=base_url()?>assets/clients/js/jquery.validate.min.js"></script>
</html>
