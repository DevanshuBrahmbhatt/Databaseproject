

<?php
$d_no = intval($_GET['d_no']);

include_once('Connection.php');
?>



 <option value="" disabled selected>Choose your Semester</option>
 
<?php
//mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM semester WHERE d_no = '$d_no' ";
$dataProduct = mysqli_query($conn,$sql);


		
		if($dataProduct!=null) {
			
										
	foreach($dataProduct as $d=>$c) {
		
			
			echo "<option value='" .$c["sem_no"]  ."'> ".$c["semester"]."</option>\n";
										
											
										}
									}
									
	
mysqli_close($conn);
?>
</body>
</html>