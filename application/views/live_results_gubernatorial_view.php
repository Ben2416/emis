<div class="main-panel">
<div class="content-wrapper">
          <div class="row">
            <!--<div class="col-md-12 grid-margin">
              <div class="card">
                <div class="row">--->

                  <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
				<p>
					
					<h3><?=$state->state_name?></h3>
					<div class="row" style="font-size:12px;">
						<div class="col-md-6">
							<label> Gubernatorial Election </label>
						</div>
						<div class="col-md-6">
							<input type="hidden" name="state" id="state" value="<?=$this->session->state?>" />
							<input type="hidden" name="etype" id="etype" value="<?=$this->uri->segment(3)?>" />
						</div>
					</div>
					<hr/>
					<div class="row" style="font-size:10px;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<label>Registered Voters</label> :: 
									<span id="registered_voters"></span>
								</div>
								<div class="col-md-6">
									<label>Accredited Voters</label> :: 
									<span id="accredited_voters"></span>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/ADC.jpg')?>" width="50" height="50" /><label>ADC</label> :: <span id="adc"></span>
								</div>
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/ANN.jpg')?>" width="50" height="50" /><label>ANN</label> :: <span id="ann"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/ADP.jpg')?>" width="50" height="50" /><label>ADP</label> :: <span id="adp"></span>
								</div>
								<div class="col-md-6">
										<img src="<?=base_url('assets/images/SDP.jpg')?>" width="50" height="50" /><label>SDP</label> :: <span id="sdp"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/APC.jpg')?>" width="50" height="50" /><label>APC</label> :: <span id="apc"></span>
								</div>
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/UPN.jpg')?>" width="50" height="50" /><label>UPN</label> :: <span id="upn"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/LP.jpg')?>" width="50" height="50" /><label>LP</label> :: <span id="lp"></span>
								</div>
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/PDP.jpg')?>" width="50" height="50" /><label>PDP</label> :: <span id="pdp"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/NGP.jpg')?>" width="50" height="50" /><label>NGP</label> :: <span id="ngp"></span>
								</div>
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/PDM.jpg')?>" width="50" height="50" /><label>PDM</label> :: <span id="pdm"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/GPN.jpg')?>" width="50" height="50" /><label>GPN</label> :: <span id="gpn"></span>
								</div>
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/APGA.jpg')?>" width="50" height="50" /><label>APGA</label> :: <span id="apga"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/SPN.jpg')?>" width="50" height="50" /><label>SPN</label> :: <span id="spn"></span>
								</div>
								<div class="col-md-6">
									<img src="<?=base_url('assets/images/YDP.jpg')?>" width="50" height="50" /><label>YDP</label> :: <span id="ydp"></span>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-6">
									<label>Invalid Votes</label> :: <span id="invalid_votes"></span>
								</div>
								<div class="col-md-6">
									<label>Valid Votes</label> :: <span id="valid_votes"></span>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-6">
									<label><b>Total Votes</b></label>
								</div>
								<div class="col-md-6">
									<div id="total"></div>
								</div>
							</div>
						</div>
					</div>
					
				</p>
		
						</div>
                    </div>
                  </div>
				  
					<div class="col-lg-6 grid-margin ">  
						<div class="row">
							<div class="col-lg-12 grid-margin">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Election Score chart</h4>
										<div id="ch">
											<canvas id="barChartSen" style="height:230px"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 grid-margin">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Major Party chart</h4>
										<canvas id="doughnutChartSen" style="height:250px"></canvas>
										<div id="diff">Difference : : ...</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				  
                </div>


              <!--</div>
            </div>
          </div>-->


        </div>