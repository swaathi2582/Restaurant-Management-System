<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Registration Page</title>
<style>
	html,body{
	height:90%;
	font-family:sans-serif;
	margin:0;
	padding:0;
	color:#fff;
	}
	body{
		background: url(img5.jpg);
		background-position:0px 0px;
		background-size: cover;
		background-repeat: no-repeat;
	}
	div.main{
		width:400px;
		margin:100px auto 0px auto;
	}
	label{
		text-align:center;
		font-size:18px;
		font-style:italic;
	}
	div.register{
		position:relative;
		bottom:50px;
		background:rgba(0,0,0,0.5);
		font-size:15px;
		padding:10px;
		border:1px solid rgba(255,255,255,0.3);
		box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	}
	form#rform{
		margin:40px;
	}
	input{
		width:300px;
		border:1px solid #ddd;
		border-radius:3px;
		outline:0;
		padding:7px;
		background-color:#fff;
	}
	h1.h1-1{
		text-align:center;
	}
	button{
		height:30px;
		width:200px;
		border:none;
		position:relative;
		left:60px;
		border-radius:5px;
		color:#fff;
		background-color:#000;
		box-shadow: 5px 5px #fff;
		cursor:pointer;
	}
	
</style>
</head>
<body>
		<div class="main">
		<div class="register">
		<h1 class="h1-1">REGISTRATION FORM</h1>
		<form id="rform" method="post">
		<label>NAME</label><br>
		<input type="text" name="name" id="name" required>
		<br><br>
		<label>EMAIL</label><br>
		<input type="text" name="email" id="email" required>
		<br><br>
		<label>DATE OF BIRTH</label><br>
		<input type="date" name="dob" id="dob" required>
		<br><br>
		<label>USERNAME</label><br>
		<input type="text" name="uname" id="uname" required>
		<br><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password" id="password" required>
		<br><br>
		<label>CONFIRM PASSWORD</label><br>
		<input type="password" name="cpassword" id="cpassword" required>
		<br><br>		
		<button name="submit1">SUBMIT</button>
		</form>
		</div><!-- END OF REGISTER CLASS -->
		</div><!-- END OF MAIN CLASS -->

		<?php

			if(isset($_POST['submit1'])){
				
				$name = $_POST['name'];
				$email = $_POST['email'];
				$dob = $_POST['dob'];
				$uname = $_POST['uname'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];

				//database connectivity	
				$conn = new mysqli('127.0.0.1:3307','root','','restaurant');

				if($conn->connect_error){
					print("Not connected");
					die('Connection Failed : '.$conn->connect_error);

				}else{
				if($password == $cpassword){
				$stmt = $conn->prepare('insert into customer_login(name,email,dob,username,password,cpassword) values(?,?,?,?,?,?)');
				$stmt->bind_param("ssssss",$name,$email,$dob,$uname,$password,$cpassword);
				$stmt->execute();
				echo"<script>alert('REGISTRATION SUCCESSFUL');</script>";
				
				$stmt->close();
				$conn->close();
				}else{
					echo"<script>alert('PASSWORD DOES NOT MATCH WITH CONFIRM PASSWORD');</script>";
			
		}
	}
}
?>
</body>
</html>