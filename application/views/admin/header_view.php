<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url()?>assets_admin/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/css/app.css">

</head>
<body class="light sidebar-mini sidebar-collapse">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
    <div class="sidebar">
        <div class="d-flex hv-100 align-items-stretch">
            <div class="indigo text-white">
                <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true"><i class="icon-inbox2"></i></a>

                    <a class="nav-link blink skin_handle"  href="#"><i class="icon-lightbulb_outline"></i></a>

                    <a href="#">
                        <figure class="avatar">
                            <img src="<?=base_url()?>assets_admin/img/dummy/u3.png" alt="">
                            <span class="avatar-badge online"></span>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="relative brand-wrapper sticky b-b">
                        <div class="d-flex justify-content-between align-items-center p-3">
                            <div class="text-xs-center">
                                <span class="font-weight-lighter s-18">Menu</span>
                            </div>
                            <div class="badge badge-danger r-0">Admin Panel</div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="<?=base_url()?>admin/dashboard">
                            <i class="icon icon-sailing-boat-water s-24"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview"><a href="#">
                            <i class="icon icon icon-package s-24"></i>
                            <span>Branches</span>
                            <span class="badge r-3 badge-primary pull-right">4</span>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="branches.html"><i class="icon icon-circle-o"></i>All
                                    Branches</a>
                                </li>
                                <li><a href="addBranch.html"><i class="icon icon-add"></i>Add
                                    New Branch </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#"><i class="icon icon-account_box s-24"></i>Students<i
                                class=" icon-angle-left  pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?=base_url()?>admin/students"><i class="icon icon-circle-o"></i>All Students
									<span class="badge r-3 badge-primary pull-right">4</span>
								</a>
                                </li>
								<li><a href="<?=base_url()?>admin/students/completeProfiles"><i class="icon icon-user"></i>complete Profiles
								<span class="badge r-3 badge-primary pull-right">178</span></a>
								</li>
                                <li><a href="<?=base_url()?>admin/students/incompleteProfiles""><i class="icon icon-user"></i>Incomplete Profiles
								<span class="badge r-3 badge-primary pull-right">78</span>
								</a>
                                </li>
                                <li><a href="add_student_profile.html"><i class="icon icon-add"></i>Add Student Profile </a>
                                </li>
                            </ul>
                        </li>
						<li class="treeview"><a href="#"><i class="icon icon-documents3 s-24"></i>Loans<i
                                class=" icon-angle-left  pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="view_loans.html"><i class="icon icon-circle-o"></i>View All Loans
									<span class="badge r-3 badge-primary pull-right">700</span>
								</a>
                                </li>
								<li><a href="Pending_loans.html"><i class="icon icon-documents3"></i>Approved Loans
									<span class="badge r-3 badge-primary pull-right">578</span></a>
								</li>
								<li><a href="approved_loans.html"><i class="icon icon-documents3"></i>Pending Loans
									<span class="badge r-3 badge-primary pull-right">178</span></a>
								</li>
								<li><a href="Pending_loans.html"><i class="icon icon-documents3"></i>Awaiting Disbursement
									<span class="badge r-3 badge-primary pull-right">278</span></a>
								</li>
								<li><a href="declined_loans.html"><i class="icon icon-documents3"></i>Declined Loans
								<span class="badge r-3 badge-primary pull-right">278</span></a>
								</li>
								<li><a href="Pending_loans.html"><i class="icon icon-documents3"></i>Withdrawn Loans
								<span class="badge r-3 badge-primary pull-right">0</span></a>
								</li>
                                <li><a href="list_complete_profiles.html"><i class="icon icon-add"></i>Add Loan
								</a>
                                </li>

                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="icon icon-documents3 s-24"></i> <span>Accounting</span>
                                <i class=" icon-angle-left  pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="icon icon-documents3"></i>BYSHESLB Account<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="view_bank_account.html"><i class="icon icon-document"></i>View Account</a>
                                        </li>
                                        <li><a href="add_bank_account.html"><i class="icon icon-document"></i>Add Bank Account
										</a>
                                        </li>
                                        <li><a href="#"><i class="icon icon-document"></i>Add Funds</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon icon-fingerprint text-green"></i>Expenses<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="login.html"><i class="icon icon-document"></i>View Expenses</a>
                                        </li>
                                        <li><a href="login-2.html"><i class="icon icon-document"></i>Add Expenses</a>
                                        </li>
                                        <li><a href="login-3.html"><i class="icon icon-add"></i>Manage Expenses Type</a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </li>

						<li class="treeview"><a href="#"><i class="icon icon-documents3 s-24"></i>Reports<i
                                class=" icon-angle-left  pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="student_report.html"><i class="icon icon-circle-o"></i>Student Reports
									</a>
                                </li>
								<li><a href="loan_report.html"><i class="icon icon-documents3"></i>Loans Report
									</a>
								</li>
								<li><a href="financial_report.html"><i class="icon icon-documents3"></i>Financial Report
									</a>
								</li>

                            </ul>
                        </li>




                    </ul>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="relative brand-wrapper sticky b-b p-3">
                        <form>
                            <div class="form-group input-group-sm has-right-icon">
                                <input class="form-control form-control-sm light r-30" placeholder="Search" type="text">
                                <i class="icon-search"></i>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</aside>

<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
</div>
<a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
    <i></i>
</a>
<div class="has-sidebar-left has-sidebar-tabs">
    <!--navbar-->
    <div class="sticky">
        <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
            <div class="relative">
                <div class="d-flex">
                    <div class="d-none d-md-block">
                        <h1 class="nav-title">Bayelsa State Higher Education Student Loan Board</h1>
                    </div>
                </div>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Messages-->

        <!-- Notifications -->


        <!-- Right Sidebar Toggle Button -->

        <!-- User Account-->
        <li class="dropdown custom-dropdown user user-menu ">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <img src="<?=base_url()?>assets_admin/img/dummy/u8.png" class="user-image" alt="User Image">
                <i class="icon-more_vert "></i>
            </a>
            <div class="dropdown-menu p-4 dropdown-menu-right">
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                            <div class="pt-1">Favourites</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                            <div class="pt-1">Saved</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
        </div>
    </div>
    <!--#navbar-->
