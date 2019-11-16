

<?php
$sem_no = intval($_GET['sem_no']);

include_once('Connection.php');

?>

<option value="" disabled selected>Choose your Subject</option>
 

<?php
//mysqli_select_db($conn,"");

$sql="SELECT *FROM subject WHERE sem_no = '$sem_no' ";

//echo "$sql";

$dataProduct = mysqli_query($conn,$sql);


	
		if($dataProduct!=null) {
										
	foreach($dataProduct as $d=>$c) {
		
			
			echo "<option value='" .$c["sub_id"]  ."'> ".$c["subname"]."</option>\n";
										
											
										}
									}
									
	
mysqli_close($conn);
?>
</body>
</html>