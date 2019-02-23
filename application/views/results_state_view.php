<div class="main-panel">
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Select State</h3>
					<p>
						<div class="row">
							<?php
								if(isset($states) && !empty($states)):
									foreach($states as $st):
									?>
									<div class="col-sm-4">
									<a href="<?=base_url('results/lga/'.$lurl.'/'.$st['state_id'])?>"><?=$st['state_name']?></a>
									</div>
									<?php
									endforeach;
								endif;
							?>
						</div>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>
		