<?php

include '../include/connection.php';
include '../include/navbar-pos.php';

// session_start();
$product_ids = array();
//session_destroy();

//periska tombol tambah keranjang telah dikirim kn
if(filter_input(INPUT_POST, 'addpos')){
    if(isset($_SESSION['pointofsale'])){
        
        //lacak product yg di keranjang
        $count = count($_SESSION['pointofsale']);
        
        //buat array berurutan untuk mencocokkan kunci array dengan id produk
        $product_ids = array_column($_SESSION['pointofsale'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['pointofsale'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //produk sudah ada, tambah kuantitas
            //cocokkan kunci array dengan id produk yang ditambahkan ke keranjang
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //tambahkan kuantitas item ke produk yang ada di array
                    $_SESSION['pointofsale'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //jika keranjang belanja tidak ada, buat produk pertama dengan kunci array 0
        //membuat array menggunakan data formulir yang dikirimkan, mulai dari kunci 0 dan isi dengan nilai
        $_SESSION['pointofsale'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //ulangi semua produk di keranjang belanja hingga cocok dengan variabel id GET
    foreach($_SESSION['pointofsale'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //keluarkan produk dari keranjang belanja jika cocok dengan id GET
            unset($_SESSION['pointofsale'][$key]);
        }
    }
    $_SESSION['pointofsale'] = array_values($_SESSION['pointofsale']);
}


function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
                ?>

                
                <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow mb-0">
                  <div class="card-header py-2">
                    <h4 class="m-1 text-lg text-primary">Product category</h4>
                  </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-target="#keyboard" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-target="#mouse" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#headset" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#cpu" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#monitor" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#motherboard" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#processor" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#powersupply" data-toggle="tab">(nama kategori)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#others" data-toggle="tab">(nama kategori)</a>
                              </li>
                            </ul>

<!-- TAB PANE AREA - ANG UNOD KA TABS ARA SA TABPANE.PHP -->
<?php include './postabpane.php'; ?>
<!-- END TAB PANE AREA - ANG UNOD KA TABS ARA SA TABPANE.PHP -->


        <div style="clear:both"></div>  
        <br />  
        <div class="card shadow mb-4 col-md-12">
        <div class="card-header py-3 bg-white">
          <h4 class="m-2 font-weight-bold text-primary">Point of Sale</h4>
        </div>
        
      <div class="row">    
      <div class="card-body col-md-9">
        <div class="table-responsive">

        <!-- trial form lang   -->
<form role="form" method="post" action="pos_transac.php?action=add">
  <input type="hidden" name="employee" value="<?php echo $_SESSION['FIRST_NAME']; ?>">
  <input type="hidden" name="role" value="<?php echo $_SESSION['JOB_TITLE']; ?>">
  
        <table class="table">    
        <tr>  
             <th width="55%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="15%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php  

        if(!empty($_SESSION['pointofsale'])):  
            
             $total = 0;  
        
             foreach($_SESSION['pointofsale'] as $key => $product): 
        ?>  
        <tr>  
          <td>
            <input type="hidden" name="name[]" value="<?php echo $product['name']; ?>">
            <?php echo $product['name']; ?>
          </td>  

           <td>
            <input type="hidden" name="quantity[]" value="<?php echo $product['quantity']; ?>">
            <?php echo $product['quantity']; ?>
          </td>  

           <td>
            <input type="hidden" name="price[]" value="<?php echo $product['price']; ?>">
            Rp. <?php echo number_format($product['price']); ?>
          </td>  

           <td>
            <input type="hidden" name="total" value="<?php echo $product['quantity'] * $product['price']; ?>">
            Rp. <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="pos.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn bg-gradient-danger btn-danger"><i class="fas fa-fw fa-trash"></i></div>
               </a>
           </td>  
        </tr>
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);
             endforeach;  
        ?>


        <?php  
        endif;
        ?>  
        </table> 
         </div>
       </div> 

<?php
include './posside.php';
include '../include/footer.php';
?>
