

<?php


session_start();
if (isset($_SESSION['collegeId']) && $_SESSION['collegeId'] == true) {
   // $welcomeMessage = "Welcome to the member's area, " . $_SESSION['user_id'] . "!";

} else {
    header('Location:Login.php');
}


include_once('Navbar.php');
?>


<?php


require_once("Connection.php");

$sql= "select * from department";
$dataProduct= $conn->query($sql);


?>
<head>



	<style>

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
				
			                document.getElementById("semester").innerHTML = this.responseText;
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
				 
                document.getElementById("subject").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser1.php?sem_no="+str,true);
		
        xmlhttp.send();
		
		
		
		
    }
}

</script>

	
	
</head>

<body>



<br><br><div class="container">
	<div class="card-panel hoverable #fafafa grey lighten-5">
	
		<div class="row">
			<h4 style="color:#e85a50" class="truncate"><U>Download PPT and Materials</U> </h4>
			
			
			
  		<br><br><label>Select Dept</label>
		
  		<form action="Student_1DownPPT.php"  method="POST"> <input type="hidden" name="" value="">
		
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

	
    	<br><label>Select Semester</label>
  		<select class="browser-default" name="semester" id="semester" onchange="showUser1(this.value)"  required>
    		<option value="" disabled selected>Choose your Semester</option>
    		
			
    	</select>
		

		
		
		<br><label>Select Subject</label>
  		<select class="browser-default" name="subject" id="subject" required>
    		<option value="" disabled selected>Choose your Subject</option>
    		
    	</select>
		
		
		
    		<br>
  			<button class="btn #d84315 deep-orange darken-3"  id="submit" type="submit" name="submit">
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