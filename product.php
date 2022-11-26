<title>Product Details</title>    
<?php include "init.php"; ?>
<?php include $tpl . "header.php"?>
<head> 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo $css; ?>main.css" />
</head>

<body>

    <div class="product-details">
        <div class="container">
            <div class="product-image">
                <div class="main-img"><img src="<?php echo $img; ?>f-2-3.png" /></div>
                <div class="button-img">
                    <div>
                        <img src="<?php echo $img; ?>f-2-1.png" />
                    </div>
                    <div>
                        <img src="<?php echo $img; ?>f-2-2.png" />
                    </div>
                    <div>
                        <img src="<?php echo $img; ?>f-2-1.png" />
                    </div>
                    <div>
                        <img src="<?php echo $img; ?>f-2-2.png" />
                    </div>
                </div>
            </div>
            <div class="product-info">
                <span>Home / T-Shirt</span>
                <h1>Product Name </h1>
                <div class="price">$50.00</div>
                <select name="Size">
                    <option value="Select Size">Select Size</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
                <div class="count">
                    <input type="number" value="1" />
                    <a href="#" class="button-primary">Add To Cart <ion-icon name="caret-forward-outline"></ion-icon></a>
                </div>
                <div class="details">
                    <h2>Product Details</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas
                        sapiente voluptatibus soluta consectetur, libero aspernatur
                        molestiae omnis reiciendis, provident accusamus consequatur quia
                        suscipit beatae ducimus nisi nesciunt ad expedita nostrum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Related Products -->
    <div class="related">
        <div class="container">
            <div class="head">
                <h2>Related Products</h2>
                <span><a href="product.php">View More</a></span>
            </div>
        </div>
        <div class="featured-latest-products">
            <div class="container">
                <div class="all-products">
                    <!-- Product -->
                    <div class="product-box">
                        <div class="product-image">
                            <a href="product.php"><img src="<?php echo $img; ?>p-1.png" alt="" /></a>
                        </div>
                        <div class="product-info">
                            <h3>Product Name </h3>
                            <div class="product-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <span>$50.00</span>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="product-box">
                        <div class="product-image">
                            <a href="product.php"><img src="<?php echo $img; ?>p-2.png" alt="" /></a>
                        </div>
                        <div class="product-info">
                            <h3>Product Name </h3>
                            <div class="product-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <span>$75.00</span>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="product-box">
                        <div class="product-image">
                            <a href="product.php"><img src="<?php echo $img; ?>p-3.png" alt="" /></a>
                        </div>
                        <div class="product-info">
                            <h3>Product Name </h3>
                            <div class="product-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <span>$45.00</span>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="product-box">
                        <div class="product-image">
                            <a href="product.php"><img src="<?php echo $img; ?>p-6.png" alt="" /></a>
                        </div>
                        <div class="product-info">
                            <h3>Product Name </h3>
                            <div class="product-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <span>$55.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Related Products -->   

<?php include $tpl. "footer.php"; ?>