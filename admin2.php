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
		<hr>
		</h3>
	</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<div class="img_display">
	   <?php
	   include("database_connect.php");
	   $sqlimg="select * from 10semester  where id={$_SESSION['id']}";
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

 <a class="btn text-xs-left btn-success" href="fullpage2.php">
<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>
 You can download or Print your result..</a>
<h4 class="text-center title-semester">Your Tenth(10) Semester Result</h4>
<hr class="line">
<div class="row">

<div class="display_result">
<div class="col-md-4">
 <?php
    include 'database_connect.php';
    global $roll,$batch,$semester;
    $table_name="10semester";
    $sqlb="Select * from  $table_name WHERE  id={$_SESSION['id']}";

    $results = mysqli_query($con,$sqlb);


        while($data=mysqli_fetch_array($results)){?>
            <div class="content_l">
                <ul class="table_menu">
		            <li><a href="">Batch</a></li>
		            <li><a href="">Semester</a></li>
		            <li><a href="">Name</a></li>
		            <li><a href="">Roll</a></li>
		            <li><a href="">Compiler Design</a></li>
		            <li><a href="">Compiler Design Lab</a></li>
		            <li><a href="">Peripherals & Interfacing</a></li>
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
					$sqlimg="select * from 10semester where id={$_SESSION['id']}";
					$resultimg=mysqli_query($con,$sqlimg);
					while($row = mysqli_fetch_row($resultimg)) {?>
					<table>
						<tr>
							<td><?php echo "<img class='img-responsive' src='uploads/$row[14].jpg' height='150px' width='300px'>";?></td>
						</tr>
					</table>
					<?php }?>

				</div>
			<table class="admin">
			
				<?php
					include 'database_connect.php';
$sql="Select * from  10semester where id={$_SESSION['id']}";
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
					
					<td>Name</td>
					<td>Roll</td>
					<td>Compiler Design</td>
					<td>Compiler DesignLab</td>
					<td>Peripheras and Interfacing</td>
					<td>Peripheras and Interfacing Lab</td>
					<td>Ecommerce and Web Engineering</td>
					<td>Ecommerce and Web Engineering Lab</td>
					<td>CGPA</td>
					<td>GRADE</td>
					<td>Result</td>
				</tr>
				<tr class="update_table">
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
       
 <br>
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

