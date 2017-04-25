<?php
session_start();
ob_start();
?>
<?php include 'header.php';?>
<body>

<div class="se-pre-con">
	
</div>
<div class="main_containers">
	
    <h1 class="title">
        Welcome To Diu Result Page
    </h1>


    <div class="title_logo">
        <a href="index.php"><img src="images/logo.png"></a>
        <br>
    </div>
 <!--    <img class="animated-result" src="images/animatedtext.gif"> -->
    <form id="form1" name="form1" method="post" action="index.php">
        <h4 id="shake">**To View your result must put in valid roll and Semester**</h4>
        <div id="successMessage">
              <?php 
            if (isset($_GET['msg'])) {
              echo "<span class='logout_msg' id='myElem'>".$_GET['msg']."</span>";
            }
            ?>
        </div>
        <?php
        global $roll,$semester,$subject,$status,$msg;
        if(isset($_POST['roll']) && $_POST['semester'] && $_POST['regno'] ){
            $roll=$_POST['roll'];
            $regno=$_POST['regno'];
            $semester=$_POST['semester'];
            $status = "OK";
            $msg="";
        }
           
         if($status=="OK"){

            include("database_connect.php");
            $table_name="10semester";
            $insert="SELECT * FROM $table_name WHERE roll='$roll' and semester='$semester'";
            $results=mysqli_query($con,$insert);

            $count=mysqli_num_rows($results);

            if($count==1){

                $row = mysqli_fetch_array($results);

                $_SESSION['id']= $row['id'] ;
                $_SESSION['subject']= $row['subject'] ;
                $_SESSION['semester']= $row['semester'] ;
                $_SESSION['username']= $row['sname'] ;
                $_SESSION['cgpa']= $row['sgpa'] ;
                $_SESSION['results']= $row['result'] ;
                $_SESSION['images']= $row['imgshow'] ;
                header("location:admin2.php");
				ob_end_flush();
 
            }
           
            //11semester
            include("database_connect.php");
            $table_name="eleventhsemester";
            $insert="SELECT * FROM $table_name WHERE roll='$roll' and semester='$semester' and regno='$regno'";
            $results=mysqli_query($con,$insert);
            $count3=mysqli_num_rows($results);
               if($count3==1){

                $row = mysqli_fetch_array($results);

                $_SESSION['id']= $row['id'] ;
                $_SESSION['roll']= $row['roll'] ;
            $_SESSION['semester']= $row['semester'] ;
                $_SESSION['username']= $row['name'] ;
                $_SESSION['cgpa']= $row['cgpa'] ;
                $_SESSION['results']= $row['result'] ;
                $_SESSION['imgshow']= $row['imgshow'] ;
                header("location:admin3.php");
                ob_end_flush(); 

                }
            //end 11semester
            include("database_connect.php");
            $table_name="cse34";
            $insert2="SELECT * FROM $table_name WHERE Roll='$roll' and semester='$semester'";
            $results2=mysqli_query($con,$insert2);

            $count2=mysqli_num_rows($results2);
            

               if($count2==1){

                $row = mysqli_fetch_array($results2);

                $_SESSION['id']= $row['id'] ;
                $_SESSION['semester']= $row['semester'] ;
                $_SESSION['username']= $row['sname'] ;
                $_SESSION['cgpa']= $row['sgpa'] ;
                $_SESSION['results']= $row['result'] ;
                $_SESSION['images']= $row['imgshow'] ;
                header("location:admin.php");
				ob_end_flush(); 
            }
            else {
                echo "<h3 class='error'>*wrong roll or semester Search again..**</h3>";

            }
        }
        else {
            echo $msg;
        }

        ?>
        <p>
            <label class="roll">
<!--                <br>-->
<!--                <br>-->
                Roll
                <br>
                <br>
                <i class="fa fa-user">
                </i>
                <input  class="test" title="type your roll"  placeholder="enter your roll..." name="roll" type="text" required id="email"/>
            </label>
        </p>

        <p>
            <label class="regno">
                Reg No
                <br>
                <br>
                <i class="fa fa-user">
                </i>
                <input  class="test" title="type your regno"  placeholder="enter your regno..." name="regno" type="text" required id="name"/>
            </label>
        </p>
  
         <p>
            <label>
                Semester
                <br><br>
                <i class="fa fa-lock">
                </i>
                <select name="semester" required id="semester">
                    <option value="selected">
                    Select
                    </option>
                    <option value="9th">
                    9th
                    </option>
                    <option value="10th">
                    10th
                    </option>
                    <option value="11th">
                    11th
                    </option>
                    <option value="12th">
                    12th
                    </option>
                </select>
            </label>
        </p>
        <p>
    <input id="btn" type="submit" name="Submits" value="submit" />


        </p>

    </form>
    <!-- <br>
    <p>Upload Your Subject wise Marks..</p>
		<a id="regis" href="registration.php">Upload.</a>
        <a id="regis" href="ai_insert.php">AI</a> 
        <a id="regis" href="ailab_insert.php">AI-Lab</a> 
        <a id="regis" href="g_insert.php">G</a> 
        <a id="regis" href="glab_insert.php">G-L</a> 
        <a id="regis" href="parallel_insert.php">Para</a> 
    <br>
    <br>  --> 
 <p style="text-align:center;color:black">This Website Developed and  &copy; Copy Right By Imran</p>
</div><!--end main page-->     
</div><!--end main--> 
</div><!--end container-->
<!-- main jquery -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
   </script>
<script src="js/jquery-1.11.3.min.js"></script>

<!-- this id modal -->
  <script>
 $(document).ready(function(){
    $( "#myModal" ).hover(function() {
           $('.modal').modal({
        show: true
    });
  });  
});
</script>
<!-- this is modal -->

   <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"></script>')
    </script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script type="text/javascript">
     $(window).on( 'resize', function () {
  console.log( 'Resize', $(window).width(), $(window).height() );
} );
   </script>

   <script src="js/classie.js"></script>
    <script src="js/svgLoader.js"></script>
    <script>
      (function() {
        var pageWrap = document.getElementById( 'pagewrap' ),
          pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
          currentPage = 0,
          triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
          loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 300, easingIn : mina.easeinout } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loader.show();
              // after some time hide loader
              setTimeout( function() {
                loader.hide();

                classie.removeClass( pages[ currentPage ], 'show' );
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 2000 );
            } );
          } );  
        }

        init();
      })();
    </script>

<script src="js/main.js"></script>
 <!-- data table -->
      <script src="js/jquery-1.11.3.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
        href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="//cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css" />




<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</body>
</html>
</div>	  



