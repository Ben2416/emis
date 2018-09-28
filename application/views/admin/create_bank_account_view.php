<div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>NEW ACCOUNT DETAILS</h6>
                        </div>
                        <div class="card-body">
                            <form id="form_validation" class="form-material" method="POST" novalidate="novalidate">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="accountName" required="" id="accountName">
                                        <label class="form-label">Account Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="accountNumber" required="" id="accountNumber">
                                        <label class="form-label">Account Number</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bankName" required="" id="bankName">
                                        <label class="form-label">Bank Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="accountOfficer" required="" id="accountOfficer">
                                        <label class="form-label">Account Officer</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="acct_phone_number" required="" id="acct_phone_number">
                                        <label class="form-label">Account Officer Phone number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required=""></textarea>
                                        <label class="form-label">Note</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">CREATED ACCOUNT</button>
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