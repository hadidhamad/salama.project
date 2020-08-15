<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="#">Menu</a>
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportContent">
	<span class="navbar-toggler-icon"></span>

</button>
<div class="collapse navbar-collapse" id="#navbarSupportContent">
	<ul class="navbar-nav ml-auto">
		<?php

		$tr=$_SESSION["role"];
if($tr=="teacher"){

		?>
		<li class="nav-item active">
			<a class="nav-link" href="add_student.php">add student</a>
		</li>
			<li class="nav-item">
			<a class="nav-link" href="view_student.php">view student</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">view materials</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="add_material.php">add materials</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php"> logout</a>  
		</li>
		
<?php
}
?>
<?php
$ry=$_SESSION["role"];
if($ry=="student"){
	?>
		<li class="nav-item">
			<a class="nav-link" href="view_teacher.php ?>">view teacher</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">view materials</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="view_student.php">view student</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php"> logout</a>  
		</li>
		<?php
	}
	?>

	<?php
	$yu=$_SESSION["role"];
	if($yu=="admin"){
		?>

		<li class="nav-item">
			<a class="nav-link" href="view_teacher.php">view teacher</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="add_teacher.php">add teacher</a>  
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php"> logout</a>  
		</li>
		
		
		<?php
	}
	?>
	</ul>
</div>
</nav>