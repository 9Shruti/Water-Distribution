<?php 

$uid = $_SESSION['uid'];
date_default_timezone_set("Asia/Kolkata");
$c_date = date('Y-m-d H:i:s');

$up = "update user_tb set u_udate = '$c_date' where u_id = '$uid'";
if($con->query($up)==TRUE)
{
	
	$_SESSION['ucontact'] = "" ;
	$_SESSION['uid'] = "";
	
	session_destroy();
	
	header("location:index.php?file=login");
}


?>