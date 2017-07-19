<?php

$cn = mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("selab",$cn)  or die("Could connect to Database");

$FirstName=$_POST['fname'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Cnum=$_POST['contact'];
$Gender = $_POST['male_r'];
$encrypted_password=password_hash($Password, PASSWORD_DEFAULT);
$sql="Insert into User(FirstName,Email,Password,Contact)values ('$FirstName','$Email','$encrypted_password','$Cnum')";

$result=mysql_query($sql);

if($result)
	{
		header("location: /index.php");
	}
	else{
		header("location: signUp.php#menu2");
	}
?>

