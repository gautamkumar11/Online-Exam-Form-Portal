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
<style>
input{
	    border: none;
}
</style>

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
	                            <a href="all_examination_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Examinations</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                    
	                        </li>
							<li class="nav-item active">
	                            <a href="all_result_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Results</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                    
	                        </li>
							<li class="nav-item">
	                            <a href="all_backlog_history_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Backlog History</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                      
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
	                      
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			
			
			<!-- start page content php code -->

			
			
<!DOCTYPE php>
<?php

error_reporting(1);


	$college_id= $_SESSION['admin_id']; 
	$student_id=$_SESSION['student_id'];
	
		$query6="select * from student_registration where college_id='$college_id' AND id='$student_id'";
        $get_data6= mysqli_query($conn,$query6);
        $data6= mysqli_fetch_array($get_data6);
		
        
		$semester_name=$data6['semester'];
		$query12="select id from semester where college_id='$college_id' AND semester_name='$semester_name'";
        $get_data12 = mysqli_query($conn,$query12);
        $data12= mysqli_fetch_array($get_data12);
		$semester_id=$data12['id'];
		
		$department_name=$data6['department'];
		$query13="select id from department where college_id='$college_id' AND department_name='$department_name'";
        $get_data13 = mysqli_query($conn,$query13);
        $data13= mysqli_fetch_array($get_data13);
		$department_id=$data13['id'];
		
		$session=$data6['session'];
		$query14="select id from session where college_id='$college_id' AND session='$session'";
        $get_data14 = mysqli_query($conn,$query14);
        $data14= mysqli_fetch_array($get_data14);
		$session_id=$data14['id'];
		
		
if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  if(isset($_POST['submit']))
  {
		/*$cols = $_POST['col'];
		$mse1 = mysqli_real_escape_string($col['mse1']);
		$mse2 = mysqli_real_escape_string($col['mse2']);
		$teacher_assessment = mysqli_real_escape_string($col['teacher_assessment']);
		$external_marks = mysqli_real_escape_string($col['external_marks']);*/
	  /*foreach($cols as $col){*/
			mysqli_query($conn,"insert into result_table(result_name,session_id,student_id,semester_id,mse1,mse2,teacher_assessment,external_marks,college_id,date_of_updating_data) values('".$_POST['result_name']."','$session_id','$student_id','$semester_id','".$_POST['mse1']."','".$_POST['mse2']."','".$_POST['teacher_assessment']."','".$_POST['external_marks']."','$college_id','".$_POST['date_of_updating_data']."')");
	  /*}*/
  }
}
		
?>				
			<!-- End page content php code -->
			

			<!-- start page content HTML code -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Result</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Result</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Result</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box" >
                                <div class="card-head">
                                    <header>Result Registration</header>
                                     
                                </div>
                                <div class="card-body" id="bar-parent" >
                                   <form method="POST" action="" id="form2">
												<div class="form-body">	
														<?php
														$e= mysqli_query($conn,"select exam_name from examination where college_id='$college_id' AND session_id='$session_id'");
														?>
												<div class="container">
													<div class="form-group row">
														<table>
															<tr><td>Name of Student:</td><td> <b><?php echo $data6['name']; ?></b> </td></tr>
															<tr><td> Registration No.</td><td><b><?php echo $data6['registration_id'] ?></b> </td></tr>
															
															<tr><td> Mobile Number:</td><td><b> <?php echo $data6['mobile'] ?></b> </td></tr>
															
													</table>
													</div>
													<div class="form-group row">
														<label class="">Result Name
															<span class="required"> * </span>
														</label>
														 &nbsp;&nbsp;
															<select class=" input-height" name="result_name" required>
																<option value="">Select Result Name...</option>
																<?php while($data= mysqli_fetch_array($e)):; ?>
																	<option><?php echo $data[0]; ?></option>
																	<?php endwhile; ?>
															</select>
													 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
														
														<div class="form-group row">
														<label class="control-label col-md-3">SGPA
															
														</label>
														<div class="col-md-5">
															<input type="text" name="sgpa" placeholder="" class="form-control input-height" disabled/> </div>
														</div>
														<div class="form-group row">
														<label class="control-label col-md-3">CGPA
															
														</label>
														<div class="col-md-5">
															<input type="text" name="cgpa" placeholder="" class="form-control input-height" disabled/> </div>
														</div>
														
													</div>
												<!---for subject table--->	
														
														<table class="table table-hover table-bordered" style="width:100%;">
															<thead>
																  <tr>
																	<th rowspan="2">Sr.No</th>
																	<th rowspan="2">Course Name</th>
																	<th colspan="4">Internal Marks(40)</th>
																	<th rowspan="2">External Marks(60)</th>
																	<th rowspan="2">Total obtained Marks</th>
																	<th rowspan="2">Cutoff Marks</th>
																	<th rowspan="2">Grade</th>
																  </tr>
																  <tr>
																	<th>MSE-I</th>
																	<th>MSE-II</th>
																	<th>TA</th>
																	<th>Total</th>
																  </tr>
															</thead>
															<tbody>
																<?php
																$i=0;
																
																$query2="select * from course where college_id='$college_id' AND semester_id='$semester_id'";
																$get_data2 = mysqli_query($conn,$query2);
																$rowcount=mysqli_num_rows($get_data2);
																while($data2= mysqli_fetch_array($get_data2))
																{
																?>
																  <tr>
																	<td><?php echo ++$i ?></td>
																	<td><?php echo $data2['course_code'] ?>-<?php echo $data2['course_name'] ?></td>
																	<td><input type="text" id="<?php echo $data2['id'];?>" name="mse1" size="2"/></td>
																	<td><input type="text" id="<?php echo $data2['id'];?>" name="mse2" size="2"/></td>
																	<td><input type="text" id="<?php echo $data2['id'];?>" name="teacher_assessment" size="2"/></td>
																	<td><input type="text" id="<?php echo $data2['id'];?>" name="total_internal_marks"size="2"/></td>
																	<td><input type="text" name="external_marks"size="4"/></td>
																	<td><input type="text" name="total_obtained_marks"size="4"/></td>
																	<td><input type="text" name="cutoff_marks"size="3"/></td>
																	<td><input type="text" name="grade"size="2"/></td>
																	
																  </tr>
																<?php
																}
																?>
															</tbody>
																<tfoot>
																	<tr>
																	  <th id="result" style="text-align:right;" colspan="9">Result</th>
																	  <td>200</td>
																	</tr>
															   </tfoot>	  
														</table>
	
												
													<!---subject table end-->
													
														<div class="form-inline">
															<label for="usr">Date:</label>
															<input id="date"  placeholder="DD/MM/YYYY" type="text" class="form-control" name="date_of_updating_data" required>
														</div>
														<div style="margin-top:10px" class="form-group">
															<div class="col-sm-8 controls">
															<input style="margin-left:50%;" type= "submit" name="submit" value="Submit" class="btn btn-success">
														 <input type="button" value="cancel" class="btn" onClick="document.location.href='http://localhost/newadmin/light/all_result_project.php';" /> 
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
	<!--<script src="../assets/js/app.js" ></script>-->
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
	 <?php echo $n=$data2['id'];?>
<!--	<script>
	$(document).ready(function(){
		$("input").blur(function(){
			for(i=$n; i>1; i++){
			var sum=0;
			$("#$n").each(function(){
				sum=sum + Number($(this).val());
			});
			$("#$n").val(sum); }
		});
	});
</script>	-->

  </body>


</html>