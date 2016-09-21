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
	<nav>
		<div class="container">
			<div class="nav-wrapper">
				<h5 class="brand-logo">Welcome, Josh </h5>
				<ul id="nav-mobile" class="right">
					<li><a>Home</a></li>
					<li><a>Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div>
		<p>Divergent</p>
		<p>Author: Veronica Roth </p>
	</div>
	<div class="col s6">
		<h3>Reviews</h3>
		<table class="bordered">
			<thead>
				<tr>
					<th data-field="id">Name</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Rating</td>
				</tr>
				<tr>
					<td>Rating</td>
				</tr>
				<tr>
					<td>Rating</td>
				</tr>
			</tbody>
		</table>
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