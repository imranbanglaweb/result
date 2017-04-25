<?php
session_start();
?>
<?php include 'header.php'; ?>
<body>
 <!-- <div class="se-pre-con"></div> -->
<div class="container-fluid">

<div class="main">
<div class="row">
<div class="top_header">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
   <div class="logo">
       <a href=""><img src="images/logo.png"></a>
   </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top_user">
<?php
      echo "Welcome  to ".$_SESSION['username']." see your information";
    ?>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="log-out">
  <a href='logout.php'><i class="fa fa-sign-out"></i>Logout</a>
</div>
</div>
</div>
</div><!--end row-->
<div class="main-page">

<div class="row">
<div class="col-md-12 col-lg-12">
<br>
<?php
if(isset($_POST['save'])){
    global $image;
    include("database_connect.php");
    $updateid=$_POST['eid'];
    $table_name="eleventhsemester";
    $regno    = $_POST['regno'];
    $batch    = $_POST['batch'];
    $semester = $_POST['semester'];
    $name     = $_POST['name'];
    $roll     = $_POST['roll'];
    $ai       = $_POST['ai'];
    $ailab    = $_POST['ailab'];
    $graphics = $_POST['graphics'];
    $graphicslab = $_POST['graphicslab'];
    $parallel    = $_POST['parallel'];
    $cgpa        = $_POST['cgpa'];
    $ag          = $_POST['ag'];
    $result = $_POST['result'];
    $image= $_FILES["imageUpload"];
    $session= $_POST["session"];
    $department= $_POST["department"];
    $institute= $_POST["institute"];
    $blood= $_POST["blood"];
    $status = "OK";
    $msg = "";
     $update="UPDATE  eleventhsemester  SET

      regno='$regno',
      batch='$batch',
      semester='$semester',
      name='$name',
      roll='$roll',
      ai='$ai',
      ailab='$ailab',
      graphics='$graphics',
      graphicslab='$graphicslab',
      parallel='$parallel',
      cgpa='$cgpa',
      ag='$ag',
      result='$result',
      session='$session',
      department='$department',
      institute='$institute',
      blood='$blood'
      WHERE id='$updateid'";
      $query=mysqli_query($con,$update);
      if($query){
    header('Location:details.php?msg='.urlencode('Data Updated Succesfully'));
       }  
      else {
      echo "<p style='color:green;font-size:18px;text-align:center;margin:0 auto; display:block'>".'sorry data not updated'."</p>";   
      }
            
 }
?>
<div class="result_data_table">
    
<form action="" method="post">
<table class="update_admin">
<button type="button" class="btn btn-success align-center">
Update Information
</button>

<br>
<hr>
<?php 
include 'database_connect.php';
$uid=$_SESSION['id'];
$table_name="eleventhsemester";
$sqlb="Select * from  $table_name where id='$uid'";
$result=  mysqli_query($con,$sqlb);
while ($data=  mysqli_fetch_row($result)){?>
   <tr>
    <td>Name</td>
    <td>
    <input type="text" name="name" value="<?php echo $data[4]?>">
    </td>
  </tr>
  <tr>
    
    <td>Batch</td>
     <td>
    <input type="text" name="batch" value="<?php echo $data[2]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Semester</td>
      <td>
    <input type="text" name="semester" value="<?php echo $data[3]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Registration No</td>
     <td>
    <input type="text" name="regno" value="<?php echo $data[1]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Roll No</td>
      <td>
    <input type="text" name="roll" value="<?php echo $data[5]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Artificial</td>
    <td>
    <input type="text" name="ai" value="<?php echo $data[6]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Artificial Lab</td>
      <td>
    <input type="text" name="ailab" value="<?php echo $data[7]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Computer Graphics</td>
    <td>
    <input type="text" name="graphics" value="<?php echo $data[8]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Computer Graphics Lab</td>
    <td>
    <input type="text" name="graphicslab" value="<?php echo $data[9]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Parallel & Distributing</td>
    <td>
    <input type="text" name="parallel" value="<?php echo $data[10]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Session</td>
      <td>
    <input type="text" name="session" value="<?php echo $data[15]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Department</td>
<td>
    <input type="text" name="department" value="<?php echo $data[16]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Institute</td>
<td>
    <input type="text" name="institute" value="<?php echo $data[17]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Blood Group</td>
<td>
    <input type="text" name="blood" value="<?php echo $data[18]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Cgpa</td>
<td>
    <input type="text" name="cgpa" value="<?php echo $data[11]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Grade</td>
    <td>
 <input type="text" name="ag" value="<?php echo $data[12]?>">
    </td>
    
  </tr>
  <tr>
    
    <td>Result</td>
    <td>
 <input type="text" name="result" value="<?php echo $data[13]?>">
    <input type="hidden" name="eid" value="<?php echo $data[0]?>">
    </td>
<?php }?> 

</table>
<br>
<tr>
<td>
<input type="submit" name="save" value="Update">
</td>
</tr>
</form>
<!-- end updated form -->
</div>
<!-- end result_data_table div-->
</div>
</div><!-- end row -->
 
</div><!--end main page-->     
</div><!--end main--> 
<?php include('footer.php');?>
</div><!--end container-->

