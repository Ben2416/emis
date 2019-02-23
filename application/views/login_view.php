<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EMIS:: <?=$page_title?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.base.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.addons.css')?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?=base_url('assets/vendors/iconfonts/font-awesome/css/font-awesome.css')?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png')?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="<?=base_url('Login')?>" method="post">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="login_btn" class="btn btn-primary submit-btn btn-block"><i class="fa fa-sign-in"></i> Login </button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">Election Monitoring Information System</label>
                  </div>
                </div>
              </form>
            </div>
            <!--<ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>-->
            <p class="footer-text text-center">Copyright © <?=date('Y')?> BenieTech Corporation.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url('/vendors/js/vendor.bundle.base.js')?>"></script>
  <script src="<?=base_url('/vendors/js/vendor.bundle.addons.js')?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url('/js/off-canvas.js')?>"></script>
  <script src="<?=base_url('/js/misc.js')?>"></script>
  <!-- endinject -->
  <script src="<?=base_url('assets/js/toastr.js')?>" type="text/javascript"></script>
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