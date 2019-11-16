

<?php
/*
session_start();
if (isset($_SESSION['username']) && $_SESSION['user_id'] == true) {
    //$welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: Faculty_Login.php');
}*/
?>
	

<?php
include_once('Navbar.php');


include_once('Connection.php');

$sql= "select * from department";
$dataProduct= $conn->query($sql);



?>

<head>

	<style>



#heading{
	padding-top:20px;
	margin-bottom:50px;
	
	
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: grey;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: grey;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: grey;
}

.select{
	
	color:grey;
}


#back {
	display:none;
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
				
			                document.getElementById("semester").innerHTML = this.responseText;
							  $('#semester').material_select();
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
				  $('#subject').material_select();
            }
        };
        xmlhttp.open("GET","getuser1.php?sem_no="+str,true);
		
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

<div class="form ">

 <div class="row">


    <form enctype="multipart/form-data"  action="FacultyAction.php" method="POST"  class="col s12">

		<div class="z-depth-2 #fafafa grey lighten-5"> 

			
<div class="container">  

		<div class="container-fluid">
		
			<h3  id="heading"  align="center" style="color:#e85a50"> <U>Upload Document</U> </h3>
		</div>
<!-------------------------first row-------------------------------------------->
      <div class="row">
        <div class="input-field   col s6">
       
          <input  name="f_name" class="black-text text-black"  placeholder="Faculty_Name"  id="f_name" type="text" pattern="[A-Za-z]+" autofocus>
         </div>


        <div class="input-field col s6">
        
          <input name="f_init"   placeholder="Intials eg.MMG"  id="f_init" type="text"  pattern="[A-Za-z]+"  title=" characters only" required>
         
        </div>
      </div>
<!-------------------------first row-------------------------------------------->


	     <div class="row">


		<div class="input-field col s6">
        
		   <select class="select"  id="department" name="department" onchange="showUser(this.value)" required>
    		<option  value="" disabled selected>Choose your Dept</option>
    	<?php
							if($dataProduct!=null) {
										
										foreach($dataProduct as $d=>$c) {
										echo "<option value='" .$c["d_no"]  ."'> ".$c["d_name"]."</option>\n";
										
											
										}
									}
		?>
	
			</select>
		</div>

			 
		
  
		<div class="input-field col s6">
		
          
    	<select class="select"  name="semester" id="semester" onchange="showUser1(this.value)"  required>
    		<option value="" disabled selected>Choose your Semester</option>
    		
			
    	</select>
		
		</div>
		</div>
		
		
		<div class="row">
		
		<div class="input-field col s6">
		<select  class="select" name="subject" id="subject" required>
    		<option value="" disabled selected>Choose your Subject</option>
    		
    	</select>
		
		</div>
			

			 <div class="input-field col s6">
         
          <input  placeholder="Topic Related"   name="topic" type="text" id="topic" required>
           </div>


</div>
 <!-------------------------fourth row-------------------------------------------->


<div class="row">


<div class="col s12">
 <div class="file-field input-field">
      <div class="btn #d84315 deep-orange darken-3">
        <span>File</span>
        <input  name="myfile" type="file" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" placeholder="Upload File" type="text">
      </div>
    </div>
</div>


</div>




<div class="row">



	  <div class="input-field col s6" >
				<button class="btn #d84315 deep-orange darken-3"   type="submit"
				class="black-text text-black" id="postsubmit"  name="submit">Submit
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

<script>



    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
  $(document).ready(function() {
    $('select').material_select();

  });
    $('select').material_select('destroy');
	
</script>

</body>


<?php
include_once('Footer.php');
?>