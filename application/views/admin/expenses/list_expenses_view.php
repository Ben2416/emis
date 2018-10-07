<div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-12">
                    <!-- List accounts created -->
                    <div class="card my-3 no-b">
                        <div class="card-body">
                            <div class="card-title">List of Expenses</div>
                            <table id="example2" class="table table-bordered table-hover data-tables"
                                   data-options='{ "paging": false; "searching":false}'>
                                <thead>
                                <tr>
                                    <th>Expenses Type</th>
                                    <th>Date</th>
                                    <th>Recurring</th>
                                    <th>Invoice</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								foreach($expenses as $expense):
								?>
                                <tr>
                                    <td><?=$expense['expense_type']?></td>
                                    <td><?=$expense['added']?></td>
                                    <td><?=$expense['expense_recurring']?></td>
                                    <td><a href="<?=base_url()?>assets_admin/invoices/<?=$expense['expense_invoice']?>">Download Invoice</a></td>
                                    <td>
                                      <a href="#<?=$expense['eid']?>"><i class="icon-eye mr-3"></i></a>
                                      <a href="#"><i class="icon-pencil"></i></a>
                                    </td>
                                </tr>
								<?php
								endforeach;
								?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

        </div>
    </div>
