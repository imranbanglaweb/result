<?php
include 'database_connect.php';
$id=$_GET['sid'];
$sql="Delete from diu_result where id=$id";
$query=  mysqli_query($con,$sql);
if($query){
    header("Location:details.php");
}
else {
echo "Your data is not deleted";
}
