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

			});

		});

	});


</script>


	<div id="container" class="col-xs-6 col-xs-offset-3 text-center">
		
		<h2>Search Our Database</h2>

		<input class="form-control" type="text" name="search" id="search" placeholder="Search Our Inventory">
		<br>
		<br>
		<h2 class="bg-success" id="result"></h2>

	</div>

	
</body>
</html>
