<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">

                  <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">

		<form method="post" action="<?=base_url('Election/pu')?>">
			<fieldset>
				<legend>Select Election</legend>
				<input type="hidden" name="election_type" value="<?=$election_type?>" />
				<input type="hidden" name="election_state" value="<?=$election_state?>" />
				<input type="hidden" name="election_lga" value="<?=$election_lga?>" />				
				<input type="hidden" name="election_ward" value="<?=$election_ward?>" />
				
				<label><?=$etype->etype_name?> :: <?=$state->state_name?> State :: <?=$lga->lga_name?> LGA :: <?=$ward->ward_name?> Ward </label>
				<select name="election_pu">
					<option value="">Select Polling Unit</option>
					<?php foreach($pus as $pu): ?>
					<option value="<?=$pu['pu_id']?>"><?=$pu['pu_name']?></option>
					<?php endforeach; ?>
				</select>
				
				<input type="submit" name="add_pu" class="btn btn-success mr-2" value="Next" />
				
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