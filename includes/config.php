<?php 
ob_start();

date_default_timezone_set("Europe/Warsaw");

try {
	$con = new PDO("mysql:dbname=walaszkowe_cytaty;host=localhost;charset=utf8", "root", "");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>