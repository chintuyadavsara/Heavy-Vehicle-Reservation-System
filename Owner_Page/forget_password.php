<?php
	$cn = mysql_connect("localhost","root","") or die("Could not Connect My Sql");
	mysql_select_db("selab",$cn)  or die("Could connect to Database");
	
	$Email=$_POST['username'];
	$Password=$_POST['password'];
	$CPassword=$_POST['cpassword'];
	$sql="select * from registration where Email='$Email'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result, MYSQLI_ASSOC);
	$hash_pwd=$row['Password'];
	if(password_verify($Password, "$hash_pwd")){
			header("Location: index.php?error=empty");
			exit();
	}
	else{
		$x=$_GET['x11'];
		$y=$_GET['y11'];
		$val=$_POST['val'];
		$encrypted_password=password_hash($CPassword, PASSWORD_DEFAULT);
			if($x+$y==($val)){
				$query="UPDATE registration SET Password='$encrypted_password' where Email='$Email'";
				$result=mysql_query($query);
				if($result){
				
					header("location: index.php");
				}
			}
	}
?>
