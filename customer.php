

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login Page</title>
<style>
	html,body{
	height:90%;
	font-family:sans-serif;
	margin:0;
	padding:0;
	color:#fff;
	}
	body{
		background: url(login_img_customer_2.jpg);
		background-position:100px 0px;
		background-size: cover;
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
		bottom:10px;
		top: 40px;
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
	.ptr{
		margin-left: 600px;
	}
	
	input[type="button"]{
		height:30px;
		width:200px;
		border:none;
		border-radius:5px;
		color:#fff;
		background-color:#000;
		box-shadow: 5px 5px #fff;
		cursor:pointer;
		position: relative;
		left: 20px;
	}
</style>
</head>
<body>
		<div class="main">
		<div class="register">
		<h1 class="h1-1">USER LOGIN</h1>
		<form id="rform" method="post">
		<br><br>
		<label>USERNAME</label><br>
		<input type="text" name="uname" id="uname" required>
		<br><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password" id="password" required>
		<br><br>
		<button type="submit" name="login1">SUBMIT</button><br><br>
				

				<?php
					if(isset($_POST['login1'])){
						$uname = $_POST['uname'];
						$password = $_POST['password'];

						//database connectivity
						$conn = new mysqli('localhost','root','','restaurant');
						if($conn->connect_error){
							die('CONNECTION FAILED : '.conn->connect_error);
						}
						else{
							$stmt = $conn->prepare('select * from customer_login where username=?');
							$stmt->bind_param('s',$uname);
							$stmt->execute();
							$stmt_result = $stmt->get_result();
							if($stmt_result->num_rows > 0){
								$data = $stmt_result->fetch_assoc();
								if($data['password'] === $password){

									header("Location:mainpage_customer.php");
								}
								else{
									echo"<script>alert('INVALID USERNAME OR PASSWORD');</script>";
								}
							}
							else{
								echo"<script>alert('INVALID USERNAME OR PASSWORD');</script>";
							}
						}
					}
				?>

		</form>
		</div><!-- END OF REGISTER CLASS -->
		</div><!-- END OF MAIN CLASS --><br><br><br><br>
		<div class="ptr">
		<label>NOT A MEMBER?</label>
		<a href="customer_register.php">	
		<input type="button" name="login2" value="REGISTER"></a>
		</div>




</body>
</html>



