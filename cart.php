<title>Cart</title>
<?php include "init.php"; ?>
<?php include $tpl."header.php"; ?>

<head>
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo $css;?>main.css" />
</head>


<div class="cart">
    <div class="container">
        <div class="cart__main">
            <table>
                <tr>
                    <th class="th1">Product</th>
                    <th>Quantity</th>
                    <th class="th3">Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php echo $img; ?>p-2.png" alt="">
                            <div>
                                <p>Product Name </p>
                                <small>Price: $50.00</small>
                                <a href="#">Remove</a>
                           
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php echo $img; ?>p-3.png" alt="">
                            <div>
                                <p>Product Name </p>
                                <small>Price: $50.00</small>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php echo $img; ?>p-6.png" alt="">
                            <div>
                                <p>Product Name </p>
                                <small>Price: $50.00</small>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$50.00</td>
                </tr>
            </table>
        </div>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>150.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$185.00</td>
                </tr>
            </table>
        </div>
        <div class="checkout">
            <a href="#" class="button-primary">Proceed Checkout <ion-icon name="arrow-forward-outline"></ion-icon></a>
        </div>
    </div>
</div>

<?php include $tpl."footer.php"; ?>
