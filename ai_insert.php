<?php include'header.php';?>
<body>
<div class="container-fluid">
	<div class="main resigtration">
		<form action="ai_insert.php" id="form1" method="post">
<h2 class="title">
Added your Artificial & Intelligence Course Marks...
</h2>
			<!-- registration page confarmation -->
<div class="regpro_page">
<?php
if(isset($_POST['submit'])){
    $roll     = $_POST['roll'];
    $name     = $_POST['name'];
    $subject  = $_POST['subject'];
    $contass  = $_POST['contass'];
    $final    = $_POST['final'];
    $total 	  = $_POST['total'];
    $gl 	  = $_POST['gl'];
    $gp       = $_POST['gp'];
    $status   = "OK";
    $msg = "";
            
        }
global $roll,$semester,$status,$msg,$batch,$semester;
    

if($status=="OK"){

    include('database_connect.php');

        $insert=("INSERT INTO ai(
        	roll,
        	name,
        	subject,
        	contass,
        	final,total,
        	gl,
        	gp)
        	VALUE(
        	'$roll',
        	'$name',
        	'$subject',
        	'$contass',
        	'$final',
        	'$total',
        	'$gl',
        	'$gp')");
    $sql=mysqli_query ($con,$insert);

    echo "<p style='color:green;font-size:18px;text-align:center;margin:0 auto; display:block'>".'Thank You '.$name.' Your result successfully Completed'.'<br>'.'<a href="index.php">Back to Login Page</a>'."</p>";
}

else{// display the error message
echo "<center><font face='Verdana' size='8' color=red>$msg</font></center>";

}

?>

			<h3 class="btns"><a href="index.php">Back to Log in page</a></h3>
			<table>
				<tr>
					<td>Roll</td>
					<td><input id="name" name="roll" placeholder="enter your Roll.." required=
					"" type="number"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input id="name" name="name" placeholder="enter your Name.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Subject</td>
					<td><input id="name" name="subject" placeholder="enter your subject.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Cont Ass</td>
					<td><input id="name" name="contass" placeholder="Enter your marks.." type="text"></td>
				</tr>
				<tr>
					<td>Final Marks</td>
					<td><input id="name" name="final" placeholder=
					"Enter your marks...." required="" type="text"></td>
				</tr>
				<tr>
					<td>Total Marks</td>
					<td><input type="text" id="total" name="total" placeholder="enter your Marks...."
					required=""></td>
				</tr>
				<tr>
					<td>Grade</td>
					<td><input id="name" name="gl" placeholder="enter your grade.."
					required="" type="text"></td>
				</tr>

				<tr>
					<td>CGPA</td>
					<td><input id="name" name="gp" placeholder="enter your cgpa.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td></td>
					<td><input name="submit" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
		</div>
		</div>

</div><!-- end registration page confarmation -->
</div>

</div>
<?php include('footer.php');?>
</div>
<!-- end main container div -->
