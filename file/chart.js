//$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

  var data = [
    [Date.UTC(2013,5,2,12,12),25],
    [Date.UTC(2013,5,2,12,13),28],
    [Date.UTC(2013,5,2,12,14),15],
    [Date.UTC(2013,5,2,12,15),20],
    [Date.UTC(2013,5,2,12,16),25]
  ]

  var chartData = {
       type: "area",  // Specify your chart type here.
       title: {
         text: "Temperature" // Adds a title to your chart
       },
       legend: {}, // Creates an interactive legend
       series: [  // Insert your series data here.
           { values: data},
       ],
       "crosshair-x":{
          "plot-label":{
            "text":"%v"
          },
          "scale-label":{
            "visible":false
          }
      }
     };
     zingchart.render({ // Render Method[3]
       id: "chartDiv",
       data: chartData,
       height: 400,
       width: 600,
     });
