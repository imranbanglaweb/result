<?php include'header.php';?>
<body>
<div class="container-fluid">
	<div class="main resigtration">
		<form action="registration.php" id="form1" method="post" name="form1" enctype="multipart/form-data">
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
    $result = $_POST['result'];
    $image= $_FILES["imageUpload"];
    $session= $_POST["session"];
    $department= $_POST["department"];
    $institute= $_POST["institute"];
    $blood= $_POST["blood"];
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

        $insert=("INSERT INTO eleventhsemester(
        	regno,
        	batch,
        	semester,
        	name,
        	roll,
        	ai,
        	ailab,
        	graphics,
        	graphicslab,
        	parallel,
        	cgpa,
        	ag,
        	result,
        	imgshow,
        	session,
        	department,
        	institute,
        	blood
        	)
        	VALUE (
        	'$regno',
        	'$batch',
        	'$semester',
        	'$name',
        	'$roll',
        	'$ai',
        	'$ailab',
        	'$graphics',
        	'$graphicslab',
        	'$parallel',
        	'$cgpa',
        	'$ag',
        	'$result',
        	'$image',
        	'$session',
        	'$department',
        	'$institute',
        	'$blood'
        	)");
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
					<td>Registration No</td>
					<td><input name="regno" placeholder="enter your reg name.." required=
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
					<td>Session</td>
					<td><input name="session" placeholder="enter your session.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input name="department" placeholder="enter your department.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Institute</td>
					<td><input name="institute" placeholder="enter your password.."
					required="" type="text"></td>
				</tr>
				<tr>
					<td>Blood Group</td>
					<td><input name="blood" placeholder="enter your Blood Group.."
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
