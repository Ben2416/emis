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
                                <form method="post" action="<?=base_url()?>client/LoanApplication" enctype="multipart/form-data" class="validation-wizard wizard-circle">

                                    <!-- Step 3 -->
                                    <h6>Loan Details</h6>
                                    <section>
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
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Guarantor</h6>
                                    <section>


                                        <h4 class="card-title">Guarantor / Co-signee</h4>
                                        <h6 class="card-subtitle">I, hereby agree to guarantee and be liable for the payment of the student tuition loan been applied for, by the above applicant. This guarantee will remain in effect until full settlement / payments of the loan or upon termination.</h6>
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
                                    </section>
									<input type="hidden" name="batch" id="batch" value="<?=$current_batch?>" />
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

</html>
