<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"db_online_exam_form_portal");
	
$cols = $_POST['col'];
$table = 'table_name';
foreach($cols as $col) {
    $mse1 = mysqli_real_escape_string($col['mse1']);
    $mse2 = mysqli_real_escape_string($col['mse2']);
    $teacher_assessment = mysqli_real_escape_string($col['teacher_assessment']);
    $external_marks = mysqli_real_escape_string($col['external_marks']);
    mysqli_query($conn,"INSERT INTO `{$result_table}` (`mse1`, `mse2`, `teacher_assessment`, `external_marks`) VALUES('{$mse1}', '{$mse2}', '{$teacher_assessment}', '{$external_marks}')") or die(mysqli_error());
}


$number_of_columns = 2;
for($i=0;$i<$number_of_columns;$i++) :?>
    <input  name="col[<?=$i?>][date]" type="text" class="datepicker">
    <input type="text" name="col[<?=$i?>][mse1]" />
    <input type="text" name="col[<?=$i?>][mse2]" />
    <input type="text" name="col[<?=$i?>][teacher_assessment]" />
    <input type="text" name="col[<?=$i?>][external_marks]" />
<?php endfor;?>

<?php


?>