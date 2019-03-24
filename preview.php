<?php 
$title = 'Walaszkowe Cytaty';
require_once("includes/header.php");
require_once("includes/classes/Quote.php");

if (!isset($_GET["id"])) {
	echo "Błąd. Podany Cytat nie istnieje";
	exit();
}

$quote = new Quote($con, $_GET["id"]);
$quote->incrementViews();

?>

<div class="preview-quote">
	
</div>