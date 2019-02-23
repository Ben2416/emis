		<!DOCTYPE html>
		<html lang="en">

		<head>
		  <!-- Required meta tags -->
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <title><?=ucfirst($page_title)?></title>
		  <!-- plugins:css -->
			<link href="<?=base_url('assets/css/toastr.css')?>" rel="stylesheet" type="text/css" />
		  <link rel="stylesheet" href="<?=base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')?>">
		  <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.base.css') ?>" />
		  <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.addons.css') ?>" />
		  <!-- endinject -->
		  <!-- plugin css for this page -->
		  <link rel="stylesheet" href="<?=base_url('assets/vendors/iconfonts/font-awesome/css/font-awesome.css')?>">
  
		  <!-- End plugin css for this page -->
		  <!-- inject:css -->
		  <link rel="stylesheet" href="<?=base_url('assets/css/style.css') ?>">
		  <!-- endinject -->
		  <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png') ?>" />
		</head>

		<body>
		  <div class="container-scroller">
		    <!-- partial:partials/_navbar.html -->
		    
		    <!-- partial -->
		    <div class="container-fluid page-body-wrapper">
		      <!-- partial:partials/_sidebar.html -->
		      <nav class="sidebar sidebar-offcanvas" id="sidebar">
		        <ul class="nav">

		          <li class="nav-item">
		            <a class="nav-link" data-toggle="collapse" href="#ui-live" aria-expanded="false" aria-controls="ui-basic">
		              <i class="menu-icon mdi mdi-chart-line"></i>
		              <span class="menu-title">Live Results</span>
		              <i class="menu-arrow"></i>
		            </a>
		            <div class="collapse" id="ui-live">
		              <ul class="nav flex-column sub-menu">
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('LiveResults')?>">Result Live Feed</a>
		                </li>
		                <!--<li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('LiveResults/senate')?>">Result Submissions</a>
		                </li>-->
		              </ul>
		            </div>
		          </li>
				  <li class="nav-item">
		            <a class="nav-link" data-toggle="collapse" href="#ui-results" aria-expanded="false" aria-controls="ui-basic">
		              <i class="menu-icon fa fa-tasks"></i>
		              <span class="menu-title">Election Results</span>
		              <i class="menu-arrow"></i>
		            </a>
		            <div class="collapse" id="ui-results">
		              <ul class="nav flex-column sub-menu">
		                <!--<li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Results/live')?>">Result Live Feed</a>
		                </li>-->
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Results')?>">Result Submissions</a>
		                </li>
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Results/receiver')?>">Result Receiver</a>
		                </li>
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Results/election')?>">Result Check</a>
		                </li>
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Results/messages')?>">Received Messages</a>
		                </li>
						<li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Election')?>">Add Result</a>
		                </li>
		              </ul>
		            </div>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" data-toggle="collapse" href="#ui-pop" aria-expanded="false" aria-controls="ui-basic">
		              <i class="menu-icon fa fa-database"></i>
		              <span class="menu-title">Population Election Data</span>
		              <i class="menu-arrow"></i>
		            </a>
		            <div class="collapse" id="ui-pop">
		              <ul class="nav flex-column sub-menu">
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Populate/lga')?>">Populate LGA</a>
		                </li>
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Populate/ward')?>">Populate Ward</a>
		                </li>
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Populate/pu')?>">Populate Polling Units</a>
		                </li>
		              </ul>
		            </div>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" data-toggle="collapse" href="#ui-agents" aria-expanded="false" aria-controls="ui-basic">
		              <i class="menu-icon fa fa-group"></i>
		              <span class="menu-title">Election Agents</span>
		              <i class="menu-arrow"></i>
		            </a>
		            <div class="collapse" id="ui-agents">
		              <ul class="nav flex-column sub-menu">
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Agents')?>">Show Agents</a>
		                </li>
		                <li class="nav-item">
		                  <a class="nav-link" href="<?=base_url('Agents/add')?>">Add Agents</a>
		                </li>
		              </ul>
		            </div>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="<?=base_url('Login/logout')?>">
		              <i class="menu-icon fa fa-sign-out"></i>
		              <span class="menu-title">Logout</span>
		            </a>
		          </li>
		        </ul>
		      </nav>
