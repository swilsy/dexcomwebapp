;(function($){

  var myGraph = function(){
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: timeStamp.reverse(),
            datasets: [{
                label: 'mg/dL',
                data: avgGlucose.reverse(),
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
                ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 2
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                }
              }]
            },
            tooltips: {
              backgroundColor: '#5D9BFF',
              displayColors: false
            },
            responsive: true
          }
        });
  }
	var avgGlucose = [];
  var timeStamp = [];
   $('.avg').append("Uh oh! Looks like something happened on the backend of this site. Please login for a new session <div><a class='start' href='https://api.dexcom.com/v1/oauth2/login?client_id=XE15nFWB4ACRnGY7JwUEcJG1Lizhhzxm&redirect_uri=http://dexcomreadingsfor.us/home.php&response_type=code&scope=offline_access'>Login</a></div>");
	$.ajax({
		url: 'http://dexcomreadingsfor.us/home.php',
		dataType: 'json',
		success: function(data){
			var bg = data.egvs;
      var total = 0;

				for(var i = 0; i < bg.length; i++){
          timeStamp.push(bg[i].displayTime);
					avgGlucose.push(bg[i].value);
				}
				
        for(var i = 0; i < avgGlucose.length; i++) {
            total += avgGlucose[i];
        }
        var avg = total / avgGlucose.length;
        var theTotes = parseInt(avg);
        var a1c = (46.7 + theTotes) / 28.7
        $('.avg').html('');

        $('.avg').append("<small>*results have a 3.5 hour delay</small> <p>Your 48 Hour Avg is: <span class='green'>" + theTotes + ' </span> based off ' + i + " results</p><p>Your estimated A1C is <span class='green'> " + a1c + " </span><small>based off mg/dL</small></p>");

    
         

        myGraph();

		},
		error: function(xhr){
			console.log(xhr);

		},
    complete: function(){
      $('.loader').fadeOut();
    },
	})

  
  

  
		

})(jQuery);

