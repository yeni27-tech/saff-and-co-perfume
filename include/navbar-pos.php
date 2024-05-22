<?php
  require_once( '../php/session.php');
  confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    a {
      text-decoration: none;
      list-style-type: none;
    }

#overlay {
  position: fixed;
  display: none;
  width: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background:black;
  z-index: 2;
  cursor: pointer;
}
#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Saff and Co perfume </title>
  <link rel="icon" href="https://www.freeiconspng.com/uploads/sales-icon-7.png">

  <!--fonts-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- styles-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  

  <link rel="stylesheet" href="../css/navbar-pos.css" />
</head>

<body id="page-top">
          
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top" >

      <a class="sidebar-brand d-flex align-items-center justify-content-center"  style="text-decoration: none; font-size: 18px; font-weight: bold;" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="../icon/logo-black.png" alt="" width="22rem">
        </div>
        <div class="sidebar-brand-text mx-3">Saff and Co.</div>
      </a>

      <marquee behavior="smooth" direction="">
        <span>A symphony for the Senses</span>
        <span>Oll factory Odyssy</span>
      </marquee>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link" href="../index.php" role="button">
                <span class="text">Home</span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - informasi user -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $_SESSION['FIRST_NAME']. ' '.$_SESSION['LAST_NAME'] ;?></span>
                <img class="img-profile rounded-circle"
                <?php
                  if($_SESSION['GENDER']=='Male'){
                    echo 'src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS0rikanm-OEchWDtCAWQ_s1hQq1nOlQUeJr242AdtgqcdEgm0Dg"';
                  }else{
                    echo 'src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNngF0RFPjyGl4ybo78-XYxxeap88Nvsyj1_txm6L4eheH8ZBu"';
                  }
                ?>>

              </a>

              <?php 

                $query = 'SELECT ID, FIRST_NAME,LAST_NAME,USERNAME,PASSWORD, t.TYPE
                          FROM users u
                          JOIN employee e ON e.EMPLOYEE_ID=u.EMPLOYEE_ID
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $a = $_SESSION['MEMBER_ID'];
                          $bbb = $_SESSION['TYPE'];
                }
                          
            ?>

              <!-- Dropdown - informasi user -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <button class="dropdown-item" onclick="on()">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </button>
                <a href="../php/usertransaction.php" id="transaction" class="dropdown-item" a class="dropdown-item">
                  <i class="fas fa-fw fa-retweet  fa-sm mr-2 text-gray-400"></i>
                  Transaction
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#settingsModal" data-href="settings.php?action=edit & id='<?php echo $a; ?>'">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">