
<?php
session_start();

 if(isset($_SESSION["role"])){


?>




<?php
include 'connection.php';
if(isset($_POST["add"])){

	$id=$_POST['id'];
	$material=$_POST['material'];
	$sql="insert into material(material_id,material_name)values(:id,:material)";
	$sn=$conn->prepare($sql);
	$re=$sn->execute(array(":id"=>$id,"material"=>$material));
	if($re){
		echo "inserted";
	}else{
		echo "not inserted";
	}
}


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
		include("head.php");
	?>
<div class="container-fluid">
            <div class="form">
                <div class="note">
                    
                </div>

                <div class="form-content">
                    <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Material id</label>
                                <input type="text" name="id" class="form-control" placeholder="Student name" required="">
                            </div>
                            <div class="form-group">
                                <label>Material name</label>
                                <input type="file" name="material" class="form-control" placeholder="Student address" required="" >
                                 <button type="submit" name="add" class="btn btn-sucess btnblock">Add</button><span>
                            </div>
                        </div>
                        </div>
                    </div>
                   
                    

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














