<?php include'header.php';?>
<body>
<div class="container-fluid">
	<div class="main resigtration">
		<form action="uploadresult.php" id="form1" method="post" name="form1" enctype="multipart/form-data">
			<h2 class="title">Take your Student Information...</h2>
			<!-- registration page confarmation -->
<div class="regpro_page">
<?php
if(isset($_POST['submit'])){
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
    $aicontass 	 = $_POST['aicontass'];
    $aifinal 	 = $_POST['aifinal'];
    $aitotal 	 = $_POST['aitotal'];
    $aigl 		 = $_POST['aigl'];
    $aigp 		 = $_POST['aigp'];
    $ailabcontass = $_POST['ailabcontass'];
    $ailabfinal   = $_POST['ailabfinal'];
    $ailabtotal   = $_POST['ailabtotal'];
    $ailabgl      = $_POST['ailabgl'];
    $ailabgp 	  = $_POST['ailabgp'];
    $graphicscontass = $_POST['graphicscontass'];
    $graphicsfinal   = $_POST['graphicsfinal'];
    $graphicstotal   = $_POST['graphicstotal'];
    $graphicsgl      = $_POST['graphicsgl'];
    $graphicsgp      = $_POST['graphicsgp'];
    $graphicslabcontass	= $_POST['graphicslabcontass'];
    $graphicslabfinal = $_POST['graphicslabfinal'];
    $graphicslabtotal = $_POST['graphicslabtotal'];
    $graphicslabgl    = $_POST['graphicslabgl'];
    $graphicslabgp    = $_POST['graphicslabgp'];
    $parallelcontass  = $_POST['parallelcontass'];
    $paralleltotal    = $_POST['paralleltotal'];
    $parallelfinal    = $_POST['parallelfinal'];
    $parallelgl       = $_POST['parallelgl'];
    $parallelgp       = $_POST['parallelgp'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $result = $_POST['result'];
    $image= $_FILES["imageUpload"];
    $status = "OK";
    $msg = "";
            
        }
global $roll,$semester,$status,$msg,$batch,$semester;
    

if($status=="OK"){
    //Process the image that is uploaded by the user

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
       true;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable
   
    include('database_connect.php');




    require('database_connect.php');

    include('database_connect.php');

  $insert=("INSERT INTO esemester(regno,batch,semester,name,roll','ai','ailab','graphics','graphicslab','parallel','cgpa','ag','result','image','aicontass','aifinal','aitotal','aigl','aigp','ailabcontass','ailabfinal','ailabtotal','ailabgl','ailabgp','graphicscontass','graphicsfinal','graphicstotal','graphicsgl','graphicsgp','graphicslabcontass','graphicslabfinal','graphicslabtotal','graphicslabgl','graphicslabgp','parallelcontass','paralleltotal','parallelfinal','parallelgl','parallelgp','sub1','sub2','sub3','sub4','sub5')VALUE ('$regno','$batch','$semester','$name','$roll','$ai','$ailab','$graphics','$graphicslab','$parallel','$cgpa','$ag','$result','$image','$aicontass','$aifinal','$aitotal','$aigl','$aigp','$ailabcontass','$ailabfinal','$ailabtotal','$ailabgl','$ailabgp','$graphicscontass','$graphicsfinal','$graphicstotal','$graphicsgl','$graphicsgp','$graphicslabcontass','$graphicslabfinal','$graphicslabtotal','$graphicslabgl','$graphicslabgp','$parallelcontass','$paralleltotal','$parallelfinal','$parallelgl','$parallelgp','$sub1','$sub2','$sub3','$sub4','$sub5')");
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
					<td>Regis No</td>
					<td><input id="name" name="regno" placeholder="enter your Reg name.." required=
					"" type="text"></td>
				</tr>
				<tr>
					<td>Batch</td>
					<td><input id="name" name="batch" placeholder="enter your batch name.." required=
					"" type="text"></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td><input id="name" name="semester" placeholder="enter your semester name.." required=
					"" type="text"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input id="name" name="name" placeholder="enter your name.." required=
					"" type="text"></td>
				</tr>
				<tr>
					<td>Roll</td>
					<td><input id="name" name="roll" placeholder="enter your Roll.."
					required="" type="number"></td>
				</tr>
				<tr>
					<td>Artificial</td>
					<td><input id="name" name="ai" placeholder="enter your subject.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Artificial Lab</td>
					<td><input id="name" name="ailab" placeholder="enter your grade.." type="text"></td>
				</tr>
				<tr>
					<td>Computer Graphics</td>
					<td><input id="name" name="graphics" placeholder=
					"enter your grade...." required="" type="text"></td>
				</tr>
				<tr>
					<td>Computer Graphics Lab</td>
					<td><input type="text" id="graphicslab" name="graphicslab" placeholder="enter your grade...."
					required=""></td>
				</tr>
				<tr>
					<td>Parallel</td>
					<td><input id="name" name="parallel" placeholder="enter your subject.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>CGPA</td>
					<td><input id="name" name="cgpa" placeholder="enter your cgpa.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Grade</td>
					<td><input id="name" name="ag" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Result</td>
					<td><input id="name" name="result" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Ai-Cont-Ass</td>
					<td><input id="name" name="aicontass" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-final</td>
					<td><input id="name" name="aifinal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-total</td>
					<td><input id="name" name="aitotal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-gl</td>
					<td><input id="name" name="aigl" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-gp</td>
					<td><input id="name" name="aigp" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-lab-cont-ass</td>
					<td><input id="name" name="ailabcontass" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-lab-final</td>
					<td><input id="name" name="ailabfinal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-lab-total</td>
					<td><input id="name" name="ailabtotal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-lab-gl</td>
					<td><input id="name" name="ailabgl" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>ai-lab-gp</td>
					<td><input id="name" name="ailabgp" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-cont-ass</td>
					<td><input id="name" name="graphicscontass" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-final</td>
					<td><input id="name" name="graphicsfinal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-total</td>
					<td><input id="name" name="graphicstotal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-gl</td>
					<td><input id="name" name="graphicsgl" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-gp</td>
					<td><input id="name" name="graphicsgp" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-lab-cont-ass</td>
					<td><input id="name" name="graphicslabcontass" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-lab-final</td>
					<td><input id="name" name="graphicslabfinal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-lab-total</td>
					<td><input id="name" name="graphicslabtotal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-lab-gl</td>
					<td><input id="name" name="graphicslabgl" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>graphics-lab-gp</td>
					<td><input id="name" name="graphicslabgp" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>parallel-cont-ass</td>
					<td><input id="name" name="parallelcontass" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>parallel-total</td>
					<td><input id="name" name="paralleltotal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>parallel-final</td>
					<td><input id="name" name="parallelfinal" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>parallel-gl</td>
					<td><input id="name" name="parallelgl" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>parallel-gp</td>
					<td><input id="name" name="parallelgp" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>sub1</td>
					<td><input id="name" name="sub1" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>sub2</td>
					<td><input id="name" name="sub2" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>sub3</td>
					<td><input id="name" name="sub3" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>sub4</td>
					<td><input id="name" name="sub4" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>sub5</td>
					<td><input id="name" name="sub5" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Upload your image.</td>
					<td><input id="name" name="imageUpload" placeholder="enter your image.."
					required="" type="file"></td>
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
