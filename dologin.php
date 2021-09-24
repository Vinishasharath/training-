<?php
session_start();
$conn=mysqli_connect('localhost','root','','registration');
if(!$conn){
	die('could not connect mysql:' .mysql_error());
}
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q=mysqli_query($conn,"select * from users where username='$username' AND password='$password'");
	$row=mysqli_fetch_array($q);
    


$isexist=mysqli_query($conn,"select * from users where username='$username' AND password='$password'");
	$checkuser= mysqli_num_rows($isexist);

	if($checkuser ==1)
	{
		echo "<script>window.open('index.php', '_self')</script>";
	}
	else
	{
		echo "invalid username or password";
	}
}
?>