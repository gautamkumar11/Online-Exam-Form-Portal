<?php
$src = $_FILES['file']['tmp_name'];
$targ = "./upload/".$_FILES['file']['name'];
move_uploaded_file($src, $targ);
echo '<img src="'.$targ.'" height="150" width="225" class="img-thumbnail"/>';
?>