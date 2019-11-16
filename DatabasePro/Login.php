


<?php
include_once('Navbar.php');

?>



<style>

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: grey;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: black;
}

.not-exists{
    color: red;
}

.exists{
	  color: green;
    
}


#back {
	display:none;
}
</style>



<br><div class="container">

			<form  action="Loginaction.php?v=1" method="POST"  class=" form col s12">
			
			
				
           
			
				<div class="z-depth-2 #fafafa grey lighten-5"> 

			
					<div class="container">
			
			
					
						<div class="container-fluid">
		
			            <h3  id="heading"  align="center" style="color:#e85a50"> <U><br>Log In</U> </h3>
					</div>
					
					
<!-------------------------first row-------------------------------------------->


      <div class="row">	
           <div class="input-field col s12">
          <i class="material-icons prefix">person</i>
          <input  name="collegeId"  placeholder="College_Id"  id="collegeId" type="text"  title=" characters only" required>
         <div id="username_response"></div>
        </div>
    
	</div>
	
	<div class="row">

        <div class="input-field col s12">
           <i class="material-icons prefix">enhanced_encryption</i>
          <input name="password" id="password" type="password"  placeholder="Password"    pattern=".{6,}" title="Six or more characters" required>
        
        </div>
		<div id="username_response"></div>
      </div>
	  
	  <div class="row">

	 	   <div class="input-field col s6 ">
				<button class="btn #d84315 deep-orange darken-3"  type="submit"
				class="black-text text-black" id="postsubmit"  name="submit">Log In
				<i class="material-icons right">send</i>
				</button>
		</div>


</div>

<div class="row">
		<div class="input-field col s12">
		<a href="SignUp.php" style="color:#f55734">Sign up </a>
		</div>
		</div>
		
		<div class="row">
		<div class="input-field col s12">
		<a href="#"  style="color:#f55734" >Forgot Password </a>
		</div>
		</div><br>


<!-------------------------8 row-------------------------------------------->

</div>

</div>

</form>
</div>


<script>


$(document).ready(function(){

   $("#collegeId").keyup(function(){

      var collegeId = $("#collegeId").val().trim();
	// alert(username);

      if(collegeId != ''){

         $("#username_response").show();

         $.ajax({
            url: 'User_check.php',
            type: 'post',
            data: {collegeId:collegeId},
            success: function(response){

                if(response > 0){
                    $("#username_response").html("<span class='exists'> User Available.</span>");
                }else{
                    $("#username_response").html("<span class='not-exists'> User Not Available SignUp.</span>");
                }

             }
          });
      }else{
         $("#username_response").hide();
      }

    });

 });
</script>

<?php
include_once('Footer.php');
?>