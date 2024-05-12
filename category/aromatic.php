<?php

include '../include/connection.php';
include '../include/navbar-pos.php';
include '../includess-bagian/nav-category.php';


$product_ids = array();



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
        else {
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    $_SESSION['pointofsale'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else {
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
    foreach($_SESSION['pointofsale'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
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

<button onclick="topFunction()" id="myBtn" title="Go to cart"><a href="#cart"><i class='bx bxs-cart-download bx-tada' style='color:#ffffff' ></i></a></button>
<style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 24px;
  border: none;
  outline: none;
  background:linear-gradient(180deg, #61a5a5 0%, #5E1675 100%);
  color: white;
  cursor: pointer;
  padding: 0.3rem 0.5rem 0rem 0.5rem;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: grey;
}
</style>

<script>
  // Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
</script>

                <!--=========product=========-->
                <!--=============== BOXICONS ===============-->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
                <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow mb-0">
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" style="margin: 10px;">
                              <li class="nav-item" style="margin: 10px">
                                <a class="nav-link" href="#keyboard" data-toggle="tab">
                                  <div class="judul">CASCAVEL</div>
                                  <div class="hoverimg">
                                  <img src="../img/CASCAVEL/CASCAVEL-01.4dcab07b.webp" width="330rem">
                                  </div>
                                  <img src="../img/CASCAVEL/Cascavel.5f123e66.webp" alt="" width="330rem">
                                  </a>
                                  <?php include '../php/postabpane.php'; ?>
                              </li>
                            </ul>
                        </div>
                  </div>
                </div>
                </div>
              

<style>
  .judul {
    text-align: center;
    justify-content: center;
    font-size: 2.1rem;
    font-family: popins;
    color: black;
    text-decoration: none;
  }

  .hoverimg img {
    position: absolute;
    z-index: 100;
    opacity: 0;
  }

  .hoverimg img:hover {
    opacity: 10;
    transition: all 0.5s ease-in-out;
  }
</style>

        <!--=============cart==============-->   
        <section id="cart">
        <div style="clear:both"></div>  
        <br/>  
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
              <a href="pos.php?action=delete&id=<?php echo $product['id']; ?>" class="btn bg-gradient-danger btn-danger">
                <i class="fas fa-fw fa-trash"></i>
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
       


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Event handler untuk tombol hapus
        $('.delete-item').click(function(e){
            e.preventDefault(); // Menghentikan perilaku default dari tautan
            
            // Ambil ID item yang akan dihapus
            var itemId = $(this).data('id');
            
            // Kirim permintaan Ajax untuk menghapus item
            $.ajax({
                url: 'pos.php?action=delete&id=' + itemId,
                type: 'GET',
                success: function(response){
                    // Hapus baris dari tabel
                    $('tr[data-id="' + itemId + '"]').remove();
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>



<?php
include '../php/posside.php';
include '../include/footer.php';
?>
</section>     
