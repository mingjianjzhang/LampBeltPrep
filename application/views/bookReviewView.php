<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Jquery Theme -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/hot-sneaks/jquery-ui.css">
	<!-- Materialize CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<!-- Personal CSS -->
	<link rel="stylesheet" href="assets/css/style.css">


	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>


	<!-- Jquery --> 
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<!-- Materialize JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<script>
		
	</script>
</head>
<body>
	<div>
		<a href="">Home</a><a href="">Logout</a>
	</div>
	<div>
		<p> [phpcontentTITLE]</p>
		<p> [phpcontentAUTHOR] </p>
	</div>
	<div>
		<h3>Reviews</h3>
		<p>[rating in stars]</p>  <!-- foreach -->
		<p>[user] " says " [comment]</p>
		<p>[date posted]
			<p><a href="">Delete this Review</a></p> <!-- [if this review is user's review, show link] -->
		</div>
		<div>
			<h4>Add a Review:</h4>
			<div class="input-field col s12">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
				<label for="textarea1">Review</label>
			</div>
			<p>Rating: <input type="" name="">
				<option>5</option>
				<option>4</option>
				<option>3</option>
				<option>2</option>
				<option>1</option>
				stars.
				<input type="submit" name="Submit Review">
			</div>
		</body>
		</html>