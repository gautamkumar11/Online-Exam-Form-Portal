<!---=========php code starts for registration form=====--->

<?php
include('dbconnection.php');
error_reporting(1);
$u = $_POST['university'];
$e = $_POST['email'];
$c = $_POST['college'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  if(isset($_POST['submit']))
  {
   if(trim($_POST['password'])==trim($_POST['cpassword']))
    {
        $query="select email from admin_registration where email= '$e' or college= '$c'";
        $get_data = mysqli_query($conn,$query);
        //$data= mysqli_fetch_array($get_data);
        $rowcount=mysqli_num_rows($get_data);
        if($rowcount>=1){
          echo '<script language="javascript">';
          echo 'alert("College or Email Id already used")';
          echo '</script>';
        }else{

               mysqli_query($conn,"insert into `admin_registration`(`college`,`university`,`email`,`password`,`website`,`city`,`state`,`mobile`)
                  values('".trim($_POST['college'])."','".trim($_POST['university'])."','".trim($_POST['email'])."','".trim($_POST['password'])."','".trim($_POST['website'])."','".trim($_POST['city'])."','".trim($_POST['state'])."','".trim($_POST['mobile'])."')");
                echo '<script language="javascript">';
                echo 'alert("Admin has been registered succefully")';
                echo '</script>';

        
              }
      
    }else{
           echo '<script language="javascript">';
           echo 'alert("password and confirm password did not match")';
           echo '</script>';
         }
  }
}

?>
<!---=========php code ends for registration form=====--->



<!---=========php code starts for login=====--->
<?php
 $em=trim($_POST['loginemail']);
  $ps=trim($_POST['loginpassword']);
if(isset($_POST['signin']))
{
  
    $query2="select * from admin_registration where email= '$em'";
  $get_data2=mysqli_query($conn,$query2);
  $data = mysqli_fetch_array($get_data2); //print_r($data['password']);
  if($data['password']=="")
    {
      echo '<script language="javascript">';
      echo 'alert("Email is incorrect")';
      echo '</script>';
    }
    else if($data['password']==$ps)
    {
     // echo '<script language="javascript">';
     // echo 'alert("You have been logined succefully")';
     // echo '</script>';
     $_SESSION['admin_id'] = $data['id'];
     header("Location:http://localhost/newadmin/light/index.php");
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("You have entered invalid password")';
      echo '</script>';
    }
}
// code for remember me
if($_POST["remember"]=='1')
  {
    $hour = time() + 3600 * 24 * 30;
    setcookie('loginemail', $em, $hour);
    setcookie('loginpassword', $ps, $hour);
    
  }else {
  setcookie("loginemail","");
  setcookie("loginpassword","");
  //echo "Cookies Not Set";
}

//$_SESSION['college'] = $c;
$_SESSION['adminid'] = $em;
//$_SESSION['university'] = $u;

?>
<!---=========php code ends for login=====--->



<!---=========HTML CODE=========--->

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
  
  </style>

</head>
<body style="background-color: #F5F5F5; height: 100%;"> <!--#FAFAD2-->

<div class="" style="background-color: #303030;">
  <div class="page-header text-center top_header_heading">
    <h1 style="font-size: 50px; color: white;">Examination Form Portal</h1>      
  </div>
</div>
<div class="container" style="margin-top: 50px; height: 500px;">
  <div style="float: left; text-align: center;">
    <img src="male-icon-32.png" width= "300" height= "300"><br>
    <h1>
     Admin Login
    </h1>
  </div>

    <div class="container" style="height: 369px;"> 
     <!------=======login start=========------->

       <div style="float: left; margin-left: 150px; margin-top: 10px;">
          <div id="loginbox" style="margin-top:0%;" class="mainbox col-md-12 col-sm-8">                    
            <div class="panel panel-info"style="border: 0px">
                    <div class="panel-heading" style="background-color: #E0E0E0; border: 0px;">
                        <div class="panel-title">Sign In</div>
                        <!--
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                            <a href="#" onClick="$('#loginbox').hide(); $('#forgotpass').show()">Forgot password?</a>
                        </div>
                      -->
                    </div>     

                    <div style="padding-top: 30px; background-color:  #F5F5F5;" class="panel-body">

                      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                          <form id="loginform" class="form-horizontal" role="form" method="POST" action="">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="college_id">College ID:</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="collegemail" placeholder="Enter college mail ID" name="loginemail"  value="<?php if(isset($_COOKIE["loginemail"])) { echo $_COOKIE["loginemail"]; } ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                             <label class="control-label col-sm-4" for="pwd">Password:</label>
                              <div class="col-sm-8">          
                                <input type="password" class="form-control" id="" placeholder="Enter password" name="loginpassword"  value="<?php if(isset($_COOKIE["loginpassword"])) { echo $_COOKIE["loginpassword"]; } ?>" required>
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
                              <div class="col-sm-12 controls">
                                <input type= "submit" name="signin" value="Sign In" class="btn btn-success">
                                <a href="#" onClick="$('#loginbox').hide(); $('#forgotpass').show()">Forgot password?</a>

                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                  Don't have an account! 
                                  <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                  Sign Up Here
                                  </a>
                                </div>
                              </div>
                            </div>    
                          </form>
                        </div>                     
                    </div>  
            </div>
        <!-------=======login end=======---->


        <!-----=====sign up start========--->
            <div id="signupbox" style="display:none; margin-top: -53%;margin-left: 31%;" class="mainbox col-md-12 col-sm-12">
              <div class="panel panel-info" style="border: 0px solid black;">
                <div class="panel-heading" style="background-color: #E0E0E0; border: 0px;">
                  <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px">
                      <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                    </div>
                </div>  
                    <div class="panel-body" style="background-color:  #F5F5F5" >
                      <form id="signupform" class="form-horizontal" role="form" method="post" action="">
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                          <p>Error:</p>
                          <span></span>
                        </div>
                      <div style="float: left; width: 45%;">
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="college_name">College:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="college_name" placeholder="Enter college name" name="college" value="" required>
                             </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="university">University:</label>
                            <div class="col-sm-9">          
                              <input type="text" class="form-control" id="university" placeholder="Enter University name" name="university" value="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Email:</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="college_email" placeholder="Enter college email ID" name="email" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">Password:</label>
                            <div class="col-sm-9">          
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
                            <div class="col-sm-9">          
                              <input type="password" class="form-control" id="cpwd" placeholder="Enter password" name="cpassword">
                            </div>
                        </div>
                      </div>
                      <div style="float: right; width: 45%;">
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="website">Website:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="website" placeholder="Enter college Website" name="website" value="">
                             </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="city">City:</label>
                           <div class="col-sm-9">          
                              <input type="text" class="form-control" id="city" placeholder="Enter city name" name="city" value="">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="state">State:</label>
                            <div class="col-sm-9">          
                              <input type="text" class="form-control" id="state" placeholder="Enter state name" name="state" value="">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="mobile">Number:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="collegename" placeholder="Enter mobile number" name="mobile" value=""  required>
                             </div>
                        </div>
                        
                      </div>
                        <div class="form-group">        
                          <div class="col-sm-offset-3 col-sm-9">
                            <input type= "submit" name="submit" value="Sign Up" class="btn btn-success">
                            <!--<button type="submit" class="btn btn-success">Sign Up</button>-->
                          </div>
                        </div>
                      </form>

                    </div>
                </div>
              </div>
             <!-----=======signup end=======-------->
             
             
             <!------==========forget password start=======---->
             <?php

                $ed=trim($_POST['emailid']);
                $query3="select password from admin_registration where email= '$ed'";
                $get_data3=mysqli_query($conn,$query3);
                $data2 = mysqli_fetch_array($get_data3); //print_r($data);
                

                  // the message
                  $sys_generated_pwd = generateRandomString();
                  //updated passsword in database
                  mysqli_query($conn,"UPDATE admin_registration SET password='$sys_generated_pwd' where email='$ed'");


                  $msg = "your updated password is ".$sys_generated_pwd." "."Admin online Portal Thank you!!";

                  // use wordwrap() if lines are longer than 70 characters
                  $msg = wordwrap($msg,50);

                  // send mail to
                  $to = $_POST['emailid'];
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
                                  <input type="email" class="form-control" id="collegemail" placeholder="Enter college Email ID" name="emailid">
                                </div>
                            </div>
                           
                            <div style="margin-top:10px;" class="form-group">
                              <div class="col-sm-8 controls">
                                  <input type= "submit" name="sendpassword" value="Send Password" class="btn btn-success">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:10px; font-size:85%" >
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


