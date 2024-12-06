<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once 'dbconf.php';	
		//insert data into student table
		try{
			//Quary
			$sql = "INSERT INTO students VALUES('S003', 'Rohan', 18, 'BMCS')";
			//execute the quary
			$result = mysqli_query($connect,$sql);

			if ($result){
				echo "New student record created successfully";
			}else{
				die("Error".mysqli_error($connect));
			}

		} catch(Exception $e){
			die($e->getMessage());
	}

?>

</body>
</html>