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
			<h3>Add Ward</h3>
			<form method="post" action="<?=base_url('Populate/ward');?>">
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
					<input type="text" name="ward_code" id="ward_code" placeholder="Ward Code E.g. 07, 18" />
					<input type="text" name="ward_name" id="ward_name" placeholder="Ward Name" />
					<!--<select name="ward" id="ward"></select>
					<select name="pu" id="pu"></select>-->
					
				</fieldset>
				
				<fieldset>
					<input type="submit" name="add_ward_btn" class="btn btn-success mr-2" value="Add Ward" />
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