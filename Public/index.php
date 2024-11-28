<?php
//get the database connection file
require_once 'dbconf.php';

try{
	//Query
	$sql = "SELECT * FROM students";

	//execute the query (call variable,query)
	$result = mysqli_query($connect,$sql);

	//check if data exist in the table
	if (mysqli_num_rows($result)>0) {
		//fetch the data from rows
		while($row = mysqli_fetch_assoc($result)){
			print_r($row);

		}
	} else {
		echo "No results"; //table is empty
	}
	

}catch(Expection $e){
	die($e->getMessage());
}

?>

