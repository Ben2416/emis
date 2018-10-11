
    <div class="container-fluid animatedParent animateOnce">
      <div class="row" style="padding-top:10px">
                               <div class="col-lg-4">
                                   <div class="card r-3">
                                       <div class="p-4">

                                           <div class="counter-title">Total No. of Loans</div>
                                           <h5 class=""><?=$total_loans?></h5>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="card r-3">
                                       <div class="p-4">

                                           <div class="counter-title ">Total No. of Approved Loans</div>
                                           <h5 class=""><?=$approved_loans?></h5>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="white card">
                                       <div class="p-4">

                                           <div class="counter-title">Total No. Disbursed Loans</div>
                                           <h5 class=""><?=$disbursed_loans?></h5>
                                       </div>
                                   </div>
                               </div>
                           </div>
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive" style="padding-top:10px;">
                                <form>
                                    <table class="table table-striped table-hover r-0 data-tables" data-options='{ "paging": false; "searching":false}'>
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                        class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>APPLICANT NAME</th>

                                            <th> <div class="d-none d-lg-block">LOAN ID</div></th>
                                            <th> <div class="d-none d-lg-block">LOAN TYPE</div></th>
                                            <th> <div class="d-none d-lg-block">REQUESTED</div></th>
                                            <th> <div class="d-none d-lg-block">DISBURSED</div></th>
                                            <th> <div class="d-none d-lg-block">STATUS</div></th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
										<?php foreach ($loans as $loan): ?>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_32" required><label
                                                        class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>
                                            <td>
                                              <div class="d-flex">
                                                  <div class="avatar avatar-md mr-3 mb-2 mt-1">
                                                      <span class="avatar-letter avatar-letter-d  avatar-md circle"></span>
                                                  </div>
                                                  <div>
                                                      <div>
                                                          <strong><?=$loan['firstname'].' '.$loan['lastname']?></strong>
                                                      </div>
                                                      <small> <?=$loan['email']?></small>
                                                  </div>
                                              </div>
                                            </td>

                                            <td> <div class="d-none d-lg-block">BYSHESLB/B<?=$loan['batch']?>/<?=$loan['loan_id']?></div></td>
                                            <td> <div class="d-none d-lg-block"><span class="r-3 badge badge-success "><?=$loan['loan_type']?></span></div></td>

                                            <td> <div class="d-none d-lg-block"><?=$loan['loan_amount']?></div></td>
                                            <td> <div class="d-none d-lg-block">0.00</div></td>
                                            <td> <div class="d-none d-lg-block"><span class="r-3 badge badge-success "><?=$loan['status']?></span></div></td>
                                            <td>
                                                <a href="<?=base_url()?>admin/Students/studentProfile/<?=$loan['user_id']?>"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
										<?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


		</div>
		<!--Add New Message Fab Button-->

	</div>
