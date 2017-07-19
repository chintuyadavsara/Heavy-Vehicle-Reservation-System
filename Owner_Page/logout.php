<html>
<head>
<title>Heavy Vehicle Reservation System</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
.loader {
  border-radius: 50%;
  border-top: 10px solid blue;
  border-right: 10px solid blue;
  border-bottom: 10px solid blue;
  border-left: 10px solid gray;
  width: 90px;
  height: 90px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.top{
	position: relative;
	top: 200px;
}
b{
	color: blue;
}
</style>
</head>
<body>
<div class="row">
<div class="col-md-offset-4 col-md-4 well top">

<?php
session_start();
session_destroy();
echo "<center> Please Wait <div class='loader'></div></center>";
echo"<script>
    setTimeout(function(){
       window.location='index.php';
    }, 2000);
</script>";
?>
