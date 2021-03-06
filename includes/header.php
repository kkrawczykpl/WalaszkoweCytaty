<?php require_once("includes/config.php"); ?>
<?php require_once("includes/classes/Menu.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Walaszkowe Cytaty</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	
	<link rel="stylesheet" href="assets/css/micromodal.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<?php 
		if (isset($customCSS) && !empty($customCSS)) {
			echo
			"<style>
				$customCSS
			</style>";
		}
	 ?>
</head>
<body>
	<div class="menu">
		<div class="pure-menu pure-menu-horizontal pure-menu-scrollable">
		    <a href="index.php" class="pure-menu-heading pure-menu-link"><span class="grey">[</span>Walaszkowe<span class="grey">]</span> Cytaty</a>
		    <ul class="pure-menu-list">
		        <?php 
		        	$menu = new Menu($con);
		        	echo $menu->createMenu();
		         ?>
		        <li class="pure-menu-item hidden-desktop"><a href="#" class="pure-menu-link change-font"><i class="fa fa-font"></i></a></li>
		    </ul>
		    <ul class="pure-menu-list float-right hidden-mobile">
			    <li class="pure-menu-item text-right"><a href="#" class="pure-menu-link change-font"><i class="fa fa-font"></i></a></li>
		    </ul>
		</div>
	</div>
	<?php if(!isset($nonHeader)): ?>
	<header class="static-header header">
		<div class="panel">
			<h1><?php echo htmlspecialchars($title); ?></h1>
		</div>
	</header>
	<div class="beam"></div>
	<?php endif; ?>
