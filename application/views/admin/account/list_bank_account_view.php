<div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-12">
                    <!-- List accounts created -->
                    <div class="card my-3 no-b">
                        <div class="card-body">
                            <div class="card-title">List of Bank Accounts</div>
                            <table id="example2" class="table table-bordered table-hover data-tables"
                                   data-options='{ "paging": false; "searching":false}'>
                                <thead>
                                <tr>
                                    <th>Account Name</th>
                                    <th>Account Number</th>
                                    <th>Bank Name</th>
                                    <th>Current Balance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								foreach($accounts as $acc):
								?>
                                <tr>
                                    <td><?=$acc['account_name']?></td>
                                    <td><?=$acc['account_number']?></td>
                                    <td><?=$acc['bank_name']?></td>
                                    <td>get balance</td>
                                    <td>
                                      <a href="#"><i class="icon-eye mr-3"></i></a>
                                      <a href="#"><i class="icon-pencil"></i></a>
                                    </td>
                                </tr>
								<?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

        </div>
    </div>
