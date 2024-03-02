



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
	background: url(img6.jpg);
	background-position: 0px 0px ;
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
	width:30%;
	height:40px;
	padding:2px 0px 2px 10px;
	font-size:20px;	
	border:2px solid #aaa;
	margin:8px;
	outline:none;
	
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

label{
		font-size: 20px;
		color: #fff;
	}	

div.order{
		position:relative;
		bottom:10px;
		top: 40px;
		background:rgba(0,0,0,0.5);
		font-size:15px;
		padding:10px;
		border:5px solid rgba(255,255,255,0.3);
		box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	}

	.h1{
		postion: relative;
		top: 100px;
	}
.l2{
	position: relative;
	top: 60px;
}
.alignn{
	text-align: center;
}
select{
		width:30%;
	height:40px;
	padding:2px 0px 2px 10px;
	font-size:20px;	
	border:2px solid #aaa;
	margin:8px;
	outline:none;
	margin-top: 30px;
}

.text2{
	position: relative;
	left: 150px;
}
.text3{
	position: relative;
	left: 130px;
}
.s1{
	position: relative;
	left: 130px;
}
.text4{
	position: relative;
	left: 160px;
}
.text5{
	position: relative;
	left: 160px;
}
.text6{
	position: relative;
	left: 160px;
}

</style>
</head>
<body>
	<div class="head1">
		<h1 style="color:#fff">ORDER FOOD</h1>
		<a href="statuspage_customer.php"><button class="button-4">STATUS PAGE</button></a>
		<a href="front_page.php"><button class="button-2">LOGOUT</button></a>
	</div><br><br>
	<hr class="h1">
	<label class="l2">GET CUSTOMER ID:</label>
	<br><br><br><br>
	<div>
	<form method="post">
 	 		<input type="text" name="mailid" placeholder="ENTER MAIL ID">
 			<input class="button-3" type="submit" value="GO" name="find">
            <table border="5" padding="10" cellspacing="0" align="center">
                <tr height="50" width="100"><th>CUSTOMER ID</th><th>NAME</th><th>EMAIL</th><th>DATE OF BIRTH</th>
                </tr>

                
 <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}else{
 		if(isset($_POST['find'])){
 			$email = $_POST['mailid'];
 			$stmt = $conn->prepare("select id,name,email,dob from customer_login where email = ?");
 			$stmt->bind_param("s",$email);
 			$stmt->execute();

 			$stmt_result = $stmt->get_result();
				if($stmt_result->num_rows > 0){
					while($row = $stmt_result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["dob"] . "</td></tr>";
 		}
				}
 		}
 	
 	}
 	$conn->close();

 ?>
</table>
</form>
</div>
<hr><br><br>
<label class="l1">ENTER DETAILS:</label>

<div class="order">
	<form method="post">
				<div class="alignn">
 				<label>CUSTOMER ID</label><input type="text" class="text2" name="id"><br><br>
				<label>CUSTOMER NAME</label><input type="text" class="text3" name="name"><br><br>
				<label>FOOD REQUIRED</label>
				<select class="s1" name="s1">
					<option>PASTA</option>
					<option>MAGGI</option>
					<option>PIZZA</option>
					<option>SOUP</option>
					<option>PAPAD</option>
				</select><br><br>
				<label>ITEM NAME</label><input type="text" class="text4" name="iname"><br><br>
				<label>QUANTITY</label><input type="text" class="text5" name="qty"><br><br>
				<label>ADDRESS</label><input type="text" class="text6" name="address"><br><br>
				<input type="submit" value="SUBMIT" class="submit1" name="submit1">
			</div>
		</form>	
		
		</div>

		<?php

		$conn = new mysqli('localhost','root','','restaurant');
		if($conn->connect_error){
			echo"$conn->connect_error";
			die("Connection Failed :".$conn->connect_error);
		}else{
			
			if(isset($_POST['submit1'])){

				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$foodtype = $_POST['s1'];
				$itemname = $_POST['iname'];
				$qty = $_POST['qty'];
				$address = $_POST['address'];
				$status = "ordered";
				

				if($foodtype==="PIZZA"){
					$sql = $conn->prepare("select * from pizza_menu where name=?");
					$sql->bind_param("s",$itemname);
					$sql->execute();
					$sql_result = $sql->get_result();
					$row = $sql_result->fetch_assoc();
					$price = $row['big'];
				}

				if($foodtype==="MAGGI"){
					$sql = $conn->prepare("select * from noodles_menu where name=?");
					$sql->bind_param("s",$itemname);
					$sql->execute();
					$sql_result = $sql->get_result();
					$row = $sql_result->fetch_assoc();
					$price = $row['price'];
				}

				if($foodtype==="PASTA"){
					$sql = $conn->prepare("select * from pasta_menu where name=?");
					$sql->bind_param("s",$itemname);
					$sql->execute();
					$sql_result = $sql->get_result();
					$row = $sql_result->fetch_assoc();
					$price = $row['price'];
				}

				if($foodtype==="SOUP"){
					$sql = $conn->prepare("select * from soup_menu where name=?");
					$sql->bind_param("s",$itemname);
					$sql->execute();
					$sql_result = $sql->get_result();
					$row = $sql_result->fetch_assoc();
					$price = $row['price'];
				}

				if($foodtype==="PAPAD"){
					$sql = $conn->prepare("select * from papad_menu where name=?");
					$sql->bind_param("s",$itemname);
					$sql->execute();
					$sql_result = $sql->get_result();
					$row = $sql_result->fetch_assoc();
					$price = $row['price'];
				}
				$total=$price*$qty;
				$stmt = $conn->prepare("insert into order_statuspage(customer_id,customer_name,food_type,item_name,quantity,address,total_price,status) values(?,?,?,?,?,?,?,?)");
				$stmt->bind_param("ssssssss",$id,$name,$foodtype,$itemname,$qty,$address,$total,$status);
				$stmt->execute();

				
				echo"<script>alert('ORDER PLACED');</script>";

				$stmt->close();
				$conn->close();
			}
		}

		?>
		





</body>
</html>
