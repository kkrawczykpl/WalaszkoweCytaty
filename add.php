<?php
require_once("includes/header.php");
require_once("includes/classes/QuoteDetailsFormProvider.php");

$formProvider = new QuoteDetailsFormProvider($con);
?>
<div class="form-container">

	<?php echo $formProvider->createForm(); ?>
	
</div>


<?php require_once("includes/footer.php"); ?>
