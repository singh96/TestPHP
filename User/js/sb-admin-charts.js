// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var ctx=document.getElementById("myAreaChart");
var temperaturechart=new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00","2:00"],
    datasets: [{
        data: [
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1)
        ],
        label: "Temperature",
        borderDash:[10,2],
        borderColor: "rgba(0,123,255,1)",
        backgroundColor: "rgba(0,123,255,0.2)",
        fill: false},{
        data: [
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1)
        ],
        label: "Humidity",
        borderDash:[10,2],
        borderColor: "rgba(220,53,69,1)",
        backgroundColor: "rgba(220,53,69,0.2)",
        fill: false},{
        data: [
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1)
        ],
        label: "Soil",
        borderDash:[10,2],
        borderColor: "rgba(255,193,7,1)",
        backgroundColor: "rgba(255,193,7,0.2)",
        fill: false},{
        data: [
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1),
            Math.floor((Math.random() * 80) + 1)
        ],
        label: "Light",
        borderDash:[10,2],
        borderColor: "rgba(40,167,69,1)",
        backgroundColor: "rgba(40,167,69,0.2)",
        fill: false}
          ]
  },
  options: {
    elements: {
      line: {
        tension: 0.2, // disables bezier curves
      }
    },
    scales:{
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }]
    },
  }
});
// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [4215, 5312, 6251, 7841, 9821, 14984],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
// -- Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Wheat", "Corn", "orange", "Rice"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});

//  -- Custom
// Temperature
var ctx=document.getElementById("temperaturechart");
var temperaturechart=new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2:00","2:00","2:00","2:00","2:00"],
    datasets: [{
        data: [Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1)],
        label: "Temperature",
        borderColor: "rgba(0,123,255,1)",
        backgroundColor: "rgba(0,123,255,0.2)",
        fill: true}]
  },
  options: {
    scales:{
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }]
    },
  }
});

//Humidity
var ctx=document.getElementById("humiditychart");
console.log(ctx);
var humiditychart=new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2:00","2:00","2:00","2:00","2:00"],
    datasets: [{
        data: [Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1)],
        label: "Humidity",
        borderColor: "rgba(220,53,69,1)",
        backgroundColor: "rgba(220,53,69,0.2)",
        fill: true}]
  },
  options: {
    scales:{
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }]
    },
  }
});
//Soil
var ctx=document.getElementById("soilchart");
var soilchart=new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2:00","2:00","2:00","2:00","2:00"],
    datasets: [{
        data: [Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1)],
        label: "Soil",
        borderColor: "rgba(255,193,7,1)",
        backgroundColor: "rgba(255,193,7,0.2)",
        fill: true}]
  },
  options: {
    scales:{
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }]
    },
  }
});
// light
var ctx=document.getElementById("lightchart");
var lightchart=new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2:00","2:00","2:00","2:00","2:00"],
    datasets: [{
        data: [Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1),Math.floor((Math.random() * 80) + 1)],
        label: "Light",
        borderColor: "rgba(40,167,69,1)",
        backgroundColor: "rgba(40,167,69,0.2)",
        fill: true}]
  },
  options: {
    scales:{
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }]
    },
  }
});
$(document).ready(function(){
  var temperature = new JustGage({
    id: "temperature",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    gaugeWidthScale:0.4,
    title: "Temperature",
    titleFontColor: "#212529",
    label: "Celsius",
    labelFontColor: "#212529"
  });
  var humidity = new JustGage({
    id: "humidity",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    gaugeWidthScale:0.4,
    title: "Humidity",
    titleFontColor: "#212529",
    label: "ppm",
    labelFontColor: "#212529"
  });
  var soil = new JustGage({
    id: "soil",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    gaugeWidthScale:0.4,
    title: "Soil",
    titleFontColor: "#212529",
    label: "ppm",
    labelFontColor: "#212529"
  });
  var light = new JustGage({
    id: "light",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    gaugeWidthScale:0.4,
    title: "Light",
    titleFontColor: "#212529",
    label: "ppm",
    labelFontColor: "#212529"
  });
});
