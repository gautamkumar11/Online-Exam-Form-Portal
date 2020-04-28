<?php
//$conn = mysqli_connect("localhost","root","");
//mysqli_select_db($conn,"db_online_exam_form_portal");
include('dbconnection.php');
include('prevention_opening_page.php');
$college_id= $_SESSION['admin_id']; 
if(isset($_POST["import"])) {
			
		   $fileName = $_FILES["file"]["tmp_name"];
			
			if ($_FILES["file"]["size"] > 0) {
				
			   $file = fopen($fileName, "r");
				
				while (($column = fgetcsv($file,10000,","))) {
					$query="select * from result_csv_table where result_name= '" . $column[0] . "' AND session='" . $column[1] . "' AND course_code='" . $column[2] . "' AND registration_id='" . $column[3] . "' AND semester_name='" . $column[4] . "' AND grade='" . $column[5] . "' AND college_id='$college_id'";
					$get_data = mysqli_query($conn,$query);
					$rowcount=mysqli_num_rows($get_data);	
				}if($rowcount>=1){
					echo '<script language="javascript">';
					echo 'alert("CSV Data already Imported")';
					echo '</script>';}
				//echo $rowcount;
				else{
					$fileName = $_FILES["file"]["tmp_name"];
			
					if ($_FILES["file"]["size"] > 0) {
					
						$file = fopen($fileName, "r");
						while (($column = fgetcsv($file,10000,",")) !== FALSE) {
							
							$sqlInsert = "INSERT into result_csv_table (result_name,session,course_code,registration_id,semester_name,grade,date_of_result_declaration,college_id)
								   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','$college_id')";
							$result = mysqli_query($conn, $sqlInsert); 
						   // $result= mysqli_fetch_array($getresult);
							
					}if (! empty($result)) {
							echo '<script language="javascript">';
							echo 'alert("CSV Data Imported into the Database")';
							echo '</script>';
							//$type = "success";
						  // echo $message = "CSV Data Imported into the Database";
						} 
				}
			}
		}
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
                                    <header>Result Upload</header>
                                     
                                </div>
                                <div class="card-body" id="bar-parent" >
                                   <div style="margin-top:30px;">
									<form class="form-horizontal" method="post" name="uploadCSV"
										enctype="multipart/form-data">
										<div class="input-row">
											<label class="col-md-4 control-label" style="font-size: x-large;">Choose CSV File Of Result</label>
											<input type="file" name="file" id="file" accept=".csv" style="font-size: x-large;" required>
											<div class="input-row">
											<button type="submit" id="submit" name="import"
												class="btn btn-success" style="font-size:large;     margin-top: 36px; margin-left: 400px;">Submit</button>
											<br />
											</div>
										</div>
										<div id="labelError"></div>
									</form>
									</div>
											<div style="    margin-top: 6%;">
											<table class="table table-hover table-bordered" style="width:60%; ">
											<h3><b style="color:red">This is mendatory formate of csv file: &nbsp;-></b></h3>
															<thead>
																  <tr style="background: #ccc;">
																	<th>Result name</th>
																	<th>Session</th>
																	<th>Course Code</th>
																	<th>Registration ID</th>
																	<th>Semester</th>
																	<th>Grade</th>
																	<th>Date of result declaration</th>
																  </tr>
																  
															</thead>

															<tbody>
																
																<tr>
																	<td>ODD</td>
																	<td>2015-16</td>
																	<td>GE1101</td>
																	<td>15010063</td>
																	<td>I</td>
																	<td>F</td>
																	<td>09-10-2018</td>
																</tr>
																<tr>
																	<td>ODD</td>
																	<td>2015-16</td>
																	<td>GE1101</td>
																	<td>15010063</td>
																	<td>I</td>
																	<td>F</td>
																	<td>09-10-2018</td>
																</tr>
																<tr>
																	<td>ODD</td>
																	<td>2015-16</td>
																	<td>GE1105</td>
																	<td>15010063</td>
																	<td>I</td>
																	<td>F</td>
																	<td>09-10-2018</td>
																</tr>
																<tr>
																	<td>ODD</td>
																	<td>2015-16</td>
																	<td>GE1106</td>
																	<td>15010063</td>
																	<td>I</td>
																	<td>F</td>
																	<td>09-10-2018</td>
																</tr>
															</tbody>
																  
														</table>
											</div>											
													<!---subject table end-->
													
													<!--	<div class="form-inline">
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
											</form>	-->
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
	 
<script type="text/javascript">
	$(document).ready(
	function() {
		$("#frmCSVImport").on(
		"submit",
		function() {

			$("#response").attr("class", "");
			$("#response").html("");
			var fileType = ".csv";
			var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
					+ fileType + ")$");
			if (!regex.test($("#file").val().toLowerCase())) {
				$("#response").addClass("error");
				$("#response").addClass("display-block");
				$("#response").html(
						"Invalid File. Upload : <b>" + fileType
								+ "</b> Files.");
				return false;
			}
			return true;
		});
	});
</script>

  </body>


</html>