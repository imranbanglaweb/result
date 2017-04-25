<?php
session_start();
if (isset($_SESSION['semester'])) {
  true;
}
else{
   header("location:index.php");
   exit();
  
}
?>
<?php include 'header.php'; ?>
<body>
 <div class="se-pre-con"></div>
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
<!--<button class="printbutton" onclick="window.print();" />Print</button>-->
</div>
</div>
</div>
</div><!--end row-->


<div class="main-page">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div id="jvmsg">
      <script type="text/javascript">
        var d = new Date();
        var time = d.getHours();

        if (time > 8 & time < 12) 
          {
          document.write("<b>শুভ সকাল...</b>");
          }
        if (time > 12 & time < 6 ) 
          {
          document.write("<b>শুভ অপরাহ্ন!</b>");
          }
        if (time > 12 ) 
          {
          document.write("<b>শুভ sondha!</b>");
          }
        if (time > 8 & time < 2) 
          {
          document.write("<b>শুভ রাত্রি!</b>");
          }
        </script>
    </div>
  <div class="user_info">
  
    <h3 class="cgpa">
    <span class="user_name"><?php echo "Gongratulation ".$_SESSION['username'];?></span>
    <?php echo "You Are ".$_SESSION['results'];?>
    <span class="point"><?php echo "Your CGPA IS ".$_SESSION['cgpa'];?></span>
    </h3>
    
  </div>
  </div>
  <a class="btn2 btn-success" role="button" href="admin3.php">Back To Main Page..</a>
</div>

<!-- end row -->
<div class="row">

  <div class="col-md-offset-4 col-md-4 col-md-offset-4">
  <div class="fulimg">
     <?php
     include("database_connect.php");
     $sqlimg="select * from eleventhsemester  where id={$_SESSION['id']}";
     $resultimg=mysqli_query($con,$sqlimg);
     while($row = mysqli_fetch_row($resultimg)) {?>
       <table>
         <tr>
           <td><?php echo "<img class='img-responsive' src='uploads/$row[14].jpg' height='150px' width='300px'>";?></td>
         </tr>
       </table>
     <?php }?>

  </div>
  </div>
</div>

<!-- start datatable div -->
<div class="row">
<br>
<div class="col-md-12 col-lg-12">

<div id="successMessage">
  <?php 
if (isset($_GET['msg'])) {
  echo "<span class='btn btn-primary' id='myElem'style='color:white'>".$_GET['msg']."</span>";
}
?>
</div>
<br>

<br>

<div class="col-md-12">
<!-- <div class="update_page">
<?php 
include 'database_connect.php';
$table_name="eleventhsemester";
$sqlb="Select * from  $table_name where id={$_SESSION['id']}";
$result=  mysqli_query($con,$sqlb);
while ($data=  mysqli_fetch_row($result)){?>

<?php echo '<a class="btn btn-success" href="update.php?id='.$_SESSION['id'].'">Update</a>'?>
<?php }?> 
</div> -->
<br>
<hr>
<h2 class="btn btn-success text-center">
All Student Result of CSE E-34th</h2>
<br>
<br>
<p style="color:red">Department of CSE Dhaka International University</p>
</div>
<!-- end update_page -->
<br>
<div class="table-responsive result_data_table">
<button type="button" class="btn text-right">
You can Save or Export Your File..
</button>
<table id="myTable" class="display admin" cellpadding="5" style="width:100%" >
    <thead class="bg-success">
     <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Arti</th>
        <th>Ari Lab</th>
        <th>Graphics</th>
        <th>Graphics L</th>
        <th>Parallel</th>
        <th>CGPA</th>
        <th>Ag</th>
        <th>Result</th>
        <th>Photo</th>
    </tr>
</thead>
    <?php 
     include 'database_connect.php';
    global $roll,$batch,$semester;
    $table_name="eleventhsemester";
    $sqlb="Select * from  $table_name order by roll asc";
    $result=  mysqli_query($con,$sqlb);
    while ($data=  mysqli_fetch_row($result)){?>
      <tr>
        <td><?php echo"$data[4]";?></td>
        <td><?php echo"$data[5]";?></td>
        <td><?php echo"$data[6]";?></td>
        <td><?php echo"$data[7]";?></td>
        <td><?php echo"$data[8]";?></td>
        <td><?php echo"$data[9]";?></td>
        <td><?php echo"$data[10]";?></td>
        <td><?php echo"$data[11]";?></td>
        <td><?php echo"$data[12]";?></td>
        <td><?php echo"$data[13]";?></td>
        <td>
        <?php echo "<img class='img-responsive' src='uploads/$data[14].jpg' height='25px' width='50px'>";?>
        </td>
      </tr>
    <?php }?> 
</table>
</div>
<!-- end result_data_table div-->
</div><!-- end row -->
 
</div><!--end main page-->     
</div><!--end main--> 
<?php include('footer.php');?>
</div><!--end container-->

