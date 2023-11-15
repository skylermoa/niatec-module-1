<?php

$sname= "localhost";
$username= "root";
$password = "";

$db_name = "module_db";

$connection = mysqli_connect($sname, $username, $password, $db_name);
if (!$connection) {
	echo "Connection failed!";
}
