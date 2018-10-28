<?php

require('config.php');
require('cookie.php');

?>

<html>

<head>

	<title>La Giloulogie - Accueil</title>
    <meta charset="utf-8">
    <link rel="" href="../scrollbar/scrollbar.html">
    <link rel="stylesheet" href="../Css/Aside.css">
    <link rel="stylesheet" href="../Css/REBOOT.css">
    <link rel="stylesheet" href="../Css/Header.css">
    <link rel="stylesheet" href="../scrollbar/jquery.mCustomScrollbar.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../Js/javaS.js"></script>

</head>

<body>

	<header>

		<a href=""><img src="../images/LOGO.PNG" class="logo"></a>
		<p class="gilou">La Giloulogie</p>

		<nav>

			<ul>

				<li class="item"><a href="video_library.php">Vidéothèque</a></li>
				<li class="item"><a href="forum.php">Forum</a></li>
				<li class="item"><a href="gallery.php">Galerie</a></li>
				<li class="item"><a href="biography.php">Biographie</a></li>

			</ul>

		</nav>

	</header>

	<?php include_once('aside.php'); ?>

	<section>

		<h1>Site qualitatif sur le grand Gilou</h1>

		<br>
			
		<p id="cuerpo">Bienvenue ! Vous vous trouvez actuellement sur le premier site web au monde faisant l'éloge du grand Gilou, le seul, l'unique ! Encore mieux que le têtisme ou la religion de la cuitochette, venez vénérer le gilou !

		<br><br><br>

		<h2>Mais dis moi Jammy, qui c'est que c'est Gilou ?</h2>

		<br>

		<p id="cuerpo">Gilou est un être vivant capable de se métamorphoser en tout type d'être intermédiaire, tout comme un être remplit de tristesse, ou encore un être bien beauf comme on aime !</p>

		<br><br><br>

		<h2>Et quoi c'est qu'il fait le petit Gilou ?</h2>

		<br>

		<p id="cuerpo">Et bien c'est très simple ! Il est à la fois personnage et à la fois acteur.... Oui oui no fake ! Il joue dans une série télévisée mondialement pas connue, <i>Engrenages</i>, en tant que lieutenant Escoffier. Et puis c'est un très bon personnage, allez voir la galerie pour voir ses talents d'acteur en terme de poses !</p>

		<br><br><br>

		<h2>Et maintenant, je vous propose de regarder ma réaction en le voyant pour la première fois :</h2>

		<br><br><br><br>

		<img id="etonnement" src="../images/etonnement.gif" class="images">

		<br><br>

	</section>

</body>

</html>