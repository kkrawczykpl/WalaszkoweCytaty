<?php 
$nonHeader = true;
$customCSS = 
	"body{
		padding-bottom: 0;
		overflow: hidden;
	}";
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
		<blockquote class="blockquote"><p class="quote" style="font-family: Roboto; font-size: 24px;"><?php echo $quote->getQuote(); ?></p></blockquote>
		<p class="flex-right">- <?php echo $quote->getAuthor(); ?></p>
		<p class="report">Zauważyłeś błąd? <a href="report.php">Zgłoś</a></p>
	</div>
	<div class="pure-u-1-2 preview-half">
		<img src="<?php echo $quote->getImage()[0]; ?>" class="img-preview">
	</div>
</div>

<?php require_once("includes/footer.php"); ?>
