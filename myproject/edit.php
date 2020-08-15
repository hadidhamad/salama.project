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
<body>
    <div >
        <img class="image" src="image.png">
    </div>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    
                </div>
<?php
if(isset($_GET["reg"])){
	include 'connection.php';
	$sql="select *from student where st_registration=:reg";
	$run=$conn->prepare($sql);
	$run->execute(array('reg'=>$_GET['reg']));
	if($run->rowCount()==1){
		$row=$run->fetch();
	}else{
		header('location:view_student.php');
	}
}else{
	header("location:view_student.php");
}
?>
                <div class="form-content">
                    <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student name</label>
                                <input type="text" name="name" class="form-control" placeholder="Student name" required="" value="<?php echo $row['st_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Student address</label>
                                <input type="text" name="address" class="form-control" placeholder="Student address" required="" value="<?php echo $row['st_address']; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Student email</label>

                                <input type="text" name="email" class="form-control"placeholder="Student email" required=""  value="<?php echo $row['st_email']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Student registration number</label>
                                <input type="text" name="registration" class="form-control" placeholder="Student registration number" required="" readonly="" value="<?php echo $row['st_registration']; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sucess btnblock">Submit</button><span>
                    

                </form>
                </div>
            </div>
        </div>
</body>
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
    $pdoQuery="update student set st_name =:name,st_email=:email,st_address=:address where st_registration=:registration";
  
    $pdoQuery_run=$conn->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":name"=>$name,":address"=>$address,":email"=>$email,":registration"=>$registration));
    if($pdoQuery_exec)
    {
        echo "data inserted";
    }
    else{
        echo "data failed to inserted";
    }
    header("location: view_student.php");
}
?>







