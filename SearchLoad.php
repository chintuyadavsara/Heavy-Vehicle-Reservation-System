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
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<style>
.modal-header,  , .close {
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
    height:40px;
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
</style>
</head>
<nav class="navbar navbar-inverse" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="Images/logonav.png" class="img"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
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
    </ul>
  </div>
</nav>

<?php
$cn = mysql_connect("localhost","root","rgukt123") or die("Could not Connect My Sql");
mysql_select_db("selab",$cn)  or die("Could not connect to Database");
$query="select * from registration where Status='Available'";
	$rs=mysql_query($query);
	echo"<h1 class='jumbotron '><center>Available Loads</center></h1>";
	echo "<div class='col col-md-offset-1 col-md-10 '>";
	echo "<table class='table table-hover' >
    <thead>
      <tr>
        <th>Vehicle</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Date</th>
        <th>Owner Email</th>
        <th>Owner Contact</th>
      </tr>
    </thead>
    <tbody>";
	while($row1=mysql_fetch_array($rs)){
    	echo "
    		<tr>
        <td><img src='Owner_Page/$row1[7]' width=150px height=80px /></td>
        <td><strong>  $row1[8] </strong></td>
        <td><strong>  $row1[9] </strong></td>
        <td><strong>  $row1[11] </strong></td>
        <td><strong>  $row1[3] </strong></td>
        <td><strong>  $row1[4] </strong></td>
        <td><button class='btn btn-info' data-toggle='modal' data-target='#$row1[6]' >Details</button></td>
        <div class='modal fade' id='$row1[6]'>
					<div class='modal-dialog' >
						<div class='modal-content col col-md-offset-1 col-md-10' >
								<br><br>
								<p>Owner Name: <strong>$row1[1]</strong></p1>
								<p>Contact: <strong>$row1[4]</strong></p>
								<p>Vehicle Num: <strong>$row1[6]</strong></p>
								<p>Source: <strong>$row1[8]</strong></p>
								<p>Destination: <strong>$row1[9]</strong></p>
								<p>Fare: <strong>&#8377 $row1[10] /ton</strong></p>
								<button class='btn btn-danger' data-toggle='modal' data-target='#$row1[6]' >Close</button>";
									if(isset($_SESSION['user_id'])){
										echo "<a href='BookLorry.php?id=$row1[6]'><button class='btn btn-primary '>Book Now</button></a>";
									}
									else{
										echo "<button class='btn btn-disable disabled'>Book Now</button><br>";
										echo "<a data-toggle='modal' data-target='#Login_Modal'><button class='btn btn-primary'><span class='glyphicon glyphicon-log-in'></span> Login</button> </a>";
									}
								echo "
								<br>
								<br>
						</div>
					</div>
				</div>
      </tr>"
    	;
    	;
    	
}
echo "</tbody></table></div>";

?>  
  
  
<div class="modal fade" id="Login_Modal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; background-color:#3b00c6">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><center><span class="glyphicon glyphicon-lock"></span>User Login</center></h4>
          <br>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="email" name="username" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="submit" style="background-color:#3b00c6; border:none" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="signUp.php">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</html>
