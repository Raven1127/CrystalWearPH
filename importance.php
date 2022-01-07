<?php
$active = "Importance";
include("functions.php");
include("header.php");

?>



<!-- Banner Section Begin -->



<!-- Women Banner Section Begin -->


<!-- Man Banner Section Begin -->

<section class="man-banner spad">
    <div class="container-fluid">
        <p> <b>Benefits of Having Antiradiation Glasses?</b><br><br>
<b>1.</b> Anti-radiation glasses adopt the advanced vacuum ion plating technology and can block the electromagnetic radiation, therefore have no side effects to eyes.
<br><br>
<b>2.</b> The lens contains anti-radiation materials which means it could absorb low-frequency microwave and eliminate the potential symptoms like fever, headache, fatigue and dryness.
<br><br>
<b>3.</b> Anti-radiation glasses have the functions of penetration and absorption, which vary according to the different lights. And the wearer would have a fresh and natural vision.
<br><br>
<b>4.</b> As to computer workers as well as those who love watching TV and playing video games, anti-radiation glasses can prevent the eyes from harmful rays.</p>
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