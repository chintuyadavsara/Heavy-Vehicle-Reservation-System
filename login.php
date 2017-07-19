<?php
session_start(); 
$cn = mysql_connect("localhost","root","rgukt123") or die("Could not Connect My Sql");
$db=mysql_select_db("selab",$cn)  or die("Could connect to Database");
if($_SERVER["REQUEST_METHOD"]=="POST"){

	$Email=($_POST['username']);
	$Password=($_POST['password']);
	$sql="select * from User where Email='$Email'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result, MYSQLI_ASSOC);
	$hash_pwd=$row['Password'];
	$hash=password_verify($Password, $hash_pwd);
	if($hash==0){
			header("Location: index.php?error=empty");
			exit();
	}
	else{
		$sql="select Email, Password from User where Email='$Email' and Password='$hash_pwd'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result, MYSQLI_ASSOC);
		$count=mysql_num_rows($result);
		echo mysql_error();
		if($count==1){
			$_SESSION['user_id']=$Email;
				if(isset($_SESSION['url'])) 
					$url = $_SESSION['url']; 
				else 
					$url = "index.php"; 
					
				header("Location:$url");
		}
		else{
			$error="Your Login Failed";
		}
	}
}
?>

