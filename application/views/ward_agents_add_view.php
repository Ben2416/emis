<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">

                  <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h5>Add Agents</h5>
			<form method="post" action="<?=base_url('Agents/addWardAgent');?>">
				<fieldset>
					<p><?=validation_errors();?></p>
				</fieldset>
					<div class="form-group row">
					  <div class="col-xs-3">
						<label for="ex1">Select State</label>
						<select name="state" id="state" class="form-control">
						<option value="">Select State</option>
						<?php foreach($states as $state): ?>
						<option value="<?=$state['state_id']?>"><?=$state['state_name']?></option>
						<?php endforeach;?>
					</select>
					  </div>
					  <div class="col-xs-3">
						<label for="ex2">L.G.A</label>
						<select name="lga" id="lga" class="form-control"></select>
					  </div>
					  <div class="col-xs-4">
						<label for="ex3">Ward</label>
						<select name="ward" id="ward" class="form-control"></select>
					  </div>
					  
					</div>
					
				
				
				<fieldset>
					<legend>Agents Details</legend>
					<ol>
						<li>
							<label> Agent's Name</label>
							<input type="text" name="agent1" value="<?=set_value('agent1')?>" class="form-control"/><br/>
							<label> Agent's Phone</label>
							<input type="text" name="phone1" value="<?=set_value('phone1')?>" class="form-control"/>
						</li><br/>
						
					</ol>
				</fieldset>
				
				<fieldset>
					<input type="submit" name="add_ward_agents" value="Add Ward Agent" class="btn btn-success mr-2"/>
				</fieldset>
			</form>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


        </div>