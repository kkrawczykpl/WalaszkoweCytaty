<?php 
$title = 'Walaszkowe Cytaty';
require_once("includes/header.php");
require_once("includes/classes/Quote.php");
require_once("includes/classes/Category.php");
require_once("includes/classes/QuoteGrid.php");

if (!isset($_GET["id"])) {
	echo "Błąd. Podana kategoria nie istnieje";
	exit();
}

$category = new Category($con, $_GET["id"], 12);
echo $category->getName();

$quotes = $category->getQuotes();

if ($quotes) {
	$quoteGrid = new QuoteGrid($con, 12);
	echo $quoteGrid->create($quotes);
}


?>
<?php require_once("includes/footer.php"); ?>