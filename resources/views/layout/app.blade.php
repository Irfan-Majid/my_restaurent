

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       <title>{{Session::get('identity')}} | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
	@stack('style')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                   

                                    

                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}"  alt="user-image" class="rounded-circle">
                            <span class="ml-1">{{Session::get('name')}}<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
							
							

                        </div>
                    </li>
<!--
                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li> -->


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{route('superadmin.dashboard')}}" class="logo text-center">
                        <span class="logo-lg">
                            
                                <img src="{{asset('assets/images/myrestaurant-white.svg')}}" alt="" height="">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                           <!-- <li class="menu-title">Navigation</li>-->
							
                            <li>
                                <a href="{{route('superadmin.dashboard')}}">
                                    <i class="fe-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
							

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Dishes </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('dishlist')}}">Dish List</a></li>
                                    <li><a href="{{route('dishadd')}}">Add New Dish</a></li>
                                </ul>
                            </li>
							
							<!--order management section -->
							<li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Order Management </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">POS Invoice</a></li>
                                    <li><a href="{{route('orderlist')}}">Order List</a></li>
									<li><a href="#">Pending Order</a></li>
                                    <li><a href="#">Complete Order</a></li>
									<li><a href="#">Cencel Order</a></li>
                                    <li><a href="#">Kitchen Dashboard</a></li>
									<li><a href="#">Counter Dashboard</a></li>
                                    <li><a href="#">Counter List</a></li>
									<li><a href="#">POS Setting</a></li>
                                </ul>
                            </li>
							<!-- order management section ends here -->
							
							
							<!--
                            <li>
                                <a href="{{route('orderlist')}}">
                                    <i class="fe-box"></i>
                                    <span> Orders </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                </ul>
                            </li>
							-->

                            

                           <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-share-2"></i>
                                    <span> Stuffs </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <!--<li>
                                        <a href="javascript: void(0);">Level 1.1</a>
                                    </li>-->
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Waiters
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('waiterlist')}}">Waiter List</a>
                                            </li>
                                            <li>
                                                <a href="{{route('waiteradd')}}">New Waiter</a>
                                            </li>
                                        </ul>
                                    </li>
									
									 <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Cheif
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Cheif List</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">New Cheif</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Delivery boy
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('dboylist')}}">Boys List</a>
                                            </li>
                                            <li>
                                                <a href="{{route('dboyadd')}}">New Delivery boy</a>
                                            </li>
                                        </ul>
                                    </li>
									
									
                                </ul>
                            </li>
							
							
							
							<!--Purchase section -->
							<li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span>Purchase</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Purchase Item</a></li>
									<li><a href="#">Add Purchase</a></li>
                                    <li><a href="#">Purchase Return</a></li>
									<li><a href="#">Return Invoice</a></li>
                                    <li><a href="#">Supplier Manage</a></li>
									<li><a href="#">Stock Out Ingredients</a></li>
                                </ul>
                            </li>
							<!-- Purchase section ends here -->
							
							<!-- Reservation Section start here -->
							
							<li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Reservation </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Reservation</a></li>
                                    <li><a href="#">Add Booking</a></li>
									<li><a href="#">Unavailable Day</a></li>
                                    <li><a href="#">Reservation Setting</a></li>
                                </ul>
                            </li>
							<!--reservation end here -->
							
							
							<!--Human Resource Section-->
							<li>
                                <a href="javascript: void(0);">
                                    <i class="fe-box"></i>
                                    <span>Human Reaources</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <!--<li>
                                        <a href="javascript: void(0);">Level 1.1</a>
                                    </li>-->
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="false">HRM
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('waiterlist')}}">Add Employee</a>
                                            </li>
                                            <li>
                                                <a href="{{route('waiteradd')}}">Employee Management</a>
                                            </li>
											<li>
                                                <a href="{{route('waiterlist')}}">Manage Salary</a>
                                            </li>
                                            <li>
                                                <a href="{{route('waiteradd')}}">Designation</a>
                                            </li>
                                        </ul>
                                    </li>
									
									 <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Attendance
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Attendance Form</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Attendance Report</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Expense
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Add Expense Item</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Manage Expense Item</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Add Expense</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Manage Expense</a>
                                            </li>
											<li>
                                                <a href="{{route('chefadd')}}">Expense Statement</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Award
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('dboylist')}}">New Award</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Recruitment
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Add New Candidate</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Manage Candidate</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Candidate Shortlist</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Interview</a>
                                            </li>
											<li>
                                                <a href="{{route('chefadd')}}">Candidate Selection</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Department
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Department</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Add Division</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Manage Division</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Leave
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Weekly Holiday</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">General Holiday</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Add Leave Type</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Leave Application</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Loan
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Grant Loan</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Loan Installment</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Loan Report</a>
                                            </li>
											
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="javascript: void(0);" aria-expanded="false">Payroll
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="{{route('cheflist')}}">Salary Type Setup</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chefadd')}}">Salary Setup</a>
                                            </li>
											<li>
                                                <a href="{{route('cheflist')}}">Salary Generate</a>
                                            </li>
											
                                        </ul>
                                    </li>
									
									
                                </ul>
                            </li>
							<!--end human resource-->
							
							
							
							
							
							 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Table Booking </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!-- <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Dish List</a></li>
                                    <li><a href="ui-typography.html">Add New Dish</a></li>
                                </ul>-->
                            </li>
							
							 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('tablelist')}}">Table List</a></li>
                                    <li><a href="{{route('table_add')}}">Add Table</a></li>
                                </ul>
                            </li>
							
							 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Category </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Dish items</a></li>
                                    <li><a href="#">Menu items</a></li>
                                </ul>
                            </li>
							
							 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Transactions </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--<ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Dish List</a></li>
                                    <li><a href="ui-typography.html">Add New Dish</a></li>
                                </ul>-->
                            </li>
							
							 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Products </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Product List</a></li>
                                    <li><a href="ui-typography.html">Add Products</a></li>
                                </ul>
                            </li>
							
							<li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Suppliers </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('supadd')}}">Add Supplier</a></li>
                                    <li><a href="{{route('suplist')}}">Supplier List</a></li>
                                </ul>
                            </li>
							
							 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> POS </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Stock Product</a></li>
                                    <li><a href="ui-typography.html">Branch Report</a></li>
                                    <li><a href="ui-typography.html">Sales</a></li>
                                    <li><a href="ui-typography.html">Purchase</a></li>
                                    <li><a href="ui-typography.html">Payments</a></li>
                                    <li><a href="ui-typography.html">Reports</a></li>
                                </ul>
                            </li>
							 
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
			
			<!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('breadcrumb1')</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('breadcrumb2')</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">@yield('title')</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                     @yield('content')

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2017 - 2019 &copy; Abstack theme by <a href="">Coderthemes</a>
                            </div>
            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
</div>
</div>
</div>
       
			
			
			
			
			
			
			
<!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-mapael/jquery.mapael.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-mapael/world_countries.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-mapael/usa_states.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/mapael-map.init.js')}}"></script>


        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        @stack('script')
    </body>
</html>