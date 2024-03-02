<html>
<head>
	<title>RESTAURANT MANAGEMENT SYSTEM</title>
	<style>
	html,body{
		height: 90%;
		font-family:sans-serif;
	}
	body{
		background: linear-gradient(black,red);
	}
	h1{
		color : white;
		position : relative;
		text-align: center;
		top : 20px;

	}
	.img1{
		width: 800px;
		position: absolute;
		left: 80px;
		top: 100px;
	}
	input[type=button]{
		height:30px;
		width:200px;
		border:none;
		border-radius:5px;
		color:#fff;
		background-color:#000;
		box-shadow: 5px 5px #fff;
		cursor:pointer;
		
	}
	.buttonsty1{
		position : absolute;
		left: 1000px;
		top: 400px;
		
	}
	.buttonsty2{
		position : absolute;
		left: 1000px;
		top: 470px;
	}
	.buttonsty3{
		position: absolute;
		left: 1000px;
		top: 540px;
	}
	.label1{
		color : white;
		position : absolute;
		top : 300px;
		left: 1000px;

	}
	button{
		width: 500px;
		height: 50px;
		border: none;
		border-radius: 5px;
		color:#fff;
		background-color:#000;
		box-shadow: 5px 5px #fff;
		cursor:pointer;
		position: absolute;
		left: 1000px;
		top: 220px;
	}
	</style>
</head>
<body>
	<h1>RESTAURANT MANAGEMENT SYSTEM</h1>
	<img class="img1" src="img1.jpg" alt="picture of 1st page" />
	<a href="menu_page.php">
	<button>VIEW MENU</button>
	</a>
	<div class="pos1">
		<h1 class="label1">USER TYPE : </h1>
		<a href="admin_login.php"><input class="buttonsty1" type="button" value="ADMIN"></a>
		<a href="customer.php"><input class="buttonsty2" type="button" value="CUSTOMER"></a>
	</div>
</body>
</html>