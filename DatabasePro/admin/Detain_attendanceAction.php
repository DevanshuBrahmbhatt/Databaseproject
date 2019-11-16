
<style>
body{
		
		font-family: 'Lexend Deca', sans-serif;
		font-size:20px;
	}

	.nav-extended{
		
		background:#e85a50;
	}
	
	.goback{
		margin-left:5px !important;
		
		
	}
	#back{
		
		background:#373F51;
	}
	
	</style>
	
<nav class="nav-extended">

      <div class="nav-wrapper">
        <a href="index.php" style="color:#eae8dc"  class="brand-logo">&nbsp &nbsp  StudentCloud</a>
        <a href="#"  class="button-collapse" class="sidenav-trigger" data-target="slide-out"  data-activates="mobile-demo" ><i class="material-icons" aria-hidden="true">menu</i></a>
	<!---	  <a href="#"  ><i class="fa fa-bars" ></i></a>-->

      <!--      <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Nadidad</a></li>
              <li><a href="#!">Vadodara</a></li>
              <li><a href="#!">Ahemdabad</a></li>
            </ul> 

           <!--- <ul id="dropdown2" class="dropdown-content">
              <li><a href="#!">Nadidad</a></li>
              <li><a href="#!">Vadodara</a></li>
              <li><a href="#!">Ahemdabad</a></li>
            </ul>  -->


        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../index.php" style="color:#eae8dc" >Home</a></li>
          <li><a href="../LogOut.php" style="color:#eae8dc" >LogOut</a></li>
		<!--    <li><a href="SignUp.php" style="color:#eae8dc" >SignUp</a></li>-->
       <!--   <li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true" data-activates="dropdown2" onmouseover="drop()">CITIES<i class="material-icons right">arrow_drop_down</i></a></li>-->
  	    <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
        </ul>

        <ul class="side-nav" id="mobile-demo">
          <li><a href="../index.php"style="color:#e85a50" >Home</a></li>
       
		   <li><a href="../LogOut.php" style="color:#e85a50" >LogOut</a></li>
		<!--    <li><a href="SignUp.php" style="color:#e85a50" >SignUp</a></li>-->
      <!--      <li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true"  data-activates="dropdown1" onmouseover="drop()">CITIES<i class="material-icons right">arrow_drop_down</i></a></li>-->
          <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
        </ul>

		<div class="show"><br></div>
		
		
		
	</div>

</nav>




<body>
<?php
require_once "Classes/PHPExcel.php";

include '../Connection.php';



if(isset($_POST['submit']))
	{
		
	$department=$_POST['department'];
	$semester=$_POST['semester'];
			
	 $subject = $_POST['subject'];
	 
	$exam_type=$_POST['exam_type'];
	
	$f_id=$_POST['f_id'];
	
	$myfile=$_POST['myfile'];
	
	$tc=$_POST['tc'];

	$tl=$_POST['tl'];






		$tmpfname = $myfile;
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
	
		
		echo "<table boreder=1>";
		
		for ($row = 6; $row <= $lastRow-5; $row++) {
		
			
			$roll_no= $worksheet->getCell('A'.$row)->getValue();
			 $student_id= $worksheet->getCell('B'.$row)->getValue();
			 $name=$worksheet->getCell('C'.$row)->getValue();
			 $marks=$worksheet->getCell('D'.$row)->getValue();
			 $class=$worksheet->getCell('E'.$row)->getValue();
			 $lab=$worksheet->getCell('F'.$row)->getValue();
			
			
			 
			 
			 $sql="insert into excel  (roll_no,student_id,name,marks,class,lab)
 values('$roll_no','$student_id','$name','$marks','$class','$lab')";
 
 
if($conn->query($sql)==TRUE)
{

}
 else {
     echo "error to create database ". $conn->error;
}



			 
		}
		
		/*Complete Insertion of excel file*/
		
		
?>

 <div class="row">
		 
		 
		 
			<div class="col s12">
			
			
			<div id="information">
			<h5 align="center">DharmSinh Desai University</h5>
			<h6 align="center">Faculty Of Technology</h6>
			<h6 align="center">Semester <?php echo "$semester";  ?></h6>
			<h6 align="center">Sessional <?php echo "$exam_type";  ?></h6>
			<h6 align="center">Attendance Report Of Detain Students <?php echo "$subject";  ?></h6>
			<h6 align="center">Total Hours <?php echo "$tc+$tl";  ?></h6>
			</div>	
		 
		 
		 
        <table  class="striped bordered responsive-table #e85a50" >
		
			
		
			<thead>
			
				<th> Roll_no</th>
				<th> Student_id </th>
				<th> Name</th>
				<th> ClassAttendance </th>
				<th> LabAttendance </th>
				<th> Send Remiander</th>
			</thead>
			
			<tbody>


	
            
<?php		
		
		
		
$sql1="select roll_no,student_id,name,marks,class,lab,phone from excel INNER join signup on excel.student_id=signup.collegeId";
//$sql1="select *from excel ";

	$result=$conn->query($sql1);
	
	
   if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
		
		
		//$class=".$row["class"].";
		$lab=$row["lab"];
		$class=$row["class"];
		
		
		$att_stu=$lab+$class; //student attendance
		
		$total=$tc+$tl; //total attendance
		
		$final_total=$att_stu/$total;
		
		
		
		
		if( $final_total>0.1 && $final_total <0.5  ){
		
		echo ""
        . "<tr>"
        . "<td>".$row["roll_no"]."</td>"
        . "<td>".$row["student_id"]."</td>"
        . "<td>".$row["name"]."</td>"
		 . "<td>".$row["class"]."</td>"
		  . "<td>".$row["lab"]."</td>"
		
		. "<td>".'<a href="DetainMessage.php?phone='.$row['phone'].'" class="btn #d84315 deep-orange darken-3" role="button">Send Message</a>'."</td>"
        . "</tr>";
        }
		
		
		
		}
        
		
		 echo "</tbody> ";
		
		        echo "</table> ";
				
				 
        
	
	
		
	
	}
	
$sql3="truncate table excel";
$conn->query($sql3);
$conn->close();



	}
		?>
		

</body>
</html>