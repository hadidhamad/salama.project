


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
                                <label>Teacher registration number</label>
                                <input type="text" name="registration" class="form-control" placeholder="Teacher registration number" required="">
                            </div>
                            <div class="form-group">
                                <label>Teacher name</label>
                                <input type="text" name="name" class="form-control" placeholder="Teacher name" required="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Teacher email</label>

                                <input type="text" name="email" class="form-control"placeholder="Teacher email" required="">
                            </div>
                            <div class="form-group">
                                <label>Teacher address</label>
                                <input type="text" name="address" class="form-control" placeholder="teacher address" required="">
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
if(isset($_POST['submit'])){
$role= "teacher";
$registration=$_POST['registration'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="insert into teacher(t_registration,t_name,t_email,t_address)values(:registration,:name,:email,:address)";
$ty="insert into user(username,password,name,role) values(:registration,:name,:name,:role)";
 $insert_user=$conn->prepare($ty);
    $rt=$insert_user->execute((array(":registration"=>$registration,":name"=>$name,":name"=>$name,":role"=>$role)));


$tr=$conn->prepare($sql);
$try=$tr->execute((array(":registration"=>$registration,":name"=>$name,":email"=>$email,":address"=>$address)));
if($try){
	echo "the data inserted";
}else{
	echo "the data is not inserted";
}

}

?>








