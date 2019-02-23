<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				<form method="post" action="<?=base_url('Election/AddMobile')?>">
					<h3 class="card-title">Refactor Election Message</h3>
					<p>
						<input type="hidden" name="mid" id="mid" value="<?=$msgid?>" />
						<div class="form-group">
							<label>SMS Message : : </label>
							<textarea class="form-control" name="sms" id="sms" required><?=$sms->message?></textarea>
						</div>
						<div class="form-group">
							<label>SMS Sender : : </label>
							<input class="form-control" type="text" name="sender" id="sender" value="<?=$sms->sender?>" required="required" />
						</div>
						<div class="form-group">
							<button name="refactor_btn" type="submit" class="btn btn-success mr-2">
								<i class="fa fa-edit"></i> Refactor
							</button>
						</div>
					</p>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>