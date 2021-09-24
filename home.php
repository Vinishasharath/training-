<html>
<head><title>registration</title></head>
<link rel="stylesheet" type="text/css" href="style1.css">
<center>
	<body>
	<h2> register here</h2>
	<form action="home.php" method="post">
		<table border="1" width="300" height="150">
			<tr>
				<td>id</td>
				<td><input type="text" name="id" required></td>
			</tr>
			<tr>
				<td>user name</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>                
			 <td colspan="5" align="center">   <input type="submit" name="signup" value="signup"></td>
		</tr>
		
		</table>
	</form>
</body>
</html>

<?php
session_start();
$conn=mysqli_connect('localhost','root','','registration');
if(!$conn){
	die('could not connect mysql:' .mysql_error());
}

  if(isset($_POST['signup']))
  {
  	 $id=$_POST['id'];
     $username=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['password'];	

     $sql="insert into users (id,username,email,password) values ('$id','$username','$email','$password')";
     if(mysqli_query($conn,$sql)){
     		echo "<h3>you have register successfully!</h3>";
     }
     else{
     	echo "error:".$sql ."<br>".mysqli_error($conn);
     }
  }

?>		