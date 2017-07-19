<?php

$cn = mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("selab",$cn)  or die("Could connect to Database");

$FirstName=$_POST['fname'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$encrypted_password=password_hash($Password, PASSWORD_DEFAULT);
$Cnum=$_POST['phone'];
$Gender = $_POST['male_r'];
$Num=$_POST['num'];
$Source=$_POST['Source'];
$Destination=$_POST['Destination'];
$Date=$_POST['dob'];
//echo "$Date";
$Fare=$_POST['Fare'];
$file_name=$_FILES['uploadedimage']['name'];
$temp_name=$_FILES['uploadedimage']['tmp_name'];
$file="./upload/$file_name";//Path for checking images
move_uploaded_file($temp_name,$file); //upload file,directory
//echo" $FirstName  $Email  $Password  $Cnum  $Gender  $Destination  $Source  $file_name  $file";
$sql="insert into registration (Password, Username, FirstName, Email, ContactNumber, Gender, VehicleNum,Picture, Source, Destination, Fare, Date, Status) values ('$encrypted_password','$Email','$FirstName','$Email','$Cnum','$Gender','$Num','$file','$Source','$Destination','$Fare' '$Date','Available')";

$result=mysql_query($sql);

if($result)
	{
		header("location: index.php");
	}
	else{
		header("location: signUp.php#menu2");
	}
?>

