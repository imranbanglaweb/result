<?php
// onnine connect
// $con = mysqli_connect("localhost","imranweb","w7vD0d32Nz","imranweb_result");
$con = mysqli_connect("localhost","root","","result");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>