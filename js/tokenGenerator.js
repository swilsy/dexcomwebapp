;(function($){

  var myGraph = function(){
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      responsive: true,
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
            responsive: true,
            maintainAspectRatio: true,
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
          }
        });


  }
	var avgGlucose = [];
  var timeStamp = [];
   $('.avg').hide();
	$.ajax({
		url: 'http://www.dexcomreadingsfor.us/home.php',
    // url: 'http://localhost:3000/dexcomwebapp/home.php',
		dataType: 'json',
		success: function(data){
			var bg = data.egvs;
      var total = 0;
      console.log(data.length);
      // console.log(data.fault.faultstring);
        // if(data.faul.faultstring); return;



				for(var i = 0; i < bg.length; i++){
          timeStamp.push(moment(bg[i].displayTime).format('LT'));
					avgGlucose.push(bg[i].value);

          var viewLog = "<div class='the-logger'>";
            viewLog += "<span class='the-mini-time'>";
             viewLog += moment(bg[i].displayTime).format('LLL') + "</span> ";
             viewLog += " <span class='the-mini-reading'>";
             viewLog += bg[i].value +  '<small>' + data.unit  + '</small> ' + "</span>";

             $('.the-log').append(viewLog);
				}
        var d = new Date();

        for(var t = 0; t < timeStamp.length; t++){
          moment(timeStamp[t]).format('LT')
        }

				
        for(var i = 0; i < avgGlucose.length; i++) {
            total += avgGlucose[i];
        }
        $('.uhoh').hide();
        $('.avg').fadeIn();
        var avg = total / avgGlucose.length;
        var theTotes = parseInt(avg);
        var a1c = (46.7 + theTotes) / 28.7;
        var minReading = Math.min.apply(Math, avgGlucose);
        var highReading = Math.max.apply(Math, avgGlucose);
        
       


        $('.the-average').html(theTotes);
        $('.the-a1c').html(a1c.toFixed(2))
        $('.the-readings').html(i)
        $('.the-high').html(highReading);
        $('.the-low').html(minReading);

      
          
        console.log(highReading);

    
         

        myGraph();

		},
		error: function(xhr){
			console.log(xhr);

		},
    complete: function(){
      $('.loader').fadeOut();
    },
	})

  

  $('.view-logger').on('click', function(){
    $('.the-log').slideToggle();
  })
  


  $(window).on('load', function(){
    setTimeout(function(){
      $('.uhoh').addClass('show-uhoh')
    }, 4000)

  })
  
		

})(jQuery);

