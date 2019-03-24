<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Walaszkowe Cytaty</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/micromodal.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
		    <ul class="pure-menu-list float-right">
			    <li class="pure-menu-item text-right"><a href="#" class="pure-menu-link change-font"><i class="fa fa-font"></i></a></li>
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

	<div class="modal" id="modal-1" aria-hidden="true">
	  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
	    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" >
	      <header class="modal__header">
	        <h2 id="modal-1-title modal__title">
	          🚀 Dzień dobry w Buhaju, mam na imię Domino, ale wszyscy mówią na mnie Domingo!
	        </h2>
	        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
	      </header>
	      <div id="modal-1-content modal__content">
	        <blockquote class="blockquote"><p>Zapisaliście się dobrowolnie na program treningowy "Z kulturą fizyczną na Ty". Będziemy pakować, obciągać i ćwiczyć, żeby każdy miał szansę w dyskotece.</p></blockquote>
	        <p>I w rytm disco polo! Witam Cię na stronie poświęconej cytatom z dzieł twórcy hitów hollywoodzkich, mistrza kamery (i napleta...tableta graficznego) - Bartosza "Filipa Barłosia" Walaszka.</p>
	        <p>Strona ta jest tworzona przez społeczność - jeżeli nie potrafiłeś znaleźć swojego ulubionego tekstu - dodaj go poprzez <a href="#">formularz</a></p>
	        <p>Pamiętaj, że gdybyś nie mógł się rozczytać - w każdym momencie możesz zmienić font, używając przycisku po prawej stronie menu.</p>
	      </div>
	    </div>
	  </div>
	</div>

	<footer>
		<p>© 2019 WalaszkoweCytaty, <a href="https://kkrawczyk.pl/">Krzysztof Krawczyk</a></p>
	</footer>
	<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
	<script>
		window.onload = function()
		{
			MicroModal.init();
		    const _showed = localStorage.getItem('modal_showed');
		    const fontBtn = document.querySelector('.change-font');
		    // Modal
		    if (_showed === null) {
		        localStorage.setItem('modal_showed', 1);
		    	MicroModal.show('modal-1');
		    }else{
		    	//debug
		    }

		    // Change font
		    fontBtn.onclick = function() {
		    	let quotes = document.querySelectorAll('.quote');
		    	for (let i of quotes) {
		    		if (i.style.fontFamily == "Roboto") {
				    	i.style.fontFamily = "Parisienne";
				    	i.style.fontSize = "32px";
				    	fontBtn.style.color = "#777";
		    		}else{
				    	i.style.fontFamily = "Roboto";
				    	i.style.fontSize = "24px";
				    	fontBtn.style.color = "#fe628e";
		    		}
		    		
		    	}
		    }
		}
	</script>
</body>
</html>