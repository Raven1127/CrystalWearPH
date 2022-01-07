<?php
include("db.php");
?>
<head>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

<!-- Tab Icon -->

<link rel="icon" href="img/icon.svg">

<!-- Css Styles -->
<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css'>
<link rel='stylesheet' href='css/themify-icons.css' type='text/css'>
<link rel='stylesheet' href='css/elegant-icons.css' type='text/css'>
<link rel='stylesheet' href='css/owl.carousel.min.css' type='text/css'>
<link rel='stylesheet' href='css/slicknav.min.css' type='text/css'>
<link rel='stylesheet' href='css/style.css' type='text/css'>

</head>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form  method="post">
                        <div class="group-input">
                            <label for="username">Email *</label>
                            <input type="text" id="username" name="cemail" required>
                            <div id="email_error"></div>
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" id="pass" name="password" required>
                            <div id="password_error"></div>
                        </div>

                        <button name="login" class="site-btn login-btn">Sign In</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->


</body>

</html>

<?php

if (isset($_POST['login'])) {


    $log_email = $_POST['cemail'];
    $log_pass = $_POST['password'];
    $c_id = $log_email;


    




    $sql = "select * from admin where username = '$log_email' AND password = '$log_pass'";
    $result = $con ->query($sql);
    if($result->num_rows>0){

        $_SESSION['customer_email'] = $log_email;

        echo  "<script>window.location.href='admin/db/admin/index.php'</script>";
    }
    else{

                echo  "<script>alert('Invalid username or password')</script>";
            }
}

?>