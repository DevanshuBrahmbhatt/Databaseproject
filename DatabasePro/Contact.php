

<?php


session_start();
if (isset($_SESSION['collegeId']) && $_SESSION['collegeId'] == true) {
    //$welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location:Login.php');
}


	//session_start();
	include_once('Navbar.php');
	
	

	
?>


	


</style>	 
	  
	  
	  
</head>
<body>


		

        <!--------------------------about--------------->
		
  <!-------------------------feedbackform------------------------------>
  
   <!--<div class="row #ffffff white">
  <div class="col s12 m5 ">
  <p></p>
  </div>
  </div>-->
  	<div class="container" >	
	<div class="feedback" class="col s6" >
	
	  
<div class="row">		
										
			<h5  align="center"  style="color:#e85a50" > <br><br><strong><U>Contact Form</U><strong></h5>	


		
			</div>							
    <form  action="Contactaction.php"  method="POST" class="col s6" name="form1" id="contact">
	
	
	<div class="row">
     
	  
        <div class="input-field col s6">
          <input  name="firstname" id="firstname" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
		
        <div class="input-field col s6">
          <input name="lastname" id="lastname" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
		
    
     
	  
       
	
        <div class="input-field col s12">
          <input name="email" id="email" type="email"  name="email"    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
          <label for="email">Email</label>
        </div>
     
	 
	  <div class="input-field col s12">
          <input  name="number"  id="number" type="number" class="validate" name="phone" required>
          <label for="phone">Phone no</label>
        </div>
     
	  
	
        <div class="input-field col s12">
          <input name="message" id="message" type="text" class="validate" required>
          <label for="disabled">Message</label>
       </div>
		
      
		<div class="input-field col s6">
				<button class="btn #d84315 deep-orange darken-3" type="submit" name="submit"  onclick="valid()">Submit
				<i class="material-icons right">send</i>
				</button>
		</div>
        
	  
	  
	  
	  </div>
	  
	 
	  
    </form>
	</div>
	</div>
	<!-- <div class="row #ffffff white">
  <div class="col s12 m5 ">
  <p></p>
  </div>
  </div>->
	<!-------------------feedbackcomplete-------------------------------------------------------->
	
		
		
		<?php 
	include_once('footer.php');
	?>
	
	<script>
	/*function valid(){
	var number = document.form1.phone.value;
//	
	if(number.length<10)
	{
	window.alert('enter proper number');}
	}
	*/
	
      </script>
	     <script src="js/jquery-3.2.1.min.js"></script>
    <script  src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  
	
    </body>
  </html>
