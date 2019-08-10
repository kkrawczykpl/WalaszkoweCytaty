<?php
$nonHeader = true;
require_once("includes/header.php");
require_once("includes/classes/Quote.php");
require_once("includes/classes/Category.php");
require_once("includes/classes/QuoteGrid.php");

if (!isset($_GET["id"]) || empty($_GET["id"])) {
	echo "Błąd. Podana kategoria nie istnieje";
	exit();
}
$offset = 0;
if (isset($_GET["page"]) && !empty($_GET["page"])) {
	$offset = $_GET["page"] * 2;
}

$category = new Category($con, $_GET["id"], 12, $offset);
?>
<header class="header" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/img/headers/<?= $category->getId(); ?>.jpg); background-repeat: no-repeat; background-position: center center; background-size: cover;">
	<div class="panel">
		<h1><?= $category->getName(); ?></h1>
	</div>
</header>
<div class="beam"></div>
<?php
$quotes = $category->getQuotes();

if ($quotes) {
	$quoteGrid = new QuoteGrid($con, 12);
	echo $quoteGrid->create($quotes);
}

?>
<?php require_once("includes/footer.php"); ?>