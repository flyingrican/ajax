<?php 

include "db.php";
include 'functions.php';

if (isset($_POST['car_name'])) {
	
	$car_name = $_POST['car_name'];

	$query = "INSERT INTO cars(title) VALUES('$car_name')";
	$query_car_name = mysqli_query($dbc, $query);
	confirm($query_car_name);

}

//header("Location: index.html");


?>
