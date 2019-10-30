<?php
include_once('Navbar.php');
?>


<?php


require_once("Connection.php");

$sql= "select * from department";
$dataProduct= $conn->query($sql);





?>

<head>

	<style>
	

.z-depth-2{
	
	background:#eae8dc;
}
.select{
	
	color:#e85a50;
}


	</style>
	
	
	
		
		<script>
		function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?d_no="+str,true);
        xmlhttp.send();
    }
}

function showUser1(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser1.php?d_no="+str,true);
        xmlhttp.send();
    }
}

		</script>

</head>

<body>



<br><div class="container">
	<div class="card-panel hoverable #fafafa grey lighten-5">
	
		<div class="row">
			<h4  style="color:#e85a50" class="truncate"><U>Get Your Papers</U> </h4>
			
			
			
  		<br><br><label>Select Dept</label>
  		<form id="form"  action="#"  method="POST"> 
		
  		<select class="browser-default" id="department" name="department" onchange="showUser(this.value)" required>
    		<option  value="" disabled selected>Choose your Dept</option>
    	<?php
							if($dataProduct!=null) {
										
										foreach($dataProduct as $d=>$c) {
										echo "<option value='" .$c["d_no"]  ."'> ".$c["d_name"]."</option>\n";
										
											
										}
									}
									
							
						
							
						
		?>
	
	  		</select>
			<div id="txtHint"><b>Person info will be listed here...</b></div>

			
		
  
    	<br><label>Select Semester</label>
  		<select class="browser-default" name="semester" onchange="showUser1(this.value)" required>
    		<option value="" disabled selected>Choose your Semester</option>
    		<?php
			
			
			//$d_no = intval($_GET['d_no']);
			//$sql= "select * from semester whrere d_no='$d_no'  ";
			$dataProduct1= $conn->query($sql);
			
			
			
			
			
							if($dataProduct1!=null) {
										
										foreach($dataProduct1 as $d=>$c) {
											echo "<option value='" .$c["sem_no"]  ."'> ".$c["semester"]."</option>\n";
										}
									}
		?>
			
    	</select>
		

		
		
		<br><label>Select Subject</label>
  		<select class="browser-default" name="gender" required>
    		<option value="" disabled selected>Choose your Subject</option>
    		<option value="1">Java</option>
    		<option value="2">Dbms</option>
			<option value="2">Amp</option>
			<option value="2">Tafl</option>
			<option value="2">Daa</option>
			<option value="2">Security</option>
			
    	</select>
		
		
		
		
    	<br><label>Select Exam-type</label>
  		<select class="browser-default" name="gender" required>
    		<option value="" disabled selected>Choose your Exam-type</option>
    		<option value="E1">Sessional-1</option>
    		<option value="E2">Sessional-2</option>
			<option value="E2">Sessional-3</option>
			<option value="E2">External</option>
			<option value="E2">Remedial</option>
			<option value="E2">ReRemedial</option>
    	</select>
		
    		<br>
  			<button class=" btn #d84315 deep-orange darken-3" id="submit" type="submit" name="submit">
  				  Get
  			</button>     <br><br> 
		</form>
		</div>
		
	</div>
		<br><br>	
</div>






<script>

     
      $(document).ready(function() {
    $('select').material_select();
	
  });
    $('select').material_select('destroy');

</script>

</body>



<?php
include_once('Footer.php');
?>