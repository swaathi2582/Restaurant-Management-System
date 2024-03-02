<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>STATUS PAGE</title>
<style>
	@charset "ISO-8859-1";
html,body{
	height:98%;

}
body{
	background: url(img7.jpg);
	background-position:0px 0px;
	background-size: cover;
	font-family:sherif;

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
	position: absolute;
	left:1300px;
	top: 30px;
}

h1{
	position: absolute;
	left:200px;
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
	margin-left: 25px;
	margin-top: 30px;
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
	margin-left: 40px;
	height:50px;
	width:300px;
	font-size:20px;
	background:#000000;
	color:#ffffff;
	border:0;
    box-shadow: 5px 5px white;
    border-radius : 5px;
    cursor:pointer;
    position: relative;
    left: 1px;
}

.label2{
	padding: 30px;
}
.button-3{
	height:50px;
	width:150px;
	font-size:20px;
	background:#000000;
	color:#ffffff;
	border:0;
    box-shadow: 5px 5px white;
    border-radius : 5px;
    cursor:pointer;
    margin-left: 20px;
}
	

.button-4{
	position: absolute;
	left:1100px;
	top: 30px;
}	

.button-5{
	position: absolute;
	left: 900px;
	top: 30px;
}


</style>
</head>
<body>
	<div class="head1">
		<h1 style="color:#fff">ITEM DETAILS</h1>
		<a href="customer_details.php"><button class="button-5">CUSTOMER DETAILS</button></a>
		<a href="admin_statuspage.php"><button class="button-4">STATUS PAGE</button></a>
		<a href="front_page.php"><button class="button-2">LOGOUT</button></a>
	</div><br><br>
	<hr>
	<br><br><br><br><br><br>
	<div class="head2">
 	 	<a href="edit_pastadetails.php"><input class="button-6" type="submit" value="EDIT PASTA DETAILS" ></a>
 	 	<a href="edit_noodlesdetails.php"><input class="button-6" type="submit" value="EDIT NOODLES DETAILS" ></a>
 	 	<a href="edit_pizzadetails.php"><input class="button-6" type="submit" value="EDIT PIZZA DETAILS" ></a>
  	 	<a href="edit_soupdetails.php"><input class="button-6" type="submit" value="EDIT SOUP DETAILS"></a><br><br>
 	 	<a href="edit_papaddetails.php"><input class="button-6" type="submit" value="EDIT PAPAD DETAILS"></a><br><br>
	</div>
	
	<form  method="post">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="PASTA" name="pasta">PASTA</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="NOODLES" name="noodles">NOODLES</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="PIZZA" name="pizza">PIZZA</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="SOUP" name="soup">SOUP</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="PAPAD" name="papad">PAPAD</button><br><br>
            <table border="5" padding="10" cellspacing="0" align="center">
                <tr height="50" width="100"><th>ITEM ID</th><th>ITEM NAME</th><th>INFORMATION</th><th>PRICE</th>
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

	

	
	
</body>
</html>
