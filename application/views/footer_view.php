<footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="#" target="_blank">BenieTech Corporation</a>. All rights reserved.</span>

          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?=base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
  <script src="<?=base_url('assets/vendors/js/vendor.bundle.addons.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?=base_url('assets/js/off-canvas.js')?>"></script>
  <script src="<?=base_url('assets/js/misc.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?=base_url('assets/js/dashboard.js')?>"></script>
  <!-- End custom js for this page-->
  <!-- Custom js for this page--
  <script src="<?=base_url('assets/js/chart.js')?>"></script>-->
  
	<script src="<?=base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/toastr.js')?>" type="text/javascript"></script>
	<?php if ($this->session->flashdata('success_msg') 
			&& $this->session->flashdata('success_msg') != ""): ?>
		<script>
			toastr.success('<?php echo $this->session->flashdata('success_msg');?>', 'Success:');
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('info_msg') 
			&& $this->session->flashdata('info_msg') != ""): ?>
		<script>
			toastr.info('<?php echo $this->session->flashdata('info_msg');?>', 'Info:');
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('warning_msg') 
			&& $this->session->flashdata('warning_msg') != ""): ?>
		<script>
			toastr.warning('<?php echo $this->session->flashdata('warning_msg');?>', 'Warning:');
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('error_msg') 
			&& $this->session->flashdata('error_msg') != ""): ?>
		<script>
			toastr.error('<?php echo $this->session->flashdata('error_msg');?>', 'Error:');
		</script>
	<?php endif; ?>
	
	<?php if($page_title=='Result Entries' ): ?>
	<script>
	//var jsondata = $.parseJSON(result);
    //   $("#name").val(jsondata.name);
	$(document).ready(function(){
		function poll(){
			setTimeout(function(){
				
				$.ajax({
					type: 'POST',
					cache: false,
					url: '<?=base_url("Results/getJsonEntries")?>',
					data: { 'last_id':$('#entries tbody tr:first').attr('id'),'state':'<?=$this->uri->segment(3)?>' },//$.extend($('#form1').serialize(), { 'last_id':$('#table tr:last').attr('id') }), 
					dataType: 'json',
					success: function(data){
						if(data.length > 0)
							$('#0').remove();
						$.each(data, function(a,b){
							$('#entries').prepend('<tr id='+b.rid+' '+( (parseInt(b.valid_votes)+parseInt(b.invalid_votes))>b.accredited_voters?' style="color:#f00;"':'' )+'>'+
							'<td>'+b.rid+'</td>'+
							'<td>'+b.election_year+'</td>'+
							'<td>'+b.etype_name+'</td>'+
								'<td class="text-capitalize">'+b.state_name+'</td>'+
								'<td>'+b.lga_name+'</td>'+
								'<td>'+b.ward_name+'</td>'+
								'<td>'+b.pu_name+'</td>'+
								'<td>'+b.election_state+'/'+
									b.election_lga+'/'+
									b.election_ward+'/'+
									b.election_pu+'</td>'+
								'<td>'+b.registered_voters+'</td>'+
								'<td>'+b.accredited_voters+'</td>'+
								'<td>'+b.adc+'</td>'+
								'<td>'+b.ann+'</td>'+
								'<td>'+b.adp+'</td>'+
								'<td>'+b.sdp+'</td>'+
								'<td>'+b.apc+'</td>'+
								'<td>'+b.upn+'</td>'+
								'<td>'+b.lp+'</td>'+
								'<td>'+b.pdp+'</td>'+
								'<td>'+b.ngp+'</td>'+
								'<td>'+b.pdm+'</td>'+
								'<td>'+b.gpn+'</td>'+
								'<td>'+b.apga+'</td>'+
								'<td>'+b.spn+'</td>'+
								'<td>'+b.ydp+'</td>'+
								'<td>'+b.valid_votes+'</td>'+
								'<td>'+b.invalid_votes+'</td>'+
								'<td>'
									+(parseInt(b.valid_votes)+parseInt(b.invalid_votes))+
									'</td>'+
							'</tr>');//end of prepend
						});//end of each
					},//end of success
					complete:poll
				}).done(function(data){
					
				}).fail(function(xhr, st, er){
					alert('No Network Connection');//'error'+xhr+st+er);
				});//end of ajax
				
			}, 10000);//end of timeout
		}//end of poll
		poll();
		
	});//end of document.ready
	</script>
	<?php endif;?>
	
	<?php if($page_title=='Result Messages' ): ?>
	<script>
	$(document).ready(function(){
		$('#messages').on('click', 'tr',function(){
			var attr = $(this).attr("id")
			if (typeof attr !== typeof undefined && attr !== false) {
				var href = "<?=base_url('Election/refactor/')?>"+attr;
				//window.location = href;
				window.open(href, '_blank');
			}
		});
		
		function polle(){
			setTimeout(function(){
				
				$.ajax({
					type: 'POST',
					cache: false,
					url: '<?=base_url("Results/getJsonMessages")?>',
					data: { 'last_id':$('#messages tbody tr:first').attr('id'),'state':'<?=$this->session->state?>' },
					dataType: 'json',
					success: function(data){
						if(data.length > 0)
							$('#0').remove();
						$.each(data, function(a,b){
							$('#messages').prepend('<tr id='+b.mid+' '+( parseInt(b.parsed)==0 ?' style="color:#f00;cursor:pointer;"':' style="cursor:pointer;"' )+'>'+
								'<td>'+b.mid+'</td>'+
								'<td>'+b.sender+'</td>'+
								'<td>'+b.message+'</td>'+
								'<td><div>'+(parseInt(b.parsed)==0?'<i class="fa fa-times"></i>':'<i class="fa fa-check"></i>')+'</div></td>'+
								'<td>'+b.date_time+'</td>'+
							'</tr>');//end of prepend
						});//end of each
					},//end of success
					complete:polle
				}).done(function(data){
					
				}).fail(function(xhr, st, er){
					alert('No Network Connection');//'error'+xhr+st+er);
				});//end of ajax
				
			}, 10000);//end of timeout
		}//end of poll
		polle();
		
	});//end of document.ready
	</script>
	<?php endif;?>
	
	<?php if($page_title=="Live Results: Senatorial" 
			|| $page_title == "Live Results: Representative" 
			|| $page_title == "Live Results: State House" 
			|| $page_title == "Live Results: Gubernatorial" 
			|| $page_title == "Live Results: Presidential"): ?>
	<script>
	$(document).ready(function(){
		var data = {
			labels: ["APC", "PDP", "SDP", "LP", "NGP", "YDP"],
			datasets: [{
			  label: '# of Votes',
			  data: [0, 0, 0, 0, 0, 0],
			  backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			  ],
			  borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			  ],
			  borderWidth: 1
			}]
		  };
		var options = {
			scales: {
			  yAxes: [{
				ticks: {
				  beginAtZero: true
				}
			  }]
			},
			legend: {
			  display: false
			},
			elements: {
			  point: {
				radius: 0
			  }
			}
		  };
		
		// Get context with jQuery - using jQuery's .get() method.
		 // if ($("#barChartSen").length) {
			var barChartCanvasSen = $("#barChartSen").get(0).getContext("2d");
			// This will get the first returned node in the jQuery collection.
			var barChartSen = new Chart(barChartCanvasSen, {
			  type: 'bar',
			  data: data,
			  options: options
			});
		 // }
		  function addData(chart, id, data){//,label){
			  chart.data.datasets[0].data[id]= data;
			  //chart.data.labels[id] = label;
			  chart.update();
		  }
		
		var doughnutPieData = {
			datasets: [{
			  data: [0, 0],
			  backgroundColor: [
				'rgba(255, 99, 132, 0.5)',
				'rgba(54, 162, 235, 0.5)',
				'rgba(255, 206, 86, 0.5)',
				'rgba(75, 192, 192, 0.5)',
				'rgba(153, 102, 255, 0.5)',
				'rgba(255, 159, 64, 0.5)'
			  ],
			  borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			  ],
			}],
			//These labels appear in the legend and in the tooltips when hovering different arcs
			labels: [
			  'APC',
			  'PDP'
			]
		  };
		var doughnutPieOptions = {
			responsive: true,
			animation: {
			  animateScale: true,
			  animateRotate: true
			}
		  };
		  
		if ($("#doughnutChartSen").length) {
			var doughnutChartCanvasSen = $("#doughnutChartSen").get(0).getContext("2d");
			var doughnutChartSen = new Chart(doughnutChartCanvasSen, {
			  type: 'doughnut',
			  data: doughnutPieData,
			  options: doughnutPieOptions
			});
		  }
		
		function pollsen(){
			setTimeout(function(){
				
				$.ajax({
					type: 'POST',
					cache: false,
					<?php if($page_title == "Live Results: Senatorial"):?>
					url: '<?=base_url("LiveResults/getSenatorial")?>',
					data: { 'district':$('#district').val(), 'etype':$('#etype').val() },
					<?php endif;?>
					<?php if($page_title == "Live Results: State House"):?>
					url: '<?=base_url("LiveResults/getStateHouse")?>',
					data: { 'state_constituent':$('#state_constituent').val(), 'etype':$('#etype').val() },
					<?php endif;?>
					<?php if($page_title == "Live Results: Representative"):?>
					url: '<?=base_url("LiveResults/getRepresentative")?>',
					data: { 'constituent':$('#constituent').val(), 'etype':$('#etype').val() },
					<?php endif;?>
					<?php if($page_title == "Live Results: Gubernatorial"):?>
					url: '<?=base_url("LiveResults/getGubernatorial")?>',
					data: { 'state':$('#state').val(), 'etype':$('#etype').val() },
					<?php endif;?>
					<?php if($page_title == "Live Results: Presidential"):?>
					url: '<?=base_url("LiveResults/getPresidential")?>',
					data: { 'etype':$('#etype').val() },
					<?php endif;?>
					dataType: 'json',
					success: function(data){
						//alert(JSON.stringify(data));
						$('#registered_voters').html(data[0].registered_voters);
						$('#accredited_voters').html(data[0].accredited_voters);
						$('#adc').html(data[0].adc);
						$('#ann').html(data[0].ann);
						$('#sdp').html(data[0].sdp);addData(barChartSen,2,data[0].sdp);
						$('#apc').html(data[0].apc);addData(barChartSen,0,data[0].apc);addData(doughnutChartSen,0,data[0].apc);
						$('#upn').html(data[0].upn);
						$('#lp').html(data[0].lp);addData(barChartSen,3,data[0].lp);
						$('#pdp').html(data[0].pdp);addData(barChartSen,1,data[0].pdp);addData(doughnutChartSen,1,data[0].pdp);
						$('#ngp').html(data[0].ngp);addData(barChartSen,4,data[0].ngp);
						$('#pdm').html(data[0].pdm);
						$('#gpn').html(data[0].gpn);
						$('#apga').html(data[0].apga);
						$('#spn').html(data[0].spn);
						$('#ydp').html(data[0].ydp);addData(barChartSen,5,data[0].ydp);
						$('#invalid_votes').html(data[0].invalid_votes);
						$('#valid_votes').html(data[0].valid_votes);
						$('#total').html('<b>'+(parseInt(data[0].invalid_votes)+parseInt(data[0].valid_votes))+'</b>');
						$('#diff').html('Difference : : '+(Math.abs( parseInt(data[0].apc)-parseInt(data[0].pdp) ))+' votes.');
					},//end of success
					complete:pollsen
				}).done(function(data){
					//labels: ["APC", "PDP", "SDP", "LP", "NGP", "YDP"],
					//addData(barChartSen,0,data[0].apc);
				}).fail(function(xhr, st, er){
					alert('No Network Connection');//'error'+xhr+st+er);
				});//end of ajax
				
			}, 10000);//end of timeout
		}//end of pollsen
		pollsen();
		
		
	});//end of document.ready
	
	
	</script>
	<?php endif;?>
	
	<?php if( substr($page_title, 0, 8) == 'Result::' ):?>
	<script>
	$(document).ready( function(){
		var data = {
			labels: ["APC", "PDP", "SDP", "LP", "NGP", "YDP"],
			datasets: [{
			  label: '# of Votes',
			  data: [<?=$result['apc']?>, <?=$result['pdp']?>, <?=$result['sdp']?>, <?=$result['lp']?>, <?=$result['ngp']?>, <?=$result['ydp']?>],
			  backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			  ],
			  borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			  ],
			  borderWidth: 1
			}]
		  };
		var options = {
			scales: {
			  yAxes: [{
				ticks: {
				  beginAtZero: true
				}
			  }]
			},
			legend: {
			  display: false
			},
			elements: {
			  point: {
				radius: 0
			  }
			}
		  };
		
		var barChartCanvasSen = $("#barChartSen").get(0).getContext("2d");
		var barChartSen = new Chart(barChartCanvasSen, {
		  type: 'bar',
		  data: data,
		  options: options
		});
		
		var doughnutPieData = {
			datasets: [{
			  data: [<?=$result['apc']?>, <?=$result['pdp']?>],
			  backgroundColor: [
				'rgba(255, 99, 132, 0.5)',
				'rgba(54, 162, 235, 0.5)',
				'rgba(255, 206, 86, 0.5)',
				'rgba(75, 192, 192, 0.5)',
				'rgba(153, 102, 255, 0.5)',
				'rgba(255, 159, 64, 0.5)'
			  ],
			  borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			  ],
			}],
			labels: [
			  'APC',
			  'PDP'
			]
		  };
		var doughnutPieOptions = {
			responsive: true,
			animation: {
			  animateScale: true,
			  animateRotate: true
			}
		  };
		  
		if ($("#doughnutChartSen").length) {
			var doughnutChartCanvasSen = $("#doughnutChartSen").get(0).getContext("2d");
			var doughnutChartSen = new Chart(doughnutChartCanvasSen, {
			  type: 'doughnut',
			  data: doughnutPieData,
			  options: doughnutPieOptions
			});
		  }
	} );
	</script>
	<?php endif;?>
	
	<?php if($page_title == 'Results'): ?>
	<script>
		$(document).ready(function(){
			$('#election_type').change( function(){
				if($('#election_type').val() != ""){
					$('#state').show();$('#state').trigger('change');
					$('#add_monitor').show();
				}else{
					$('#pu').hide();
					$('#ward').hide();
					$('#lga').hide();
					$('#state').hide();
					$('#add_monitor').hide();
				}
			} );
			$('#state').change( function(){
				if($('#state').val() != ""){
					getlgas();
					$('#lga').show();//$('#lga').trigger('change');
				}else{
					$('#pu').hide();
					$('#ward').hide();
					$('#lga').hide();
				}
			} );
			$('#lga').change( function(){
				if($('#lga').val() != ""){
					getwards();
					$('#ward').show();//$('#ward').trigger('change');
				}else{
					$('#pu').hide();
					$('#ward').hide();
				}
			} );
			$('#ward').change( function(){
				if($('#ward').val() != ""){
					getpus();
					$('#pu').show();//$('#pu').trigger('change');
				}else{
					$('#pu').hide();
				}
			} );
		});
		
	</script>
	<?php endif;?>
	
	<?php if($page_title=='Add Agents' || $page_title=='View Agents' || $page_title="Populate Ward" || $page_title="Populate Polling Unit" ): ?>
	<script>
	function createOption(select_id, id, value) {
		el = document.createElement('option');
		el.value = id;
		el.innerHTML = value;
		el.id = value;   
		document.getElementById(select_id).appendChild(el);
	}
	
	$('#state').change(function(){
		getlgas();
	});
	
	$('#lga').change(function(){
		getwards();
	});
	
	$('#ward').change(function(){
		getpus();
	});
		
	</script>
	<?php endif; ?>
	
	
	
	
	<script>
	function getlgas(){
		if($('#state').val() != ""){
			$.ajax({
				url: '<?=base_url("Agents/getlgas")?>/'+$('#state').val(),
				type: 'GET',
				'dataSrc':'',
				'dataType':'json',
				xhrFields:{
					withCredentials:true
				},
				success:function(data){
					$('#lga').empty();
					$('#ward').empty();
					$('#pu').empty();
					createOption('lga', '', 'Select LGA');
					$.each(data, function(a,b){
						createOption('lga', b.lga_id, b.lga_name);
					});
				}
			}).done(function(data){
				//alert('ok')
			}).fail(function(xhr, st, er){
				//alert('not')
			});
		}
	}
	
	function getwards(){
		if($('#lga').val() != ""){
			$.ajax({
				url: '<?=base_url("Agents/getwards")?>/'+$('#state').val()+'/'+$('#lga').val(),
				type: 'GET',
				'dataSrc':'',
				'dataType':'json',
				xhrFields:{
					withCredentials:true
				},
				success:function(data){
					$('#ward').empty();
					$('#pu').empty();
					createOption('ward', '', 'Select Ward');
					$.each(data, function(a,b){
						createOption('ward', b.ward_id, b.ward_name);
					});
				}
			}).done(function(data){
				//alert('ok')
			}).fail(function(xhr, st, er){
				//alert('not')
			});
		}
	}
	
	function getpus(){
		if($('#ward').val() != ""){
			$.ajax({
				url: '<?=base_url("Agents/getpus")?>/'+$('#state').val()+'/'+$('#lga').val()+'/'+$('#ward').val(),
				type: 'GET',
				'dataSrc':'',
				'dataType':'json',
				xhrFields:{
					withCredentials:true
				},
				success:function(data){
					$('#pu').empty();
					createOption('pu', '', 'Select Polling Unit');
					$.each(data, function(a,b){
						createOption('pu', b.pu_id, b.pu_name);
					});
				}
			}).done(function(data){
				//alert('ok')
			}).fail(function(xhr, st, er){
				//alert('not')
			});
		}
	}
	</script>
	
	
	</body>
</html>