
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
		.note
{
    text-align: center;
    height: 80px;
    color: #fff;
    font-weight: bold;
   
}
.image{
            width: 100%;
            height: 95px;
            margin: auto;
        }
.form-content
{
    padding: 5%;
   
    margin-bottom: 2%;
}
/*.form-control{
    border-radius:1.5rem;
}*/
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
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
<div class="container register-form">
            <div class="form">
                <div class="note">
                    
                </div>

                <div class="form-content">
                    <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student name</label>
                                <input type="text" name="name" class="form-control" placeholder="Student name" required="">
                            </div>
                            <div class="form-group">
                                <label>Student address</label>
                                <input type="text" name="address" class="form-control" placeholder="Student address" required="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Student email</label>
        
      
                                <input type="email" name="email" class="form-control"placeholder="Student email" required="" >
                            </div>
                            <div class="form-group">
                                <label>Student registration number</label>
                                <input type="text" name="registration" class="form-control" placeholder="Student registration number" required="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sucess btnblock">Submit</button><span>
                    

                </form>
                </div>
            </div>
        </div>
</body>
<?php
}else{
    header("location: index.php");
}
?>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    
    $role="student";
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $registration=$_POST['registration'];
    $pdoQuery="insert into student(st_name,st_email,st_address,st_registration) values(:name,:email,:address,:registration)";
    $insert_user=$conn->prepare("insert into user(username,password,name,role) values(:registration,:registration,:name,:role)");
    $insert_user->execute((array(":registration"=>$registration,":registration"=>$registration,":name"=>$name,":role"=>$role)));

    $pdoQuery_run=$conn->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":name"=>$name,":address"=>$address,":email"=>$email,":registration"=>$registration));
    if($pdoQuery_exec)
    {
        echo "data inserted";
    }
    else{
        echo "data failed to inserted";
    }
}
?>







