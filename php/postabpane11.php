            <!-- 11ST TAB -->
                        <div class="tab-pane fade in mt-2" id="sob">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=11 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                                //print_r($product);
                                    ?>

                                    <form method="post" action="./pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                     <div class="caracter0">
                                    <a class="border warm" href="#">Citrus</a>
                                    <a class="border woody" href="#">Floral</a>
                                    <a class="border aromatic" href="#">Creamy</a>
                                    </div>       
                                    <div class="products">
                                            <h6 class="text-info"><?php echo $product['NAME']; ?></h6>
                                            <h6>Rp. <?php echo $product['PRICE']; ?></h6>
                                            <input type="text" name="quantity" class="form-control" value="1" />
                                            <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                            <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                            <div class="between">
                                            <input type="submit" name="addpos" class="btn btn-info"
                                                    value="Add" />
                                            <a href="../shop/SOTB/sotb.php">Description</a>        
                                                  </div>
                                        </div>
                                    </form>
                                    <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                </div>

                                                             <style>
                  /*font*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap');

/*character*/
:root{
  --enigmatic: #864e87;
  --warm_spicy: #ba5c5b;
  --woody:#795e43;
  --creamy:#ca9775;
  --floral:#a262a3;
  --citrus:rgba(239, 206, 97, 0.667);
  --ambery:rgba(255, 146, 79, 0.863);
  --gourmand:#8c548d;
  --creamy:rgb(241, 204, 100);
  --aromatic:rgb(80, 182, 68);
  --sweet:#c277ad;
  --fresh:rgb(100, 80, 160);
  --enigmatic:rgb(208, 100, 241);
  --vanila:#7a71d4;
  --balsamic:chocolate;
  --tropical:rgb(232, 184, 51);
  --fruity:rgb(213, 105, 59);
  --earthy:rgb(206, 119, 214);
  --chypre:rgb(237, 209, 134);
  --leather:rgb(141, 103, 76);
  --musk:rgb(125, 102, 90);
  --powdery:rgb(241, 204, 100);
  --rose:rgb(227, 137, 227);
  --ambery:rgb(212, 132, 146);
  --smooky:rgb(174, 125, 174);
  --color: #ffff;
}

.caracter0 {
  font-size: 10px;
  background:rgb(255, 255, 255);
  padding-bottom: 20px; /* Mencegah konten tumpah keluar dari div */
}

.caracter0 a {
  color: var(--color);
  font-family: 'Poppins', sans-serif;
  padding: 0.2rem;
  text-decoration: none;
}


/*border*/
.caracter0 .border {
  border-radius:50px;
  border: 2px solid white;
  -webkit-border-radius:50px;
  -moz-border-radius:50px;
  -ms-border-radius:50px;
  -o-border-radius:50px;
  margin-top: 10px;
}

.caracter0 .warm {
  background-color: var(--citrus);
}

.caracter0 .woody {
  background-color: var(--floral);
}

.caracter0 .aromatic {
  background-color: var(--creamy) ;
}


.between {
  align-items: center;
  margin-top: 5px;
  display: flex;
}

.between a {
  text-decoration: none;
  list-style-type: none;
  background-color:gray ;
  color:  white;
  padding: 0.4em;
  margin-left: 5px;
  border-radius: 5px;
  -webkit-border-radius:5px;
  -moz-border-radius:5px;
  -ms-border-radius:5px;
  -o-border-radius:5px;
}

.between input, a:hover{
  transition: all 0.4s ease-in-out;
}

.between a:hover {
  background-color: hsl(0, 0%, 13%) ;
}
                </style>
