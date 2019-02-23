<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-4 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h3 class="text-dark">Select Polling Unit</h3>
					<p>
						<div class="row">
						<?php
							if(isset($pus) && !empty($pus)):
								foreach($pus as $pu):
								?>
								<div class="col-sm-12">
									<a href="<?=base_url('results/center/'.$lurl.'/'.$pu['pu_id'])?>"><?=$pu['pu_name']?></a>
								</div>
								<?php
								endforeach;
							else:
								echo "No Polling Units have been added.";
							endif;
						?>
						</div>
					</p>
				</div>
			</div>
		</div>
		
		<div class="col-lg-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h3 align="center" class="text-dark"><?=$page_title?></h3>
					<h4 align="center" class="text-dark"><?=$state->state_name?></h4>
					<h5 align="center" class="text-dark"><?=$lga->lga_name?></h5>
					<h6 align="center" class="text-dark"><?=$ward->ward_name?></h6>
					<p>
						<hr/>
						<div class="row">
							<div class="col-md-6">
								<label>Registered Voters</label> : : 
								<span><?=$result['registered_voters']?> </span>
							</div>
							<div class="col-md-6">
								<label>Accredited Voters</label> : : 
								<span><?=$result['accredited_voters']?> </span>
							</div>
						</div>
						<hr/>
				
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/ADC.jpg')?>" width="50" height="50" /><label>ADC</label> : :  <?=$result['adc']?> <br/>
							</div>
							<div class="col-md-6">
									<img src="<?=base_url('assets/images/ANN.jpg')?>" width="50" height="50" /><label>ANN</label> : :  <?=$result['ann']?> <br/>
								</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/ADP.jpg')?>" width="50" height="50" /><label>ADP</label> : :  <?=$result['adp']?> <br/>
							</div>
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/SDP.jpg')?>" width="50" height="50" /><label>SDP</label> : :  <?=$result['sdp']?> <br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/APC.jpg')?>" width="50" height="50" /><label>APC</label> : :  <?=$result['apc']?> <br/>
							</div>
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/UPN.jpg')?>" width="50" height="50" /><label>UPN</label> : :  <?=$result['upn']?> <br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/LP.jpg')?>" width="50" height="50" /><label>LP</label> : :  <?=$result['lp']?> <br/>
							</div>
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/PDP.jpg')?>" width="50" height="50" /><label>PDP</label> : :  <?=$result['pdp']?> <br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/NGP.jpg')?>" width="50" height="50" /><label>NGP</label> : :  <?=$result['ngp']?> <br/>
							</div>
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/PDM.jpg')?>" width="50" height="50" /><label>PDM</label> : :  <?=$result['pdm']?> <br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/GPN.jpg')?>" width="50" height="50" /><label>GPN</label> : :  <?=$result['gpn']?> <br/>
							</div>
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/APGA.jpg')?>" width="50" height="50" /><label>APGA</label> : :  <?=$result['apga']?> <br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/SPN.jpg')?>" width="50" height="50" /><label>SPN</label> : :  <?=$result['spn']?> <br/>
							</div>
							<div class="col-md-6">
								<img src="<?=base_url('assets/images/YDP.jpg')?>" width="50" height="50" /><label>YDP</label> : :  <?=$result['ydp']?> <br/>
							</div>
						</div>
						<hr/>
						
						<div class="row">
							<div class="col-md-6">
								<label>Invalid Votes</label> : : 
								<span><?=$result['invalid_votes']?> </span>
							</div>
							<div class="col-md-6">
								<label>Valid Votes</label> : : 
								<span><?=$result['valid_votes']?> </span>
							</div>
						</div>
						<hr/>
						
						<div class="row">
							<div class="col-md-4">
								<label><b>Total Votes</b></label>
							</div>
							<div class="col-md-4">
								<b> : : </b>
							</div>
							<div class="col-md-4">
								<b><?=$result['valid_votes']+$result['invalid_votes']?></b> 
							</div>
						</div>
					</p>

					<p>
						<form action="" method="post">
							<input type="hidden" name="pdf" id="pdf" value="pdf" />
							<input type="submit" value="Generate PDF" class="btn btn-success mr-2" name="gen_pdf" />
						</form>
					</p>
				</div>
			</div>
		</div>                 
	</div>
</div>
		
		