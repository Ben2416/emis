<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Sent Messages</h3>
					<div class="table-responsive">
						<table class="table-bordered table-hover text-dark" style="font-size:12px;font-family:verdana;text-dark;text-align:center;width:100%;">
							<thead>
								<tr>
									<th>SN</th>
									<th>Agent(s)</th>
									<th>Phone(s)</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0;$i<count($agents);$i++): ?>
									<tr>
										<td><?=($i+1)?></td>
										<td><?=$agents[$i]['agent1'].( ($this->input->post('egroup') != "ward")?"<br/>".$agents[$i]['agent2']:"" )?></td>
										<td><?=$agents[$i]['phone1'].( ($this->input->post('egroup') != "ward")?"<br/>".$agents[$i]['phone2']:"" )?></td>
										<?php $reply = $result[$i]; ?>
										<td><?=(($reply == "1801" || $reply == 1801)?"Success":"Failed")?></td>
									</tr>
								<?php endfor; ?>
							</tbody>
							<tfoot>
								<tr>
									<th>SN</th>
									<th>Agent(s)</th>
									<th>Phone(s)</th>
									<th>Status</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>