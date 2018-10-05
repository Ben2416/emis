<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
                <!-- Basic Validation -->
                <div class="card mb-3 shadow no-b r-0">
                    <div class="card-header white">
                        <h6>FUND ACCOUNT</h6>
                    </div>
                    <div class="card-body">
                        <form id="form_validation" action="<?=base_url()?>admin/Accounts/fund" class="form-material" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="form-group form-float">
								<div class="form-line">
									<?=validation_errors()?>
								</div>
							</div>
							<div class="form-group form-float">
                                <div class="form-line">
									<select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="account" name="account">
										<option selected>Choose Account...</option>
										<?php foreach($accounts as $ac): ?>
										<option value="<?=$ac['acid']?>" <?=set_select('account',$ac['acid'])?> ><?=$ac['account_name']?></option>
										<?php endforeach; ?>
									</select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="amount" required="" id="amount" value="<?=set_value('amount')?>">
                                    <label class="form-label">Amount</label>
                                </div>
                            </div>
                            <!--<div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="addedBy" required="" id="addedBy" value="{loggedInUser}">
                                    <label class="form-label">Added By</label>
                                </div>
                            </div>-->
							<div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="fund_source" cols="30" rows="5" class="form-control no-resize" required="" id="fund_source"><?=set_value('fund_source')?></textarea>
                                    <label class="form-label">Source of Fund</label>
                                </div>
                            </div>
							<div class="form-group form-float">
								<label class="form-label">Upload Approval Document</label>
                                <div class="form-line">
                                    <input type="file" class="form-control" name="fund_approval" required="" id="fund_approval">
                                    
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" name="fund_account_btn" id="fund_account_btn" value="fund_account_btn" type="submit">FUND ACCOUNT</button>
                        </form>
                    </div>
                </div>
                <!-- #END# Basic Validation -->
                <!-- Advanced Validation -->

                <!-- #END# Advanced Validation -->
                <!-- Validation Stats -->

                <!-- #END# Validation Stats -->
            </div>
        <div class="col-md-5">
            <h3>Notice</h3>
            <hr>
            <p>The system will automatically increase funds from the selected account<br/></p>
            <a href="#" target="_blank" class="btn btn-xs btn-primary">Fund other accounts</a>

        </div>
    </div>
</div>
