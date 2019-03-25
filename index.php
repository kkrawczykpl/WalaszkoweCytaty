<?php 
$title = 'Walaszkowe Cytaty';
require_once("includes/header.php");
require_once("includes/classes/Quote.php");
require_once("includes/classes/QuoteGrid.php");

$quoteGrid = new QuoteGrid($con);

echo $quoteGrid->create(null); 
?>

<?php require_once("includes/footer.php"); ?>