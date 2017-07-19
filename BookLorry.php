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
.affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
</style>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
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
      <?php
       if(isset($_SESSION['user_id'])){
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
              echo "<li><a data-toggle='modal' data-target='#Login_Modal'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
              			<li><a href='signUp.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
              ";
      ?>
    </ul>
  </div>
</nav>
<div class="jumbotron">
<center><h2>Booking Details</h2></center>
</div>
<div class="container-fluid">
	<br>
		<?php
			$lorry_id=$_GET['id'];
			$query="select * from registration where VehicleNum='$lorry_id'";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result);
			echo "<div class='row'>
			<div class='col-xs-6'>
			<img src='Owner_Page/$row[7]' width='504' height='336'></img>
		</div>
			
					<div class='col-xs-6'>
						<table class='table table-hover' >
							<thead>
								<tr>
									<th>Vehicle Details</th>
								</tr>
							</thead>
						<tbody>
							<tr>
								<td><h4>Owner_Name:<strong>$row[2]</h4></td>
							</tr>
							<tr>
								<td><h4>Owner_Email:<strong>$row[3]</h4></td>
							</tr>
							<tr>
								<td><h4>Owner_Contact:<strong>$row[4]</h4></td>
							</tr>
							<tr>
								<td><h4>Vehicle Num:<strong>$row[6]</h4></td>
							</tr>
							<tr>
								<td><h4>Source:<strong>$row[8]</h4></td>
							</tr>
							<tr>
								<td><h4>Destination:<strong>$row[9]</h4></td>
							</tr>
							
							<tr>
								<td><h4>Date:<strong>$row[11]</h4></td>
							</tr>
							</tr>
					</div>
					</table>
					</div>
					<br>
					<br>
					<center><a href='ConfirmBooking.php?id=$row[6]'><button class='btn btn-primary btn-lg'>Book Now</button></a></center>
			";
		?>
</div>
