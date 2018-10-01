<div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>NEW Expense</h6>
                        </div>
                        <div class="card-body">
                            <form id="form_validation" class="form-material" method="POST" novalidate="novalidate">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                          <option selected>Expense Type...</option>
                                          <option value="1">Office Stationaries</option>
                                          <option value="1">Food Items</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="expense_date" required="" id="expense_date">
                                        <label class="form-label">Expense Date</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="recurring" required="" id="recurring">
                                        <label class="form-label"></label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="createdBy" required="" id="createdBy" value="{loggedIn User}">
                                        <label class="form-label"></label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required=""></textarea>
                                        <label class="form-label">Note</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <input hidden id="expenses_invoice" name="expenses_invoice"/>
                                      <div class="dropzone dropzone-file-area p-3 m-3 bg-light" id="fileUpload">
                                          <div class="dz-default dz-message">
                                              <span>Drop or Click to add invoice / receipts </span>
                                              <div>You can also click to open file browser</div>
                                          </div>
                                      </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">Add Expense</button>
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
                <p>Manage all expenses in the office<br/></p>
                <a href="#" target="_blank" class="btn btn-xs btn-primary">View Expenses </a>

            </div>
        </div>
    </div>
