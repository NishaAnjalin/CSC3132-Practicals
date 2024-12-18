<?php
//get the database connection file
require_once 'dbconf.php';
function PrintTable($tableName,$connect){
try{
	//Query
	$sql = "SELECT * FROM $tableName";

	//execute the query (call variable,query)
	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)>0) {
		//fetch the data from rows

		echo "<table border=1> ";

	$col = mysqli_fetch_fields($result);
	//print the column
	echo "<tr>";
	foreach ($col as $value) {
		//return an object
		//print_r($value)
			echo "<td>".$value->name."</td>";
		}
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result)){
			//print the data in table format

		echo "<tr>";
		foreach ($row as $key => $value) {
			echo "<td>$value</td>";
		}
		echo "</tr>";
		}
		echo "</table>";
	} 
	else{
		echo "No results"; //table is empty
	}

	}


catch(Exception $e){
	die($e->getMessage());
}
}
 //GET DATA FROM DB
 function Searchbook($book_id,$connect){
            try{
            
                $sql = "SELECT book_id,title,genre FROM  books where book_id like '%$book_id%' ";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "<td> View details </td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    $book_id=$row['book_id'];
                    echo "<td><a href='printtable.php? book_id=$book_id '> View </a> </td>";

                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }


function Libdetails($book_id,$connect){
            try{
            
                $sql = "SELECT * FROM  books where  book_id = $book_id ";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "<td> Author details </td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }

                     $book_id=$row['book_id'];
                    echo "<td><a href='printtable.php? book_id=$book_id '> View </a> </td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }


        function Jointable($book_id, $connect) {
    try {
        // Correct SQL query
        $sql = "SELECT  a.name, a.birth_year, a.death_year 
                FROM books b 
                INNER JOIN book_authors ba INNER JOIN authors a  ON b.book_id = ba.bookid AND
                ba.authorid = a.authorid 
                WHERE b.book_id = $book_id";

        // Execute the query
        $result = mysqli_query($connect, $sql);

        // Check if there are results
        if (mysqli_num_rows($result) > 0) {
            echo "<table border=1>";
            
            // Fetch and print column headers
            $col = mysqli_fetch_fields($result);
            echo "<tr>";
            foreach ($col as $value) {
                echo "<td>" . $value->name . "</td>";
            }
            echo "</tr>";

            // Fetch and print data rows
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No results";
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
?>
