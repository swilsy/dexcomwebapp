<html>
<head>
	<title>Dexcom Readings For Us</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://use.fontawesome.com/a9ce52f234.js"></script>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<script src="assets/js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107286439-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107286439-1');
</script>

</head>
<body>
<nav>
	<div class="inner">
		<figure class="the-logo">
			<img src="assets/img/logo.png" alt="">
		</figure>

		<ul class="menu">
			<!-- <li><a href="./" class="home">Home</a></li>
			<li><a href="./" class="home">Contact </a></li> -->
		</ul>
	</div>
</nav>




	<div class="site-container">
		<div class="graph">
				

			<div class="avg">

				<small class="results-details">*results have a 3.5 hour delay</small>

				<p class="your-stats">Your 48 hour stats:</p>
				
				<div class="three-container">
					<div class="item">
						<p class="value-title">Low</p>
						<span class="the-low">60</span>
					</div>
					<div class="item">
						<p class="value-title">Avg</p>
						<span class="the-average">100</span>
					</div>
					<div class="item">
						<p class="value-title">High</p>
						<span class="the-high">200</span>
					</div>
				</div>

				<p class="a1c">Your Estimated A1C is: <span class="the-a1c">8</span></p>
				<p>In the past 48 hours, your dexcom has provided <span class="the-readings"></span> readings</p>
			</div>



			<canvas id="myChart" style="height:80vh; width:100vw"></canvas>
				<div class="graph" style="position: relative; z-index: 999;">
					<div class="uhoh">Uhoh! Looks like there was an issue pulling your data! Please sign in again!
					<div>
						<!-- <a href="https://api.dexcom.com/v1/oauth2/login?client_id=XlVhJJpBH3NEH4Plsv6zuw0fSW4KsGMW&redirect_uri=http://www.dexcomreadingsfor.us/home.php&response_type=code&scope=offline_access" class="get-started">Get Started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
					<a href="https://api.dexcom.com/v1/oauth2/login?client_id=YOPr4NmGQVSqVaavWYHx71CekYVwakfG&redirect_uri=http://localhost:3000/dexcomwebapp/home.php&response_type=code&scope=offline_access" class="get-started">Get Started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						
					</div>
				</div>
				</div>
			<div class="loader">

				<div class="the_loader"></div>
			</div>
		</div>
	</div>	

		
		<div class="inner">
			<div class="view-log" style="text-align: center;">
				<button class="view-logger">View Log</button>
			</div>
		</div>

		<div class="inner">
			<div class="the-log" style="text-align: center;">
				
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