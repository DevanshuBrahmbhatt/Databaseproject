


<?php
include_once('Navbar.php');
?>


<?php


require_once("Connection.php");

$sql= "select * from department";
$dataProduct= $conn->query($sql);

$sql1= "select * from exam_type";
$dataProduct3= $conn->query($sql1);




?>

<head>

	<style>
	

.z-depth-2{
	
	background:#eae8dc;
}
.select{
	
	color:#e85a50;
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
            }
        };
        xmlhttp.open("GET","getuser.php?d_no="+str,true);
		
        xmlhttp.send();
		
		
		
		
    }
		}
	
	function ShowFaculty(str) {
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
						
            }
        };
        xmlhttp.open("GET","getfaculty.php?d_no="+str,true);
		
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
            }
        };
        xmlhttp.open("GET","getuser1.php?sem_no="+str,true);
		
        xmlhttp.send();
		
		
		
		
    }
}



	
</script>

		
<!--<script>
		  
$(document).ready(function(){
    $('#department').on('change',function(){
        var d_no = $(this).val();
        if(d_no){
            $.ajax({
                type:'POST',
                url:'ajaxdata.php',
                data:'d_no='+d_no,
                success:function(html){
                    $('#semester').html(html);
                    $('#subject').html('<option value="">Select semester first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Department first</option>');
            $('#city').html('<option value="">Select Semester first</option>'); 
        }
    });
	
	   $('#semester').on('change', function(){
        var sem_no = $(this).val();
        if(sem_no){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sem_no='+sem_no,
                success:function(html){
                    $('#subject').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select semester first</option>'); 
        }
    });

});
</script>-->

</head>

<body>



<br><div class="container">
	<div class="card-panel hoverable #fafafa grey lighten-5">
	
		<div class="row">
			<h4  style="color:#e85a50" class="truncate"><U>Upload Attendance</U> </h4>
			
			
			
  		<br><br><label>Select Dept</label>
		
		
  		<form id="form"  action="PHPexcel/exce2.php"  method="POST"> 
		
  		<select class="browser-default" id="department" name="department" onchange="showUser(this.value)" required>
    		<option  value="" disabled selected>Choose your Dept</option>
    	<?php
							if($dataProduct!=null) {
										
										foreach($dataProduct as $d=>$c) {
										echo "<option value='" .$c["d_no"]  ."'> ".$c["d_name"]."</option>\n";
										
											
										}
									}
									
							
						
							
						
		?>
	
	  		</select>

			 
		
  
    	<br><label>Select Semester</label>
  		<select class="browser-default" name="semester" id="semester" onchange="showUser1(this.value)"  required>
    		<option value="" disabled selected>Choose your Semester</option>
    		
			
    	</select>
		

		
		
		<br><label>Select Subject</label>
  		<select class="browser-default" name="subject" id="subject"  onchange="ShowFaculty(this.value)" required>
    		<option value="" disabled selected>Choose your Subject</option>
    		
    	</select>
		
		
		
		
    	<br><label>Select Exam-type</label>
  		<select class="browser-default" name="exam_type" required>
    		<option value="" disabled selected>Choose your Exam-type</option>
    		<?php
							if($dataProduct3!=null) {
										
										foreach($dataProduct3 as $d=>$c) {
										echo "<option value='" .$c["exam_id"]  ."'> ".$c["exam_type"]."</option>\n";
										
											
										}
									}
									
							
						
							
						
		?>
    	</select>
		
		<br><label>Select Faculty Name</label>
		<select class="browser-default" id="faculty" name="f_id"  required>
    		<option  value="" disabled selected>Choose your Name</option>
    	
	  		</select>

		
			<br>
		<div class="input-field   col s6">
		<label>Enter Total Class-Attendance</label>
       <input name="tc" class="black-text text-black"  placeholder="Class-Attendance"  id="tl" type="number" pattern="">
         </div>

	<div class="input-field   col s6">
	<label>Enter Total Lab-Attendance</label>
       <input name="tl" class="black-text text-black"  placeholder="Lab-Attendance"  id="tc" type="number" pattern="" >
         </div>
	
				
				<br><div class="row">


				<div class="col s12">
				 <div class="file-field input-field">
					  <div class="btn #d84315 deep-orange darken-3">
						<span>Excel-Sheet</span>
						<input  name="myfile" type="file" >
					  </div>
					  <div class="file-path-wrapper">
						<input class="file-path validate" placeholder="Upload Excel sheet here" type="text">
					  </div>
					</div>
				</div>


				</div>
		
    		<br>
  			<button class=" btn #d84315 deep-orange darken-3" id="submit" type="submit" name="submit">
  				  Upload
  			</button>     <br><br> 
		</form>
		</div>
		
	</div>
		<br><br>	
</div>






<script>

     
      $(document).ready(function() {
    $('select').material_select();
	
  });
    $('select').material_select('destroy');

</script>

</body>



<?php
include_once('Footer.php');
?>