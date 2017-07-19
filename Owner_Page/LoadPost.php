<?php
	session_start();
	$cn = mysql_connect("localhost","root","") or die("Could not Connect My Sql");
	mysql_select_db("selab",$cn)  or die("Could not connect to Database");
	if(isset($_SESSION['owner_id'])){
		$user=$_SESSION['owner_id'];
		//echo "$user";
		$Source=$_POST['source'];
		//echo "$Source";
		$Destination=$_POST['destination'];
		//echo "$Destination";
		$Date=$_POST['dob'];
		//echo "$Date";
		$Fare=$_POST['fare'];
		$query="UPDATE registration set Source='$Source', Destination='$Destination' , Date='$Date' , Fare='$Fare'where Email='$user'";
		$res=mysql_query($query);
		if($res){
			
			header("Location: index.php");
		}
		else{
			header("Location: Post_load.php");
		}
	}
?>
