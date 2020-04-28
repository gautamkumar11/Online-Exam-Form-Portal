 	<?php
	include('dbconnection.php');
	
	$college_id= $_SESSION['admin_id']; 
	if(isset($_POST["import"])) {
			
		   $fileName = $_FILES["file"]["tmp_name"];
			
			if ($_FILES["file"]["size"] > 0) {
				
			   $file = fopen($fileName, "r");
				//echo $file;
				while (($column = fgetcsv($file,10000,","))) {
					$query="select * from result_csv_table where result_name= '" . $column[0] . "' AND session_id='" . $column[1] . "' AND student_id='" . $column[2] . "' AND semester_id='" . $column[3] . "' AND grade='" . $column[4] . "' AND college_id='$college_id'";
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
						
						$sqlInsert = "INSERT into result_csv_table (result_name,session_id,student_id,semester_id,grade,date_of_result_declaration,college_id)
							   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','$college_id')";
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
				//$column = fgetcsv($file,10000,",");
				//echo $column[1];
				}
			
		
}

?>
<html>
<body>
<form class="form-horizontal" method="post" name="uploadCSV"
										enctype="multipart/form-data">
										<div class="input-row">
											<label class="col-md-4 control-label">Choose CSV File</label> <input
												type="file" name="file" id="file" accept=".csv">
											<button type="submit" id="submit" name="import"
												class="btn-submit">Import</button>
											<br />

										</div>
										<div id="labelError"></div>
									</form>
</html>
</body>
