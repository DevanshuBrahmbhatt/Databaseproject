<?php


session_start();
if (isset($_SESSION['collegeId']) && $_SESSION['collegeId'] == true) {
  
} else {
    header('Location: Login.php');
}




include_once('Connection.php');


if(isset($_POST['submit']))
	{
		
	$semester=$_POST['semester'];
	$collegeId=$_SESSION['collegeId'];
	


			 
			 $sql="update signup set semester='$semester' where collegeId='$collegeId'  " ;
 
if($conn->query($sql)==TRUE)
{
		header('Location: Student_1.php');
}
 else {
     echo "error to create database ". $conn->error;
}



			 
		}
		
	
		
		



include_once('Navbar.php');

?>

<style>
.select{
	
	color:#919191;
}

</style>
<div class="container">

  <form   action="#" method="POST">

  <div class="container-fluid">
					 <h4  id="heading"  align="center" style="color:#54457F">   Welcome Back <?php echo" " . $_SESSION['collegeId'] . " " ; ?> Select your new Semester
 </h4>
				</div><br><br><br>
				
				<div class="row">
		<div class="input-field col s12">
		
          
    	<select  name="semester" class="select"  id="semester" >
    		<option value="" disabled selected>Choose your new semester</option>
			<option value="1">Semester 1</option>
			<option value="2">Semester 2</option>
			<option value="3">Semester 3</option>
			<option value="4">Semester 4</option>
			<option value="5">Semester 5</option>
			<option value="6">Semester 6</option>
			<option value="7">Semester 7</option>
			
			
    	
		</select>
		
		
		</div>

		</div>
		
		<div class="row">



	  <div class="input-field col s6" >
				<button class="btn #bf360c deep-orange darken-4"   type="submit"
				class="black-text text-black" id="postsubmit"  name="submit">Submit
				<i class="material-icons right">send</i>
				</button><br><br><br>
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
	
	
	
 // $('#textarea1').val('New Text');
  //$('#textarea1').trigger('autoresize');
        

	
</script>


		
		     
