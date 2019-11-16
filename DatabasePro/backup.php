

<?php


 
  include_once('Connection.php');

 if(isset($_POST['submit']))
	{
	$department = $_POST['department'];
	$semester = $_POST['semester'];
    $subject = $_POST['subject'];
	$exam_type=$_POST['exam_type'];

	
	}

	


$sql=  " select *from pdf where sub_id='$subject' and exam_id='$exam_type'  ";
$dataProduct= $conn->query($sql);
//echo "$sql";


//$sql="select * from subject INNER JOIN  pdf where subject.sub_id=pdf.subject "; 
	
$sql1=  "SELECT subject.subname 
       FROM subject
       INNER JOIN pdf ON pdf.$subject=subject.$subject" ;
	   


$dataProduct1=$conn->query($sql1);
echo "$sql1";

  

	

?>


<?php
include_once('navbar.php');
?>

<head>

	<style>

	</style>
	
</head>

<body>


<br><Br><br><div class="container">


  <ul class="collection">
  
  
  <?php 
 
  
	if('dataProduc'!=null){
		
		foreach($dataProduct as $d=>$c){
  
    echo " <li class='collection-item avatar'> ";
	
	 echo " <i class=  'material-icons circle' >folder</i>";
	 
	   echo " <span class='title'>" .['subject.subname']. "</span>";

	  
   //  echo " <span class='title'>" .$c['subname'].  "</span>";
	 
	 
      echo "<p>'" .$c['year']  ."' <br>";
       echo "<p>'" .$c['exam_id']   ."' <br>";
	   
	   
    // echo "<p>'  " .$c['pdf_id']  ."    ' <br>";
     
	  
	  //echo "  $c[pdf_id] ";
	  
      echo "  <a href= 'getpdf.php?pdf_id=$c[pdf_id]   '  style='color:#e85a50'  class='secondary-content'> <i class='material-icons' >arrow_downward</i></a>  "  ;
	  
	  
	  
	   echo "</li>";
	
		}
	
	}
	?>
	</ul>
	
	
	
 <!--   <li class="collection-item avatar ">
      <i class="material-icons circle">folder</i>
      <span class="title">Java</span>
      <p>2018 <br>
         1st Sessional
      </p>
      <a href="#!"  style="color:#e85a50" class="secondary-content"><i class="material-icons">arrow_downward</i></a>
    </li>-->
	
    


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