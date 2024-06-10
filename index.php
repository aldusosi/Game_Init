<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="imagem/png" href="./images/make-a-game-logo.ico"/>

		<!--SEO-->
		<meta name="description" content="Game Init - Cursos de programação, Web, Games, com conteúdo digital e acesso vitalício.">
		<meta name="keywords" content="desenvolvimento web, programação, jogos, web, cursos online, front-end, back-and, php">
		<!--End SEO-->

		<link rel="stylesheet" href="./css/bootstrap.min.css"">

		<title>Game Init</title>

		
	</head>
	<body class="bg-light">

		<?php 
			// NAVBAR_COMP
			require_once('./components/navbar_comp.php');

			// DIV_FANTASMA
			echo '<div style="height:70px;"></div>';

			//	HEADER_COMP	
			require_once('./components/big_logo_comp.php');

			//	VIDEO_APRESENTACAO_COMP
			require_once('./components/video_apresentacao_comp.php');

			// CARDS_SOBRE_CONTEUDO_COMP
			require_once('./components/container_cards_beneficios_comp.php');
			
		?>
		<!--<section class="mt-5" style="background-image: url('./images/bannerLinkedinProgramer.png'); height:100px;">
			
		</section>-->

		

		
		

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" ></script>
	</body>
</html>