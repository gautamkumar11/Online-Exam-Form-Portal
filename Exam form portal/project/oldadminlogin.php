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
    .footer{background-color: #303030; margin-top: 43px;}
    .footer p{margin: 0px;padding: 5px; color: #fff; text-align: center;}
  
  </style>

</head>
<body style="background-color: #F5F5F5;">

<div class="" style="background-color: #303030;">
  <div class="page-header text-center top_header_heading">
    <h1 style="font-size: 50px; color: white;">Online Exam Form Portal</h1>      
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
                            
                          <form id="loginform" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="college_id">College ID:</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="collegemail" placeholder="Enter college mail ID" name="collgemail">
                                </div>
                            </div>
                            <div class="form-group">
                             <label class="control-label col-sm-4" for="pwd">Password:</label>
                              <div class="col-sm-8">          
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
                                <a id="btn-login" href="#" class="btn btn-success">Sign In </a>
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
                      <form id="signupform" class="form-horizontal" role="form">
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                          <p>Error:</p>
                          <span></span>
                        </div>
                      <div style="float: left; width: 45%;">
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">College:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="collegename" placeholder="Enter college name" name="collegename">
                             </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">University:</label>
                            <div class="col-sm-9">          
                              <input type="text" class="form-control" id="University" placeholder="Enter University name" name="University">
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Email:</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="collegemail" placeholder="Enter college mail ID" name="collgemail">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">Password:</label>
                            <div class="col-sm-9">          
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
                            <div class="col-sm-9">          
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                            </div>
                        </div>
                      </div>
                      <div style="float: right; width: 45%;">
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Website:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="collegename" placeholder="Enter college Website" name="collegename">
                             </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">City:</label>
                           <div class="col-sm-9">          
                              <input type="text" class="form-control" id="city" placeholder="Enter city name" name="city">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">State:</label>
                            <div class="col-sm-9">          
                              <input type="text" class="form-control" id="state" placeholder="Enter state name" name="state">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Number:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="collegename" placeholder="Enter mobile number" name="number">
                             </div>
                        </div>
                        
                      </div>
                        <div class="form-group">        
                          <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">Sign Up</button>
                          </div>
                        </div>
                      </form>
                      <script>
                            document.getElementById("signupform").addEventListener("submit", function(event){
                            event.preventDefault()
                            });
                          </script>
                    </div>
                </div>
              </div>
             <!-----=======signup end=======-------->
             
             <!------==========forget password start=======---->

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
                                  <input type="email" class="form-control" id="collegemail" placeholder="Enter college mail ID" name="collgemail">
                                </div>
                            </div>
                           
                            <div style="margin-top:10px;" class="form-group">
                              <div class="col-sm-8 controls">
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

             <!-------========forget password end============---> 

            </div>
      </div>
</div>
  <div class="footer">
      <p>2018 @College Online Examination Form With Online Payment</p>
    </div>
</body>
</html>