

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>MENU LIST</title>
<style>
	@charset "ISO-8859-1";
html,body{
	height:100%;
	background-size: cover;
	background-repeat: no-repeat;

}
body{
		background: url(menu_img.jpg);
		background-size: cover;
		background-position: 0px 0px;
		font-family:sherif;
		color: white;

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
.button-2{
	position: relative;
	left:1200px;
	top: 30px;
}

h1{
	position: absolute;
	left:500px;
	top: 0px;
	font-size: 50px;
}
input[type=text]{
	width:60%;
	height:40px;
	padding:2px 0px 2px 10px;
	font-size:20px;	
	border:2px solid #aaa;
	margin:8px;
	outline:none;
}
input[type=text]:focus{
	border-color: black;
	box-shadow: 0 0 8px 0 black;
}
.input-1{
	position:relative;
	top:80px;
	left:100px;
}
.input-2{
	position:relative;
	top:80px;
	left:150px;
}
.input-3{
	position:relative;
	top:80px;
	left:190px;
}
hr{
	position:relative;
	top :70px;
}
.tb_b{
    position:relative;
    top:100px;
}
th,td{
    padding-top:15px;
    padding-bottom:15px;
    padding-left:10px;
    padding-right:10px;
}
table{
	background: rgba(0,0,0,0.5);
	color: #fff;
	text-align: center;
	width: 100%;

}
input[type="submit"]{
	height:50px;
	width:150px;
	font-size:20px;
	background:#000000;
	color:#ffffff;
	border:0;
    box-shadow: 5px 5px white;
    border-radius : 5px;
    cursor:pointer;
    position: relative;
    left: 1100px;
}
	
</style>
</head>
<body>
	<div class="head1">
		<h1>MENU PAGE</h1>
		<a href="front_page.php"><button class="button-2">BACK</button></a>
	</div>
	<hr>
	
	<div>
	</div>
	 <div class="tb_b">
	 	<form method="post">
 	 		<button class="PASTA" name="pasta">PASTA</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	 		<button class="NOODLES" name="noodles">MAGGI</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	 		<button class="PIZZA" name="pizza">PIZZA</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	 		<button class="SOUP" name="soup">SOUP</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	 		<button class="PAPAD" name="papad">PAPAD</button>
 	 		<br><br><br>
            <table border="5" padding="10" cellspacing="0" align="center">
                <tr height="50" width="100"><th>ITEM ID</th><th>NAME</th><th>INFORMATION</th><th>PRICE</th>
                </tr>           
 <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}else{
 		if(isset($_POST['pasta'])){
 			
 			$stmt = $conn->prepare("select * from pasta_menu");
 			
 			$stmt->execute();

 			$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
					while($row = $stmt_result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["info"] . "</td><td>" . $row["price"] . "</td></tr>";
 		}
				}
 		}
 	}
 	$conn->close();
 ?>

 <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}else{
 		if(isset($_POST['noodles'])){
 			
 			$stmt = $conn->prepare("select * from noodles_menu");
 			
 			$stmt->execute();

 			$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
					while($row = $stmt_result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["info"] . "</td><td>" . $row["price"] . "</td></tr>";
 		}
				}
 		}
 	}
 	$conn->close();
 ?>


   <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}else{
 		if(isset($_POST['pizza'])){
 			
 			$stmt = $conn->prepare("select * from pizza_menu");
 			
 			$stmt->execute();

 			$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
					while($row = $stmt_result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["info"] . "</td><td>" . $row["big"] . "</td></tr>";
 		}
				}
 		}
 	}
 	$conn->close();
 ?>

     <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}else{
 		if(isset($_POST['soup'])){
 			
 			$stmt = $conn->prepare("select * from soup_menu");
 			
 			$stmt->execute();

 			$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
					while($row = $stmt_result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["info"] . "</td><td>" . $row["price"] . "</td></tr>";
 		}
				}
 		}
 	}
 	$conn->close();
 ?>

    <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}else{
 		if(isset($_POST['papad'])){
 			
 			$stmt = $conn->prepare("select * from papad_menu");
 			
 			$stmt->execute();

 			$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
					while($row = $stmt_result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["info"] . "</td><td>" . $row["price"] . "</td></tr>";
 		}
				}
 		}
 	}
 	$conn->close();
 ?>




            </table>
        </form>

   
    </div>
	
</body>
</html>

