<?php
include_once('Navbar.php');


?>

<?php


require_once("Connection.php");
$sql= "select * from department";
$dataProduct= $conn->query($sql);



?>




<style>

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
i.icon-orange{
	
	color:#e85a50;
}

	.not-exists{
		color: green;
	}

	.exists{
		color: red;
	}


	.matchpass{
		color: green;
	}

	.notmatch{
		color: red;
	}

</style>




<br><div class="signup">



<div class="container">

			<form action="SignUpaction.php" method="post" enctype="multipart/form-data" class="col s12">
			
			
				
           
			
				<div class="z-depth-2 #fafafa grey lighten-5"> 

			
					<div class="container">
			
			
					
						<div class="container-fluid">
		
			            <h3  id="heading"  align="center" style="color:#e85a50"> <U>Sign Up</U> </h3>
					</div>
					
					
<!-------------------------first row-------------------------------------------->


      <div class="row">
        <div class="input-field   col s6">
        
          <input name="username" class="black-text text-black"  placeholder="Name"  id="username" type="text" pattern="[A-Za-z]+" autofocus>
         </div>


        <div class="input-field col s6">
                   <input  name="collegeId"  placeholder="College_Id"  id="collegeId" type="text"  pattern=".{10}"  title=" 10 letters only" required>
         
        </div>
			<div id="username_response"></div>
      </div>
	  
	  
<!-------------------------first row-------------------------------------------->


	     <div class="row">


			<div class="input-field col s6">
         
              <select  name="d_no"  id="d_no" class="select"   required>
			  
			  
                 <option   disabled selected type="hidden"><label>Department</label></option>
	<?php
							if($dataProduct!=null) {
										
										foreach($dataProduct as $d=>$c) {
											echo "<option value='" .$c["d_no"]  ."'> ".$c["d_name"]."</option>";
										}
									}
								?>
	
              </select>
        <label for="icon_bubble_chart"></label>
        </div>
      		
		
				
				
		
		  <div class="input-field   col s6">
       
          <input name="email" class="black-text text-black"  placeholder="Email-Id"  id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
         </div>

		  
		  
                   
				   

        </div>
      		

        
       

    
      <!-------------------------Third row-------------------------------------------->
	  
	  
	  <!---newrow-->
	  
	  
	  	     <div class="row">


			<div class="input-field col s6">
         
              <select  name="semester"  id="semester" class="select"   required>
			  
			  
                 <option   disabled selected type="hidden"><label>Semester</label></option>
				 <option value="1">Semester 1</option>
				 <option value="2">Semester 2</option>
				 <option value="3">Semester 3</option>
				 <option value="4">Semester 4</option>
				 <option value="5">Semester 5</option>
				 <option value="6">Semester 6</option>
				 <option value="7">Semester 7</option>
	
	
              </select>
        <label for="icon_bubble_chart"></label>
        </div>
      		
		
				
				
		
		  <div class="input-field   col s6">
       
          <input name="phone" class="black-text text-black"  placeholder="Phone Number"  id="phone" type="number" pattern="^\d{10}$" required>
         </div>

		  
		  
                   
        </div>
      		


	  

      <!-------------------------fourth row-------------------------------------------->

	 <div class="row">
	 
			<div class="input-field col s6">
			
					<input id="password" name="password" type="password"  placeholder="Password"   pattern=".{6,}" title="Six or more characters" required>
					<label for="icon_bubble_chart"></label>
					<div id="password_response"></div>
 
			</div>
      		
			

			 <div class="input-field col s6">
						<input id="confirmpassword" name="confirmpassword" type="password"    placeholder="Confirm-Password"    pattern=".{6,}" title="Six or more characters" required>
			</div>
				  

 

	</div>
 <!-------------------------fourth row-------------------------------------------->







<div class="row">

	 	   <div class="input-field col s12 ">
				<button class="btn #d84315 deep-orange darken-3"  
				class="black-text text-black"  type="submit" id="submit"  name="submit">Register
				<i class="material-icons right">send</i>
				</button><br><br><br>
		</div>


</div>


<!-------------------------8 row-------------------------------------------->

</div>

</div>

</form>
</div>



</div>
<script>

   
      $(document).ready(function() {
    $('select').material_select();
	
  });
    $('select').material_select('destroy');

</script>





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
					
                    $("#username_response").html("<span class='exists'> User already exists.</span>");
					 document.getElementById("submit").disabled = true;

					
					
					
					
					
                }
				
				else{
                    $("#username_response").html("<span class='not-exists'> You can SignUp.</span>");
						document.getElementById("submit").disabled = false;
                }

             }
          });
      }else{
         $("#username_response").hide();
      }

    });

 });
</script>

<script>




$(document).ready(function(){

   $("#confirmpassword").keyup(function(){

      var password = $("#password").val().trim();
	  var confirmpassword = $("#confirmpassword").val().trim();
	 

    
         $("#password_response").show();
       
            

			if(confirmpassword!=password){
				$("#password_response").html("<span class='notmatch'> Does not match.</span>");
				 document.getElementById("submit").disabled = true;
				
						
				
			
			
			
			}else{
				$("#password_response").html("<span class='matchpass'> Match.</span>");
				document.getElementById("submit").disabled = false;
			}

             
         
      

    });

 });
</script>



<?php

include_once('Footer.php');
?>