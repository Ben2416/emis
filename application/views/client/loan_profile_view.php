			<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?=base_url()?>assets/passports/<?=$this->session->passport?>" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?=$this->session->firstname.' '.$this->session->lastname?></h4>
									<h6 class="card-subtitle">Loan id: <?=$profile['loan_id']?></h6>
                                    <h6 class="card-subtitle"><?=$profile['university_name']?></h6>
									<h6 class="card-subtitle"><?=$profile['course_of_study']?></h6>
                                   
                                </center>
                            </div>
                                                       
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Personal Details</a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#university" role="tab">University Details</a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#loan" role="tab">Loan Details</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--first tab-->
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted"><?=$this->session->firstname.' '.$this->session->firstname?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?=$this->session->phone?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?=$this->session->email?></p>
                                            </div>
                                            
                                        </div>
                                        <hr>
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Date of Birth</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['dob']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Residential Address</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['address']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>State of Residence</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['state_of_residence']?></p>
                                            </div>
                                            
                                        </div>
										<hr>
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>State Of Origin</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['state_of_origin']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Senatorial District</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['senatorial_district']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Local Government Area</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['lga']?></p>
                                            </div>
                                            
                                        </div>
										
										<hr>
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Town / City</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['town_of_origin']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Village</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['village_of_origin']?></p>
                                            </div>
                                                                                        
                                        </div>
										<hr>
										<h4 class="card-title">Parent's Details</h4>
										<h6 class="card-subtitle">Information Provided</h6>
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Father Name</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['father_name']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Father Mobile Number</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['father_phone']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>State of Origin</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['father_state_of_origin']?></p>
                                            </div>
                                            
                                        </div>
										<hr>
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Mother's Name</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['mother_name']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['mother_phone']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>State of Origin</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['mother_state_of_origin']?></p>
                                            </div>
                                            
                                        </div>
										<hr>
										<h4 class="card-title">Bank Details</h4>
										<h6 class="card-subtitle">Information Provided</h6>
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Bank Name</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['bank_name']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Account Number</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['account_number']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Bank Verification Number</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['bvn']?></p>
                                            </div>
                                            
                                        </div>
										
                                    </div>
                                </div>
								
								<!-- University Tab -->
								
								<div class="tab-pane" id="university" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>University Name</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['university_name']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>State</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['university_state']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Other University</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['other_university']?></p>
                                            </div>
                                            
                                        </div>
                                    
									
                                        <div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Course of Study</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['course_of_study']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Anticapted Degree</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['anticipated_degree']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>University Level</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['university_level']?>/p>
                                            </div>
                                            
                                        </div>
										
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Semester </strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['semester_level']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Student ID</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['student_id_number']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Matric Number</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['matric_number']?></p>
                                            </div>
                                            
                                        </div>
										
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Current Result </strong>
                                                <br>
                                                <p class="text-muted"><a href ="#">Download Semester Result</a></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Programme State Date</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['programme_start_date']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Programme End Date</strong>
                                                <br>
                                                <p class="text-muted">programme_end_state</p>
                                            </div>
                                            
                                        </div>
										
										<div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>University Contact Person</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['uni_contact_person']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Contact Phone Number</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['uni_contact_person_phone']?></p>
                                            </div>
                                                                                        
                                        </div>
                                    </div>
                                </div>
								
								
								<!-- End University Tab -->
								
								
								<!-- Loan Tab -->
								
								<div class="tab-pane" id="loan" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Loan ID</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['matric_number']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Loan Type</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['loan_type']?></p>
                                            </div>
                                            <div class="col-md-4 col-xs-6"> <strong>Amount Requested</strong>
                                                <br>
                                                <p class="text-muted"><?=$profile['loan_amount']?></p>
                                            </div>
                                            
                                        </div>
                                    
									
                                        
							
                                    </div>
                                </div>
								
								
								<!-- End Loan Tab -->
								
								
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12" disabled>Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line" disabled>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
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
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">New Loan Application</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Loan For Students Already in School</h4>
                                                <p>This loan programe enable students who are already in school to pay for tuition fees and other school dues.<br>
												<a href="new_loan.html" class="btn btn-info" role="button">Already in school</a></p>
												
												
												<h4>Loan For Students Seeking Addmission Funds</h4>
                                                <p>This loan programme is for prospective student seeking loan to pay for admission fees, Post UTME and other<br> 
												<a href="prospective.html" class="btn btn-info" role="button">Prospective Student Loan</a><br/></p>
												
												
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
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
    <script src="<?=base_url()?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url()?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url()?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?=base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url()?>assets/js/custom.min.js"></script>
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
</body>

</html>