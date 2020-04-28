<?php
include('dbconnection.php');
error_reporting(1);
 $student_id=$_SESSION['student_id'];
$college_id= $_SESSION['college_id'];

	$query="select * from student_registration where id='$student_id' AND college_id='$college_id' ";
	$getdata=mysqli_query($conn,$query);	
	$mydata=mysqli_fetch_array($getdata);
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
	
	$query1="select * from result_csv_table where registration_id='$registration_id'  AND college_id='$college_id' AND college_id='$college_id' AND college_id='$college_id'";
	$getdata1= mysqli_query(conn,$query1);
	$data=mysqli_fetch_array($getdata1);
	if($data['semester']==I)
	{
		mysqli_query(conn,"insert into admission_to_next_sem(student_id,session_id,semester_id,year,college_id) values($student_id,$session_id,$semester_id,$year,$college_id));
	
	}
?>