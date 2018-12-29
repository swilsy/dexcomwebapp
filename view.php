<?php include('header.php'); ?>
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

				<p class="your-stats">Your 48hr stats:</p>
				
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
				<p>Your dexcom has provided <span class="the-readings"></span> readings</p>
			</div>



			<div class="graph-container">
				<canvas id="myChart" style="height:80vh; width:100vw"></canvas>
			</div>
				<div class="graph" style="position: relative; z-index: 999;">
					<div class="uhoh">Uhoh! Looks like there was an issue pulling your data! Please sign in again!
					<div>
						<!-- <a href="https://api.dexcom.com/v1/oauth2/login?client_id=XlVhJJpBH3NEH4Plsv6zuw0fSW4KsGMW&redirect_uri=http://www.dexcomreadingsfor.us/home&response_type=code&scope=offline_access" class="get-started">Get Started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
					<a href="https://api.dexcom.com/v1/oauth2/login?client_id=Vjiko00BljSRCuHxSgYU3JV80D3ZQzWR&redirect_uri=http://localhost/dev/beetus/dexcomwebapp/home&response_type=code&scope=offline_access" class="get-started">Get Started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						
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