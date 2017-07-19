<?php
	$cn = mysql_connect("localhost","root","rgukt123") or die("Could not Connect My Sql");
	mysql_select_db("selab",$cn)  or die("Could connect to Database");
	
	$Email=$_POST['username'];
	$Password=$_POST['password'];
	$CPassword=$_POST['cpassword'];
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
		$x=$_GET['x11'];
		$y=$_GET['y11'];
		$val=$_POST['val'];
		$encrypted_password=password_hash($CPassword, PASSWORD_DEFAULT);
			if($x+$y==($val)){
				$query="UPDATE User SET Password='$encrypted_password' where Email='$Email'";
				$result=mysql_query($query);
				if($result){
				
					header("location: index.php");
				}
			}
	}
?>
