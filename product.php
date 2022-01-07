<?php
$active = "Product";
include("db.php");
include("functions.php");
include('header.php');
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div style="overflow: hidden;">
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="shop.php">Shop</a>
                        <span>Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <?php

                            getCat();

                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <?php

                        getProd();
                        addCart();

                        ?>
                        


                        <form action='product.php?add_cart=<?php if (isset($_GET['product_id'])) {
                                                                $product_id = $_GET['product_id'];
                                                                echo $product_id;
                                                            } ?>' method='post'>

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <div class='quantity'>
                                    
                                        <input type='number' id='trg' value='1' name="product_qty">
                                                                   </div>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                
                                <p id="msg"></p>
                            </div><!-- form-group Finish -->
                            <?php if ($_SESSION['customer_email'] == 'unset') {
                                echo "<a href='login.php' class='btn primary-btn pd-cart' style='margin-top: 20px;'> Add to cart</a>";
                            } 
                            else{
                                    echo "<button class='btn primary-btn pd-cart' id='cartbtn' style='margin-top: 20px;'> Add to cart</button>";
                            }
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>
<script language="JavaScript" type="text/javascript">
                            $("#trg").change(function() {
                               var current_val = document.getElementById('trg').value;
                               
                               if(parseInt(current_val) > parseInt(document.getElementById('stck').value)){
                                
                                document.getElementById('cartbtn').disabled = true;
                               }else{
                                document.getElementById('cartbtn').disabled = false;
                               }

                            })

                            
                        </script>
</section>


<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>More like this</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php

            relatedProducts();
            ?>

        </div>
    </div>
</div>
</div>

<?php
include('footer.php');
?>



</body>

</html>