<?php
error_reporting(1);
include('dbconnection.php');
$student_id= $_SESSION['student_id'];
$college_id=$_SESSION['college_id'];
	
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
                    <a href="index.php">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default" >Student</span> </a>
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
                                <span class="username username-hide-on-mobile"> Student </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                              
								<li>
									<a href="studentchangepassword.php">
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
											
											$c= mysqli_query($conn,"select name from student_registration where id= '$student_id'");
											$data= mysqli_fetch_array($c);
											?>
	                                <div class="pull-left info">
	                                    <p><?php echo $data['name']?></p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>
	                      
	                           
	                        <li class="nav-item">
	                            <a href="resitform.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Exam Form</span><span class="arrow"></span></a>
	                            
	                        </li>
	                       
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
	                                <span class="title">Payment</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                
									<!--
	                                <li class="nav-item">
	                                    <a href="add_fees.html" class="nav-link "> <span class="title">Add Fees </span>
	                                    </a>
	                                </li> -->
	                                <li class="nav-item">
	                                    <a href="payment_index.php" class="nav-link "> <span class="title">Add Payment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="receipt.php" class="nav-link "> <span class="title">Payment Receipt</span>
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
                                <div class="page-title">Payment</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
							
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <!--<li class="active">Dashboard</li>-->
                            </ol>
                        </div>
                    </div>
						<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                
                                <div class="card-body" id="bar-parent">
                                    <div class="container">

							  <div class="page-header">
								<h1><a href="payment_index.php">Payment Receipt</a></h1>
								<p class="lead"></p>
							  </div>
							  <p><b>For :</b> <?php echo $prd_name; ?></p>
								<p><b>Amount: </b> <?php echo $price; ?></p>
								<p><b>Bank Fee : </b> <?php echo $tax + $fee ; ?> <small> (Rs:3+ 2% of fee+ 15% Service Tax)</small></p>
								<p><b>Total : </b> <?php echo $prd_price; ?></p>
								<h3>Your Payment Details </h3>
								
								<form>
			<table>
					<tr><td> Receipt No.:</td><td>    </td></tr>
					<tr><td>Registration No:</td><td>    </td></tr>
					<tr><td>Caste/Categeory:</td><td>    </td></tr>
					<tr><td>year:</td><td>    </td></tr>
					
					<tr><td>Branch:</td><td>    </td></tr>
					<tr><td>Receipt From:</td><td></td></tr>
					<tr><td> Session/Exam:</td><td>    </td></tr>
					<tr><td>Date:</td><td>    </td></tr>
					<tr><td>Payment Type:</td><td>    </td></tr>
					<tr><td>Admission Batch:</td><td>    </td></tr>
					<tr><td>Semester:</td><td>    </td></tr>
					
				</table>
			</form>
			<hr style="border:1px solid black;">
			 <table class="table">
    <thead>
      <tr>
        <th>Particulars</th>
        <th>Amount</th>
       
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>Examination Fee Odd</td>
        <td>2500</td>
        
      </tr>
      <tr>
        <td>Examination Fee Even</td>
        <td>2500</td>
       
      </tr>
    </tbody>
  </table>
  		<hr style="border:1px solid black;">
		<div style="float:left;">
		<h >Total Amount:</h>
		<h>5000</h>
	
		</div>
	</div>
	
	<center><button style="margin-top:2%;">Save</button></center>
			
			<hr>
							</div>	    
						</div> 
                                </div>
                            </div>
                        </div>
		
            <!-- end page content -->
				</div> 
         
			</div> 
        <!-- end page container -->
        
    </div> 
	 <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 @College Online Examination Form With Online Payment</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
	
	
	
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
	<!--<script src="../assets/js/app.js" ></script>-->
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