<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">

                  <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">

		<form method="post" action="<?=base_url('Election')?>">
			<fieldset>
				<legend>Select Election</legend>
				
				<input type="radio" name="election_type" value="001" />
				<label>Presidential Election</label></br>
				<input type="radio" name="election_type" value="002" />
				<label>Senatorial Election</label></br>
				<input type="radio" name="election_type" value="003" />
				<label>House of Reps Election</label></br>
				<input type="radio" name="election_type" value="004" />
				<label>Gubernatorial Election</label></br>
				<input type="radio" name="election_type" value="005" />
				<label>House of Assembly Election</label></br>
				
				<input type="submit" name="add_election" value="Next" />
				
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