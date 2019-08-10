<?php
$title = 'Walaszkowe Cytaty - Zgłoszenie błędu';
require_once("includes/header.php");
require_once("includes/classes/ReportFormProvider.php");

$formProvider = new ReportFormProvider($con);

?>
<div class="form-container">

	<?php echo $formProvider->createForm(); ?>
	
</div>


<?php require_once("includes/footer.php"); ?>
