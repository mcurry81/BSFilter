<?php
session_start();
?>
<!--BSFilter Application for Angel Hack 2016
Created by Logan Hearth, Shristhy Naidu, and Melissa Curry-->

<!DOCTYPE html>
<head>
	<title>BSFilter Main</title>
	<link href="bsfilter.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<h2>BS FIlter</h2>

	<!--<form class = "form-horizontal" role="form">-->
	<form class="js-autoSubmit" method="GET">
		Input File/Text:<br>
		<input type="file" name="file">
		<br>
		  
		 <input type="submit" name="submit">
	</form>




</div><!--end of div container-->

</body>
</html>