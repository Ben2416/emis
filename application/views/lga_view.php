<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">

                  <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">

		<form method="post" action="<?=base_url('Election/lga')?>">
			<fieldset>
				<legend>Select Election</legend>
				<input type="hidden" name="election_type" value="<?=$election_type?>" />
				<input type="hidden" name="election_state" value="<?=$election_state?>" />
				
				<label><?=$etype->etype_name?> :: <?=$state->state_name?> State</label>
				<select name="election_lga">
					<option value="">Select LGA</option>
					<?php foreach($lgas as $lga): ?>
					<option value="<?=$lga['lga_id']?>"><?=$lga['lga_name']?></option>
					<?php endforeach; ?>
				</select>
				
				<input type="submit" name="add_lga" class="btn btn-success mr-2" value="Next" />
				
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