<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicon.png">
    <title>Bayelsa State Higher Education Student Loan Board</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="<?=base_url()?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	<!-- toastr CSS -->
	<link href="<?=base_url()?>assets/toastr.css" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?=base_url()?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        
                        <img src="<?=base_url()?>assets/images/logo.png" alt="homepage" class="light-logo" />
                    </b>
					</a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->


                </ul>
                
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
   
		
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- Validation wizard -->
    <div class="row" id="validation">
        <div class="col-12">
            <div class="card wizard-content">
                <div class="card-body text-center">
                    <h4 class="card-title">ERROR 404</h4>
                    <h6 class="card-subtitle">You do not have access to requested page.</h6>
                    
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

</body>

</html>
