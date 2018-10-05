<div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>NEW ACCOUNT DETAILS</h6>
                        </div>
                        <div class="card-body">
                            <form id="form_validation" class="form-material" method="POST" action="<?=base_url()?>admin/Accounts/create" novalidate="novalidate">
								<div class="form-group form-float">
									<div class="form-line">
										<?=validation_errors()?>
									</div>
								</div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="account_name" required="" id="account_name" value="<?=set_value('account_name')?>">
                                        <label class="form-label">Account Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="account_number" required="" id="account_number" value="<?=set_value('account_number')?>">
                                        <label class="form-label">Account Number</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bank_name" required="" id="bank_name" value="<?=set_value('bank_name')?>">
                                        <label class="form-label">Bank Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="account_officer" required="" id="account_officer" value="<?=set_value('account_officer')?>">
                                        <label class="form-label">Account Officer</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="account_phone_number" required="" id="account_phone_number" value="<?=set_value('account_phone_number')?>">
                                        <label class="form-label">Account Officer Phone number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea cols="30" rows="5" class="form-control no-resize" name="account_notes" id="account_notes" value="<?=set_value('account_notes')?>" required=""></textarea>
                                        <label class="form-label">Note</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit" name="create_bank_account_btn" id="create_bank_account_btn" value="create_bank_account_btn">CREATE ACCOUNT</button>
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
                <p>Accounts created will be available for funding<br/></p>
                <a href="#" target="_blank" class="btn btn-xs btn-primary">Fund </a>

            </div>
        </div>
    </div>
