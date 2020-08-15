<?php
include 'connection.php';
session_start();
if (isset($_POST['submit'])) {

$Username=$_POST['Username'];
$Password=$_POST['Password'];
$sql="select *from user where username=:Username and password=:Password";
$query=$conn->prepare($sql);
$query_exec=$query->execute(array(":Username"=>$Username,":Password"=>$Password));

$count=$query->rowCount();
if($count>0){
	$data = $query->fetch();

	$_SESSION["username"]=$Username;
	$_SESSION["role"]=$data["role"];
	header("location: menu.php");
}
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
	<style type="text/css">
		.ig{
			background:url('hadid.jpg') no-repeat;
			width: 100%;
			height: 545px;
		}
		#log{
			border: 3px solid white;
			height: 450px;
			padding:60px 40px;
			margin-top: 50px;
		}
		#login{
			text-align: center; 
			margin-bottom:20px;

		}
		img{
			 width: 70px;
			 margin:  auto;
		}
		h2{
			color: white;
			margin-top: -25px;
		}
		label{
			font-size: 30px;
			color: white;
		}
		h1{
			text-align: center;
			margin-top: 40px;
		}
		.image{
			width: 100%;
			height: 95px;
			margin: auto;
		}

	</style>
</head>
<body>
	<a href="Navigation menu.html">l</a>
	<div >
		<img class="image" src="image.png">
	</div>
	
	<div class="container_fluid ig">
		<div class="row">
			<div class="col-md-4 col-md-4 col-xs-12"></div>
			<div class="col-md-4 col-md-4 col-xs-12">
				<form id="log" action="" method="post">
					<h2 id="login">Login Form</h2>
					<img class="img img-respensive" src="salama.ico">
					<div class="form-group">
						<label>Username</label>
						<input type="Username" name="Username" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="Password" class="form-control" placeholder="Password">
					</div>
					<button type="login" name="submit" class="btn btn-success btn-block">login</button>

				</form>
			</div >
			<div class="col-md-4 col-md-4 col-xs-12"></div>
		</div>
	</div>

</body>
</html>
















