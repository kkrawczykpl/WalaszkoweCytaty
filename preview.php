<?php 
$title = 'Walaszkowe Cytaty';
require_once("includes/header.php");
require_once("includes/classes/QuoteUploadData.php");

if (!isset($_GET["id"])) {
	echo "Błąd. Podany Cytat nie istnieje";
}
?>