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
                   <input  name="collegeId"  placeholder="College_Id"  id="collegeId" type="text"  pattern=".{10}"  title=" 9 letters only" required>
         
        </div>
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
       
          <input name="email" class="black-text text-black"  placeholder="Email-Id"  id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus>
         </div>

		  
		  
                   
        </div>
      		

        
       

    
      <!-------------------------Third row-------------------------------------------->

      <!-------------------------fourth row-------------------------------------------->

	 <div class="row">
	 
			<div class="input-field col s6">
			
					<input id="password" name="password" type="password"  placeholder="Password"   pattern=".{6,}" title="Six or more characters" required>
					<label for="icon_bubble_chart"></label>
					<div id="username_response"></div>
 
			</div>
      		
			

			 <div class="input-field col s6">
						<input id="confirmpassword" name="confirmpassword" type="password"    placeholder="Confirm-Password"    pattern=".{6,}" title="Six or more characters" required>
			</div>
				  

 

	</div>
 <!-------------------------fourth row-------------------------------------------->







<div class="row">

	 	   <div class="input-field col s12 m">
				<button class="btn #d84315 deep-orange darken-3"  type="submit"
				class="black-text text-black" id="submit"  name="submit">Register
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

   $("#confirmpassword").keyup(function(){

      var password = $("#password").val().trim();
	  var confirmpassword = $("#confirmpassword").val().trim();
	 

    
         $("#username_response").show();
       
            

			if(confirmpassword!=password){
				$("#username_response").html("<span class='exists'>* Does not match.</span>");
				return false;
			}else{
				$("#username_response").html("<span class='not-exists'> Match.</span>");
			}

             
         
      

    });

 });
</script>



<?php

include_once('Footer.php');
?>