<?php
require_once("includes/header.php");
require_once("includes/classes/QuoteDetailsFormProvider.php");

$formProvider = new QuoteDetailsFormProvider();
echo $formProvider->createForm();

?>

<?php require_once("includes/footer.php"); ?>
