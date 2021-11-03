<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "bd_mapeamento";

$db = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$db) {
	echo "Connection failed!";
}
?>