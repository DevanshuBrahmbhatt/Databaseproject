

<?php


 
  include_once('Connection.php');

 if(isset($_POST['submit']))
	{
	$department = $_POST['department'];
	$semester = $_POST['semester'];
    $subject = $_POST['subject'];
	$exam_type=$_POST['exam_type'];

	
	}

	




//$sql=  " select *from pdf where sub_id='$subject' and exam_id='$exam_type'  ";

$sql= "select * from pdf INNER JOIN subject ON  pdf.sub_id=subject.sub_id INNER JOIN exam_type on pdf.exam_id=exam_type.exam_id  where pdf.sub_id='$subject' and pdf.exam_id='$exam_type' ";

$dataProduct= $conn->query($sql);
//echo "$sql";




  

	

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
 
  
	if($dataProduct!=null){
		
		foreach($dataProduct as $d=>$c){
  
    echo " <li class='collection-item avatar'> ";
	
	 echo " <i class=  'material-icons circle' >folder</i>";
	  
     echo " <span class='title'>" .$c['subname'].  "</span>";
	 
	 
      echo "<p>'" .$c['year']  ."' <br>";
       echo "<p>'" .$c['exam_type']   ."' <br>";
	   
	  
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