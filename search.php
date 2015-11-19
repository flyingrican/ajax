<?php 

include "db.php";
include "functions.php";



$search = $_POST['search'];

if (!empty($search)) {
	
	$query = "SELECT * FROM cars WHERE cars LIKE '$search%'";
	$search_query = mysqli_query($dbc, $query);

	confirm($search_query);

	while ($row = mysqli_fetch_array($search_query)) {
		
		$brand = $row['cars'];
		?>

		<ul class="list-unstyled">
		<?php

			echo "<li>{$brand} in Stock</li>";


		?>
		</ul>


<?php	}

}

?>
