<?php
			error_reporting(1);
			include('dbconnection.php');
			 $student_id=$_SESSION['student_id'];
			$college_id= $_SESSION['college_id'];
			if(!isset($_SESSION['student_id']))
			{
				// not logged in
				header('Location://localhost/project/mainpage.php');
				exit();
			}

			$query="select * from student_registration where id='$student_id' AND college_id='$college_id' ";
			$getdata=mysqli_query($conn,$query);	
			$mydata=mysqli_fetch_array($getdata);
			//$college_id=$mydata['college_id'];
			$registration_id=$mydata['registration_id'];
			
			$semsester=$mydata['semester'];
			$query1="select * from semester where semester_name='$semsester' AND college_id='$college_id'";
			$getdata1=mysqli_query($conn,$query1);	
			$data1=mysqli_fetch_array($getdata1);
			$semsester_id=$data1['id'];
			
			$department=$mydata['department'];
			$query3="select * from department where department_name='$department' AND college_id='$college_id'";
			$getdata3=mysqli_query($conn,$query3);	
			$data3=mysqli_fetch_array($getdata3);
			$department_id=$data3['id'];
			
			$session=$mydata['session'];
			$query9="select id from session where college_id='$college_id' AND session='$session'";
			$get_data9 = mysqli_query($conn,$query9);
			$data9= mysqli_fetch_array($get_data9);
			$session_id=$data9['id'];
	?>

<?php 
			if(isset($_POST['submit']))
			{
				
				if(!empty($_POST['course_id']))
				{
					$reasons_for_unticked=$_POST['reasons_for_unticked'];
					$form_filling_date=$_POST['form_filling_date'];
					//echo $checkbox = implode(',', $_POST['course_id']);
					if($rowcount11>=1){
					$exstudent="Ex-Student";
					foreach($_POST['course_id'] as $value){
						mysqli_query($conn,"insert into exam_form(student_id,student_type,course_id,reasons_for_unticked='$reasons_for_unticked',form_filling_date='$form_filling_date',college_id='$college_id') values('$student_id','$exstudent','".$value."','".$_POST['reasons_for_unticked']."','".."','$college_id')");
						
					/*	echo '<script language="javascript">';
						echo 'alert("You have submited your form succefully")';
						echo '</script>';
							*/
							$_SESSION['form_filling_date'] = $_POST['form_filling_date'];
							header("Location:http://localhost/studentpanel/light/selected_exam_course.php");
						}
					}else{
						$regular="Regular";
						foreach($_POST['course_id'] as $value){
						mysqli_query($conn,"UPDATE exam_form SET student_id='$student_id',student_type='$regular',course_id='$value',reasons_for_unticked='$reasons_for_unticked',form_filling_date='$form_filling_date',college_id='$college_id') values('$student_id','$regular','".$value."','".."','".$_POST['form_filling_date']."','$college_id')");
						$_SESSION['form_filling_date'] = $_POST['form_filling_date'];
						header("Location:http://localhost/studentpanel/light/selected_exam_course.php");
						}
					}
				}	
			}
			
			
			
			$query1="select * from examination where college_id='$college_id' AND session_id='$session_id'";
			$get_data1 = mysqli_query($conn,$query1);
			$data1= mysqli_fetch_array($get_data1);
			$exam_name= $data1['exam_name'];
			
			
			$query11="select * from result_csv_table where college_id='$college_id' AND session_id='$session_id'AND student_id='$student_id' AND result_name='$exam_name' AND semester_id='$semester_id'";
			$get_data11 = mysqli_query($conn,$query1);
			$data11= mysqli_fetch_array($get_data11);
			$rowcount11=mysqli_num_rows($sgetdata1);
			
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
    <title>Examination form Portal</title>
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
	<!-- Date Time item CSS -->
    <link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
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
                                
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                              
								<li>
										<a href="studentchangepassword.php">
											<i class="icon-lock"></i> change password
										</a>
                                </li>
                                <li>
                                    <a href="studentlogout.php">
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
											$student_id=$_SESSION['student_id'];
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
	                            <a href="regular_form_project.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Exam Form</span><span class="arrow"></span></a>
	                            
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
                                <div class="page-title">Examination Form</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Examination Form</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box" style="background-color: lightyellow">
                               
								<!----exam form code--->
                                <div class="card-body" id="bar-parent">
                                    <div class="" style="background-color: #303030;">
									  
									</div>
									
									<div class="container" style="width:80%;" >	
										<form method="POST" action="">
											<div class="container">
												<div class="page-header text-center top_header_heading">
													<h1 style="font-size: 20px; color: black;">Examination Form</h1>
													<hr>
												</div>
													<table style="margin-top:0px;">
														<tr><td>Student type:</td><td><b><?php if($rowcount11>=1){ echo "Ex-Student";}else{ echo "Regular";} ?></b></td></tr>
														<tr><td>Scheme:</td><td><b><?php echo $mydata['department']; echo $mydata['session']; ?></b> </td></tr>
														<tr><td>Name of degree program:</td><td><b><?php echo $mydata['program_name'] ?></b> </td></tr>
														<tr><td>Name of exam:</td><td><b><?php echo $data1['exam_name']; echo $mydata['session']; ?></b></td></tr>
														<tr><td>Semester:</td><td><b><?php echo $mydata['semester'] ?></b></td></tr>
														<tr><td>Branch:</td><td><b><?php echo $mydata['department'] ?></b></td></tr>
														
														<div style="float:right;border:1px solid black; width:135px;height:155px;margin-right: 2%;
														margin-top: 0px;">	
														<?php echo "<img src='../../newadmin/light/".$mydata['profile_pic']."' style='width:133.8px;height:154px;'>"; ?>
														
														</div>
													</table>
												
												<hr>
											</div>
											
											<div class="container">	
												
													<table>
															<tr><td> Registration No.</td><td><b><?php echo $mydata['registration_id'] ?></b> </td></tr>
															<tr><td>Name of Student:</td><td> <b><?php echo $mydata['name'] ?></b> </td></tr>
															<tr><td>Gender:</td><td><b><?php echo $mydata['gender'] ?></b></td></tr>
															<tr><td>Parent's Name:</td><td><b>  <?php echo $mydata['parents_name'] ?></b>  </td></tr>
															<tr><td>Adress:</td><td> <b> <?php echo $mydata['address'] ?></b> </td></tr>
															<tr><td> Mobile Number:</td><td><b> <?php echo $mydata['mobile'] ?></b> </td></tr>
															
													</table>
												<hr>
											</div>
										
										<!---for subject table--->	
											<div class="container">
													<b><p> I want to appear in following course(s) in said examination(Tick/Untick)</p></b>
												<table class="table table-hover table-bordered" style="width:100%;">
													<thead>
														  <tr>
															<th>Sr.No</th>
															<th>Course Name</th>
															<th>Status</th>
															<th>Theory/Practicle</th>
															<th>Credit</th>
															<th>Tick/Untick</th>
														  </tr>
													</thead>
													<tbody>
														<?php
														$i=0;
														$query2="select * from course where semester_id='$semsester_id' AND department_id='$department_id' AND college_id='$college_id'";
														$getdata2=mysqli_query($conn,$query2);	
														//$data2=mysqli_fetch_array($getdata2);
														while($data2=mysqli_fetch_array($getdata2))
														{
														?>
														  <tr>
															<td><?php echo ++$i ?> </td>
															<td><?php echo $data2['course_code'] ?>-<?php echo $data2['course_name'] ?> </td>
															<td><?php if($rowcount11>=1){ echo "EX";}else{ echo "Regular";} ?></td>
															<td> <?php echo $data2['course_type'] ?> </td>
															<td ><?php echo $data2['credit'] ?> </td>
															<td>
																<div class="form-check" style="margin-left:35%;">
																<label class="form-check-label">
																<input type="checkbox" class="form-check-input" name="course_id[]" value="<?php echo $data2['id'] ?>">
																</label>
																</div>
															</td>
														  </tr>
														<?php
														}
														?>
													</tbody>
														  
												</table>
											</div>
										
											<!---subject table end-->
													<div class="container">
														
															<div class="form-inline">
															<label for="usr">Reasons for untick:</label>
															<input  style="width:80%;" type="text" class="form-control" name="reasons_for_unticked">
															</div> 
														
															<br>
															<p>I here by declare that above information is correct and I accept the same.</p>
															<hr>

														
															<div class="form-inline">
															<label for="usr">Date:</label>
															<input id="date"  placeholder="DD/MM/YYYY" type="text" class="form-control" name="form_filling_date" required>
															</div>
															<div style="margin-top:10px" class="form-group">
																<div class="col-sm-8 controls">
																	<center> <input style="margin-left:50%;" type= "submit" name="submit" value="Submit" class="btn btn-success"> </center> 
																	
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
	<!--<script src="../assets/js/app.js" ></script>-->
    <script src="../assets/js/layout.js" ></script>
    <script src="../assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="../assets/plugins/material/material.min.js"></script>
   <!--calender under material-->
	<script src="../assets/js/pages/material-select/getmdl-select.js" ></script>
    <script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
    <!-- summernote -->
    <script src="../assets/plugins/summernote/summernote.js" ></script>
    <script src="../assets/js/pages/summernote/summernote-data.js" ></script>
    <!-- end js include path -->
  </body>


</html>