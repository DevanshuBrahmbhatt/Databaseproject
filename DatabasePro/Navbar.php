<html>
    <head>
	
	
		<title>

					DharmSinh Desai University
		</title>

		<link rel="shotcut icon" type="images/png"  href="#">

	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <!--Import Google Icon Font-->
	  
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	  
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	
  
	<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
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
	
	</style>
	
</head>


<body>
<nav class="nav-extended">

      <div class="nav-wrapper">
        <a href="index.php" style="color:#eae8dc"  class="brand-logo">&nbsp &nbsp  DharmSinh Desai University</a>
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
          <li><a href="index.php" style="color:#eae8dc" >Home</a></li>
          <li><a href="Contact.php" style="color:#eae8dc" >Contact</a></li>
		   <li><a href="About.php" style="color:#eae8dc"  >AboutUs</a></li>
		   <li><a href="Login.php" style="color:#eae8dc" >LogIn</a></li>
		    <li><a href="SignUp.php" style="color:#eae8dc" >SignUp</a></li>
       <!--   <li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true" data-activates="dropdown2" onmouseover="drop()">CITIES<i class="material-icons right">arrow_drop_down</i></a></li>-->
  	    <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
        </ul>

        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.php"style="color:#e85a50" >Home</a></li>
          <li><a href="Contact.php" style="color:#e85a50" >Contact</a></li>
		   <li><a href="About.php" style="color:#e85a50" >AboutUs</a></li>
		   <li><a href="Login.php" style="color:#e85a50" >LogIn</a></li>
		    <li><a href="SignUp.php" style="color:#e85a50" >SignUp</a></li>
      <!--      <li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true"  data-activates="dropdown1" onmouseover="drop()">CITIES<i class="material-icons right">arrow_drop_down</i></a></li>-->
          <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
        </ul>

		<div class="show"><br></div>
		
		
		
	</div>

</nav>

<div class="goback">

	<br><button class="btn #37474f blue-grey darken-3" id="back" onclick="goBack()">Go Back
	
		<i class="material-icons left">arrow_back</i>
	</button>

</div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	  
	  <script>
	  
	  function goBack() {
  window.history.back();
}

	  $(document).ready(function(){
	  
	    $(".button-collapse").sideNav();
	  });
	  
	  </script>

</body>

</html>