<?php
include 'connect.php';
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
        <div class="container">
            <button class="btn btn-warning my-5"><a href="form.php" class="text-dark">Add user</a></button>   
        </div>
        <div class="container">
        <div class="col-8  m-auto mt-3">
            <table class="table table-bordered">
                <thead class="text-center bg-white text-success">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>UserID</th>
                        <th>Department</th>
                        <th>Experience</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
        </div>
    </div>
    
      <?php 
    
    $sql="select * from `detail`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $userid=$row['userid'];
            $department=$row['department'];
            $experience=$row['experience'];
            echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$userid.'</td>
          <td>'.$department.'</td>
          <td>'.$experience.'</td>
          <td> 
              <button class="btn btn-primary" ><a href="update.php?updateid='.$id.'" class="text-white">update</a></button>
              <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id.'" class="text-white">Delete</a></button>
          </td>
        </tr>';
        }
    }
    ?>
    
    </tbody>
    </table>
    </div>
    </body>
    </html>

