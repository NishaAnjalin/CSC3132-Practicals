<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 //echo "Employee";

require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfunc.php';

//PrintTable ("employee",$connect);
//employee($connect);
 
 $EMP_ID = $_GET['EMP_ID'];

Empdetails($EMP_ID,$connect);


?>


</body>
</html>