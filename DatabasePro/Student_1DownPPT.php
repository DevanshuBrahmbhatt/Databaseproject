
<?php
include_once('Navbar.php');


?>
<?php

 
  include_once('Connection.php');

 if(isset($_POST['submit']))
	{
	$department = $_POST['department'];
	$semester = $_POST['semester'];
    $subject = $_POST['subject'];
//	$exam_type=$_POST['exam_type'];

	
	}

	


$sql=  " select *from faculty inner join  subject on faculty.sub_id=subject.sub_id where 
faculty.sub_id='$subject' and faculty.d_no='$department' and faculty.sem_no='$semester'  ";
//echo "$sql";

$dataProduct= $conn->query($sql);
  

	

?>
<head>

	<style>

	</style>
	
</head>

<body>


<br><Br><br><div class="container">

  <ul class="collection">

<?php
 
	if('dataProduct'!=null){
		
		foreach($dataProduct as $d=>$c){
  
    echo " <li class='collection-item avatar'> ";
	
	 echo " <i class=  'material-icons circle' >folder</i>";
	  
     echo " <span class='title'>" .$c['subname'].  "</span>";
	 
	 
      echo "<p>'" .$c['f_name']  ."' <br>";
       echo "<p>'" .$c['topic']   ."' <br>";
	   
	   
    // echo "<p>'  " .$c['pdf_id']  ."    ' <br>";
     
	  
	  //echo "  $c[pdf_id] ";
	  
      echo "  <a href= 'getppt.php?f_id=$c[f_id]   '  style='color:#e85a50'  class='secondary-content'> <i class='material-icons' >arrow_downward</i></a>  "  ;
	  
	  
	  
	   echo "</li>";
	
		}
	
	}
	?>
	
	</ul>	
	
   <!-- <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Java</span>
      <p>HBP <br>
         Inheritance
      </p>
      <a href="#!" style="color:#e85a50" class="secondary-content"><i class="material-icons">arrow_downward</i></a>
    </li>
	
	
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Java</span>
      <p>SRS <br>
        Path Variable
      </p>
      <a href="#!" style="color:#e85a50" class="secondary-content"><i class="material-icons">arrow_downward</i></a>
    </li>
	
	
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Java</span>
      <p>SRS<br>
			Jagged Array
      </p>
      <a href="#!" style="color:#e85a50" 	class="secondary-content"><i class="material-icons">arrow_downward</i></a>
    </li>
	
	
  </ul>
            



</div>-->
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