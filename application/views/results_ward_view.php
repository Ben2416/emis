<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Select Ward</h3>
					<div class="row" style="font-size:12px;">
					<?php
						if(isset($wards) && !empty($wards)):
							foreach($wards as $wd):
							?>
							<div class="col-sm-3	">
								<a href="<?=base_url('results/pu/'.$lurl.'/'.$wd['ward_id'])?>"><?=$wd['ward_name']?></a>
							</div>
							<?php
							endforeach;
						else: 
							echo "No Wards have been added.";
						endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 grid-margin">
		<div class="row" style="font-size:12px;">
		<div class="col-lg-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h4 align="center" class="text-dark"><?=$page_title?></h4>
					<h5 align="center" class="text-dark"><?=ucwords($state->state_name)?> State</h5>
					<h6 align="center" class="text-dark"><?=$lga->lga_name?> LGA</h6>
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

						<form action="" method="post" align="center">
							<input type="hidden" name="pdf" id="pdf" value="pdf" />
							<input type="submit" value="Generate PDF" class="btn btn-success mr-2" name="gen_pdf" />
						</form>
				</div>
				</div>
				</div>
			</div>
		</div>  

		  

		<div class="col-lg-6 grid-margin ">  
			<div class="row">
				<div class="col-lg-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Election Score chart</h4>
							<div id="ch">
								<canvas id="barChartSen" style="height:230px"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Major Party chart</h4>
							<canvas id="doughnutChartSen" style="height:250px"></canvas>
							<div id="diff">Difference : : <?=abs( intval($result['apc'])-intval($result['pdp']) )?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
		
	</div>
</div>
		
		