<?php
//$conn = mysqli_connect("localhost","root","");
//mysqli_select_db($conn,"db_online_exam_form_portal");
include('dbconnection.php');
include('prevention_opening_page.php');

if(isset($_GET['delete']))
	{
		mysqli_query($conn,"delete from session where id= ".$_GET['delete']);
	}
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
    <!-- data tables -->
    <link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
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
							<li class="nav-item active">
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
			
			<!-- start page content php code -->

<!DOCTYPE php>
		<!-- End page content php code -->
			
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Sessions List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Session</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Sessions List</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card card-box">
					                                <div class="card-head">
					                                    <header>All Sessions List</header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                    <div class="row">
					                                        <div class="col-md-6 col-sm-6 col-6">
					                                            <div class="btn-group">
					                                                <a href="add_session_project.php" id="addRow" class="btn btn-info">
					                                                    Add New Session<i class="fa fa-plus"></i>
					                                                </a>
					                                            </div>
					                                        </div>
					                                        <div class="col-md-6 col-sm-6 col-6">
					                                            <div class="btn-group pull-right">
					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
					                                                    <i class="fa fa-angle-down"></i>
					                                                </a>
					                                                <ul class="dropdown-menu pull-right">
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-print"></i> Print </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
					                                                    </li>
					                                                </ul>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div class="table-scrollable">
					                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
					                                        <thead>
					                                            <tr>
																	<th> Sr. No. </th>
					                                                <th> Session </th>
					                                                <th>Edit </th>
																	<th>Delete </th>
					                                            </tr>
					                                        </thead>
													
					                                        <tbody>
															<?php
																$i=0;
																error_reporting(1);

																$query1="select * from session where college_id='$college_id'";
																		$get_data1 = mysqli_query($conn,$query1);
																	
																		while ($data =  mysqli_fetch_array($get_data1))
																		{
																	
														?>
																<tr class="odd gradeX">
																	<td class="left"><?php echo ++$i;?></td>
																	<td class="left"><?php echo $data['session'] ?></td>
																	
																	<td>
																		<a href="edit_session_project.php?edit=<?php echo $data['id'];?>" class="btn btn-primary btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																	</td>
																	<td>
																		<a href="all_session_project.php?delete=<?php echo $data['id'];?>" class="btn btn-danger btn-xs"> <i class="fa fa-trash-o "></i> </a>
																		
																	</td>
																</tr>
															<?php
																}
															?>	
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    
                    					
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
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <!-- data tables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="../assets/js/pages/table/table_data.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
	 
	
  </body>


</html>