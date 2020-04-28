<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Online Exam form Portal</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />	
    <link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- Date Time item CSS -->
    <link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />  
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default" >Admin</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                    	
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="" />
								<!-- src="../assets/img/dp.jpg"-->
                                <span class="username username-hide-on-mobile"> Admin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                              
								<li>
										<a href="#">
											<i class="icon-lock"></i> change password
										</a>
                                </li>
                                <li>
                                    <a href="adminlogin.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                      
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                               <!-- <div class="pull-left image">
	                                    <img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
										 
	                                </div>-->
	                                <div class="pull-left info">
	                                    <p>Gautam</p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start active open">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
							</li>	
	                           
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Students</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="all_students_project.html" class="nav-link "> <span class="title">All Students</span>
	                                    </a>
	                                </li>
	                               <!-- <li class="nav-item">
	                                    <a href="add_student.html" class="nav-link "> <span class="title">Add Student</span>
	                                    </a>
	                                </li>
									-->
	                                <li class="nav-item">
	                                    <a href="add_student_project.html" class="nav-link "> <span class="title">Add Student</span>
										<span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="edit_student.html" class="nav-link "> <span class="title">Edit Student</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                        <li class="nav-item active open">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Courses</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                            <ul class="sub-menu active">
	                                <li class="nav-item">
	                                    <a href="all_courses_project.html" class="nav-link "> <span class="title">All Courses</span>
	                                    </a>
	                                </li>
	                              
	                                <li class="nav-item">
	                                    <a href="add_course_project.html" class="nav-link "> <span class="title">Add Course</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item active">
	                                    <a href="edit_course_project.html" class="nav-link "> <span class="title">Edit Course</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
							
	                       
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Departments</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="all_department_project.html" class="nav-link "> <span class="title">All Departments</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item">
	                                    <a href="add_department_project.html" class="nav-link "> <span class="title">Add Department</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="edit_department_project.html" class="nav-link "> <span class="title">Edit Department</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Semester</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="all_semester_project.html" class="nav-link "> <span class="title">All Semesters</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="add_semester_project.html" class="nav-link "> <span class="title">Add Semester</span>
	                                    </a>
	                                </li>	                                
	                                <li class="nav-item">
	                                    <a href="edit_semester_project.html" class="nav-link "> <span class="title">Edit Semester</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Session</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">All Session</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Add session</span>
	                                    </a>
	                                </li>	                                
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Edit Session</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Results</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Department Result</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Semester Result</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Add Result</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Edit Result</span>
	                                    </a>
	                            </ul>
	                        </li>
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Backlog History</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">All Backlog</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Add Backlog</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link "> <span class="title">Edit Backlog</span>
	                                    </a>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
	                                <span class="title">Payment</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="fees_collection.html" class="nav-link "> <span class="title">Payment Collection</span>
	                                    </a>
	                                </li>
									<!--
	                                <li class="nav-item">
	                                    <a href="add_fees.html" class="nav-link "> <span class="title">Add Fees </span>
	                                    </a>
	                                </li> -->
	                                <li class="nav-item">
	                                    <a href="add_fees_bootstrap.html" class="nav-link "> <span class="title">Add Payment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="fees_receipt.html" class="nav-link "> <span class="title">Payment Receipt</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                       
	                    </ul>
	                      </li>
	                      
	                        </li>
	                    </ul> 
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Fees</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Fees</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Fees</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Fees</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Roll No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="rollno" data-required="1" placeholder="enter roll number" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="stdName" data-required="1" placeholder="enter student name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Department/Class
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="select">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Mathematics</option>
                                                        <option value="Category 2">Engineering</option>
                                                        <option value="Category 3">Science</option>
                                                        <option value="Category 3">M.B.A.</option>
                                                        <option value="Category 3">Music</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Fees Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="selectType">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Annual</option>
                                                        <option value="Category 2">Tuition</option>
                                                        <option value="Category 3">Transport</option>
                                                        <option value="Category 3">Exam</option>
                                                        <option value="Category 3">Library</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                            <label class="control-label col-md-3">Payment Duration 
                                                </label>
                                                <div class="col-md-5">
                                                <div class="form-check">
											      <label class="form-check-label">
											        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											        Monthly
											      </label>
											    </div>
											    <div class="form-check">
											    <label class="form-check-label">
											        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
											        Session
											      </label>
											    </div>
											    <div class="form-check">
											    <label class="form-check-label">
											        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option2">
											        Yearly
											      </label>
											    </div>
												</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="number" type="text" placeholder="enter amount" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Collection Date 
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control input-height" size="16" placeholder="collection date" type="text" value="">
		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
		                                            </div>
                                            		<input type="hidden" id="dtp_input2" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Payment Method
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="select">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Cash</option>
                                                        <option value="Category 2">Cheque</option>
                                                        <option value="Category 3">Credit Card</option>
                                                        <option value="Category 4">Debit Card</option>
                                                        <option value="Category 5">Netbanking</option>
                                                        <option value="Category 6">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Payment Reference Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="number" type="text" placeholder="enter reference amount" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Payment Status
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="select">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Paid</option>
                                                        <option value="Category 2">Unpaid</option>
                                                        <option value="Category 3">Pending</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Payment Details
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="details" placeholder="payment details" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>
										</div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            	</div>
                                        	</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
         
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 @College Online Examination Form With Online Payment</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div> 
    <!-- start js include path -->
    <script src="../assets/plugins/jquery/jquery.min.js" ></script>
    <script src="../assets/plugins/popper/popper.js" ></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js" ></script>
    <script src="../assets/plugins/jquery-validation/js/additional-methods.min.js" ></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
    <script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/pages/validation/form-validation.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!--calender under material-->
	<script src="../assets/js/pages/material-select/getmdl-select.js" ></script>
    <script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
	
     <!-- end js include path -->
	 
	
  </body>


</html>