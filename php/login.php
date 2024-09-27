<?php require('./session.php');?>
<?php if(logged_in()){ ?>
          <script type="text/javascript">
            window.location = "./index.php";
          </script>
    <?php
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Saff & co login</title>

  <link rel="icon" href="../icon/logo-black.png">

  <!-- Custom fonts -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background:gray">

  <div class="container">

    <!-- baris luar -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
      <br>
      <br>
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- baris dalam badan container -->
            <div class="row shadow">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="https://cf.shopee.co.id/file/fe38a96fa60b04f2e4d0627cee888a9a" width="450">    
               </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      <br>
                      Login to SAFF & CO
                    </h1>
                  </div>
              <form class="user" role="form" action="processlogin.php" method="post">    
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Username" name="user" type="text" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit" name="btnlogin">Login</button>
                    <hr>
                  <style>
                    .btn-user{
                      background-color: #503C3C;
                    }
                    .btn-user:hover {
                      background-color: #4F4A45;
                      transition: all 0.2s ease
                    }
                  </style>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>









