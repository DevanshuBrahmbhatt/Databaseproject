<?php
include_once('Navbar.php');
?>

<head>

	<style>

	</style>
	
</head>

<body>



<br><br><div class="container">
	<div class="card-panel hoverable #fafafa grey lighten-5">
	
		<div class="row">
			<h4 style="color:#e85a50" class="truncate"><U>Download PPT and Materials</U> </h4>
			
			
			
  		<br><br><label>Select Dept</label>
  		<form action="Student_1DownPPT.php"  method="POST"> <input type="hidden" name="" value="">
  		<select class="browser-default" name="range" required>
    		<option value="" disabled selected>Choose your Dept</option>
    		<option value="D1">Computer</option>
    		<option value="D2">IT</option>
    		<option value="D3">Chemical</option>
			<option value="D4">Mech</option>
			<option value="D5">IC</option>
	  		</select>
  
    	<br><label>Select Semester</label>
  		<select class="browser-default" name="gender" required>
    		<option value="" disabled selected>Choose your Semester</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
			<option value="2">3</option>
			<option value="2">4</option>
			<option value="2">5</option>
			<option value="2">6</option>
			
    	</select>
		
		
		
    	<br><label>Select Faculty_Name</label>
  		<select class="browser-default" name="gender" required>
    		<option value="" disabled selected>Choose Faculty_Name</option>
    		<option value="E1">MMG</option>
    		<option value="E2">HBP</option>
			<option value="E2">JVM</option>
			<option value="E2">YLP</option>
			<option value="E2">SRS</option>
			<option value="E2">RMR</option>
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