<!DOCTYPE html>
<html lang="en">
<head>
  <title>college online Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .top_header_heading{margin: 0px!important;}
    .top_header_heading h1{margin: 0px!important;padding: 20px;}
    .footer{background-color: #303030; margin-top: 43px;}
    .footer p{margin: 0px;padding: 5px; color: #fff; text-align: center;}
  
  </style>

</head>
<body style="background-color: #F5F5F5;">

<div class="" style="background-color: #303030;">
  <div class="page-header text-center top_header_heading">
    <h1 style="font-size: 50px; color: white;">College Online Portal</h1>      
  </div>
</div>
<div class="container" style="margin-top: 50px; height: 500px;">
  <div style="float: left; text-align: center;">
    <img src="male-icon-32.png" width= "300" height= "300"><br>
    <h1>
     Admin Login
    </h1>
  </div>

  <div class="container">   

    <!--=======sign in start=======-->

        <div id="" style="margin-top:50px;" class="mainbox loginbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onClick="$('.loginbox').hide(); $('.forgetps').show()">Forgot password?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                    <form id="loginform" class="form-horizontal" role="form">
                                    
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                        </div>
                                
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                            <div class="col-sm-12 controls">
                                <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                Don't have an account! 
                                    <a href="#" onClick="$('.loginbox').hide(); $('#signupbox').show()">
                                                Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </form>     
                </div>                     
            </div>  
        </div>
        <!--======end signin=======-->

        <!--=======start signup=====-->

        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('.loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

         <!--======end signup=======-->

         <!--======forget pass=====-->

         <div id="" style="display:none; margin-top:0%" class="mainbox forgetps col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info"style="border: 0px">
                    <div class="panel-heading">
                            <div class="panel-title">Forgot password</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onClick="$('.forgetps').hide(); $('.loginbox').show()">
                                                Sign In</a></div>
                        </div>     

                    <div style="padding-top: 30px; background-color:  #F5F5F5;" class="panel-body">

                          <form id="forgotpassform" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="college_id">Mail ID:</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="collegemail" placeholder="Enter college mail ID" name="collgemail">
                                </div>
                            </div>
                           
                            <div style="margin-top:10px; margin-right: 50px;" class="form-group">
                              <div class="col-sm-4 controls">
                                <a id="btn-send-password" href="#" class="btn btn-success">Send Password</a>
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
                  <!--======end fotrget pass=======-->
    

    </div>
</div>
  <div class="footer">
      <p>2018 @College Online Examination Form With Online Payment</p>
    </div>
</body>
</html>