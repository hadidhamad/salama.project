<?php
session_start();

 if(isset($_SESSION["role"])){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Navigation menu</title>
	<link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
</head>
<style type="text/css">
	.image{
			width: 100%;
			height: 95px;
			margin: auto;
		}
		
</style>
<body>
<div>
	<img class="image" src="image.png">
</div>
	<?php
		include("head.php");
	?>
<?php
}else{
	header("location: index.php");
}
?>
</body>
</html>