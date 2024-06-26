<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `detail` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $userid=$row['userid'];
  $department=$row['department'];
  $experience=$row['experience'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $userid=$_POST['userid'];
  $department=$_POST['department'];
  $experience=$_POST['experience'];

  $sql="update  `detail` set id=$id,name='$name',userid='$userid',department='$department',experience='$experience' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Data updated successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form</title>
  </head>
  <body>
    <h4 class="text-center mt-3">Faculty Details</h4>
    <div class="bg-success">
    <div class="container-fluid text-center">
        <form method="post">
        <div class="row">
            <div class="col-4 m-auto">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                        <span class="input-group-text">Name</span>
                        <input type="text" name="name" class="form-control"  value=<?php echo $name;?>>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text">UserID</span>
                          <input type="text" class="form-control" name="userid"  value=<?php echo $userid;?>>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text">Department</span>
                          <select class="form-select" name="department"  value=<?php echo $department;?>>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="IT">IT</option>
                    <option value="BME">BME</option>
                    <option value="CST">CST</option>
                </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mt-3">
                          <span class="input-group-text">Experience</span>
                          <input type="text" class="form-control" name="experience" placeholder="Enter experience in years"  value=<?php echo $experience;?>>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-light m-3" type="submit" name="submit">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    
  </body>
</html>
