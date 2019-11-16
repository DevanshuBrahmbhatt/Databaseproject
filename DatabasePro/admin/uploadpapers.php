
<?php



session_start();
if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == true) {
   // $welcomeMessage = "Welcome to the member's area, " . $_SESSION['user_id'] . "!";

} else {
    header('Location:Login.php');
}

?>

<?php
include_once('../Navbar.php');
?>


<?php


require_once("../Connection.php");

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
        xmlhttp.open("GET","../getuser.php?d_no="+str,true);
		
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
        xmlhttp.open("GET","../getuser1.php?sem_no="+str,true);
		
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

<h3 align="center" style="color:#e85a50"> Welcome Admin </h3> 

<br><div class="container">
	<div class="card-panel hoverable #fafafa grey lighten-5">
	
		<div class="row">
			<h4  style="color:#e85a50" class="truncate"><U>Upload Your Papers</U> </h4>
			
			
			
  		<br><br><label>Select Dept</label>
		
		
  		<form  enctype="multipart/form-data"  id="form"  action="adminaction.php"  method="POST"> 
		
  		<select class="browser-default" id="department" name="department" onchange="showUser(this.value)" required>
    		<option  value="" disabled selected>Choose Department</option>
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
    		<option value="" disabled selected>Choose Semester</option>
    		
			
    	</select>
		

		
		
		<br><label>Select Subject</label>
  		<select class="browser-default" name="subject" id="subject" required>
    		<option value="" disabled selected>Choose Subject</option>
    		
    	</select>
		
		
		
		
    	<br><label>Select Exam-type</label>
  		<select class="browser-default" name="exam_type" required>
    		<option value="" disabled selected>Choose Exam-type</option>
    		<?php
							if($dataProduct3!=null) {
										
										foreach($dataProduct3 as $d=>$c) {
										echo "<option value='" .$c["exam_id"]  ."'> ".$c["exam_type"]."</option>\n";
										
											
										}
									}
									
							
						
							
						
		?>
    	</select>
		
		
		
		<br>
		
			<div class="input-field col s12">
				<label>Enter Year</label>
		    <input  placeholder=" Enter Year"   name="year" type="number" id="year" required>
			</div>
		
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
include_once('../Footer.php');
?>