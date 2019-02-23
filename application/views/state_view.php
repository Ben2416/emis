<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">

                  <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">

		<form method="post" action="<?=base_url('Election/state')?>">
			<fieldset>
				<legend>Select Election</legend>
				<input type="hidden" name="election_type" value="<?=$election_type?>" />
				
				<label><?=$etype->etype_name?></label>
				<select name="election_state">
					<option value="">Select State</option>
					<?php foreach($states as $state): ?>
					<option value="<?=$state['state_id']?>"><?=$state['state_name']?></option>
					<?php endforeach;?>
				</select>
				
				<input type="submit" name="add_state" class="btn btn-success mr-2" value="Next" />
				
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