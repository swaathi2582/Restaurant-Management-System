<html>
	<head>
		<title>EDIT PASTA DETAILS</title>
		<style>
	html,body{
		height:98%;
		}
	body{
		background: black;
		font-family:sherif;
		padding: 20px;
		}
	input[type=text]{
		width:30%;
		height:40px;
		padding:2px 0px 2px 10px;
		font-size:20px;	
		border:2px solid #aaa;
		margin:8px;
		outline:none;
		margin-left: 25px;
		margin-top: 30px;
	}
	input[type=text]:focus{
		border-color: black;
		box-shadow: 0 0 8px 0 black;
	}
	label{
		font-size: 20px;
		color: #fff;
	}	

	input[type="submit"]{
		
		height:50px;
		width:300px;
		font-size:20px;
		background:#000000;
		color:#ffffff;
		border:0;
    	box-shadow: 5px 5px white;
    	border-radius : 5px;
    	cursor:pointer;
    	
}
.submit1{
	margin-left: 250px;
	position: relative;
    
}

.submit2{
	margin-left: 200px;
}

.text1{
	color: #000;
}

.text2{
	position: relative;
	left: 110px;
}
.text3{
	position: relative;
	left: 70px;
}
.text4{
	position: relative;
	left: 43px;
}

.text5{
	position: relative;
	left: 120px;
}

.text6{
	position: relative;
	top: 20px;
}
.text7{
	position: relative;
	left: 110px;
}
.submit1{
	position: relative;
	left: -30px;
}
.text9{
	position: relative;
	left: 90px;
}
.submit3{
	position: relative;
	left: 200px;
	top: 10px;
}
.submit2{
	position: relative;
	left: 20px;
	top: 10px;
}
button{
	height:50px;
	width:150px;
	font-size:20px;
	background:#000000;
	color:#ffffff;
	border:0;
    box-shadow: 5px 5px white;
    border-radius : 5px;
    cursor:pointer;
}
.button-1{
	position: relative;
	left: 450px;
	top: -70px;
	margin-left: 30px;
}
.button-2{
	position: relative;
	left: 500px;
	top: -70px;
}
.head1{
	margin-top: 20px;
	text-align: center;
}
		</style>
	</head>
	<body>
		<div class="head1">
		<h1 class="head1" style="color:white">EDIT PASTA DETAILS</h1>
			<a href="page_admin.php"><button class="button-1">BACK</button></a>
			<a href="front_page.php"><button class="button-2">LOGOUT</button></a>
		</div>
		<br><br>
		<hr>
		<div>
			<form method="post">
				<h2 class="text1" style="color: white"><u>ADD PASTA ITEM</u></h2>
				<label>ITEM ID</label><input type="text" class="text2" name="id"><br><br>
				<label>ITEM NAME</label><input type="text" class="text3" name="name"><br><br>
				<label>INFORMATION</label><input type="text" class="text4" name="info"><br><br>
				<label>PRICE</label><input type="text" class="text5" name="price"><br><br>
				<input type="submit" value="SUBMIT" class="submit1" name="submit1">
			</form>
		</div><br><br><br>


		<?php

		$conn = new mysqli('localhost','root','','restaurant');
		if($conn->connect_error){
			echo"$conn->connect_error";
			die("Connection Failed :".$conn->connect_error);
		}else{
			
			if(isset($_POST['submit1'])){
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$info = $_POST['info'];
				$price = $_POST['price'];
				$stmt = $conn->prepare("insert into pasta_menu(id,name,info,price) values(?,?,?,?)");
				$stmt->bind_param("ssss",$id,$name,$info,$price);
				$stmt->execute();
				echo"<script>alert('ITEM ADDED');</script>";
				$stmt->close();
				$conn->close();
			}
		}

		?>

		<hr>
		<div>
			<form method="post">
				<h2 class="text6" style="color: white"><u>DELETE ITEM</u></h2>
				<label>ITEM ID</label><input type="text" class="text7" name="delid"><br>
				<input type="submit" value="DELETE" class="submit2" name="submit2">
			</form>
		</div><br><br>

		<?php
		$conn = new mysqli('localhost','root','','restaurant');
		if($conn->connect_error){
			echo"$conn->connect_error";
			die("Connection Failed :".$conn->connect_error);
		}else{
			
			if(isset($_POST['submit2'])){
				
				$id = $_POST['delid'];

				$stmt = $conn->prepare("delete from pasta_menu where id = ?");
				$stmt->bind_param("s",$id);
				$stmt->execute();
				echo"<script>alert('ITEM DELETED');</script>";
				$stmt->close();
				$conn->close();
			}
		}

		?>
		<hr>
		<div>
			<form method="post">
				<h2 class="text8" style="color: white"><u>CHANGE PRICE</u></h2>
				<label>BOOK ID</label><input type="text" class="text9" name="id"><br>
				<label>ENTER PRICE</label><input type="text" class="text10" name="price"><br>
				<input type="submit" value="CHANGE" class="submit3" name="sub">
			</form>
		</div>

		<?php
		$conn = new mysqli('localhost','root','','restaurant');
		if($conn->connect_error){
			echo"$conn->connect_error";
			die("Connection Failed :".$conn->connect_error);
		}else{
			
			if(isset($_POST['sub'])){
				
				$id = $_POST['id'];
				$price = $_POST['price'];

				$stmt = $conn->prepare("update pasta_menu set price=? where id= ?");
				$stmt->bind_param("ss",$price,$id);
				$stmt->execute();
				echo"<script>alert('UPDATED SUCCESSFULLY');</script>";
				$stmt->close();
				$conn->close();
			}
		}

		?>


	</body>

</html>