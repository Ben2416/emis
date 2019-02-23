<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Result Updates</h3>
					<form method="post" action="<?=base_url('Results')?>">
					<p>
						<?=validation_errors()?>					
					</p>
					<div class="form-group row">
		                <div class="col-sm-2">        
							<select name="election_type" id="election_type" class="form-control" >
								<option value="">Select Election Type</option>
								<option value="001">Presidential Election</option>
								<option value="002">Senatorial Election</option>
								<option value="003">House of Reps Election</option>
								<option value="004">Gubernatorial Election</option>
								<option value="005">House of Assembly Election</option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="state" id="state" class="hide form-control">
								<option value="">Select State</option>
								<?php foreach($states as $state): ?>
								<option value="<?=$state['state_id']?>"><?=$state['state_name']?></option>
								<?php endforeach;?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="lga" id="lga" class="hide form-control">
							</select>
						</div>
						<div class="col-sm-2">
							<select name="ward" id="ward" class="hide form-control">
							</select>
						</div>
						<div class="col-sm-2">
							<select name="pu" id="pu" class="hide form-control">
							</select>
                		</div>
						<input type="submit" name="add_monitor" id="add_monitor" value="Start Monitoring" class="btn btn-success mr-2 hide" />
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
					<table class="table-bordered table-hover text-dark" style="font-size:10px;font-family:verdana;text-align:center;width:100%;">
						<thead>
							<tr>
								<th>Year</th>
								<th>Type</th>
								<th>State</th>
								<th>LGA</th>
								<th>Ward</th>
								<th>Polling Unit</th>
								<th>Registered Voters</th>
								<th>Accredited Voters</th>
								<th>ADC</th>
								<th>ANN</th>
								<th>ADP</th>
								<th>SDP</th>
								<th>APC</th>
								<th>UPN</th>
								<th>LP</th>
								<th>PDP</th>
								<th>NGP</th>
								<th>PDM</th>
								<th>GPN</th>
								<th>APGA</th>
								<th>SPN</th>
								<th>YDP</th>
								<th>Valid Votes</th>
								<th>Invalid Votes</th>
								<th>Total Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($result) && !empty($result)):
								foreach($result as $res):
									echo "<tr><td>".$res['election_year']."</td>";
									echo "<td>".$res['election_type']."</td>";
									echo "<td>".$res['election_state']."</td>";
									echo "<td>".$res['election_lga']."</td>";
									echo "<td>".$res['election_ward']."</td>";
									echo "<td>".$res['election_pu']."</td>";
									echo "<td>".$res['registered_voters']."</td>";
									echo "<td>".$res['accredited_voters']."</td>";
									echo "<td>".$res['adc']."</td>";
									echo "<td>".$res['ann']."</td>";
									echo "<td>".$res['adp']."</td>";
									echo "<td>".$res['sdp']."</td>";
									echo "<td>".$res['apc']."</td>";
									echo "<td>".$res['upn']."</td>";
									echo "<td>".$res['lp']."</td>";
									echo "<td>".$res['pdp']."</td>";
									echo "<td>".$res['ngp']."</td>";
									echo "<td>".$res['pdm']."</td>";
									echo "<td>".$res['gpn']."</td>";
									echo "<td>".$res['apga']."</td>";
									echo "<td>".$res['spn']."</td>";
									echo "<td>".$res['ydp']."</td>";
									echo "<td>".$res['invalid_votes']."</td>";
									echo "<td>".$res['valid_votes']."</td>";
									echo "<td>".($res['valid_votes']+$res['invalid_votes'])."</td></tr>";
								endforeach;
							endif;
							?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>