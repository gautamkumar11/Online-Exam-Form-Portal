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
	<!--pdf-->
	<script src="https://docraptor.com/docraptor-1.0.0.js"></script>
	<style>
    @media print {
      #pdf-button {
        display: none;
      }
    }
  </style>
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color">
    <div class="page-wrapper">
       
                        <!-- end manage user dropdown -->
                      
                    </ul>
                </div>
            </div>
        </div>
       
        <!-- start page container -->
        <div class="page-container">
 			
	 
		
		<?php 
			
			
			
			$query1="select * from examination where college_id='$college_id' AND session_id='$session_id'";
			$get_data1 = mysqli_query($conn,$query1);
			$data1= mysqli_fetch_array($get_data1);
			$exam_name= $data1['exam_name'];
			
			
			$query11="select * from result_csv_table where college_id='$college_id' AND session_id='$session_id'AND student_id='$student_id' AND result_name='$exam_name' AND semester_id='$semester_id'";
			$get_data11 = mysqli_query($conn,$query1);
			$data11= mysqli_fetch_array($get_data11);
			$rowcount11=mysqli_num_rows($sgetdata1);
			
			//$exam_name= $data1['exam_name'];
			
		?>		
		
		
			
			
                    
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
													<h1 style="font-size: 20px; color: black;">Online Exam Form</h1>
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
															
														  </tr>
													</thead>
													<tbody>
														<?php
														$i=0;
			$form_filling_date=$_SESSION['form_filling_date'];
			$sqlquery="select course_id from exam_form where student_id='$student_id' AND form_filling_date='$form_filling_date' AND college_id='$college_id'";
			$get_query_data = mysqli_query($conn,$sqlquery);
			
			while($sql_data= mysqli_fetch_array($get_query_data))
			{
				$course_id=$sql_data['course_id'];
				$sql_query="select * from course where id='$course_id' AND college_id='$college_id'";
			$get_query_data2 = mysqli_query($conn,$sql_query);
													
			while($sqldata= mysqli_fetch_array($get_query_data2))
														{
														?>
														  <tr>
															<td><?php echo ++$i ?> </td>
															<td><?php echo $sqldata['course_code'] ?>-<?php echo $sqldata['course_name'] ?> </td>
															<td><?php if($rowcount11>=1){ echo "EX";}else{ echo "Regular";} ?></td>
															<td> <?php echo $sqldata['course_type'] ?> </td>
															<td ><?php echo $sqldata['credit'] ?> </td>
															
														  </tr>
														<?php
														}
			}
														?>
													</tbody>
														  
												</table>
											</div>
										
											<!---subject table end-->
													<div class="container">
														
															
														
															<br>
															<p>I here by declare that above information is correct and I accept the same.</p>
															<hr>

														
															<div class="form-inline">
															<label for="usr">Date:</label>
															<input value="<?php echo $form_filling_date?>" class="form-control" disabled>
															</div>
															<div style="margin-top:10px" class="form-group">
													<div class="col-sm-8 controls">
																<center>	<a href="regular_form_project.php" type="button" class="btn btn-basic" > Edit Form </a>
<a href="ycce_payment_order.php?id=<?php echo $student_id; ?>" class="btn btn-success" > Make Payment </a>  

<?php
include('newadmin/light/selected_exam_course.php');
?>
<input id="pdf-button" class="btn" type="button" value="Save AS PDF" onclick="downloadPDF()" />
  
																	</center>
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
       
    </div> 
    
   <!--calender under material-->
	<script src="../assets/js/pages/material-select/getmdl-select.js" ></script>
    <script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
    
	
	<script>
    var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
        test: true, 
        type: "pdf",
        document_content: document.querySelector('html').innerHTML, 
      })
    }
  </script>
  </body>


</html>