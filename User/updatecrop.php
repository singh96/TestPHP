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
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Update Crop Information</li>
      </ol>
<!--Content Start-->
    <div>
      <div class="card card-outline-secondary">
          <div class="card-header">
              <h3 class="mb-0">Crop Information</h3>
          </div>
          <div class="card-body">
              <form class="form" role="form" autocomplete="off">
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Select Farm :</label>
                      <div class="col-lg-9">
                          <select id="farmno" class="form-control" size="0">
                              <option value="Farm1">Farm 1</option>
                              <option value="Farm2">Farm 2</option>
                              <option value="Farm3">Farm 3</option>
                              <option value="Farm4">Farm 4</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Crop Name :</label>
                      <div class="col-lg-9">
                          <input class="form-control" type="text" placeholder="e.g: Wheat">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Plantation Date :</label>
                      <div class="col-lg-9">
                        <input type="date" name="Plantation Date" max="3000-12-31" min="1000-01-01" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Expected Harvesting Date :</label>
                      <div class="col-lg-9">
                        <input type="date" name="Plantation Date" max="3000-12-31" min="1000-01-01" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Area Used :</label>
                      <div class="col-lg-9">
                        <input type="number" name="areaused" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Amount Invested:</label>
                      <div class="col-lg-9">
                        <div class="form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">₹</span></div>
                                <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="0">
                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label"></label>
                      <div class="col-lg-9">
                          <input type="reset" class="btn btn-secondary" value="Cancel">
                          <input type="button" class="btn btn-primary" value="Save Changes">
                      </div>
                  </div>
              </form>
          </div>
      </div>

</div>
<!--/container-->
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
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
  </div>
</body>
</html>
