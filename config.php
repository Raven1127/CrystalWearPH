<?php
session_start();

if (!isset($_SESSION['customer_email'])) {
    $_SESSION['customer_email'] = 'unset';
    echo "<script>alert('psdok')</script>";
    
} 

?>