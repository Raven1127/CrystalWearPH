<?php

if (isset($_SESSION['customer_email'])) {

    $c_id = $_SESSION['customer_email'];

    $query = "select * from customer where customer_email= '$c_id'";

    $run_query = mysqli_query($con, $query);


    $get_query = mysqli_fetch_array($run_query);

    $custom_id = $get_query['customer_id'];


    $get_items = "select * from orders where c_id = '$custom_id' ORDER BY date DESC";
    $run_items = mysqli_query($db, $get_items);



    echo "
    <div class='cart-table' style='min-height: 150px;'>
    <table>
        <thead style='font-size: larger;'>
            <tr>
                <th>Order ID</th>
                <th>Price</th>
                <th>Products</th>
                <th> Quantity</th>
                <th>Date</th>
                <th>Confirmation</th>
            </tr>
        </thead>

        <tbody>

    
    ";

    while ($row_items = mysqli_fetch_array($run_items)) {
        $o_id = $row_items['order_id'];
        $o_qty = $row_items['order_qty'];
        $o_price = $row_items['order_price'];
        $o_prod = $row_items['product'];
        $o_date = $row_items['date'];  
        $o_receive = $row_items['received'];
        $o_confirm = $row_items['status'];
        echo

            "<tr style='border-bottom: 0.5px solid #ebebeb'>
        <td class='first-row'>$o_id</td>
        <td class='first-row'>
            $o_price
        </td>
        <td class='first-row'>
            $o_prod
        </td>
        <td class='first-row'>$o_qty</td>
        <td class='first-row'>
            $o_date
        </td>";
        if($o_confirm == 'Confirmed' and $o_receive != 'Received'){
        
            echo "<form method='post'>
        <td class='first-row'><button name='received".$o_id."' type='submit' class='site-btn place-btn'>Order Received</button></td>
        </form>";    
        if(isset($_POST['received'.$o_id])){
            $sql = "UPDATE orders SET received = 'Received' where order_id = '$o_id'";
            if ($con->query($sql) === TRUE) {
                echo "<script>alert('Thank You!')</script>";
                echo "<script>window.location.href='account.php?orders'</script>";
            }else{
                echo "<script>alert('Thank You!')</script>";
            }
        }
    }
    else{
        echo "<td class='first-row'>Order Completed</td>";
    }
        }
        echo "
        
    </tr>";
    
    
}



?>



</tbody>

</table>

</div>