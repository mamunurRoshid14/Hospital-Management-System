<!DOCTYPE html>
<html>
<head>
	<title>Form Submission Successful</title>
	<style>
		body {
			font-size: 24pt;
			text-align: center;
			margin-top: 100px;
		}
		.btn {
			font-size: 24pt;
			background-color: #4CAF50;
			color: white;
			padding: 20px;
			border: none;
			border-radius: 10px;
			cursor: pointer;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_GET['userid'])) {
			echo "Thank you for submitting the form! Your User ID is: ".$_GET['userid'];
		} else {
			echo "Oops! Something went wrong.";
		}
	?>
	<br>
	<br>
	<button class="btn" onclick="location.href='oldpatient.php'">OK</button>
</body>
</html>
