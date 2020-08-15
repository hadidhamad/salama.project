<?php
session_start();

 if(isset($_SESSION["role"])){


?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
	<style type="text/css">
		.image{
			width: 100%;
			height: 95px;
			margin: auto;
		}
	</style>
</head>
<body>
	<div >
		<img class="image" src="image.png">
	</div>
	<?php
include 'head.php';
	?>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th scope="col">count</th>
				<th scope="col">Student name</th>
				<th scope="col">Student address</th>
				<th scope="col">Student email</th>
				<th scope="col">Student registration</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
			</tr>
<?php
include 'connection.php';
$sql="select *from student";
$run=$conn->query($sql);
$count=0;
while($row=$run->fetch(PDO::FETCH_ASSOC)){
	$count++;
	$name=$row['st_name'];
	$address=$row['st_address'];
	$email=$row['st_email'];
	$registration=$row['st_registration'];
	echo "
	<tr>
	<td>" .$count. "</td>
	<td>" .$name. "</td>
	<td>" .$address. "</td>
	<td>" .$email. "</td>
	<td>" .$registration. "</td>
	<td><a href='edit.php?reg=".$registration."'>edit</a></td>
	<td><a href='delete.php?reg=".$registration."'>delete</a></td>
	</tr>";
}
	
?>

		</table>
	</div>
	</body>

</html>
<?php
}else{
	header("location: index.php");
}
?>