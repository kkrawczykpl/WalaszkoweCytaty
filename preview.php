<?php 
$nonHeader = true;
require_once("includes/header.php");
require_once("includes/classes/Quote.php");

if (!isset($_GET["id"])) {
	echo "Błąd. Podany Cytat nie istnieje";
	exit();
}

$quote = new Quote($con, $_GET["id"]);
$quote->incrementViews();

?>

<div class="preview-quote pure-g">
	<div class="pure-u-1-2 preview-half flex-center flex-column">
		<blockquote class="blockquote"><p><?php echo $quote->getQuote(); ?></p></blockquote>
		<p class="flex-right">- <?php echo $quote->getAuthor(); ?></p>
	</div>
	<div class="pure-u-1-2 preview-half">
		<img src="https://www.wykop.pl/cdn/c3201142/comment_39hvRLvDImOyetPTrXNxZJGl5bHwQxme.jpg" class="img-preview">
	</div>
</div>

<?php require_once("includes/footer.php"); ?>
