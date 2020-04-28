<!--====php code strats for login==-->
<?php
include('dbconnection.php');
error_reporting(1);

$squery= "select college from admin_registration";
$sgetdata= mysqli_query($conn,$squery);
//print_r($sdata);
  $x=$_POST['selectcollege']; 
  $y=$_POST['studentid']; 
  $z=$_POST['spassword'];
  $squery8 = "select id from admin_registration where college='$x'";
  $sgetdata8= mysqli_query($conn,$squery8);
  $sdata8= mysqli_fetch_array($sgetdata8);
  $p=$sdata8['id'];
if(isset($_POST['slogin']))
{
  //$squery1 = "SELECT admin_registration.college, student_registration.registration_id, student_registration.password from admin_registration INNER JOIN student_registration ON admin_registration.college = student_registration.college";
  $squery1 = "select id,registration_id,password from student_registration where college_id='$p' AND registration_id='$y' AND password='$z'";
  $sgetdata1= mysqli_query($conn,$squery1);
  $sdata1= mysqli_fetch_array($sgetdata1);
  $rowcount=mysqli_num_rows($sgetdata1);
  if($rowcount>=1)
    {
     // echo '<script language="javascript">';
      //echo 'alert("You have been logined succefully ")';
      //echo '</script>';
      header("Location:http://localhost/studentpanel/light/index.php");
      $_SESSION['student_id'] = $sdata1['id'];
      $_SESSION['college_id'] = $sdata8['id'];
    }
    
    else{
      echo '<script language="javascript">';
      echo 'alert("Your login failed")';
      echo '</script>';
    }
}
// code for remember me
if($_POST["remember"]=='1')
  {
    $hour = time() + 3600 * 24 * 30;
    setcookie('selectcollege', $x, $hour);
    setcookie('studentid', $y, $hour);
    setcookie('spassword', $z, $hour);
    
  }else {
    setcookie("selectcollege","");
    setcookie("studentid","");
    setcookie("spassword","");
  //echo "Cookies Not Set";
    }

//$_SESSION['studentid'] = $x;
//header("Location:projectadmin\radixtouch.in\templates\admin\smart\source\light\index.html");
?>
<!--====php code strats for login==-->


<!--====html code strats from here==-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Examination Form Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .top_header_heading{margin: 0px!important;}
    .top_header_heading h1{margin: 0px!important;padding: 20px;}
    .footer{background-color: #303030; position: fixed; bottom: 0; width: 100%;}
    .footer p{margin: 0px;padding: 5px; color: #fff; text-align: center;}
    .btnclass{margin-left: 40px;}
  
  </style>

</head>
<body style="background-color: #F5F5F5; height: 100%">

<div class="" style="background-color: #303030;">
  <div class="page-header text-center top_header_heading">
    <h1 style="font-size: 50px; color: white;">Examination Form Portal</h1>      
  </div>
</div>
<div class="container" style="margin-top: 50px; height: 500px;">
  <div style="float: left; text-align: center;">
    <img src="student_icon.png" width= "300" height= "300"><br>
    <h1>
     Student Login
    </h1>
  </div>

    <div class="container" style="height: 369px;"> 
     <!------=======login start=========------->

       <div style="float: left; margin-left: 150px; margin-top: 25px;">
          <div id="loginbox" style="margin-top:0%;" class="mainbox col-md-12 col-sm-8">                    
            <div class="panel panel-info"style="border: 0px">
                    <div class="panel-heading" style="background-color: #E0E0E0; border: 0px;">
                        <div class="panel-title">Sign In</div>
                        <!--
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                            
                        </div>
                      -->
                    </div>     

                    <div style="padding-top: 30px; background-color:  #F5F5F5;" class="panel-body">

                      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                          <form id="loginform" class="form-horizontal" role="form" method="POST" action="">

                            <div class="form-group">
                              <label class="control-label col-sm-4" for="college_id">College:</label>
                              <select class="form-control col-sm-6" id="sel1" style="margin-left: 4%; width: 58%;" name="selectcollege" value="<?php if(isset($_COOKIE["selectcollege"])) { echo $_COOKIE["selectcollege"]; } ?>" required>
                                <option value="">Select College</option>
                                <?php while($sdata= mysqli_fetch_array($sgetdata)):; ?>
                                <option><?php echo $sdata[0]; ?></option>
                                <?php endwhile; ?>
                                <!--
                                <option value="selectcollege">Select College</option>
                                <option value="ycce">Yeshwantrao Chavan College of Engineering-[YCCE], Nagpur</option>
                                <option value="srce">Shri Ramdeobaba College of Engineering and Management, Nagpur</option>
                                <option value="rgce">Rajiv Gandhi College of Engineering and Research, Nagpur</option>
                                <option value="pce">Priyadarshini College of Engineering, Nagpur</option>
                                <option value="ghrcei">G.H. Raisoni College of Engineering,Nagpur</option>
                                -->
                              </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="college_id">Student ID:</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="studentmail" placeholder="Enter Student ID" name="studentid" value="<?php if(isset($_COOKIE["studentid"])) { echo $_COOKIE["studentid"]; } ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                             <label class="control-label col-sm-4" for="pwd">Password:</label>
                              <div class="col-sm-8">          
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="spassword" value="<?php if(isset($_COOKIE["spassword"])) { echo $_COOKIE["spassword"]; } ?>" required>
                              </div>
                            </div>
                            <div class="input-group">
                              <div class="checkbox">
                                <label>
                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>

                              </div>

                            </div>
                            <div style="margin-top:10px" class="form-group">
                              <div class="col-sm-8 controls">
                                <input type= "submit" name="slogin" value="Sign In" class="btn btn-success">
                                <a href="#" onClick="$('#loginbox').hide(); $('#forgotpass').show()">Forgot password?</a>
                              </div>
                            </div>
                               
                          </form>
                        </div>                     
                    </div>  
            </div>
        <!-------=======login end=======---->

        
             
             <!------==========forget password start=======---->
             <?php

                $se=trim($_POST['studentmail']);
                $squery2="select password from student_information where email= '$se'";
                $sgetdata2=mysqli_query($conn,$squery2);
                $sdata2 = mysqli_fetch_array($sgetdata2); //print_r($data);
                

                  // the message
                  $sys_generated_pwd = generateRandomString();
                  //updated passsword in database
                  mysqli_query($conn,"UPDATE student_information SET password='$sys_generated_pwd' where email='$se'");


                  $msg = "your updated password is ".$sys_generated_pwd." "."Admin online Portal Thank you!!";

                  // use wordwrap() if lines are longer than 70 characters
                  $msg = wordwrap($msg,50);

                  // send mail to
                  $to = $_POST['studentmail'];
                  // send email
                 mail($to,"Forgot Password",$msg);

                    //automated password genration
                    function generateRandomString($length = 10) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
            ?>

              <div id="forgotpass" style="display:none; margin-top:0%" class="mainbox  col-md-12 col-sm-8">                    
                 <div class="panel panel-info" style="border: 0px solid black;">
                <div class="panel-heading" style="background-color: #E0E0E0; border: 0px;">
                            <div class="panel-title">Forgot password</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onClick="$('#forgotpass').hide(); $('#loginbox').show()">
                                                Sign In</a></div>
                        </div>     

                    <div style="padding-top: 30px; background-color:  #F5F5F5;" class="panel-body">

                          <form id="forgotpassform" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="college_id">Email ID:</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="collegemail" placeholder="Enter Student mail ID" name="studentmail">
                                </div>
                            </div>
                           
                            <div style="margin-top:10px;" class="form-group">
                              <div class="col-sm-8 controls">
                                <a id="btn-send-password" href="#" class="btn btn-success btnclass">Send Password</a>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:10px; font-size:85%">
                                  If you did not get your password, click here..!
                                  <a href="#"  >
                                  Resend password
                                  </a>
                                </div>
                              </div>
                            </div>    
                          </form>
                        </div>                     
                    </div> 
                  </div>

             <!-------========forget password end============---> 

            </div>
      </div>
</div>
  <div class="footer">
      <p>2018 @College Online Examination Form With Online Payment</p>
    </div>
</body>
</html>