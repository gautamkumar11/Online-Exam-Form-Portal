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
    .footer{background-color: #303030; margin-top: 174px;}
    .footer p{margin: 0px;padding: 5px; color: #fff; text-align: center;}
  </style>

</head>
<body style="background-color: #F5F5F5;">

<div class="" style="background-color: #303030;">
  <div class="page-header text-center top_header_heading">
    <h1 style="font-size: 50px; color: white;">College Online Portal</h1>      
  </div>
</div>

  
<div class="container" style="margin-top: 50px;">
  <div style="float: left;">
    <img src="student_icon.png" width= "300" height= "300"><br>
    <h1>
     Student Login
    </h1>
  
  </div>
 <div class="container">
  <div style="float: left; margin-left: 150px; margin-top: 40px;">
  <form class="form-horizontal" action="/action_page.php">
    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Choose Your College
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Yeshwantrao Chavan College of Engineering-[YCCE], Nagpur</a></li>
        <li><a href="#">Shri Ramdeobaba College of Engineering and Management, Nagpur</a></li>
         <li><a href="#">Rajiv Gandhi College of Engineering and Research, Nagpur</a></li>
        <li><a href="#">Priyadarshini College of Engineering, Nagpur</a></li>
        <li><a href="#">G.H. Raisoni College of Engineering,Nagpur</a></li>
      </ul>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-4" for="college_id">Student ID:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="registration_id" placeholder="Enter Student ID" name="student_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success">Sign IN</button>
          <a href="#">Forgot password?</a>
      </div>
      <div>
        
       </div>
      
    </div>
  </form>
</div>
</div>


</div>
<div class="footer">
  <p>2018 @College Online Examination Form With Online Payment</p>
</div>
</body>
</html>
