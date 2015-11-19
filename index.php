<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
</head>
<body>



<script>
	
	$(document).ready(function(){

		$('#search').keyup(function(){

			var search = $('#search').val();

			$.ajax({

				url: 'search.php',
				data: {search:search},
				type: 'post',
				success: function(data){

					if (!data.error) {

						$('#result').html(data);

					};

				}

			}); //End of $.ajax Function

		});

		//This code adds cars to the database table cars
		$("#add-car-form").submit(function(evt){

			evt.preventDefault();

			var postData = $(this).serialize();

			var url = $(this).attr('action');



		}); //End of #add-car-form function

	}); //End of Document Ready Function


</script>


	<div id="container" class="col-xs-6 col-xs-offset-3">
		<div class="row">
			<h2>Search Our Database</h2>

			<input class="form-control" type="text" name="search" id="search" placeholder="Search Our Inventory">
			<br>
			<br>
			<h2 class="bg-success" id="result"></h2>
		</div>
		
		<div class="row">
			
			<form id="add-car-form" class="col-xs-6" method="post" action="add_cars.php">
				<div class="form-group">
				<input type="text" class="form-control" name="car_name">
				</div>
				<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Add Car">
				</div>
			</form>

		</div>

	</div>

	
</body>
</html>
