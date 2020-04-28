<?php
//$conn = mysqli_connect("localhost","root","");
//mysqli_select_db($conn,"db_online_exam_form_portal");
include('dbconnection.php');
include('prevention_opening_page.php');
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
							<li class="nav-item active">
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
<?php
$college_id=$_SESSION['admin_id'];
error_reporting(1);
$course_name= $_POST['course_name']; 
$course_code= $_POST['course_code'];

	$session=$_POST['session'];
		$query9="select id from session where college_id='$college_id' AND session='$session'";
        $get_data9 = mysqli_query($conn,$query9);
        $data9= mysqli_fetch_array($get_data9);
		$session_id=$data9['id'];
		
	$department_name=$_POST['department_name'];
		$query11="select id from department where college_id='$college_id' AND department_name='$department_name'";
        $get_data11 = mysqli_query($conn,$query11);
        $data11= mysqli_fetch_array($get_data11);
		$department_id=$data11['id'];
		
	$semester_name=$_POST['semester_name'];
		$query12="select id from semester where college_id='$college_id' AND semester_name='$semester_name'";
        $get_data12 = mysqli_query($conn,$query12);
        $data12= mysqli_fetch_array($get_data12);
		$semester_id=$data12['id'];
		
		
if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  if(isset($_POST['submit']))
  {
	  $query="select * from course where college_id='$college_id' AND (course_name='$course_name' OR course_code='$course_code')";
        $get_data = mysqli_query($conn,$query);
        //$data= mysqli_fetch_array($get_data);
       $rowcount=mysqli_num_rows($get_data);
        if($rowcount>=1)
		{
          echo '<script language="javascript">';
          echo 'alert("course already registered")';
          echo '</script>';
        }
		else
		{
		mysqli_query($conn,"insert into course(course_name,course_short_name,course_code,credit,department_id,semester_id,session_id,year,elective_status,course_type,college_id)values('".$_POST['course_name']."','".$_POST['course_short_name']."','".$_POST['course_code']."','".$_POST['credit']."','$department_id','$semester_id','$session_id','".$_POST['year']."','".$_POST['elective_status']."','".$_POST['course_type']."','$college_id')"); 
		//echo $s;
			
		echo '<script language="javascript">';
        echo 'alert("course has been registered succefully")';
        echo '</script>';
        } 
  }
}

?>			
			<!-- End page content php code -->
			
			
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Course</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Course</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Course Details</header>
                                     
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form method="POST" action="" id="" class="form-horizontal">
                                        <div class="form-body">
											<div class="form-group row">
                                                <label class="control-label col-md-3">Course Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_name" placeholder="enter course name" class="form-control input-height" required /> </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Course Short Name
                                                    
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_short_name" placeholder="enter course short name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Code
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_code" placeholder="enter course code" class="form-control input-height" required /> </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Course Credit
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="credit" placeholder="enter course credit" class="form-control input-height" required /> </div>
                                            </div>
											<?php
											$d= mysqli_query($conn,"select department_name from department where college_id= '$college_id'");
											?>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Department
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="department_name" required>
                                                        <option value="">Select Department...</option>
                                                        <?php while($data= mysqli_fetch_array($d)):; ?>
															<option><?php echo $data[0]; ?></option>
															<?php endwhile; ?>
														
										
                                                    </select>
                                                </div>
                                            </div>
											<?php
											$s= mysqli_query($conn,"select semester_name from semester where college_id= '$college_id'");
											?>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Semester
                                                    <span class="required"> * </span>
                                                </label>
                                                 <div class="col-md-5">
                                                    <select class="form-control input-height" name="semester_name" required>
                                                        <option value="">Select Semester...</option>
														<?php while($data= mysqli_fetch_array($s)):; ?>
															<option><?php echo $data[0]; ?></option>
															<?php endwhile; ?>
                                                 
                                                    </select>
                                                </div>
                                            </div>
											<?php
											$s= mysqli_query($conn,"select session from session where college_id= '$college_id'");
											?>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Session
                                                    <span class="required"> * </span>
                                                </label>
                                                 <div class="col-md-5">
                                                    <select class="form-control input-height" name="session" required>
                                                        <option value="">Select Session...</option>
														<?php while($data= mysqli_fetch_array($s)):; ?>
															<option><?php echo $data[0]; ?></option>
															<?php endwhile; ?>
                                                 
                                                    </select>
                                                </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Year
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="year" required >
                                                        <option>Select Year</option>
                                                        <option>First</option>
                                                        <option>Second</option>
                                                        <option>Third</option>
                                                        <option>Fourth</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Elective Status
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="elective_status" required >
                                                        <option>Select...</option>
														<option>Regular</option>
                                                        <option>Professional Elective I</option>
														<option>Professional Elective II</option>
														<option>Professional Elective III</option>
														<option>Professional Elective IV</option>
                                                        <option>Open Elective I</option>
                                                        <option>Open Elective II</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Course Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="course_type" required >
                                                        <option value="">Select...</option>
                                                        <option >Theory</option>
                                                        <option >Practical-Lab</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
													<input type= "submit" name="submit" value="Submit" class="btn btn-info">
                                                    <input type="button" value="cancel" class="btn" onClick="document.location.href='http://localhost/newadmin/light/all_courses_project.php';" />
                                                </div>
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
    <script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js" ></script>
    <script src="../assets/plugins/jquery-validation/js/additional-methods.min.js" ></script>
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
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
     <!-- end js include path -->
	 
	
  </body>


</html>