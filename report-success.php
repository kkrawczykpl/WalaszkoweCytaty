<?php 
$title = 'Walaszkowe Cytaty - Zgłoszenie';
require_once("includes/header.php");
require_once("includes/classes/ReportUploadData.php");
if (!isset($_POST['submitButton'])) {
	echo "Błąd. Nie dodano cytatu. Spróbuj ponownie";
	exit();
}


$reportUploadData = new ReportUploadData(
							$con,
							$_POST["url"],
							$_POST["category"],
							$_POST["message"]
						);
$quoteUpload = $reportUploadData->upload();

if ($quoteUpload) {
	echo "<p class='text-center'>Dziękujemy za zgłoszenie, czynisz nasz serwis lepszym! Zajmiemy się nim jak najszybciej.</p>";
}
?>

<?php require_once("includes/footer.php"); ?>