<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE LIST</title>
</head>
<body>

	<?php
//get the db connection file

require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfunc.php';

//PrintTable ("employee",$connect);
employee($connect);

?>



</body>
</html>