<?php
$host='localhost';
$user='root';
$password='';
$dbname='school';
try{
	$dsn='mysql:host='. $host .'; dbname='.$dbname;
	$conn=new PDO($dsn,$user,$password);
	
	// echo "successfull connection";  
}
catch(PDOException $error){
$error->getMessage();

echo "connection failed";
}
?>