<?php 
 ?>
<!DOCTYPE html>
<html lang="en" class="the-view">
<head>
	<meta charset="UTF-8">
	<title>Dexcom Readings for Us</title>
		<script src="assets/js/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://use.fontawesome.com/a9ce52f234.js"></script>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107286439-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107286439-1');
</script>

</head>
<body class="the-view">

	<div class="site-container">
		<div class="graph">
				<figure class="the-logo">
				<img src="assets/img/logo.png" alt="">
			</figure>

			<div class="avg"></div>
			<canvas id="myChart"></canvas>

			<div class="loader">
				<svg
					 width="1000" height="1000" viewBox="0 0 1000 1000"
					 xmlns="http://www.w3.org/2000/svg" version="1.1"
					 xmlns:xlink="http://www.w3.org/1999/xlink">
					<g transform="translate(500,500)">
						<rect class="rotate-45 rotate-back" x=-5 y=-5 width=10 height=10 stroke="black" stroke-width=20 fill="none"/>
						<rect class="rotate-45 rotate" x=-50 y=-50 width=100 height=100 stroke="black" stroke-width=20 stroke-linejoin="bevel" fill="none"/>
						<g transform="translate(-50,0) rotate(-45)"><polyline class="left" points="40,-40 50,-50 -40,-50 -50,-40 -50,50 -40,40" stroke="black" stroke-width=20 fill="none"/></g>
						<g transform="translate(50,0) rotate(135)"><polyline class="right" points="40,-40 50,-50 -40,-50 -50,-40 -50,50 -40,40" stroke="black" stroke-width=20 fill="none"/></g>
						<text y=-140 text-anchor="middle" font-weight="bold" font-size="3em" font-family="sans-serif">loading...</text>
					</g>
				</svg>
			</div>
		</div>
	</div>


	<div class="graph">
		<div class="the-what" style="text-align: center;">
			<a target="_blank" href="https://twitter.com/ispykenny"><small>by kenny krosky <i class="fa fa-twitter" aria-hidden="true"></i></small></a>
		</div>
	</div>






		<div class="view"></div>
		<script src="assets/js/global.js"></script>
</body>
</html>