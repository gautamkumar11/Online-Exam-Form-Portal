<?php
if(!isset($_SESSION['admin_id']))
{
    // not logged in
    header('Location://localhost/project/mainpage.php');
    exit();
}
?>