<?php 

include "db.php";
include "functions.php";



$search = $_POST['search'];

if (!empty($search)) {
	
	$query = "SELECT * FROM cars WHERE title LIKE '$search%'";
	$search_query = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($search_query);

	confirm($search_query);
    
    if($count <= 0){
        
        echo "Sorry we do not have that car available";
    }else{

        while ($row = mysqli_fetch_array($search_query)) {

            $brand = $row['title'];
            ?>

            <ul class="list-unstyled">
            <?php

                echo "<li>{$brand} in Stock</li>";


            ?>
            </ul>


<?php }	} } ?>
