<html>

<head>
		<title>Information Added</title>
</head>

<body>
	<h2> Information has been added to the database.</h2>
<?php
	
	# assign variables to form values
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email_address = $_POST['email'];
	$age_of_person = $_POST['age'];
	$gender_of_person = $_POST['gender'];

	# connect to database
	$dbc = mysqli_connect('localhost', 'testuser', '$henkan72', 'test_database')
		or die('Error connecting to MySQL server.');

	# query holds SQL data as String
	$query = "INSERT INTO info_table (first_name, last_name, email_address, age, gender)" .
		"VALUES ('$first_name', '$last_name', '$email_address', '$age_of_person', '$gender_of_person')";

	# the mysqli_query arguements(connection, data to use)
	$result = mysqli_query($dbc, $query)
		or die('Error querying database.');

	# close the connection to the database
	mysql_close($dbc);
?>
</body>

</html>