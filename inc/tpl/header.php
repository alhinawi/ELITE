<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="auther" content="." />
    <title>ELITE</title>

    <!-- favicon -->
    <link rel="icon" href="<?php echo $img; ?>favicon.jpg" type="image/jpg" />


    <!-- font awesome online link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- font awesome online link  -->
    <link rel="stylesheet" href="<?php echo $css; ?>/fontawesome.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo $css; ?>/style.css" />
</head>

<body>

    <!-- header section start  -->

    <div class="wx">
        <header>
            <a href="index.php" class="logo">ELITE<span>.</span></a>

            <form action="search.php" method="post">
                <input type="search" id="search-bar" name="sea" />

                <button id="searchbtn" type="submit" class="fas fa-search"></button>
            </form>

            <div class="icons">
                <div id="menu-bar" class="fas fa-bars"></div>
                <div id="theme-toggler" class="fas fa-moon"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="cart.php" class="fas fa-shopping-cart"></a>
                <a href="logout.php" class="fas fa-user"></a>
            </div>
        </header>

        <!-- header section end -->

        <!-- navbar section  -->

        <nav class="navbar">
            <div class="links">
                <a href="index.php">home</a>
                <a href="#">account</a>
                <a href="#products">products</a>
                <a href="#featured">featured</a>
                <!-- <a href="#deal">deal</a> -->
                <a href="#review">review</a>
                <a href="logout.php">Log Out <i class="fas fa-sign-out-alt"></i></a>
            </div>

            <div id="close" class="fas fa-times"></div>
        </nav>