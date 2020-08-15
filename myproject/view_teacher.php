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
</head>
<style type="text/css">
	.image{
			width: 100%;
			height: 95px;
			margin: auto;
		}
	</style>
</style>
<body>
	<div >
		<img class="image" src="image.png">
	</div>
	<?php
		include("head.php");
	?>
<div class="container">
	<table class="table table-bordered">
		<tr>
		<td scope="col">count</td>
		<td scope="col">Teacher registration number</td>
		<td scope="col">Teacher name</td>
		<td scope="col">Teacher email</td>
		<td scope="col">Teacher address</td>
		<td scope="col">Edit</td>
		<td scope="col">Delete</td>
		</tr>


		<?php
      include 'connection.php';
      $sql="select *from teacher";
      $run=$conn->query($sql);
      $count=0;
while($row=$run->fetch(PDO::FETCH_ASSOC)){
	$count++;
	$registration=$row['t_registration'];
	$name=$row['t_name'];
	$email=$row['t_email'];
	$address=$row['t_address'];
	echo "
      <tr>
      <td>" .$count. "</td>
      <td>" .$registration. "</td>
      <td>" .$name. "</td>
      <td>" .$email. "</td>
      <td>" .$address. "</td>
      <td><a href='edit_file.php?rg=".$registration."'>edit</a></td>
	<td><a href='delete_teacher.php?rg=".$registration."'>delete</a></td>
      </tr>";
	
}


		?>
		</table>
	</div>
	
</div>
</body>
<?php
}else{
	header("location: index.php");
}
?>
</html>
