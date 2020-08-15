<?php
if(isset($_GET["reg"])){
	include 'connection.php';
    $pdoQuery="delete from student where st_registration=:registration";
  
    $pdoQuery_run=$conn->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":registration"=>$_GET["reg"]));
    if($pdoQuery_exec)
    {
        echo "data delete()";
    }
    else{
        echo "data failed to delete";
    }
    header("location: view_student.php");
}
?>







