<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once 'dbconf.php';	
		// Insert data into the student table
		try {
			// Corrected SQL query with explicit column list
			$sql = "INSERT INTO student (name, age, gender, course, enrollment_date) 
			        VALUES ('Alice ', 20, 'Female', 'Computer Science', '2023-08-15')";
			
			// Execute the query
			$result = mysqli_query($connect, $sql);

			if ($result) {
				echo "New student record created successfully";
			} else {
				die("Error: " . mysqli_error($connect));
			}

		} catch (Exception $e) {
			die($e->getMessage());
		}
	?>

</body>
</html>
