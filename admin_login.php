

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
	background: url(login_img_admin.jpg);
		background-position:0px 0px;
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
	
	
</style>
</head>
<body>
		<div class="main">
		<div class="register">
		<h1 class="h1-1">ADMIN LOGIN</h1>
		<form id="rform" method="POST">
		<br><br>
		<label>USERNAME</label><br>
		<input type="text" name="uname" id="uname">
		<br><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password" id="password">
		<br><br>	
		<button type="submit" name="signin">SUBMIT</button>
		</form>
		</div><!-- END OF REGISTER CLASS -->
		</div><!-- END OF MAIN CLASS -->

		<?php

	$con = mysqli_connect("127.0.0.1:3307","root","","final_year_project");
	if(mysqli_connect_error()){
		echo "NOT CONNECTED";
	}
	?>

		<?php

			if(isset($_POST['signin'])){
				$username = $_POST['uname'];
				$password = $_POST['password'];
				
				$stmt = $con->prepare("select * from user_details where dbusername =?");
				$stmt->bind_param("s",$username);
				$stmt->execute();
				
				$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
				$data = $stmt_result->fetch_assoc();
				print($data['dbpassword']);
				if($data['dbpassword'] === $password){
					session_start();
					$_SESSION['AdminLoginId']=$username;
					header("Location:page_admin.php");
				}else{
					echo"<script>alert('INCORRECT PASSWORD');</script>";
				}
				}else{
					echo"<script>alert('INCORRECT PASSWORD');</script>";
				}
					
				}
		?>

		
</body>
</html>




