<?php
session_start();
// echo $_SESSION['last_activity'];
$userlogintime=$_SESSION['last_activity'];
if (isset($userlogintime)) 
{
$differnece=time() - $userlogintime;
if ($differnece>1800) 
{
	echo "logout";
}
}
?>