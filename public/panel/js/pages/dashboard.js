$(document).ready(function() {
    
    "use strict";

/* Inspired by Lee Byron's test data generator. */
function stream_layers(n, m, o) {
  if (arguments.length < 3) o = 0;
  function bump(a) {
    var x = 1 / (.1 + Math.random()),
        y = 2 * Math.random() - .5,
        z = 10 / (.1 + Math.random());
    for (var i = 0; i < m; i++) {
      var w = (i / m - y) * z;
      a[i] += x * Math.exp(-w * w);
    }
  }
  return d3.range(n).map(function() {
      var a = [], i;
      for (i = 0; i < m; i++) a[i] = o + o * Math.random();
      for (i = 0; i < 5; i++) bump(a);
      return a.map(stream_index);
    });
};

/* Another layer generator using gamma distributions. */
function stream_waves(n, m) {
  return d3.range(n).map(function(i) {
    return d3.range(m).map(function(j) {
        var x = 20 * j / m - i / 3;
        return 2 * x * Math.exp(-.5 * x);
      }).map(stream_index);
    });
};

function stream_index(d, i) {
  return {x: i, y: Math.max(0, d)};
};
    var nvddata1 = function() {
        return stream_layers(3,10+Math.random()*100,.1).map(function(data, i) {
            var a = i + 1;
            return {
                key: 'Product' + a,
                values: data
            };
        });
    };


    nv.addGraph(function() {
    var chart = nv.models.multiBarChart()
    .color(['#0070E0','#637282','#F1C205'])

    chart.xAxis
        .tickFormat(d3.format(',f'));

    chart.yAxis
        .tickFormat(d3.format(',.1f'));

    d3.select('#chart1 svg')
        .datum(nvddata1())
        .transition().duration(500)
        .call(chart)
        ;

    nv.utils.windowResize(chart.update);

    return chart;
});
    
    


    var chart2 = function () {

        // We use an inline data source in the example, usually data would
        // be fetched from a server

        var data = [],
            totalPoints = 50;
        
        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 75) {
                    y = 75;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        var plot2 = $.plot("#chart2", [ getRandomData() ], {
            series: {
                shadowSize: 0   // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 75
            },
            xaxis: {
                min: 0,
                max: 50
            },
            colors: ["#5893DF"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
        });

        function update() {
            plot2.setData([getRandomData()]);

            plot2.draw();
            setTimeout(update, 2000);
        }

        update();
    };

    chart2();
    
    
     new Chart(document.getElementById("chart3"),{"type":"radar","data":{"labels":["Sun","Mon","Tue","Wed","Thu","Fri","Fri"],"datasets":[{"label":"My First Dataset","data":[5,9,3,7,6,5,4],"fill":true,"backgroundColor":"rgba(236, 94, 105, 0.2)","borderColor":"rgb(236, 94, 105)","pointBackgroundColor":"rgb(236, 94, 105)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(236, 94, 105)"},{"label":"My Second Dataset","data":[2,4,5,1,7,3,9],"fill":true,"backgroundColor":"rgba(0, 112, 224, 0.2)","borderColor":"rgb(0, 112, 224)","pointBackgroundColor":"rgb(0, 112, 224)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(0, 112, 224)"}]},"options":{legend: {
            display: false
         },"elements":{"line":{"tension":0,"borderWidth":3}}}});
});