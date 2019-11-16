
<?php
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == true) {
    //$welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: Login.php');
}
?>
	
<?php
include 'Connection.php';
include_once('Navbar.php');


?>



<body>
    
	
	<!--	<div class="row">
		
			<div class="col s6 m4 l3">
			
				 <div class="heading">
				 
				 <h3> Data Display</h3>
				 <a href="#"  class="btn #263238 blue-grey darken-4" role="button">Insert</a>
				 
				 </div>
				 
				 
				 
			</div>
			
			
			<div class="col s6 m4 l3">
			
			 <div class="heading1">
				 
		 <h3> Logout</h3>
			 <a href="#"  class="btn #263238 blue-grey darken-4" role="button">Logout</a>
					 
				 </div>
				 
			
				 
				 </div>
				 
				
					 
				 
			</div>
			
			
		</div>
		
	<!--	<div class="row">
			
			<div class="col s12 m6 l5">
			
				 <div class="nav-wrapper">
				 
				
				 <form action="SearchDb.php"  method="POST"  class="form #263238 blue-grey darken-4">
				 
				 
						<div class="input-field">
						  <input  placeholder="Search By Country"  name="search"   id="search" type="search" required>
						  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
						  <i class="material-icons">close</i>
						</div>
				</form>
				 
				 </div><br><Br>
				 
			</div>
			
			
		 
		</div>--><br><br>
		
		
		
		 
		 
		 
		 <div class="row">
		 
		 
		 
			<div class="col s12">
			
			
				
		 
		 
		 
        <table  class="striped bordered responsive-table" >
		
			
		
			<thead>
			
				<th> Faculty_Id </th>
				<th> Department_no </th>
				<th> Semester </th>
				<th> Subject </th>
				<th> Topic </th>
				<th> File </th>
				<th> Faculty_Name </th>
				<th> Faculty_Initials </th>
				
			</thead>
			
			<tbody>


	
            


            

<?php
include 'Connection.php';

 
$f_name=$_GET['f_name'];
//echo "$f_name";

$sql=" SELECT * FROM faculty  WHERE f_name=$f_name  ";
//echo "$sql";

$result=$conn->query($sql);

    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
            
echo ""
        . "<tr>"
        . "<td>".$row["f_id"]."</td>"
        . "<td>".$row["d_no"]."</td>"
        . "<td>".$row["sem_no"]."</td>"
		 . "<td>".$row["sub_id"]."</td>"
        . "<td>".$row["topic"]."</td>"
        . "<td>".$row["file"]."</td>"
		 . "<td>".$row["f_name"]."</td>"
        . "<td>".$row["f_init"]."</td>"
        
		
		//. "<td>".'<a href="Edit.php?f_id='.$row['f_id'].'" class="btn #263238 blue-grey darken-4" role="button">Update</a>'."</td>"
		// ."<td>".'<a href="Delete.php?f_id='.$row['f_id'].'"  class="btn #263238 blue-grey darken-4" role="button">Delete</a>'."</td>"
		
        
        . "</tr>";
        }
        
		
		 echo "</tbody> ";
		
		        echo "</table> ";
				
				 
        }
        
        else
        {
            echo "sorry ";
        }
		
		
		
			/*$result_db = mysqli_query($conn,"SELECT COUNT(field_0) FROM data"); 
			$row_db = mysqli_fetch_row($result_db);  
			$total_records = $row_db[0];  
			$total_pages = ceil($total_records / $limit); 
			

			$pagLink = "<ul class='pagination'>";  
			
			for ($i=1; $i<=$total_pages; $i++) {
				
			$pagLink .= "<li class='waves-effect' ><a class='page-link' href='pagination.php?page=".$i."'>".$i."</a></li>";	
			
			}
			echo $pagLink . "</ul>";  */
		
        
        $conn->close();
    ?>
    
		</div>
	
	
	
</div>
          
</body>
</html>




