<!DOCTYPE html>
<html>
<head>
	<title>Client Details</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	
	<?php
		require 'config.php';
	?>

<div id="client-details">
	<fieldset>
		<h1 style="text-align:center;"><b>Client Details</b></h1>

	<br><br>

	<!-- create new client form -->
	<div id="create-client-form">
		<fieldset style="height:300px;width:500px;margin:left;">
		<h2 align="center">Create New Client</h2>
		<form method="post" action="create.php">

			<label for="client-name">Client Name:</label>
			<input type="text" id="client-name" name="client_name"><br><br>
			<label for="client-id">Client ID:</label>
			<input type="text" id="client-id" name="client_id"><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email"><br><br>
			<label for="medical-reports">Medical Reports and Details:</label>
			<textarea id="medical-reports" name="medical_reports"></textarea><br><br>
			<label for="phone-number">Phone Number:</label>
			<input type="tel" id="phone-number" name="phone_number"><br><br>
			<div align="center">
			<input class="bttn" type="submit" value="Create Client">
			<input class="bttn" type="reset" value="Reset">
			</div>
			
		</form>
		</fieldset>
	</div>

	<!-- update client form -->
	<div id="update-client-form">
		<fieldset style="height:300px;width:500px;margin:right;">
		<h2 align="center">Update Client</h2>
		<form method="post" action="update.php">

			<label for="client-Id-update">Client ID:</label>
			<input type="text" id="client-id-update" name="client_id"><br><br>
			<label for="client-name-update">Client Name:</label>
			<input type="text" id="client-name-update" name="client_name"><br><br>
			<label for="email-update">Email:</label>
			<input type="email" id="email-update" name="email"><br><br>
			<label for="medical-reports-update">Medical Reports and Details:</label>
			<textarea id="medical-reports-update" name="medical_reports"></textarea><br><br>
			<label for="phone-number-update">Phone Number:</label>
			<input type="tel" id="phone-number-update" name="phone_number"><br><br>
			<div align="center">
			<input class="bttn" type="submit" value="Update Client">
			<input class="bttn" type="reset" value="Reset">
			</div>

		</form>
		</fieldset>
	</div>

	<!--delete client form -->
	<div id="delete-client-form">
		<fieldset>
		<h2 align="center">Delete Client</h2>
		<form method="post" action="delete.php">

			<label for="client-Id-update">Client ID:</label>
			<input type="text" id="client-id-update" name="client_id"><br><br>
			<input class="bttn" type="submit" value="Delete">
			<input class="bttn" type="reset" value="Reset">

		</form>
	</fieldset>
</div>
</body>

</html>