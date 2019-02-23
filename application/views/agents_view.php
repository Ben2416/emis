<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">View Agents</h3>
					<form class="forms-sample" method="post" action="<?=base_url('agents');?>">
					<p>
						<p class="text-danger"><?=validation_errors();?></p>
					</p>
				
					<div class="form-group row">
					  <div class="col-sm-3">
						<label for="state">Select State</label>
						<select name="state" id="state" class="form-control">
						<option value="">Select State</option>
						<?php foreach($states as $state): ?>
						<option value="<?=$state['state_id']?>"><?=$state['state_name']?></option>
						<?php endforeach;?>
						</select>
					  </div>
					  <div class="col-sm-3">
						<label for="lga">L.G.A</label>
						<select name="lga" id="lga" class="form-control"></select>
					  </div>
					  <div class="col-sm-3">
						<label for="ward">Ward</label>
						<select name="ward" id="ward" class="form-control"></select>
					  </div>
					  <div class="col-sm-3">
						<label for="pu">Polling Unit</label>
						<select name="pu" id="pu" class="form-control"></select>
					  </div>
					</div>
					<input type="submit" name="get_agents" value="Get Agent" class="btn btn-success mr-2 btn-block"/>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Agents</h4>
					<div class="table-responsive">
						<table class="table-bordered table-hover text-dark" style="font-size:12px;font-family:verdana;text-dark;text-align:center;width:100%;">
							<thead>
								<tr>
									<th>State</th>
									<th>LGA</th>
									<th>Ward</th>
									<th>Polling Unit</th>
									<th>Center Code</th>
									<th>Agent 1</th>
									<th>Phone 1</th>
									<th>Agent 2</th>
									<th>Phone 2</th>
								</tr>
							</thead>
							
							<tbody>
								<?php
								if(isset($agents) && !empty($agents)):
									foreach($agents as $a):
										echo "<tr>";
										echo "<td class='text-capitalize'>".$a['state_name']."</td>";
										echo "<td>".$a['lga_name']."</td>";
										echo "<td>".$a['ward_name']."</td>";
										echo "<td>".$a['pu_name']."</td>";
										echo "<td>".$a['state_id'].'/'.$a['lga_id'].'/'.$a['ward_id'].'/'.$a['pu_id']."</td>";
										echo "<td>".$a['agent1']."</td>";
										echo "<td>".$a['phone1']."</td>";
										echo "<td>".$a['agent2']."</td>";
										echo "<td>".$a['phone2']."</td>";
										echo "</tr>";
									endforeach;
								endif;
								?>
							</tbody>
							
							<tfoot>
								<tr>
									<th>State</th>
									<th>LGA</th>
									<th>Ward</th>
									<th>Polling Unit</th>
									<th>Center Code</th>
									<th>Agent 1</th>
									<th>Phone 1</th>
									<th>Agent 2</th>
									<th>Phone 2</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>