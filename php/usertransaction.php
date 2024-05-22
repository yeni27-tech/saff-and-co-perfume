<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Saff and Co Perfume </title>
  <link rel="icon" href="../icon/logo-white.webp">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<?php
include '../include/connection.php';
include '../include/navbar-pos.php';

  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
            ?>
            
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Transaction</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th width="19%">Transaction Number</th>
                     <th>Customer</th>
                     <th width="13%"># of Items</th>
                     <th width="11%">Action</th>
                   </tr>
               </thead>
          <tbody>

<?php
$query = "SELECT *, FIRST_NAME, LAST_NAME
            FROM transaction T
            JOIN customer C ON T.`CUST_ID`=C.`CUST_ID`
            ORDER BY T.TRANS_D_ID DESC
            LIMIT 5";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

// Menampilkan dua transaksi terakhir
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['TRANS_D_ID'] . '</td>';
    echo '<td>' . $row['FIRST_NAME'] . ' ' . $row['LAST_NAME'] . '</td>';
    echo '<td>' . $row['NUMOFITEMS'] . '</td>';
    echo '<td align="right">
            <a type="button" class="btn btn-primary bg-gradient-primary" href="trans_view0.php?action=edit&id=' . $row['TRANS_ID'] . '"><i class="fas fa-fw fa-th-list"></i> Lihat</a>
          </td>';
    echo '</tr>';
}
?>


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
</html>