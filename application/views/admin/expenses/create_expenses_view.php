<div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>NEW Expense</h6>
                        </div>
                        <div class="card-body">
                            <form id="form_validation" class="form-material" method="POST" enctype="multipart/form-data" action="<?=base_url()?>admin/Expenses/create" novalidate="novalidate">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" name="expense_type">
                                          <option selected>Expense Type...</option>
                                          <option value="Office Stationaries" <?=set_select('expense_type','Office Stationaries')?>>Office Stationaries</option>
                                          <option value="Food Items" <?=set_select('expense_type','Food Items')?>>Food Items</option>
                                      </select>
                                    </div>
                                </div>
                                <!--<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="expense_date" required="" id="expense_date">
                                        <label class="form-label">Expense Date</label>
                                    </div>
                                </div>-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="recurring" required="" id="recurring">
                                        <label class="form-label">Recurring</label>
                                    </div>
                                </div>
                                <!--<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="createdBy" required="" id="createdBy" value="{loggedIn User}">
                                        <label class="form-label"></label>
                                    </div>
                                </div>-->

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="expense_note" cols="30" rows="5" class="form-control no-resize" required=""></textarea>
                                        <label class="form-label">Note</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Upload Expense Invoice</label>
									<div class="form-line">
                                      <input type="file" id="expense_invoice" name="expense_invoice"/>
									  
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit" name="add_expense_btn" value="add_expense_btn">Add Expense</button>
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
