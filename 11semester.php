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
    <div id="clockDisplay" class="clockStyle"></div> 
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

</div>
<!-- end update_page -->
<div class="subject">
<h2>You Can View Subject Details...</h2>
  <ul>
    <li>
      <a href="ai.php">
      Artifical & Intellegence
      </a>
    </li>
    <li><a href="ailab.php">
      Artificial & Intellegence Lab</a></li>
    <li><a href="graphics.php">
      Computer Graphics</a></li>
    <li>
      <a href="graphicslab.php">
        Computer Graphics Lab
      </a></li>
    <li><a href="parallel.php">
      Parallel And Distributing
    </a></li>
  </ul>
</div>

<br>
<br>
<br>
<br>
<div class="table-responsive result_data_table">
<button type="button" class="btn text-right">
You can Save or Export Your File..
</button>
<table id="myTable" class="display admin" cellpadding="5" style="width:100%" >
    <thead class="bg-success">
     <tr>
        <th>Batch</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Arti</th>
        <th>Ari Lab</th>
        <th>Graphics</th>
        <th>Graphics L</th>
        <th>Parallel</th>
        <th>CGPA</th>
        <th>Ag</th>
        <th>Result</th><!-- 
        <th>Update</th> -->
    </tr>
</thead>
    <?php 
     include 'database_connect.php';
    global $roll,$batch,$semester;
    $table_name="eleventhsemester";
    $sqlb="Select * from  $table_name where id={$_SESSION['id']}";
    $result=  mysqli_query($con,$sqlb);
    while ($data=  mysqli_fetch_row($result)){?>
      <tr>
        <td><?php echo"$data[2]";?></td>
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
      </tr>
    <?php }?>
    <a class="myButton" href="details.php">Details Information..</a> 
</table>
</div>
<!-- end result_data_table div-->
</div><!-- end row -->
 
</div><!--end main page-->     
</div><!--end main--> 
<?php include('footer.php');?>
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

