<?php 

function confirm($result){

	global $dbc;

	if(!$result){

		die('Query Failed' . mysqli_error($dbc));

	}

}



?>
