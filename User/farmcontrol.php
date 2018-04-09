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
  <link href="vendor/bootstrap-toogle/css/bootstrap-toggle.min.css" rel="stylesheet">
  
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
<!--Content Start-->
       
        <div class="card mb-3">
        <div class="card-header">Farm 1</div>
            <div class="card-body">
              <div class="row text-center">
               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm1pump1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm1pump2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm1sprinkler1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm1sprinkler2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
       
        <div class="card mb-3">
        <div class="card-header">Farm 2</div>
            <div class="card-body">
              <div class="row text-center">
               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm2pump1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm2pump2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm2sprinkler1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm2sprinkler2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
       
        <div class="card mb-3">
        <div class="card-header">Farm 3</div>
            <div class="card-body">
              <div class="row text-center">
               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm3pump1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm3pump2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm3sprinkler1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm3sprinkler2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
       
        <div class="card mb-3">
        <div class="card-header">Farm 4</div>
            <div class="card-body">
              <div class="row text-center">
               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm4pump1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Pump 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm4pump2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 1</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm4sprinkler1"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>               
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                      <div class="card-header text-center">Sprinkler 2</div>
                          <div class="card-body">
                               <div class="card text-white active o-hidden">
                                    <div>
                                      <div class="gauge" id="farm4sprinkler2"></div>
                                    </div>
                               </div>
                          </div>
                          <div class="card-footer">
                            <input type="checkbox" checked data-toggle="toggle" data-on="OFF" data-off="ON" data-onstyle="success" data-offstyle="danger">
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
<!--Content End-->
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
        <script src="vendor/bootstrap-toogle/js/bootstrap-toggle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
    <!--  Just Gauge  -->
    <script src="vendor/justgage/justgage.js"></script>
    <script src="vendor/justgage/raphael.min.js"></script>
    <!--  Bootstrap Toggle  -->

    <script>
        $('document').ready(function(){
              var farm1pump1 = new JustGage({
                id: 'farm1pump1',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              }); 
              var farm1pump2 = new JustGage({
                id: 'farm1pump2',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              });
              var farm1sprinkler1 = new JustGage({
                id: "farm1sprinkler1",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });
              var farm1sprinkler2 = new JustGage({
                id: "farm1sprinkler2",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });        
              var farm2pump1 = new JustGage({
                id: 'farm2pump1',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              }); 
              var farm2pump2 = new JustGage({
                id: 'farm2pump2',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              });
              var farm2sprinkler1 = new JustGage({
                id: "farm2sprinkler1",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });
              var farm2sprinkler2 = new JustGage({
                id: "farm2sprinkler2",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });        
              var farm3pump1 = new JustGage({
                id: 'farm3pump1',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              }); 
              var farm3pump2 = new JustGage({
                id: 'farm3pump2',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              });
              var farm3sprinkler1 = new JustGage({
                id: "farm3sprinkler1",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });
              var farm3sprinkler2 = new JustGage({
                id: "farm3sprinkler2",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });        
              var farm4pump1 = new JustGage({
                id: 'farm4pump1',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              }); 
              var farm4pump2 = new JustGage({
                id: 'farm4pump2',
                value: 70,
                min: 0,
                max: 1000,
                symbol: '%',
                pointer: true,
                label: 'RPM',
                pointerOptions: {
                  toplength: 8,
                  bottomlength: -20,
                  bottomwidth: 6,
                  color: '#8e8e93'
                },
                gaugeWidthScale: 0.3,
                counter: true
              });
              var farm4sprinkler1 = new JustGage({
                id: "farm4sprinkler1",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });
              var farm4sprinkler2 = new JustGage({
                id: "farm4sprinkler2",
                value: 72,
                min: 0,
                max: 100,
                donut: true,
                label: 'cubicmeter',
                gaugeWidthScale: 0.6,
                counter: true,
                hideInnerShadow: true
              });             
              setInterval(function() {                  
              farm1pump1.refresh(getRandomInt(0, 1000));
              farm1pump2.refresh(getRandomInt(0, 1000));
              farm1sprinkler1.refresh(getRandomInt(0, 100));
              farm1sprinkler2.refresh(getRandomInt(0, 100));
                  
              farm2pump1.refresh(getRandomInt(0, 1000));
              farm2pump2.refresh(getRandomInt(0, 1000));
              farm2sprinkler1.refresh(getRandomInt(0, 100));
              farm2sprinkler2.refresh(getRandomInt(0, 100));
                  
              farm3pump1.refresh(getRandomInt(0, 1000));
              farm3pump2.refresh(getRandomInt(0, 1000));
              farm3sprinkler1.refresh(getRandomInt(0, 100));
              farm3sprinkler2.refresh(getRandomInt(0, 100));
                  
              farm4pump1.refresh(getRandomInt(0, 1000));
              farm4pump2.refresh(getRandomInt(0, 1000));
              farm4sprinkler1.refresh(getRandomInt(0, 100));
              farm4sprinkler2.refresh(getRandomInt(0, 100));
            }, 50); 
        });
    </script>
  </div>
</body>
</html>
