<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Add Agents</h5>
					<form method="post" action="<?=base_url('Agents/addWardAgent');?>">
					<p>
						<p><?=validation_errors();?></p>
					</p>
					<p>
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
						</div>
					
						<div class="card-body">
							<h3 class="card-title">Agents Details</h3>
							<p>
								<ol>
									<li>
										<label> Agent's Name</label>
										<input type="text" name="agent1" value="<?=set_value('agent1')?>" class="form-control"/><br/>
										<label> Agent's Phone</label>
										<input type="text" name="phone1" value="<?=set_value('phone1')?>" class="form-control"/>
									</li><br/>
						
								</ol>
							</p>
						</div>
				
						<div class="row">
							<input type="submit" name="add_ward_agents" value="Add Ward Agent" class="btn btn-success mr-2"/>
						</div>
					</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>