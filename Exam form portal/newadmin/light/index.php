<?php
include('dbconnection.php');
include('prevention_opening_page.php');
error_reporting(1);
$college_id= $_SESSION['admin_id'];
$count = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(id) FROM student_registration where college_id= '$college_id'"));
//echo $count[0];	
$count1 = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(id) FROM department where college_id= '$college_id'"));
//echo $count1[0];
$count2 = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(id) FROM course where college_id= '$college_id'"));
//echo $count2[0];
$count3 = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(id) FROM payment where college_id= '$college_id'"));
//echo $count3[0];

?>
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
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
    <link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
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
										<a href="adminchangepassword.php">
											<i class="icon-lock"></i> change password
										</a>
                                </li>
                                <li>
                                    <a href="adminlogout.php">
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
									<?php
											$college_id= $_SESSION['admin_id'];
											$c= mysqli_query($conn,"select college from admin_registration where id= '$college_id'");
											$data= mysqli_fetch_array($c);
											?>
	                                <div class="pull-left info">
	                                    <p><?php echo $data['college']?></p>
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
	                            <a href="all_department_project.php" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Departments</span> <span class="arrow"></span>
	                            </a>
	                      
	                        </li>
							<li class="nav-item">
	                            <a href="all_semester_project.php" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Semester</span> <span class="arrow"></span>
	                            </a>
	                      
	                        </li>
							<li class="nav-item">
	                            <a href="all_session_project.php" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Session</span> <span class="arrow"></span>
	                            </a>
	                        </li>
							<li class="nav-item">
	                            <a href="all_courses_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Courses</span> <span class="arrow"></span> 
	                            </a>
	                        </li>
							<li class="nav-item">
	                            <a href="all_students_project.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Students</span><span class="arrow"></span></a>
	                         
	                        </li>
							<li class="nav-item">
	                            <a href="exam_form_date.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Exam form date</span><span class="arrow"></span></a>
	                         
	                        </li>
							<li class="nav-item">
	                            <a href="exam_form_date.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Exam form date</span><span class="arrow"></span></a>
	                         
	                        </li>
	                        <li class="nav-item">
	                            <a href="all_examination_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Examinations</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                        </li>
	                        
							<li class="nav-item">
	                            <a href="add_result_csv_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                            <span class="title">Results</span> <span class="arrow"></span>
	                            <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                    
	                        </li>
							
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
	                                <span class="title">Payment Collection</span> <span class="arrow"></span>
	                            </a>   
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
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
						<div class="row">
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-green">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Students</span>
						              <span class="info-box-number"><?php echo $count[0];?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						              <!--<span class="progress-description">
						                    45% Increase in 28 Days
						                  </span>-->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-yellow">
						            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total departments</span>
						              <span class="info-box-number"><?php echo $count1[0];?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 40%"></div>
						              </div>
						              <!--<span class="progress-description">
						                    40% Increase in 28 Days
						                  </span>-->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-blue">
						            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Course</span>
						              <span class="info-box-number"><?php echo $count2[0];?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 85%"></div>
						              </div>
						             <!-- <span class="progress-description">
						                    85% Increase in 28 Days
						                  </span>-->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-pink">
						            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Payment Collection</span>
						              <span class="info-box-number"><?php echo $count3[0];?></span><span></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 50%"></div>
						              </div>
						              <!--<span class="progress-description">
						                    50% Increase in 28 Days
						                  </span>-->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						</div>		
							
						
					</div>	
					<!-- end widget -->
                     
                     
			        <div class="row">
					
			        <!-- Quick Mail start -->
					
					<?php
					
						$to =$_POST['to'];
						$subject=$_POST['subject'];
						$headers =$_SESSION['adminid']; 
						$cc=$_POST['cc'];
						$bcc=$_POST['bcc'];
						$file=$_POST['file'];
						 if(isset($_POST['send']))
						 {
							mail($to,$subject,$cc,$bcc,$headers,$file);
						 }
					?>
					
					
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Quick Mail</header>
			                        
								</div>
								<div class="card-body ">
									<div class="mail-list">
                                           <div class="compose-mail">
                                               <form method="POST" action="">
                                                   <div class="form-group">
                                                       <label for="to" class="">To:</label>
                                                       <input type="text" tabindex="1" id="to" name="to" class="form-control">
                                                       <div class="compose-options">
                                                           <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                                                           <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                                                       </div>
                                                   </div>
                                                   <div class="form-group hidden">
                                                       <label for="cc" class="">Cc:</label>
                                                       <input type="text" tabindex="2" id="cc" name="cc" class="form-control">
                                                   </div>
                                                   <div class="form-group hidden">
                                                       <label for="bcc" class="">Bcc:</label>
                                                       <input type="text" tabindex="2" id="bcc" name="bcc" class="form-control">
                                                   </div>
                                                    <div class="form-group">
                                                       <label for="subject" class="">Subject:</label>
                                                       <input type="text" tabindex="1" id="subject" name="subject" class="form-control">
                                                    </div>
                                                   <div>
                                                       <div id="summernote"></div>
                                                       <input type="file"  name="file" class="default" multiple>
                                                   </div>
                                                 <!--   <div class="btn-group margin-top-20 ">
	                                                <button class="btn btn-primary btn-sm margin-right-10"><i class="fa fa-check"></i> Send</button>
                                           		</div> -->
                                           		<div class="box-footer clearfix">
									              <button type="button" name="send"class="mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">Send <i class="fa fa-paper-plane-o"></i></button>
									            </div>
                                               </form>
                                           </div>
                                       </div>
								</div>
							</div>
						</div>
						<!-- Quick Mail end -->
						
					
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
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.js" ></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
    <script src="../assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="../assets/plugins/material/material.min.js"></script>
    <!-- chart js --
    <script src="../assets/plugins/chart-js/Chart.bundle.js" ></script>
    <script src="../assets/plugins/chart-js/utils.js" ></script>
    <script src="../assets/js/pages/chart/chartjs/home-data.js" ></script>
    <!-- summernote -->
    <script src="../assets/plugins/summernote/summernote.js" ></script>
    <script src="../assets/js/pages/summernote/summernote-data.js" ></script>
    <!-- end js include path -->
  </body>
</html>