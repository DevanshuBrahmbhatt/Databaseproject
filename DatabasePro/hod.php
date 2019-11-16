

<?php
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == true) {
    //$welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: Faculty_Login.php');
}

include_once('Navbar.php');


?>


<style>


	  
	  .box{
		  margin-top:30px;
		 /* height:800px !important */	;
		  background:#eae8dc;
		  
	  }
	  .card{
		  background:#e85a50;
		  
	  }
	  
	  

#back {
	display:none;
}

</style>

<body>  
	
	<div class="container">
	
		<div class="z-depth-5">
	
				<div class="col s12 m4 l8">
				
				
				
						<div class="box"><br>
						
						<h2   style="color:#e85a50"    align="center">Task To do</h2><br>
						
						
						<div class="container">
						
						<!--First card------------------>	
	
						<div class="row">
	
							<div class="col s12 m6">
								<div class="card horizontal">
     
									<div class="card-stacked">
									
										<div class="card-content">
											<a style="color:white" href="Student_Contact.php">
											  <h3 align="center" style="color:#eae8dc"> Contact Student</h3></a>
										</div>
										
									</div>
								</div>
							</div>
							
							<!--Second card------------------>
							<div class="col s12 m6">
								<div class="card horizontal">
     
									<div class="card-stacked">
									
										<div class="card-content">
											<a style="color:white" href="Faculty_Contact.php">
											  <h3 align="center" style="color:#eae8dc"> Contact Faculty</h3></a>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>	
							
							
						<div class="row">	
						
							<div class="col s12 m6">
								<div class="card horizontal">
     
									<div class="card-stacked">
									
										<div class="card-content">
											<a style="color:white" href="Faculty_1.php">
											  <h3 align="center" style="color:#eae8dc">Upload Documents</h3></a>
										</div>
										
									</div>
								</div>
							</div>
							
										
							<div class="col s12 m6">
								<div class="card horizontal">
     
									<div class="card-stacked">
									
										<div class="card-content">
											<a style="color:white" href="Faculty_attendancestep1.php">
											  <h3 align="center" style="color:#eae8dc">Upload Attendence</h3></a>
										</div>
										
									</div>
								</div>
							</div>
							
							
							<br>
							
						</div>	<br>
						
						
					</div>
	  
	  

	
						</div>
	
	
				</div>
				
				
		</div>
		
	</div>
	
	
	
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	  
	  
	  <?php
include_once('Footer.php');


?>

	  </body>
  </html>
        