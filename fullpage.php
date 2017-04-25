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
<?php include('header.php');?>

<body>
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


<div class="main-page">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div id="jvmsg">
       <script type="text/javascript">
        var d = new Date();
        var time = d.getHours();

        if (time < 12) 
          {
          document.write("<b>শুভ সকাল...</b>");
          }
        if (time > 12) 
          {
          document.write("<b>শুভ অপরাহ্ন!</b>");
          }
        if (time == 12) 
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
</div>
<a class="btn2 btn-success" role="button" href="admin.php">Back To Main Page..</a>
<div class="row">
<br>
<div class="col-md-offset-1 col-md-10 col-md-offset-1">
<br>
<button type="button" class="btn text-right">You can Save or Export Your File..</button>
<br>
<br>
<br>
<br>
<table id="myTable" class="display admin" cellpadding="5" style="width:100%" >
    <thead class="bg-success">
     <tr>
        <th>Batch</th>
        <th>Name</th>
        <th>Roll</th>
        <th>OS</th>
        <th>OS L</th>
        <th>Net</th>
        <th>Net L</th>
        <th>Auto</th>
        <th>S/W</th>
        <th>CGPA</th>
        <th>Re</th>
        <th>Image</th>
    </tr>
</thead>
    <?php 
     include 'database_connect.php';
    global $roll,$semester;
    $table_name="cse34";
    $sqlb="Select * from $table_name";
    $result=  mysqli_query($con,$sqlb);
    while ($data=  mysqli_fetch_row($result))
    {    
    ?>
              <tr>
        <td><?php echo"$data[1]";?></td>
        <td><?php echo"$data[3]";?></td>
        <td><?php echo"$data[4]";?></td>
        <td><?php echo"$data[5]";?></td>
        <td><?php echo"$data[6]";?></td>
        <td><?php echo"$data[7]";?></td>
        <td><?php echo"$data[8]";?></td>
        <td><?php echo"$data[9]";?></td>
        <td><?php echo"$data[10]";?></td>
        <td><?php echo"$data[11]";?></td>
        <td><?php echo"$data[13]";?></td>
<td><?php echo "<img src='uploads/$data[14].jpg' height='40px' width='40px'>";?></td>
        </tr>
    
    
    
    <?php }?>
    
    
</table>

</div>
</div><!-- end row -->
 
</div><!--end main page-->     
</div><!--end main--> 

<?php include('footer.php');?>

</div><!--end container-->



