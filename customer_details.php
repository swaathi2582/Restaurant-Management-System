

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>CUSTOMER DETAILS</title>
<style>
	@charset "ISO-8859-1";
html,body{
	height:98%;

}
body{
	background: url(img7.jpg);
	background-size: cover;
	background-position: 0px 0px;
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
		<h1 style="color:white">CUSTOMER DETAILS</h1>
		<a href="page_admin.php"><button class="button-2">BACK</button></a>
	</div>
	<hr>
	
	<div>
	</div>
	 <div class="tb_b">
	 	<form  action="bookdata" method="post">
            <table border="5" padding="10" cellspacing="0" align="center">
                <tr height="50" width="100"><th>CUSTOMER ID</th><th>CUSTOMER NAME</th><th>EMAIL</th><th>DATE OF BIRTH</th><th>USERNAME</th><th>PASSWORD</th>
                	<th>CONFIRM PASSWORD</th>
                </tr>

                
 <?php

 	$conn = mysqli_connect('localhost','root','','restaurant');
 	if($conn->connect_error){
 		die('CONNECTION FAILED : '.conn->connect_error);
 	}
 	$sql = "select * from customer_login";
 	$result = $conn->query($sql);

 	if($result->num_rows > 0){
 		while($row = $result->fetch_assoc()){
 			
 			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>" . $row["cpassword"] . "</td></tr>";
 		}
 	echo "</table>";
 	}
 	else{
 		echo "0 RESULT";
 	}
 	$conn->close();

 ?>

            </table>
        </form>
    </div>
	
</body>
</html>

