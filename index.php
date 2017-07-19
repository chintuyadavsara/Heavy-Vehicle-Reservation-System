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
				<link rel="stylesheet" href="lib/css/smoothness/jquery-ui.css">
				<script src="lib/js/jquery-ui.js"></script>
				<script>
					setInterval(function() {
						$('p').fadeOut(500, function() {
						var $this = $(this);
						$this.text($this.text() == 'reliably' ? 'with Love' : 'with Love');        
						$this.toggleClass('first second');        
						$this.fadeIn(500);
					});
					}, 3000);
				</script>
				<script>
						var dateToday = new Date();
						$(function() {
								$( "#datepicker" ).datepicker({
								changeMonth:true,
								changeYear:true,
								dateFormat:"dd/mm/yy",
								startDate: new Date()
								});
						});
				</script>
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
							background: url(Images/Search.jpg) top center no-repeat;
							min-height: 100%;
							background-color:lavender;
							color:white;
							margin-left:-10px;
							width:101.5%;
							height: 95%;
							border-bottom:solid 5px #3b00c6;
							background-size:100% 100%;
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
							width:101.5%;
							height:100%;
							margin-left:-10px; 
							background-repeat:no-repeat;
							transition:0.5s;
							
						}
						
						#fa_fa-arrow-circle-down1{
							margin-left:50%;
							margin-top:27%;
							transition:0.3s;
						}
						#fa_fa-arrow-circle-down2{
							margin-left:50%;
							margin-top:40%;
							transition:0.3s;
						}
						#fa_fa-arrow-circle-down1:hover{
							margin-left:50%;
							margin-top:27%;
							text-shadow:0 0 10px black;
							transition:0.3s;
						}
						#Home_bar{
							background: url(Images/Home_Bar.jpg) top center no-repeat; 
							filter: blur(0);
							width: 100%;
							min-height: 100%;
							background-color:lavender;
							color:white;
							margin-left:-10px;
							margin-top:-20px;
							width:101.5%;
							height: 95%;
							border-bottom:solid 5px #3b00c6;
							min-height: 700px; 
							 background-attachment: fixed;
							 background-position: center;
							 background-repeat: no-repeat;
							 background-size: cover;
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
						p.start {
							font-family: 'Open Sans', sans-serif;
							font-size: 1em;
							line-height: 28px;
							text-align: justify;
							display: inline;
						}

						h2.start {
							font-family: 'Open Sans', sans-serif;
							font-size: 4em;
							line-height: 28px;
							margin: 0;
							display: inline-block;
						}
						h3{
							color:grey;
							font-size-adjust:1;
						}
						.Image{
							height:170px;
							width:170px;
						}
				</style>
		</head>
		<body>
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
						<li class="active"><a href="Owner_Page/index.php">Owner Page</a></li>
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
								<a href='#Forget_Modal' data-toggle='modal' data-target='#Forget_Modal' class='btn btn-danger btn-block'>Change Password</a>
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
								<li><a href='signUpaa.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
								";
						?>
						</ul>
				</div>
		</nav>
		<div id="Home_bar">
				<a href="#Search_bar"><img src="Images/logo.png" data-toggle="tooltip" title="Go To Search Bar--->down" class="lorry"></a>
				<h1>Heavy Vehicle Reservation</h1>
				<br>
				<br>
				<center>
				
				<h2 class="first start">We Move things,<span><strong><p class="second start" style="color:red; text-shadow:none">reliably</p></strong></span></h2>
				<br><br>
				<embed type="image/svg+xml" src="Images/Icons_Bengaluru.svg" />
				<embed type="image/svg+xml" src="Images/Icons_Chennai.svg" />
				<embed type="image/svg+xml" src="Images/Icons_Hyderabad.svg" />
				<embed type="image/svg+xml" src="Images/Icons_Mumbai.svg" />
				</center>

		</div>
		<div id="Search_bar">
				<form class="form-group" action="search_lorry.php" method="post">
						<input type="text" class="Input_text" placeholder="Enter Source" name="source" id="autocomplete">
						<br>
						<input type="text" class="Input_text" placeholder="Enter Destination" name="destination" id="autocomplete">
						<br>
						<input class='Input_Text' id='datepicker' name='dob' placeholder='EnterDate' >
						<div id="search">
						<button type="submit" name="submit" class="btn btn-info" value="Search"><span class="glyphicon glyphicon-search"></span> Search</button><br>
						</div>
				</form>
				<div id="fa_fa-arrow-circle-down1">
						<a href="#Contents_lorry"><i class="fa fa-arrow-circle-down" style="font-size:50px; color:black"></i></a>
				</div>
				
		</div>
		
		<div id="Contents_lorry">
		<br><br><br><br>
		<center>
		
		<h2 class="first start">We Move things,<span><strong><p class="second start" style="color:#3b00c6; text-shadow:none">reliably</p></strong></span></h2></center>
		<br>
		<center><h2 class="first">Time starts only when the driver reaches you.</h2></center>
		<br><br>
		<br>
			<center>
				<div class="row">
					<div class="col col-sm-4">
						<img class="Image" src="Images/computer-icon.png">
						<h1 style="color:#3b00c6"><strong>BOOK ONLINE</strong></h1>
						<h3>Just a few clicks on your 
						        computer or mobile</h3>
					</div>
					<div class="col col-sm-4">
						<img class="Image" src="Images/113522-200.png">
						<h1 style="color:#3b00c6"><strong>PICK-UP & DELIVER</strong></h1>
						<h3>Do what you love to do and leave the pick up and delivery to us.</h3>
					</div>
					<div class="col col-sm-4">
						<img class="Image" src="Images/icon_money.png">
						<h1 style="color:#3b00c6"><strong>PAY COD</strong></h1>
						<h3>Pay by Cash</h3>
					</div>
				</div>
			</center>
		</div>



		<div class="modal fade" id="Login_Modal" role="dialog">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header" style="padding:35px 50px;">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4><span class="glyphicon glyphicon-lock"></span>User Login</h4>
										<br>
								</div>
								<div class="modal-body" style="padding:40px 50px;">
										<form role="form" action="login.php" method="post">
										<div class="form-group">
										<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
										<input type="text" name="username" class="form-control" id="usrname" placeholder="Enter email" required>
								</div>
								<div class="form-group">
										<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
										<input type="password" class="form-control" name="password" id="psw" placeholder="Enter password" required>
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






		<div class="modal fade" id="Forget_Modal" role="dialog">
		<div class="modal-dialog">

		<div class="modal-content">
				<div class="modal-header" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><span class="glyphicon glyphicon-lock"></span>Change Your Password</h4>
				<br>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
				<?php
				$x=(rand(1,100));
				$y=(rand(1,100));
				echo "
				<form role='form' action='forget_password.php?x11=$x&y11=$y' method='post'>
				<div class='form-group'>
				<label for='usrname'><span class='glyphicon glyphicon-registration' ></span> Username</label>
				<input type='text' name='username' class='form-control' id='usrname' placeholder='Enter email' required>
				</div>
				<div class='form-group'>
				<label for='psw'><span class='glyphicon glyphicon-eye-open'></span> Password</label>
				<input type='password' class='form-control' name='password' id='psw' placeholder='Enter Old password' required>
				</div>
				<div class='form-group'>
				<label for='psw'><span class='glyphicon glyphicon-eye-open'></span> New Password</label>
				<input type='password' class='form-control' name='cpassword' id='psw' placeholder='Enter New password' required>
				</div>";
				echo"
				<div class='row'>
				<center><div class='col-xs-4'><h3>$x+$y=</h3></div>
				<div class='col-xs-4'><input type='text' name='val'class='form-control' placeholder='Enter value'></div></center>
				</div>

				";
				?>
				<button type="submit" name="submit" style="background-color:#004080; border:none" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Reset</button>
				</form>
				</div>
				<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				</div>
				</div>

				</div>
		</div> 

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

		<body>
</html>
