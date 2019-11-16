

<?php
session_start();
if (isset($_SESSION['collegeId']) && $_SESSION['collegeId'] == true) {
    //$welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: Login.php');
}
?>
	
	
	
<?php
include_once('Navbar.php');
?>






<head>

	<style>

.card-panel{
	
	background:#e85a50;
	
}
	</style>
	
</head>

<body>

<div class="show">
<p><br></p>

</div>

	<div class="container">
		
		<div class="row">	
		
		<div class="col s12 m5 offset-m1">
				<div class="card-panel">
				 
				 <a href="Student_1Papers.php">
					   <span class="white-text">
						<h3 align="center" style="color:#eae8dc" >Papers</h3>
							
					</span> </a>
					
					
				</div><br><br>
				
				
				
				
				
			</div>
			
			
			
			<div class="col s12 m5 ">
				<div class="card-panel ">
				 
				<a href="Stundent_1PPT.php"	>   <span class="white-text">
						<h3 align="center"  style="color:#eae8dc">PPT</h3>
					</span></a>
					
					
				</div>
				
			</div>
			
			
			
		</div>	
	</div>



<script>


</script>

</body>

<?php
include_once('Footer.php');
?>