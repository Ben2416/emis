<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
                <!-- Basic Validation -->
                <div class="card mb-3 shadow no-b r-0">
                    <div class="card-header white">
                        <h6>FUND ACCOUNT</h6>
                    </div>
                    <div class="card-body">
                        <form id="form_validation" class="form-material" method="POST" novalidate="novalidate">
                            <div class="form-group form-float">
                                <div class="form-line">
                                  <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                      <option selected>Choose Account...</option>
                                      <option value="1">Bayelsa State Higher Education Student Loan Board</option>

                                  </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="acctAmount" required="" id="acctAmount">
                                    <label class="form-label">Amount</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="addedBy" required="" id="addedBy" value="{loggedInUser}">
                                    <label class="form-label">Added By</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="sourceFund" cols="30" rows="5" class="form-control no-resize" required="" id="sourceFund"></textarea>
                                    <label class="form-label">Source of Fund</label>
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">FUND ACCOUNT</button>
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
