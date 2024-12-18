<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

require_once 'dbconf.php'; 
require_once 'myfunc.php';

$book_id = $_GET['book_id'];

Libdetails($book_id,$connect);
//Jointable($book_id, $connect);
 

?>

</body>
</html>