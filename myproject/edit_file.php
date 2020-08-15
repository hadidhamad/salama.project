

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
<div class="container register-form">
            <div class="form">
                <div class="note">
                    
                </div>
<?php

if(isset($_GET["rg"])){
	include 'connection.php';
	$sql="select *from teacher where t_registration=:rg";
	$run=$conn->prepare($sql);
	$run->execute(array('rg'=>$_GET['rg']));
	if($run->rowCount()==1){
		$row=$run->fetch();
	}else{
		header('location:view_teacher.php');
	}
}else{
	header('location:edit_file.php');
}
?>
                <div class="form-content">
                    <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Teacher registration number</label>
                                <input type="text" name="registration" class="form-control" placeholder="Teacher registration number" required="" value="<?php echo $row['t_registration']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Teacher name</label>
                                <input type="text" name="name" class="form-control" placeholder="Teacher name" required=""  value="<?php echo $row['t_name']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Teacher email</label>

                                <input type="text" name="email" class="form-control"placeholder="Teacher email" required="" value="<?php echo $row['t_email']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Techer address</label>
                                <input type="text" name="address" class="form-control" placeholder="teacher address" required="" value="<?php echo $row['t_address'];?>">
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
if(isset($_POST['submitt'])){

	$role= "teacher";
$registration=$_POST['registration'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="insert into teacher(t_registration,t_name,t_email,t_address)values(:registration,:name,:email,:address)";
$tr=$conn->prepare($sql);
$try=$tr->execute((array(":registration"=>$registration,":name"=>$name,":email"=>$email,":address"=>$address)));
  if($pdoQuery_exec)
    {
        echo "data inserted";
    }
    else{
        echo "data failed to inserted";
    }
    header("location: view_teacher.php");

}


?>