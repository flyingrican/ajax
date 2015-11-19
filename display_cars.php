<?php 

include "db.php";
include "functions.php";

$query = "SELECT * FROM cars";
$query_car_info = mysqli_query($dbc, $query);
confirm($query_car_info);

while ($row = mysqli_fetch_array($query_car_info)) {
	
	echo "<tr>";
	echo "<td>{$row['id']}</td>";
	echo "<td>{$row['cars']}</td>}";
	echo "</tr>";

}


?>
