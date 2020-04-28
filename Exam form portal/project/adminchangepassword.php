<!---=========php code =====--->
<?php
error_reporting(1);
include('dbconnection.php');
     $e = "kumargautam11gk@gmail.com";
         $op = $_POST['password'];
         $np = $_POST['newpassword'];
         $cp = $_POST['confirmpassword'];
     
     if(isset($_POST['submit']))
  {
     $query="select password from admin_registration where email='$e'";
    $get_data=mysqli_query($conn,$query);
    $data= mysqli_fetch_assoc($get_data);
    
    if($data['password']==$op)
        {
          if($_POST['newpassword']==$_POST['confirmpassword'])
          {
          mysqli_query($conn,"UPDATE admin_registration SET password='$np' where email='$e'");
          echo '<script language="javascript">';
          echo 'alert(" successfully changed password")';
            echo '</script>';
          }
          else
          {
          echo '<script language="javascript">';            
          echo 'alert("new password and confirm password does not match")';
          echo '</script>';
          }
        }
    
    else 
      {
        echo '<script language="javascript">';    
        echo 'alert("Old password does not match")';
        echo '</script>';
      }
           
  }
?>

<!---=========php code =====--->



<!---=========HTML CODE=========--->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Exam Form Portal</title>
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
    <h1 style="font-size: 50px; color: white;">Online Exam Form Portal</h1>      
  </div>
</div>
<div class="container" style="margin-top: 50px; height: 500px;">
  <div style="float: left; text-align: center;">
    <img src="male-icon-32.png" width= "300" height= "300"><br>
    <h1>
     Admin
    </h1>
  </div>

    <div class="container" style="height: 369px;"> 
     <!-------=======change password start=======---->

       <div style="float: left; margin-left: 150px; margin-top: 10px;">
          <div id="loginbox" style="margin-top:0%; width: 124%;" class="mainbox col-md-12 col-sm-8">                    
            <div class="panel panel-info"style="border: 0px">
                    <div class="panel-heading" style="background-color: #E0E0E0; border: 0px;">
                        <div class="panel-title">Change Password</div>
                        <!--
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                            <a href="#" onClick="$('#loginbox').hide(); $('#forgotpass').show()">Forgot password?</a>
                        </div>
                      -->
                    </div>     

                    <div style="padding-top: 44px; background-color:  #F5F5F5;" class="panel-body">

                      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                          <form id="loginform" class="form-horizontal" role="form" role="form" method="POST" action="">

                           <div class="form-group">
                                <label class="control-label col-sm-4 mb-2 mr-sm-2" for="oldpassword">Old Password:</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control mb-2 mr-sm-2" id="oldpassword" placeholder="Enter password" name="password" value="<?php if(isset($_COOKIE["oldpassword"])) { echo $_COOKIE["studentid"]; } ?>" required>
                                </div>
                            </div>
                    
                            
                           <div class="form-group">
                                <label class="control-label col-sm-4 mb-2 mr-sm-2" for="newpassword"> New Password:</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control mb-2 mr-sm-2" id="newpassword" placeholder="Enter New Password" name="newpassword" value="<?php if(isset($_COOKIE["newpassword"])) { echo $_COOKIE["newpassword"]; } ?>" required>
                                </div>
                           </div>
         
                           <div class="form-group">
                                <label class="control-label col-sm-4 mb-2 mr-sm-2" for="confirmpassword">Confirm Password:</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control mb-2 mr-sm-2" id="confirmpassword" placeholder="Enter confirm password" name="confirmpassword" value="<?php if(isset($_COOKIE["confirmpassword"])) { echo $_COOKIE["confirmpassword"]; } ?>" required>
                </div>    
                          </div>
                            <div style="margin-top:20px" class="form-group">
                              <div class="col-sm-8 controls">
                                <input type= "submit" name="submit" value="Submit" class="btn btn-success">
                                
                              </div>
                            </div>
                               
                          </form>
                        </div>                     
                    </div>  
            </div>
        <!-------=======change password end=======---->


         

            </div>
      </div>
</div>
  <div class="footer">
      <p>2018 @College Online Examination Form With Online Payment</p>
    </div>
</body>
</html>


