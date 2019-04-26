<?php
include('config.php');
$uid=$_POST['id'];
$pwd=$_POST['pwd'];
$sql="select uid,password from login";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res))
{
	if($uid==$row['uid'] && $pwd==$row['password'])
	{
		header("location:vote.php");
		exit;
	}	
}
?>
