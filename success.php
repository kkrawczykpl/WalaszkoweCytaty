<?php 
$title = 'Walaszkowe Cytaty';
require_once("includes/header.php");
require_once("includes/classes/QuoteUploadData.php");

if (!isset($_POST['submitButton'])) {
	echo "Błąd. Nie dodano cytatu. Spróbuj ponownie";
	exit();
}

$quoteUploadData = new quoteUploadData(
							$con,
							$_POST["quote"],
							$_POST["author"],
							$_POST["category"],
							$_POST["source"]
						);
$quoteUpload = $quoteUploadData->upload();

if ($quoteUpload) {
	echo "<p class='text-center'>Dodano pomyślnie. Cytat zostanie dodany po etapie moderacji.</p>";
}
?>

<?php require_once("includes/footer.php"); ?>