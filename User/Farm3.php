<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Welcome User</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/datatables.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php include('nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Field 3</li>
      </ol>
      <!-- Gauge -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-tachometer"></i> Current Status </div>
            <div class="card-body">
              <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white active o-hidden">
                    <div>
                      <div class="gauge" id="temperature"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white active o-hidden">
                    <div>
                      <div class="gauge" id="humidity"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white active o-hidden">
                    <div>
                      <div class="gauge" id="soil"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white active o-hidden">
                    <div>
                      <div class="gauge" id="light"></div>
                    </div>
                  </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card active o-hidden">
                            <div>
                            <div class="card-header text-center">Temperature</div>
                            <canvas class="charttest" id="temperaturechart" width="100%" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card active o-hidden">
                            <div>
                            <div class="card-header text-center">Humidity</div>
                            <canvas class="charttest" id="humiditychart" width="100%" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card active o-hidden">
                            <div>
                            <div class="card-header text-center">Soil</div>
                            <canvas class="charttest" id="soilchart" width="100%" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card active o-hidden">
                            <div>
                            <div class="card-header text-center">Light</div>
                            <canvas class="charttest" id="lightchart" width="100%" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <!-- Area Chart-->
      <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-area-chart"></i> Status Analysis </div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Capital Analysis</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">₹34,693</div>
                  <div class="small text-muted">Net Revenue</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">₹18,474</div>
                  <div class="small text-muted">Net Expenses</div>
                  <hr>
                  <div class="h4 mb-0 text-success">₹16,219</div>
                  <div class="small text-muted">Net Margin</div>
                  <hr>
                  <div class="h4 mb-0 text-danger">₹16,219</div>
                  <div class="small text-muted">Net Tax</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Field Utilization </div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Temperature</th>
                  <th>Humidity</th>
                  <th>Soil Moisture</th>
                  <th>Light</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('footer.php'); ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/datatables.js"></script>
    <!-- JustGage plugin -->
    <script src="vendor/justgage/justgage.js"></script>
    <script src="vendor/justgage/raphael.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
    <!-- Custom scripts for this page-->
    <script>
        $(document).ready(function(){
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

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
              type: 'pie',
              data: {
                labels: ["Wheat","Unused"],
                datasets: [{
                  data: [60,40],
                  backgroundColor: ['#28a745','#dc3545'],
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

            // just gage
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
            // data tables
            for(var i=0;i<1000;i++){
                $('#dataTable tbody').append("<tr><td>07/04/2018</td><td>6:00 PM</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td></tr>");   
            }
            $('#dataTable').DataTable({
                    dom: '<"common"Brfl>tip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
            //        searching: false,
                    stripeClasses: [ 'odd', 'even' ],
            //        bSort: false
            });
        });

    </script>
    <!-- <script src="js/sb-admin-datatables.js"></script>
    <script src="js/sb-admin-charts.js"></script> -->
  </div>
</body>

</html>
