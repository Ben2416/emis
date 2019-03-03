<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				<form method="post" action="<?=base_url('Messages')?>">
					<h3 class="card-title">Election Message Format</h3>
					<p><?=validation_errors()?></p>
					<p>
						<div class="form-group">
							<label>Election Type : : </label>
							<select name="etype" id="etype" class="form-control">
								<option value="">Selection Election</option>
								<?php
									foreach($elections as $e){
										echo "<option value='".$e['etype_id']."'>".$e['etype_name']."</option>";
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Agent Group : : </label>
							<select name="egroup" id="egroup" class="form-control">
								<option value="">Select Agent Group</option>
								<option value="ward">Ward Agents</option>
								<option value="pu">Polling Unit Agnts</option>
							</select>
						</div>
						<div class="form-group">
							<button name="send_format_btn" value="Send Format" type="submit" class="btn btn-success mr-2">
								<i class="fa fa-edit"></i> Send Format
							</button>
						</div>
						<hr/>
						<div class="form-group">
							<label>
								<code>
									ELECTION=ElectionType:<br/>
									PU=state/lga/ward/pu:<br/>
									RV=RegisteredVoters, AV=AccreditedVoters:<br/>
									party1=value,<br/>
									party2=value,<br/>
									lastparty=value:<br/>
									IV=InvalidVotes, VV=ValidVotes
								</code>
							</label>
						</div>
					</p>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>