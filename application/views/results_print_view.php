<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=ucfirst($page_title)?></title>
  <!-- plugins:css 
  <link href="<?=base_url('assets/css/toastr.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?=base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.base.css') ?>" />
  <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.addons.css') ?>" />
  -->
  <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css --
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css') ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png') ?>" />
</head>

<body>
	<div class="container-scroller">
	<!-- partial:partials/_navbar.html -->
	
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
		
			<div class="main-panel" style="width:100%">
				<div class="content-wrapper" style="padding:0;">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="card">
								<div class="row">

									<div class="col-lg-10 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">

												<p>
													<fieldset>
														<h3 align="center"><?=$page_title?></h3>
													</fieldset>
													<hr/>
													<fieldset>
														<table width="80%" align="center">
															<tr>
																<td>
																	<label>Registered Voters</label>  <?=$result['registered_voters']?> <br/>
																</td>
																<td>
																	<label>Accredited Voters</label>  <?=$result['accredited_voters']?> <br/>
																</td>
															</tr>
														</table>
													</fieldset>
													<hr/>
													<fieldset>
														<table width="80%" align="center">
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/ADC.jpg')?>" width="50" height="50" /><label>ADC</label> <?=$result['adc']?> <br/>
																</td>
																<td>
																	<img src="<?=base_url('assets/images/ANN.jpg')?>" width="50" height="50" /><label>ANN</label> <?=$result['ann']?> <br/>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/ADP.jpg')?>" width="50" height="50" /><label>ADP</label> <?=$result['adp']?> <br/>
																</td>
																<td>
																		<img src="<?=base_url('assets/images/SDP.jpg')?>" width="50" height="50" /><label>SDP</label> <?=$result['sdp']?> <br/>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/APC.jpg')?>" width="50" height="50" /><label>APC</label> <?=$result['apc']?> <br/>
																</td>
																<td>
																	<img src="<?=base_url('assets/images/UPN.jpg')?>" width="50" height="50" /><label>UPN</label> <?=$result['upn']?> <br/>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/LP.jpg')?>" width="50" height="50" /><label>LP</label> <?=$result['lp']?> <br/>
																</td>
																<td>
																	<img src="<?=base_url('assets/images/PDP.jpg')?>" width="50" height="50" /><label>PDP</label> <?=$result['pdp']?> <br/>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/NGP.jpg')?>" width="50" height="50" /><label>NGP</label> <?=$result['ngp']?> <br/>
																</td>
																<td>
																	<img src="<?=base_url('assets/images/PDM.jpg')?>" width="50" height="50" /><label>PDM</label> <?=$result['pdm']?> <br/>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/GPN.jpg')?>" width="50" height="50" /><label>GPN</label> <?=$result['gpn']?> <br/>
																</td>
																<td>
																	<img src="<?=base_url('assets/images/APGA.jpg')?>" width="50" height="50" /><label>APGA</label> <?=$result['apga']?> <br/>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="<?=base_url('assets/images/SPN.jpg')?>" width="50" height="50" /><label>SPN</label> <?=$result['spn']?> <br/>
																</td>
																<td>
																	<img src="<?=base_url('assets/images/YDP.jpg')?>" width="50" height="50" /><label>YDP</label> <?=$result['ydp']?> <br/>
																</td>
															</tr>
														</table>
													</fieldset>
													<hr/>
													<fieldset>
														<table width="80%" align="center">
															<tr>
																<td>
																	<label>Invalid Votes</label> <?=$result['invalid_votes']?> <br/>
																</td>
																<td>
																	<label>Valid Votes</label> <?=$result['valid_votes']?> <br/>
																</td>
															</tr>
														</table>
													</fieldset>
													<hr/>
													<fieldset>
														<table width="80%" align="center">
															<tr>
																<td>
															<label><b>Total Votes</b></label> <?=$result['valid_votes']+$result['invalid_votes']?> <br/>
																</td>
															</tr>
														</table>
													</fieldset>
												</p>

											</div>
										</div>
									</div>
          
								</div>
							</div>
						</div>
					</div>
				</div>
       
		
		
			<!--<footer class="footer">
			  <div class="container-fluid clearfix">
				<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
				  <a href="#" target="_blank">o3interactive technologies</a>. All rights reserved.</span>

			  </div>
			</footer>
			 partial -->
			</div>
			<!--main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

  <!-- plugins:js --
  <script src="<?=base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
  <script src="<?=base_url('assets/vendors/js/vendor.bundle.addons.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js --
  <script src="<?=base_url('assets/js/off-canvas.js')?>"></script>
  <script src="<?=base_url('assets/js/misc.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page--
  <script src="<?=base_url('assets/js/dashboard.js')?>"></script>
  <!-- End custom js for this page-->
  <!-- Custom js for this page-->

	
	
	</body>
</html>