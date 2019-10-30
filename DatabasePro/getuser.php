<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$d_no = intval($_GET['d_no']);

include_once('Connection.php');

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM semester WHERE d_no = '$d_no' ";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>semdept</th>
<th>semester</th>
<th>dept</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sem_no'] . "</td>";
    echo "<td>" . $row['semester'] . "</td>";
    echo "<td>" . $row['d_no'] . "</td>";
      echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>