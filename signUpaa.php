<?php 
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$cn = mysql_connect("localhost","root","rgukt123") or die("Could not Connect My Sql");
$db=mysql_select_db("selab",$cn)  or die("Could connect to Database");
?>

<html>
<head>
<title>Heavy Vehicle Reservation System</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<style>
.modal-header, h4, .close {
      background-color: #3b00c6;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
#header {
	margin-top: -10px;
	margin-left: -10px;
	margin-right: -10px;
	width: 101.5%;
	top: 0;  
	background-color:#3b00c6;
}
.menu-wrap {
	background: #3b00c6
}

.menu {
	display: block;
	text-align: left;
	font-size: 12px;
	color: #006;
	overflow: hidden;
	width: 1000px;
	margin: auto;
}

.menu a {
	color: #fff;
	float:right;
	font-size: 14px;
	text-decoration: none;
	padding: 2px 15px 1px;
	font-weight: 700;
	line-height: 36px;
	display: block;
	float: left;
	border-right: solid 1px #3b00c6
}

.menu a:hover {
		center no-repeat #3b00c6;
	background-color: black;
	transition:0.3s;100 puntos
}

.menu a.selectedtabcopy {
		center no-repeat;
	color: #fff
}
.menu_header,.menu_title {
	font-family: Arial, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006;
	font-weight: 700
}
body{
    overflow-x: hidden;
}
#Search_bar{
    background: url(Images/12.png) top center no-repeat;
	width: 100%;
	min-height: 100%;
    background-color:lavender;
    color:white;
    margin-left:-10px;
    width:101.5%;
    height: 95%;
    border-bottom:solid 5px #3b00c6;
    
}
.Input_text{
    border-radius:0px;
    padding: 10px;
    width:300px;
    border: none;
    color:black;
    border-bottom: solid 2px #3b00c6;
    margin:10px;
    position:relative;
    top:100px;
    left:200px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.Input_text:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#search{
    position:relative;
    top:110px;
    left:210px;
}
.btn-info{
    background-color: #3b00c6;
    border: none;
    color: white;
    padding: 9px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
}
.btn-info:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#Contents_lorry{
    background:url('Images/lorry1.png');
    width:101.5%;
    height:100%;
    float:left;
    margin-left:-10px; 
    background-repeat:no-repeat;
    transition:0.5s;
    
}
#Contents_lorry1{
    background-color:white;
    margin-left:510px;
    height:400px;
}
#Contents_lorry1 p,p1,p2,p3{
    color:grey;
    line-height:2;
    font-size:1.2em;
    margin-top:100px;
    margin-left: 10px;
    transition:0.3s;
}
#Contents_lorry1 p:hover,p1:hover,p2:hover,p3:hover{
    color:#3b00c6;
    transition:0.3s;
    cursor:pointer;
}
#fa_fa-arrow-circle-down1{
    margin-left:50%;
    margin-top:30%;
    transition:0.3s;
}
#fa_fa-arrow-circle-down2{
    margin-left:50%;
    margin-top:40%;
    transition:0.3s;
}
#fa_fa-arrow-circle-down1:hover{
    margin-left:50%;
    margin-top:30%;
    text-shadow:0 0 10px black;
    transition:0.3s;
}
#Home_bar{
    background: url(Images/12.png) top center no-repeat;
	width: 100%;
	min-height: 100%;
    background-color:lavender;
    color:white;
    margin-left:-10px;
    margin-top:-20px;
    width:101.5%;
    height: 95%;
    border-bottom:solid 5px #3b00c6;
}
#Home_bar h1{
    font-size:3em;
    font-family:sans-serif;
    text-align:center;
    text-shadow:0 0 10px #3b00c6;
    text-decoration:none;
    cursor:pointer;
}
.lorry{
    margin-left:35%;
    margin-top:10%;
    width:300px;
}
.navbar{
    background-color:#3b00c6;
    border:0;
    border-radius:0px;
}
.nav.navbar-nav li a {
    color: white;
}
.nav li:hover{
    background-color:black;
}
.img{
    margin-top:0px;
}
.affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
</style>
</head>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="Images/logonav.png" class="img"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
      <li><a href="LoadPost.php">Load Post</a></li>
      <li><a href="SearchLoad.php">Load Search</a></li>
      <li><a href="ContactUs.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<?php if(isset($_SESSION['user_id'])){
                  $user=$_SESSION['user_id'];
                  $_SESSION['user_id']=$user;
                  $query="SELECT * FROM User WHERE Email='$user'";
                  $result=mysql_query($query);
                  $row=mysql_fetch_array($result);
                  echo "<ul class='nav navbar-nav navbar-right'>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                        <span class='glyphicon glyphicon-user'></span>
                        <strong>$row[1]</strong>
                        <span class='glyphicon glyphicon-chevron-down'></span>
                    </a>
                    <ul class='dropdown-menu'>
                        <li>
                            <div class='navbar-login'>
                                <div class='row-lg-12'>
                                    <div class='col-lg-12'>
                                        <p class='text-center'>
                                            <span class='glyphicon glyphicon-user icon-size'></span>
                                        </p>
                                    </div>
                                    <div class='col-lg-12'>
                                        <p class='text-left'><strong>$row[1]</strong></p>
                                        <p class='text-left small'>$row[2]</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class='divider navbar-login-session-bg'></li>
                        <li class='navbar-login-session-bg'>
                            <div class='navbar-login navbar-login-session'>
                                <div class='row-lg-12'>
                                    <div class='col-lg-12'>
                                        <p>
                                            <a href='logout.php' class='btn btn-danger btn-block'>Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>";
                }
            else
              echo "<li><a data-toggle='modal' data-target='#Login_Modal'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
      ?>
    </ul>
  </div>
</nav>


<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu2">User Register</a></li>
  </ul>
<br>
  <div class="tab-content">
    <div id="menu1" class="tab-pane fade">
    	<form class="form-horizontal" action="app.php" method="post" enctype="multipart/form-data">
    	<div class="form-group">
      <label class="control-label col-sm-2" for="email">FirstName:</label>
      <div class="col-sm-10">
        <input type="text" name="fname" class="form-control" placeholder="Enter FirstName" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Contact:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="phone" placeholder="Enter Contact Number" pattern="'/^\d{10}$/'" required>
      </div>
    </div>
    <label class="control-label col-sm-2" >Gender:</label>
    <div class="form-group">        
      <label class="radio-inline">
      <input type="radio" name="male_r" checked>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="male_r">Female
    </label>
    <label class="radio-inline">
      <input type="radio" name="male_r">Others
    </label>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Vehicle Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="num" placeholder="Enter Vehicle Number" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Source:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Source" placeholder="Enter Source" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Destination:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Destination" placeholder="Enter Destination" required>
      </div>
    </div>
    
		<div class="form-group">
			<label class="control-label col-xs-2" for="pwd">Fuel Type: </label>
			<select class="control-label col-xs-2" id="sel1" name="fuel" required>
				<option>Diesel</option>
				<option>Petrol</option>
			</select>
		</div>
    
     
      <label class="control-label col-sm-2" for="pwd">Vehicle Image:</label>
      <div class="col-sm-10">          
        <input type="file"  name="uploadedimage" placeholder="Upload">
      </div>
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
        <button type="reset" name="reset" class="btn btn-default">Reset</button>
      </div>
      
    </div>
    
  </form>
    </div>
    <div id="menu2" class="tab-pane fade">
    	
    		<form class="form-horizontal" action="signup.php" method="post">
    	<div class="form-group">
      <label class="control-label col-sm-2" for="email">FirstName:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fname" id="email" placeholder="Enter FirstName" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Contact:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number" required>
      </div>
    </div>
    <label class="control-label col-sm-2" >Gender:</label>
    <div class="form-group">        
      <label class="radio-inline">
      <input type="radio" name="male_r" value="Male">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="male_r" value="Female">Female
    </label>
    <label class="radio-inline">
      <input type="radio" name="male_r" value="Others">Others
    </label>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  name="submit" class="btn btn-default">Submit</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </div>
    </form>
    
    
    
    </div>
  </div>
</div>


</html>
