<?php
session_start();
$servername="localhost";
$username="root";
$passward="";
$db_name="db_online_exam_form_portal";
$conn=new mysqli($servername,$username,$passward,$db_name);
	if($conn->connect_error)
	{
		//die("connection failed".$conn->connect_error);
	}
	else
	{
		//echo("connected");
	}
?>
		