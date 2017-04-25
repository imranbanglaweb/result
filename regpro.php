<?php
//session_start();
//session_destroy();
//header("Refresh:15; url=regpro.php", true, 303);
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome to registration page</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
<div class="header">
   <div class="left-content">
   <div class="logo">
       <a href=""><img src="images/logo.png"></a>
   </div>
   </div>
   <div class="right-content">

        <a href='index.php'><i class="fa fa-sign-in"></i>Back To home Page..</a>

   </div>


</div>
<div class="regpro_page">
<?php
    $batch=$_POST['batch'];
    $semester=$_POST['semester'];
    $s_name=$_POST['sname'];
    $roll = $_POST['Roll'];
    $os = $_POST['os'];
    $oslab = $_POST['oslab'];
    $network = $_POST['network'];
    $netlab = $_POST['networklab'];
    $automata = $_POST['automata'];
    $swenginee = $_POST['swenginee'];
    $sgpa = $_POST['sgpa'];
    $ag = $_POST['ag'];
    $result = $_POST['result'];
    $image= $_FILES["imageUpload"];
    $status = "OK";
    $msg = "";

if($status=="OK"){
    //Process the image that is uploaded by the user

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable

    //storind the data in your database
    include('database_connect.php');
//    $insert= "INSERT cse34(imgshow)values ('$image')";
//    $resultimg=mysqli_query($con,$insert);



    require('database_connect.php');
//    echo "Your image has been uploaded";
////						echo "Your add has been submited, you will be redirected to your account page in 3 seconds....";
////    header("Refresh:3; url=details.php", true, 303);

    include('database_connect.php');
    $insert=("INSERT INTO 10semester(batch,Semester,sname,roll,compiler,compilerlab,peripheral,peripherallab,ecommerce,ecommercelab,sgpa,ag,result,imgshow)VALUE ('$batch','$semester','$s_name','$roll','$os','$oslab','$network','$netlab','$automata','$swenginee','$sgpa','$ag','$result','$image')");
    $sql=mysqli_query ($con,$insert);

    echo "<p style='color:green;font-size:18px;text-align:center;margin:0 auto; display:block'>".'Thank You '.$s_name.' Your result successfully Completed'."</p>";
}

else{// display the error message
echo "<center><font face='Verdana' size='8' color=red>$msg</font></center>";

}

?>
</div><!-- end regpro_page -->

        <hr/>
        <div class="footer">
       <p>&copy;copy right by Imran Rahman <a href="">This website develop by Imran rahman</a></p>
       </div>
    </div>
</body>
</html>