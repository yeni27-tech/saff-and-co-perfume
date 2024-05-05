                            <!-- 2ND TAB -->
                                <div class="tab-pane fade in mt-2" id="mouse">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=1 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                                //print_r($product);
                                    ?>

                                    <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                        <div class="products">
                                            <h6 class="text-info"><?php echo $product['NAME']; ?></h6>
                                            <h6>Rp. <?php echo $product['PRICE']; ?></h6>
                                            <input type="text" name="quantity" class="form-control" value="1" />
                                            <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                            <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                            <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-info"
                                                    value="Add" />
                                        </div>
                                    </form>
                                    <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                </div>
