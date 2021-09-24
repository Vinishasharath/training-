<html>
<head><title>contact us</title></head>
<link rel="stylesheet" type="text/css" href="style2.css">
<center>
	<body>
    <div class="menu-bar">
        <ul>
        <li><a href="index.php">home</a></li>
            <li><a href="aboutusss.html">about us</a></li>
            <li><a href="tesmonails.html">testmonials</a></li>
            <li><a href="gallery.html">gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="login.html">View</a></li>
        </ul>
        </div>
        <section class="contact">
            
                <h2>Contact us</h2> 
                <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Adress</h3>
                            <p>320 Neharu nagar<br>Mundgod<br>tq:Mundgod dist:UK</p>
</div>
</div>
            <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>phone</h3>
                            <p>5467975456</p>
</div>
</div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>email</h3>
                            <p>abcxyz@gmail.com</p>
</div>
</div>
</div>
</div>
	
	<form action="contactus.php" method="post">
		<table border="1" width="300" height="150">
			
			<tr>
				<td> name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>type message</td>
				<td><input type="text" name="msg" required></td>
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
  	 
     $name=$_POST['name'];
     $email=$_POST['email'];
     $msg=$_POST['msg'];	

     $sql="insert into contactus (name,email,msg) values ('$name','$email','$msg')";
     if(mysqli_query($conn,$sql)){
     		echo "<h3>Thank you for contacting us</h3>";
     }
     else{
     	echo "error:".$sql ."<br>".mysqli_error($conn);
     }
  }

?>		