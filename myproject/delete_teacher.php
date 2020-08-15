<?php
if(isset($_GET["rg"])){
	include 'connection.php';
    $pdoQuery="delete from teacher where t_registration=:registration";
  
    $pdoQuery_run=$conn->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":registration"=>$_GET["rg"]));
    if($pdoQuery_exec)
    {
        echo "data delete";
    }
    else{
        echo "data failed to delete";
    }
    header("location: view_teacher.php");
}
?>