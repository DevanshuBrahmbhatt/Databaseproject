
	 
	 <?php
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
		                  			<p class="grey-text text-lighten-4 flow-text">We, Slyro is a service-based and non-profitable company.
									Our purpose is just to deliver the best service, which is done by technology, By using Slyro you can
									find the best PG and Hostels in the city.
			We are working on updating all the information regarding the PG so that it will be convenient for you to choose the most suitable one.
							We hope you can find everything you need. Our main focus will be on providing high-quality service and customer satisfaction. We will 
 do everything to meet your 		expectations.



.</p>
			                </div>
                            <div class="col s12 l6">
                            	<img src="images/purpose.png" alt="slyro-logo" class="responsive-img">
                                <p class="grey-text text-lighten-4 footer-description"><b>Malgadi</b> is a subsidiary company of <b><a href="http://hitempsolutions.com/" target="_BLANK">Hitempsolution <i class="fa fa-external-link" aria-hidden="true"></i></a></b>.</p>
                            </div>
		    			</div>
		    	</div>

		    	<div class="team" id="team">
		    		<div class="row">
		    			<div class="col s12 l6">
                            <h5 class=" white-text light"><blockquote><strong>Our Team</strong></blockquote></h5>
							
							
												<div class="col s12 m6 l8 ">
                            <img src="images/dev.jpg" alt="Slyro Photo" class="responsive-img" >
						<a href="https://www.linkedin.com/in/devanshubrahmbhatt/" style="color: #004d40"	><p align="center"> Devanshu Brahmbhatt</p></a>
							</div>
						
							
                    	</div>
                    	<div class="col s12 l6">
                    		<p class="grey-text text-lighten-4 flow-text">  





Slyro is a start-up that is initiated by the students at DDU University. It is a service that provides information about PG and Hostels for more convenience. We are three developers. 



Sachin Thakkar is a Back-end developer, He manages the team and does plans for doing things in more innovative ways. 






Devanshu Brahmbhatt is a Front-end developer He has designed Website. 



Our main focus as developers is how to spread and enhance technology making life easier. We are so eager to meet developers like us so, If you want to join us then please contact us, We will be glad to see you.



.</p>
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
