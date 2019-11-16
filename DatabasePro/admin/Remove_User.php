
<?php



/*session_start();
if (isset($_SESSION['collegeId']) && $_SESSION['collegeId'] == true) {
   // $welcomeMessage = "Welcome to the member's area, " . $_SESSION['user_id'] . "!";

} else {
    header('Location:../Login.php');
}

*/

?>


<?php
//include_once('../Navbar.php');
include_once('../Connection.php');

$sql= "select * from department";
$dataProduct= $conn->query($sql);



?>

<?php


if(isset($_POST['submit']))
	{
		
	$department=$_POST['department'];
	$f_id=$_POST['f_id'];
	$collegeId=$_POST['collegeId'];
	


			 
			 $sql="update signup set semester=0 where collegeId='$collegeId'  " ;
 
if($conn->query($sql)==TRUE)
{
		//echo "Work done";
}
 else {
     echo "error to create database ". $conn->error;
}



			 
		}
		
	
		
		
?>







<html>
    <head>
	
	
		<title>

					For Students  
		</title>

		<link rel="shotcut icon" type="images/png"  href="../images/ddu.jpg">

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
	#back{
		
		background:#373F51;
	}
	
	
	</style>
	
</head>


<body>
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


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<div class="goback">

	<br><button class="btn" id="back" onclick="goBack()">Go Back
	
		<i class="material-icons left">arrow_back</i>
	</button>

</div>


	
	


<head>

	<style>



#heading{
	padding-top:20px;
	margin-bottom:50px;
	
	
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color:#919191;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #919191;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #919191;
}

.select{
	
	color:#919191;
}

.z-depth-2{
	
	background:#FAFAFA;
}

#postsubmit{
	
	background:#54457F;
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
				
			                document.getElementById("faculty").innerHTML = this.responseText;
							$('#faculty').material_select();
            }
        };
        xmlhttp.open("GET","../getfaculty.php?d_no="+str,true);
		
        xmlhttp.send();
		
		
		
		
    }
}



</script>

	
</head>

<body>

 
<div class="show">
<p></p>

</div>



<!--		<div class="input-field col s6">
		 <a href="Faculty_Show.php" > <button class="btn #d84315 deep-orange darken-3"   type="submit"
				class="black-text text-black" id="showupload"  name="showupload">Show Uploads
				<i class="material-icons right">dashboard</i>
				</button></a>

		</div>-->

		<div class="container">
		
		
		<div class="row">
		
			<div class="col s12 l8 push-l2">
 

	  <form   action="#" method="POST">

		<div class="z-depth-2"> 
		
		
		  <div class="container-fluid">
					 <h4  id="heading"  align="center" style="color:#54457F; ">   Welcome Admin<br> Here you can disabled user
 </h4>
				</div>

		
			<div class="container">  

			 

	     <div class="row">


		<div class="input-field col s12">
		
        <select class="select"  id="department" name="department" onchange="showUser(this.value)" required>
    		<option  value="" disabled selected>Select your Dept</option>
    	<?php
							if($dataProduct!=null) {
										
										foreach($dataProduct as $d=>$c) {
										echo "<option value='" .$c["d_no"]  ."'> ".$c["d_name"]."</option>\n";
										
											
										}
									}
		?>
				</select>
		</div>

		</div> 
		
  
		<div class="row">
		<div class="input-field col s12">
		
          
    	<select  name="f_id" class="select"  id="faculty" >
    		<option value="" disabled selected>Select your Faculty</option>
    		
			
    	
		</select>
		
		
		</div>

		</div>
		
		
		
		
		<div class="row">
		
		
			 <div class="input-field col s12">
			 
			 
     <!--     <textarea  class="materialize-textarea" name="message"  id="textarea1" ></textarea>-->
         
		  
		  
          <input  placeholder="Enter CollegeId Of That Student"   name="collegeId" type="text" id="collegeId"  required>
           </div>


</div>
 <!-------------------------fourth row-------------------------------------------->




<div class="row">



	  <div class="input-field col s6" >
				<button class="btn"   type="submit"
				class="black-text text-black" id="postsubmit"  name="submit">Sent
				<i class="material-icons right">send</i>
				</button><br><br><br>
		</div>
		
		
</div>



<!-------------------------8 row-------------------------------------------->


      <!-------------------------submit row-------------------------------------------->






    <!-------------------------submit row-------------------------------------------->

</div>

</div>
    </form>
	
	</div>
  
  </div>
  
  </div>
  
  

<script>

    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
  $(document).ready(function() {
    $('select').material_select();

  });
   $('select').material_select('destroy');
	
	
	
 // $('#textarea1').val('New Text');
  //$('#textarea1').trigger('autoresize');
        

	
</script>

</body>


<?php
include_once('../Footer.php');
?>














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