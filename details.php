<?php
session_start();
if (isset($_SESSION['semester'])) {
true;
}
else{
 header("location:index.php");
 ob_end_flush();
}
?>
<?php include 'header.php';?>
<body class="demo">
<div class="se-pre-con"></div>
<div class="container-fluid">

<div class="main">
<div class="row">
<div class="top_header">
<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
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

<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
<div id="clockDisplay" class="clockStyle"></div> 
 <div id="jvmsg">
   <script type="text/javascript">
    var d = new Date();
    var time = d.getHours();

    if (time > 8 & time < 12) 
      {
      document.write("<b>শুভ সকাল...</b>");
      }
    if (time > 12) 
      {
      document.write("<b>শুভ রাত্রি!</b>");
      }
    </script>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<div class="img_display">
   <?php
   include("database_connect.php");
   $sqlimg="select * from  eleventhsemester  where id={$_SESSION['id']}";
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
<hr>

</div>
<div class="main-page">

<a class="btn text-xs-left btn-success" href="admin3.php">
<i class="fa fa-home"></i>
Home Page..</a>
<h3 class="text-center title-semester">Your 11 Semester Result</p>
<p>Department of CSE Dhaka International University</h5>
<hr class="line">
    <div id="successMessage">
              <?php 
            if (isset($_GET['msg'])) {
              echo "<span class='logout_msg' id='myElem'>".$_GET['msg']."</span>";
            }
            ?>
        </div>
<p>
<a class="ubutton" href="update.php?id=<?php echo $_SESSION['id']; ?>"> 
<i class="fa fa-edit"></i> Edit..</a>
</p>
<br>
<br>
<br>
<div class="row">

<div class="display_result">
<div class="col-md-4">
<?php
include 'database_connect.php';
global $roll,$batch,$semester;
$table_name="eleventhsemester";
$sqlb="Select * from  $table_name WHERE  id={$_SESSION['id']}";
$results = mysqli_query($con,$sqlb);

while($data=mysqli_fetch_array($results)){?>

<div class="content_l">
    <ul class="table_menu">
        <li><a href="">Batch</a></li>
        <li><a href="">Semester</a></li>
        <li><a href="">Name</a></li>
        <li><a href="">Roll</a></li>
        <li><a href="">Reg</a></li>
        <li><a href="">Artificial & Intelligence</a></li>
        <li><a href="">Artificial & Intelligence Lab</a></li>
        <li> <a href="">Computer Graphics</a></li>
        <li><a href="">Computer Graphics Lab</a></li>
        <li><a href="">Parallel</a></li>
        <li><a href="">Session</a></li>
        <li><a href="">Department</a></li>
        <li><a href="">Institute</a></li>
        <li><a href="">Blood</a></li>
        <li><a href="">Year</a></li>
        <li><a href="">Date</a></li>
        <li><a href="">CGPA</a></li>
        <li><a href="">Grade</a></li>
        <li><a href="">Result</a></li>
    </ul>
</div><!--end content_l -->
</div>
<div class="col-md-8">
    <div class="content_r">
        <ul class="r_table_menu">
            <li><a href=""><?php echo"$data[2]";?></a> </li>
            <li><a href=""><?php echo"$data[3]";?></a> </li>
            <li><a href=""><?php echo"$data[4]";?></a> </li>
            <li><a href=""><?php echo"$data[5]";?></a> </li>
            <li><a href=""><?php echo"$data[1]";?></a> </li>
            <li><a href=""><?php echo"$data[6]";?></a> </li>
            <li><a href=""><?php echo"$data[7]";?></a> </li>
            <li><a href=""><?php echo"$data[8]";?></a> </li>
            <li><a href=""><?php echo"$data[9]";?></a> </li>
            <li><a href=""><?php echo"$data[10]";?></a> </li>
            <li><a href=""><?php echo"$data[15]";?></a> </li>
            <li><a href=""><?php echo"$data[16]";?></a> </li>
            <li><a href=""><?php echo"$data[17]";?></a> </li>
            <li><a href=""><?php echo"$data[18]";?></a> </li>
            <li><a href=""><?php echo"$data[19]";?></a> </li>
            <li><a href=""><?php echo date("d-m-Y");?></a> </li>
            <li><a href=""><?php echo"$data[11]";?></a> </li>
            <li><a href=""><?php echo"$data[12]";?></a> </li>
            <li><a href=""><?php echo"$data[13]";?></a> </li>

        </ul>
    </div><!-- end r_content -->
    <?php }?>
</div>



</div> <!-- end display_result -->

</div>
<!-- puran table -->
   <br>
   <hr>
</div><!--end main page-->     
</div><!--end main--> 
<?php include 'footer.php'; ?>
<!-- <?php
echo '<script type="text/javascript">alert("Gongratulation '. $_SESSION['username'] .' You are passed");</script>';
?> -->

<script>
function renderTime() {
var currentTime = new Date();
var diem = "AM";
var h = currentTime.getHours();
var m = currentTime.getMinutes();
var s = currentTime.getSeconds();
setTimeout('renderTime()',1000);
if (h == 0) {
	h = 12;
} else if (h > 12) { 
	h = h - 12;
	diem="PM";
}
if (h < 10) {
	h = "0" + h;
}
if (m < 10) {
	m = "0" + m;
}
if (s < 10) {
	s = "0" + s;
}
var myClock = document.getElementById('clockDisplay');
myClock.textContent = h + ":" + m + ":" + s + " " + diem;
myClock.innerText = h + ":" + m + ":" + s + " " + diem;
}
renderTime();
</script>
</div><!--end container-->

<!-- this is modal -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
 </script>

 <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"></script>')
  </script>
<!-- end  is modal -->  

