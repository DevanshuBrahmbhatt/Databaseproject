

	 
	 <?php
	 
	 
session_start();
if (isset($_SESSION['collegeId']) && $_SESSION['collegeId'] == true) {
    //$welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: Login.php');
}




	 include_once('Navbar.php');
	 ?>
	 <style>

	  .tabs .indicator {
    position: absolute;
    bottom: 0;
    height: 4px;
    background-color: #004d40;
    will-change: left, right;
  }
.tabs .tab a:focus, .tabs .tab a:focus.active {
    background-color: transparent;
}

blockquote{
	border-left:5px solid #004d40  ;
}
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
img {
  border: 1px solid #ddd;
  border-radius: 10px;
 }
 
#back {
	display:none;
}
</style>



</head>
<body>

		<section class="section #009688 teal">
			<div class="container">
				<div class="row">
					<div class="col s12">
				      	<ul class="tabs">
					        <li class="tab col s6"><a href="#purpose" class="active teal-text text-darken-2">Our Purpose</a></li>
					        <li class="tab col s6"><a href="#team" class="teal-text text-darken-2">Our Team</a></li>
					        <!-- <li class="tab col s4"><a href="#about_me" class="teal-text text-darken-2">About Me</a></li> -->
				    	</ul>
			    	</div>
				</div>

			    <div class="purpose" id="purpose">
						<div class="row">
							<div class="col s12 l6">
									<h5 class="white-text  light"><blockquote><strong>Our Purpose<strong></blockquote></h5>
		                  			<p class="grey-text text-lighten-4 flow-text">
	Our Purpose is simply provide an Exam-Papers and  Study-Materials to every student very easily. And how to contribute in University as a Student.

</p>
			                </div>
                            <div class="col s12 l6">
                            	<img src="images/ddu.jpg" alt="ddu-logo" class="responsive-img">
                                <p class="grey-text text-lighten-4 footer-description"><b>DDU</b> University <b><a href="https://www.ddu.ac.in/" target="_BLANK">DDU <i class="fa fa-external-link" aria-hidden="true"></i></a></b>.</p>
                            </div>
		    			</div>
		    	</div>

		    	<div class="team" id="team">
		    		<div class="row">
		    			<div class="col s12 l6">
                            <h5 class=" white-text light"><blockquote><strong>Our Team</strong></blockquote></h5>
							
							
												<div class="col s12 m6 l8 ">
                            <img src="images/dev1.jpg" alt="DDU" class="responsive-img" >
						<a href="https://www.linkedin.com/in/devanshubrahmbhatt/" style="color: #004d40"><p align="center" class="fa fa-linkedin"> &nbsp Devanshu Brahmbhatt</p></a>
							</div>
						
							
                    	</div>
                    	<div class="col s12 l6">
                    		<p class="grey-text text-lighten-4 flow-text">  

							It is My Database Managment System Project.	<br> Guided By Prof.R.M.Raval Madam Under I.T Dept.





</p>
                    	</div>
		    		</div>

		    	</div>

		    </div>
		</section>


<!--------		<div class="statics">
		<section id="things we have done so far">
           <div class="container">
					<div class="row counters">
						<div class="col s12 center">
							<h4 id="views">Things We Have Done So Far</h4>
						</div>
						<div class="col s12 m4 center count"><span id="videoCount"></span>5 <br>Web-Development</div>
						<div class="col s12 m4 center count"><span id="designProject"></span> 5 <br>Moblie-Development</div>
						<div class="col s12 m4 center count"><span id="clientCount"></span>  5 <br>Data-Analytics</div>
					</div>
		</div>
		</section>
		</div>
		
		
		<br><br>------>








	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.tabs').tabs();
		});
    </script>
	
	
	 <?php
	 include_once('Footer.php');
	 ?>
    </body>
  </html>
