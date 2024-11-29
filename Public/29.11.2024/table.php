<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once 'db.php';	
		//insert data into student table
		try{
			//Quary
			$sql = "INSERT INTO STUDENTS VALUES('2020/asp/8', 'Rohan', 18, 'BMCS')";
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
/*
New student record created successfully
MariaDB [studentdatabase]> select * from students;
+------------+-------+-----+--------+
| id         | name  | age | course |
+------------+-------+-----+--------+
| 2020/ASP/2 | Nisha |  24 | CSC    |
| 2020/ASP/6 | john  |  27 | CA     |
| 2020/asp/8 | Rohan |  18 | BMCS   |
| 2020/ASP/9 | mary  |  25 | CS     |
+------------+-------+-----+--------+
4 rows in set (0.000 sec)
*/
?>

</body>
</html>