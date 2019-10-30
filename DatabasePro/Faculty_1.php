<?php
include_once('Navbar.php');
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

	</style>
	
</head>

<body>

<div class="show">
<p><br></p>

</div>




<div class="container">

<div class="form ">

 <div class="row">


    <form  action="#" method="post" enctype="multipart/form-data" class="col s12">

		<div class="z-depth-2 #fafafa grey lighten-5"> 

			
<div class="container">  

		<div class="container-fluid">
		
			<h3  id="heading"  align="center" style="color:#e85a50"> <U>Upload Document</U> </h3>
		</div>
<!-------------------------first row-------------------------------------------->
      <div class="row">
        <div class="input-field   col s6">
          <i class="material-icons prefix"></i>
          <input name="owner_name" class="black-text text-black"  placeholder="Faculty_Name"  id="owner_name" type="text" pattern="[A-Za-z]+" autofocus>
         </div>


        <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input name="phone" name="phone"  placeholder="Intials eg.MMG"  id="initials" type="text"  pattern="[A-Za-z]+"  title=" characters only" required>
         
        </div>
      </div>
<!-------------------------first row-------------------------------------------->


	     <div class="row">


			<div class="input-field col s6">
          <i class="material-icons prefix"></i>
              <select class="select" required>
                 <option value="" disabled selected type="hidden" id="gender" >Department</option>
                 <option value="1" id="gender">Computer</option>
                 <option value="2"  id="gender">Information Technology</option>
				 <option value="2"  id="gender">Electronics </option>
				<option value="2"  id="gender">Mechanical</option>
				<option value="2"  id="gender">Chemical</option>


              </select>
        <label for="icon_bubble_chart"></label>
        </div>
      		
		
				
				
		<div class="input-field col s6">
          <i class="material-icons prefix"></i>
              <select class="select" required>
                 <option value="" disabled selected type="hidden" id="gender" >Semester</option>
                 <option value="1" id="gender">Computer</option>
                 <option value="2"  id="gender">Information Technology</option>
				 <option value="2"  id="gender">Electronics </option>
				<option value="2"  id="gender">Mechanical</option>
				<option value="2"  id="gender">Chemical</option>


              </select>
        <label for="icon_bubble_chart"></label>
        </div>
      		

        
       

      </div>
      <!-------------------------Third row-------------------------------------------->

      <!-------------------------fourth row-------------------------------------------->

	 <div class="row">


				  <div class="input-field col s6">
          <i class="material-icons prefix"></i>
              <select class="select" required>
                 <option value="" disabled selected type="hidden" id="gender" >Subjects</option>
                 <option value="1" id="gender">Computer</option>
                 <option value="2"  id="gender">Information Technology</option>
				 <option value="2"  id="gender">Electronics </option>
				<option value="2"  id="gender">Mechanical</option>
				<option value="2"  id="gender">Chemical</option>


              </select>
        <label for="icon_bubble_chart"></label>
        </div>
      		
			

			 <div class="input-field col s6">
          <i class="material-icons prefix"> </i>
          <input  placeholder="Topic Related"   name="distance" type="text" id="topics" required>
           </div>


</div>
 <!-------------------------fourth row-------------------------------------------->


<div class="row">


<div class="col s12">
 <div class="file-field input-field">
      <div class="btn #d84315 deep-orange darken-3">
        <span>File</span>
        <input type="file" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" placeholder="Upload File" type="text">
      </div>
    </div>
</div>


</div>




<div class="row">



	  <div class="input-field col s12" >
				<button class="btn #d84315 deep-orange darken-3"  onclick= "valid()" type="submit"
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