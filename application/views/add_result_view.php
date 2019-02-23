<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">

				<form method="post" action="<?=base_url('election/addResult').'/'.$election_type.'/'.$election_state.'/'.$election_lga.'/'.$election_ward.'/'.$election_pu?>">
					<h3 class="text-dark" align="center">Add Result</h3>
					<h5 align="center"><?=$etype->etype_name?> :: <?=$state->state_name?> State :: <?=$lga->lga_name?> LGA :: <?=$ward->ward_name?> Ward :: <?=$pu->pu_name?></h5>
					<input type="hidden" name="election_type" value="<?=$election_type?>" />
					<input type="hidden" name="election_state" value="<?=$election_state?>" />
					<input type="hidden" name="election_lga" value="<?=$election_lga?>" />				
					<input type="hidden" name="election_ward" value="<?=$election_ward?>" />
					<input type="hidden" name="election_pu" value="<?=$election_pu?>" />
					<p><?=validation_errors()?>
					<hr/>
					<p>
						
						<div class="row">
							<div class="col-md-2">
								<label>Registered Voters</label>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="number" name="reg_voters" placeholder="registered voters" />
							</div>
							<div class="col-md-3">
								<label>Accredited Voters</label>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="number" name="acr_voters" placeholder="accredited voters" />
							</div>
						</div>
						<hr/>
						
						<div class="row">
							<div class="col-md-12">
								<h4 class="card-title">Party Results</h4>
							</div>
						</div>
						
						<div class=" form-group row">
							<div class="col-sm-2">
								<label>ADC</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/ADC.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="adc" placeholder="ADC"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>ANN</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/ANN.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="ann" placeholder="ANN"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>ADP</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/ADP.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="adp" placeholder="ADP"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>SDP</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/SDP.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="sdp" placeholder="SDP"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>APC</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/APC.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="apc" placeholder="APC"/>
								</div>
							</div>
						  
							<div class="col-sm-2">
								<label>UPN</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/UPN.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="upn" placeholder="UPN"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>LP</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/LP.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="lp" placeholder="LP"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>PDP</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/PDP.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="pdp" placeholder="PDP"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>NGP</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/NGP.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="ngp" placeholder="NGP"/>
								</div>
							</div>
						   
							<div class="col-sm-2">
								<label>PDM</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/PDM.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="pdm" placeholder="PDM"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>GPN</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/GPN.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="gpn" placeholder="GPN"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>APGA</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/APGA.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="apga" placeholder="APGA"/>
								</div>
							</div>
							<div class="col-sm-2">
								<label>SPN</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/SPN.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="spn" placeholder="SPN"/>
								</div>
							</div>
						  
				  
							<div class="col-sm-2">
								<label>YDP</label>
								<div class="input-group">
									<div class="input-group-prepend bg-info">
										<span class="input-group-text bg-transparent" style="padding: 0rem 0rem;">
											<img src="<?=base_url('assets/images/YDP.jpg')?>" width="40" height="40" />
										</span>
									</div>
									<input class="form-control" type="number" name="ydp" placeholder="YDP"/>
								</div>
							</div>
						</div>
						<hr/>
						
						<div class="row">
							<div class="col-md-2">
								<label>Valid Votes</label>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="number" name="valid_votes" placeholder="valid votes" />
							</div>
							<div class="col-md-2">
								<label>Invalid Votes</label>
							</div>
							<div class="col-md-4">	
								<input class="form-control" type="number" name="invalid_votes" placeholder="invalid votes" />
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-lg-12">
								<input type="submit" name="add_result" class="btn btn-success mr-2 btn-lg btn-block" value="Send Score" />
							</div>
						</div>
						
					</p>
				</form>
				</div>
		
			</div>
		</div>
	</div>
</div>