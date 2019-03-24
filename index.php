<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Walaszkowe Cytaty</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="menu">
		<div class="pure-menu pure-menu-horizontal">
		    <a href="#" class="pure-menu-heading pure-menu-link"><span class="grey">[</span>Walaszkowe<span class="grey">]</span> Cytaty</a>
		    <ul class="pure-menu-list">
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Kapitan Bomba</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Egzorcysta</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Wściekłe Pięści Węża</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Blok Ekipa</a></li>
		    </ul>
		</div>
	</div>
	<header class="header">
		<div class="panel">
			<h1>Walaszkowe Cytaty</h1>
		</div>
	</header>
	<div class="beam"></div>
	<div class="quotes">
		<div class="pure-g text-center">
		    <div class="pure-u-1-3">
		    	<p class="quote">A niech to! Jeżeli panom tak bardzo na tym zależy, to spuszczę wam przysłowiowy wpierdol!</p>
		    	<p class="text-right caption">-Wściekły Wąż</p>
		    </div>
		    <div class="pure-u-1-3">
		    	<p class="quote">Co prawda ja jestem najlepszy, ale on jest jeszcze lepszy.</p>
		    	<p class="text-right caption">-Wściekły Wąż</p>
		    </div>
		    <div class="pure-u-1-3">
		    	<p class="quote">Mistrz polecił mi unikać niepotrzebnych walek.</p>
		    	<p class="text-right caption">-Wściekły Wąż</p>
		    </div>
		    <div class="pure-u-1-3">
		    	<p class="quote">– Panie kapitanie, a jak jakiś kosmita ma w miejscu oczu jajca, i tak tutaj, zamiast buzi i nosa, taki kutacz, to czy on czuje i widzi?<br>
				– Czuje i widzi.<br>
				– No, ale jak?<br>
				– Chujowo.</p>
		    	<p class="text-right caption">-Kapitan Bomba, Tępy Chuj</p>
		    </div>
		    <div class="pure-u-1-3">
		    	<p class="quote">Chatko na kurzych kulasach, rozdepcz tego kutasa!</p>
		    	<p class="text-right caption">-Baba Jaga</p>
		    </div>
		    <div class="pure-u-1-3">
		    	<p class="quote">Każda dama ma cenę,<br>Trzeba po prostu pytać, a nie czaić się z kwiatami.</p>
		    	<p class="text-right caption">-Bracia Figo Fagot: Bożenka</p>
		    </div>
		</div>
	</div>
	<footer>
		<p>© 2019 WalaszkoweCytaty, <a href="https://kkrawczyk.pl/">Krzysztof Krawczyk</a></p>
	</footer>

	<script>
		window.onload = function()
		{
		    const _showed = localStorage.getItem('modal_showed');
		    if (_showed === null) {
		        localStorage.setItem('modal_showed', 1);
		        $('#myModal').modal('show');
		    }
		}
	</script>
</body>
</html>