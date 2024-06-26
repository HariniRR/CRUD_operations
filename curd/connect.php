<?php
//CONNECTION TO WEBPAGE
$servername="localhost";
$dbname="faculty";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con){
   // echo"connected succesfully";
}
else{
    echo"error occured";
}
?>