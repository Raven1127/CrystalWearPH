<?php
$active = "Home";
include("functions.php");
include("header.php");

?>

<section class="hero-section">
    <div class="hero-items owl-carousel">

        <?php

        $get_slides = "select * from slider LIMIT 0,1";
        $run_slider = mysqli_query($con, $get_slides);

        while ($row_slides = mysqli_fetch_array($run_slider)) {

            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];
            $slide_heading = $row_slides['slide_heading'];
            $slide_text = $row_slides['slide_text'];

            echo "

            <div class='single-hero-items set-bg' data-setbg='img/$slide_image'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <h1>$slide_heading</h1>
                            <p>$slide_text
                            </p>
                            <a href='shop.php' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                    <div class='off-card'>
                        <h2>Up to <span>60%</span></h2>
                    </div>  
                </div>
            </div>
                ";
        }


        $get_slides = "select * from slider LIMIT 1,2";
        $run_slider = mysqli_query($con, $get_slides);

        while ($row_slides = mysqli_fetch_array($run_slider)) {

            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];
            $slide_heading = $row_slides['slide_heading'];
            $slide_text = $row_slides['slide_text'];

            echo "
            <div class='single-hero-items set-bg' data-setbg='img/$slide_image'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <h1 style='color: white;'>$slide_heading</h1>
                            <p style='color: white;'>$slide_text
                            </p>
                            <a href='shop.php' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>";
        }

        ?>

    </div>
</section>

<!-- Banner Section Begin -->



<!-- Women Banner Section Begin -->


<!-- Man Banner Section Begin -->

<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <h3> Hot Products </h3>
                </div>
                <div class="product-slider owl-carousel">
                    <?php
                    getMProduct();
                    ?>

                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="img/style.jpg">
                    <h2>Style</h2>
                    <a href="shop.php?cat_id=1">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<?php
include('footer.php');


if (isset($_GET['stat'])) {

    echo "
        <script>
                bootbox.alert({
                    message: 'Welcome! You are logged in.',
                    backdrop: true
                });
        </script>";
}
?>

</body>

</html>