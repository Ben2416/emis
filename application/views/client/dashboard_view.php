		<!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">N700,000.00</h3>
                                <h6 class="card-subtitle">Approved Loan</h6></div>
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">N200,000.00</h3>
                                <h6 class="card-subtitle">Amount Paid</h6></div>
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                                <h3 class="">N500,000.00</h3>
                                <h6 class="card-subtitle">Outstanding</h6></div>
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                                <h3 class="">Sept 20, 2018</h3>
                                <h6 class="card-subtitle">Next Due Date</h6></div>
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-wrap">
                                        <div>
                                            <h4 class="card-title">Loans Applied For</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Type of Loan</th>
                                                        <th>Amount Requested</th>
                                                        <th>Status</th>
                                                        <th class="text-nowrap">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!--<tr>
                                                        <td>Student Loan</td>
                                                        <td>
                                                            N700,000.00
                                                        </td>
                                                        <td><span class="label label-warning">Processing</span></td>
                                                        <td class="text-nowrap">
                                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                        </td>
                                                    </tr>-->
													<?php
														foreach($loans as $loan):
													?>
													<tr>
                                                        <td><?=$loan['loan_type']?></td>
                                                        <td>
                                                           <?=$loan['loan_amount']?>
                                                        </td>
                                                        <td><span class="label label-warning">Processing</span></td>
                                                        <td class="text-nowrap">
                                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                        </td>
                                                    </tr>
													
													<?php endforeach;?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3">
                    <div class="card card-inverse card-info">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="m-r-20 align-self-center">
                                    <h1 class="text-white"><i class="ti-light-bulb"></i></h1></div>
                                <div>
                                    <h3 class="card-title">Anouncements</h3>
                                    <h6 class="card-subtitle">September 2018</h6> </div>
                            </div>
                            <div class="row">
                                <div class="col-6 align-self-center">
                                    <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i>Demo Content</small></sup></h2>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Column -->
            </div>


            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
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
</body>

</html>