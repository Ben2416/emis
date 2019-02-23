<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">

                  <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
		<p>
			<h3>Add Polling Unit</h3>
			<form method="post" action="<?=base_url('Populate/pu');?>">
				<fieldset>
					<p><?=validation_errors();?></p>
				</fieldset>
				<fieldset>
					<legend>Center Details</legend>
					<select name="state" id="state">
						<option value="">Select State</option>
						<?php foreach($states as $state): ?>
						<option value="<?=$state['state_id']?>"><?=$state['state_name']?></option>
						<?php endforeach;?>
					</select>
					<select name="lga" id="lga"></select>
					<select name="ward" id="ward"></select>
					<input type="text" name="pu_code" id="pu_code" placeholder="PU Code E.g. 007, 018" />
					<input type="text" name="pu_name" id="pu_name" placeholder="PU Name" />
					<!--<select name="pu" id="pu"></select>-->
					
				</fieldset>
				
				<fieldset>
					<input type="submit" name="add_pu_btn" class="btn btn-success mr-2" value="Add Polling Unit" />
				</fieldset>
			</form>
		</p>
		
		
		</div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


        </div>		