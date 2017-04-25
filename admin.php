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
<div id="fakeLoader"></div>
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
	<div class="col-lg-9 col-md-10 col-sm-10 col-xs-12">
	<div class="user_info">
		<h3 class="cgpa">
		<span class="user_name"><?php echo "Gongratulation ".$_SESSION['username'];?></span>
		<?php echo "You Are ".$_SESSION['results'];?>
		<span class="point"><?php echo "Your CGPA IS ".$_SESSION['cgpa'];?></span>
		<hr>
		</h3>
	</div>
	</div>
	<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
	<div class="img_display">
	   <?php
	   include("database_connect.php");
	   $sqlimg="select * from cse34  where id={$_SESSION['id']}";
	   $resultimg=mysqli_query($con,$sqlimg);
	   while($row = mysqli_fetch_row($resultimg)) {?>
		   <table>
			   <tr>
				   <td><?php echo "<img src='uploads/$row[14].jpg' height='150px' width='300px'>";?></td>
			   </tr>
		   </table>
	   <?php }?>

	</div>
	</div>
	<hr>

</div>
<div class="main-page">
<h4 class="text-center title-semester">Your Ninth(9) Semester Result</h4>
<hr class="line">
<div class="row">

<div class="display_result">
<div class="col-md-4">
 <?php
    include 'database_connect.php';
    global $roll,$batch;
    $table_name="cse34";
    $sqlb="Select * from  $table_name WHERE  id={$_SESSION['id']}";

    $results = mysqli_query($con,$sqlb);


        while($data=mysqli_fetch_array($results)){?>
            <div class="content_l">
                <ul class="table_menu">
                    <li><a href="">Batch</a></li>
                    <li><a href="">Semester</a></li>
                    <li><a href="">Name</a></li>
                    <li><a href="">Roll</a></li>
                    <li><a href="">Operating System</a></li>
                    <li><a href="">Operating System Lab</a></li>
                    <li><a href="">Computers Network</a></li>
                    <li><a href="">Computers Network Lab</a></li>
                    <li><a href="">Theory of Computing</a> </li>
                    <li><a href="">Software Engineering</a></li>
                </ul>
            </div><!--end content_l -->
</div>
<div class="col-md-8">
            <div class="content_r">
                <ul class="r_table_menu">
                    <li><a href=""><?php echo"$data[1]";?></a> </li>
                    <li><a href=""><?php echo"$data[2]";?></a> </li>
                    <li><a href=""><?php echo"$data[3]";?></a> </li>
                    <li><a href=""><?php echo"$data[4]";?></a> </li>
                    <li><a href=""><?php echo"$data[5]";?></a> </li>
                    <li><a href=""><?php echo"$data[6]";?></a> </li>
                    <li><a href=""><?php echo"$data[7]";?></a> </li>
                    <li><a href=""><?php echo"$data[8]";?></a> </li>
                    <li><a href=""><?php echo"$data[9]";?></a> </li>
                    <li><a href=""><?php echo"$data[10]";?></a> </li>
                </ul>
            </div><!-- end r_content -->
        <?php }?>
</div>
   


</div> <!-- end display_result -->

</div>
<!-- puran table -->

       <br>
       <br>
	   <!-- Model start display-->
			<!-- Trigger the modal with a button -->
		  <button type="button" class="btn3 btn-lg text_center" data-toggle="modal" data-target="#myModal">See your full Information...</button>
		  <br>
		  <br>
		  <!-- Modal -->
		  <div class="row">
			  <div class="modal fade slide right my-modal-style" id="myModal" tabindex="-1" role="dialog"aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  
				</div>
				<div class="modal-body">
				 		<div class="main-page">
			
					<h3 class="cgpa2">
		<?php echo "Gongratulation ".$_SESSION['username'];?>
		<?php echo "You Are ".$_SESSION['results'];?>
		<span class="point"><?php echo "Your CGPA IS ".$_SESSION['cgpa'];?></span>
		<hr>
		</h3>

			<div class="img_display img_style">
					<?php
					include("database_connect.php");
					$sqlimg="select * from cse34 where id={$_SESSION['id']}";
					$resultimg=mysqli_query($con,$sqlimg);
					while($row = mysqli_fetch_row($resultimg)) {?>
					<table>
						<tr>
							<td><?php echo "<img src='uploads/$row[14].jpg' height='150px' width='300px'>";?></td>
						</tr>
					</table>
					<?php }?>

				</div>
			<table class="admin">
			
				<?php
					include 'database_connect.php';
$sql="Select * from  cse34 where id={$_SESSION['id']}";
					if(isset($_POST['search'])){
						$search_term=mysql_real_escape_string($_POST['search_input']);
						$search_term=preg_replace("#[^0-9a-z]#i","",$search_term);
						$sql ="select * from info where name LIKE '%$search_term%'
						or batch LIKE '%$search_term%' or roll LIKE '%$search_term%'
						or email LIKE '%$search_term%'
						";

					}
					  elseif(isset($_POST['search'])){
						  $search_term=mysql_real_escape_string($_POST['search_input']);
						$search_term=preg_replace("#[^0-9a-z]#i","",$search_term);
						  $sql ="select * from info like '%$search_term%'";

						echo "no result found";
					}
					$result = mysqli_query($con,$sql);
					while($data=mysqli_fetch_row($result)){?>
				<tr>
					<td>Batch</td>
					<td>Name</td>
					<td>Roll</td>
					<td>Computer Operating System</td>
					<td>Computer Operating System Lab</td>
					<td>Computer Networks</td>
					<td>Computer Networks Lab</td>
					<td>Theory Of Computing</td>
					<td>Software Engineering</td>
					<td>CGPA</td>
					<td>GRADE</td>
					<td>Result</td>
				</tr>
				<tr class="update_table">
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
				<td><?php echo"$data[12]";?></td>
				<td><?php echo"$data[13]";?></td>
				</tr>
				<?php }?>
			</table>
			<hr>
		</div>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
		  </div>
		  <!-- end Modal -->
		  </div>

    <br>
   </tr>
       <br>
       
       <a class="btn text-xs-left btn-success" href="fullpage.php">Full Student Information..</a>
       <br>
       <hr>
       <hr>
       <hr>
       <hr>
  

 
</div><!--end main page-->     
</div><!--end main--> 
<?php include 'footer.php'; ?>
</div><!--end container-->

  <!-- this is modal -->

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
	 </script>

	 <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"></script>')
	  </script>
 <!-- end  is modal --> 
     


