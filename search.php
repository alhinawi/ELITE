<?php
include "init.php";
include $tpl . "header.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $keyword = $_POST["sea"];
}
$query = $con->prepare("SELECT * FROM products WHERE Product_Name LIKE '%$keyword%' ");
$query->execute();
while ($row = $query->fetch()) {
?>
    <section class="featured" id="featured">
        <h1 class="heading"><span>search</span> products</h1>

        <div class="box-container">


            <div class="box">
                <div class="image-container">
                    <div class="small-image">
                        <img src="<?php echo $row['Path']; ?>" class="small-image-1" alt="" />
                        <img src="<?php echo $row['Path']; ?>" class="small-image-1" alt="" />
                        <img src="<?php echo $row['Path']; ?>" class="small-image-1" alt="" />
                    </div>
                    <div class="big-image">
                        <img src="<?php echo $row['Path']; ?>" class="big-image" alt="" />
                    </div>
                </div>
                <div class="content">
                    <h3> <?php echo $row['Product_Name'];  ?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <p>
                        <?php echo $row['Product Description'];  ?>
                    </p>
                    <div class="price"><?php echo $row['Price'];  ?></div>
                    <a href="product.php" class="btn">add to cart</a>
                </div>
            </div>
        <?php
    }
        ?>
        </div>
    </section>


    <section class="featured" id="featured">
        <h1 class="heading"><span>related</span> products</h1>
        <?php

        $stmt = $con->query("SELECT * FROM products ");

        if (!$stmt) {
            die("ERROR Query");
        }

        ?>

        <div class="box-container">
            <?php

            $stmt = $con->prepare("SELECT * FROM products where ID=1 ");

            $stmt->execute();
            $count = $stmt->rowCount();

            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $row['Path']; ?>" class="small-image-1" alt="" />
                            <img src="<?php echo $row['Path']; ?>" class="small-image-1" alt="" />
                            <img src="<?php echo $row['Path']; ?>" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                            <img src="<?php echo $row['Path']; ?>" class="big-image" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php

            $stmt = $con->query("SELECT * FROM products where ID=2");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <?php

            $stmt = $con->query("SELECT * FROM products where ID=4");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>

    </section>
    <section class="featured" id="featured">

        <?php

        $stmt = $con->query("SELECT * FROM products where ID=6");

        if (!$stmt) {
            die("ERROR Query");
        }

        ?>

        <div class="box-container">
            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php

            $stmt = $con->query("SELECT * FROM products where ID=8");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <?php

            $stmt = $con->query("SELECT * FROM products where ID=10");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>

    </section>
    <!-- related section end -->
    <section class="featured" id="featured">
        <h1 class="heading"><span>Recently Added</span> products</h1>
        <?php

        $stmt = $con->query("SELECT * FROM products where ID=12");

        if (!$stmt) {
            die("ERROR Query");
        }

        ?>

        <div class="box-container">
            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php

            $stmt = $con->query("SELECT * FROM products where ID=14");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <?php

            $stmt = $con->query("SELECT * FROM products where ID=16");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>

    </section>
    <!-- deal section start  -->
    <section class="featured" id="featured">
        <h1 class="heading"><span>related</span> products</h1>
        <?php

        $stmt = $con->query("SELECT * FROM products where ID=18");

        if (!$stmt) {
            die("ERROR Query");
        }

        ?>

        <div class="box-container">
            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php

            $stmt = $con->query("SELECT * FROM products where ID=20");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <?php

            $stmt = $con->query("SELECT * FROM products where ID=21");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>

    </section>
    <section class="featured" id="featured">
        <h1 class="heading"><span>related</span> products</h1>
        <?php

        $stmt = $con->query("SELECT * FROM products where ID=22");

        if (!$stmt) {
            die("ERROR Query");
        }

        ?>

        <div class="box-container">
            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php

            $stmt = $con->query("SELECT * FROM products where ID=23");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <?php

            $stmt = $con->query("SELECT * FROM products where ID=24");

            if (!$stmt) {
                die("ERROR Query");
            }

            ?>

            <?php
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($row = $stmt->fetch()) {

            ?>

                <div class="box">
                    <div class="image-container">
                        <div class="small-image">
                            <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                            <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                        </div>
                        <div class="big-image">
                        <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                        </div>
                    </div>
                    <div class="content">
                        <h3> <?php echo $row['Product_Name'];  ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <p>
                            <?php echo $row['Product Description'];  ?>
                        </p>
                        <div class="price"><?php echo $row['Price'];  ?></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>

    </section>

    <section class="deal" id="deal">
        <h1 class="heading">special <span>deal</span></h1>

        <div class="row">
            <div class="content">
                <span class="discount">up to 50% off</span>
                <h3 class="text">deal of the day</h3>
                <div class="count-down">
                    <div class="box">
                        <h3 id="days">00</h3>
                        <span>days</span>
                    </div>
                    <div class="box">
                        <h3 id="hours">00</h3>
                        <span>hours</span>
                    </div>
                    <div class="box">
                        <h3 id="minutes">00</h3>
                        <span>minutes</span>
                    </div>
                    <div class="box">
                        <h3 id="seconds">00</h3>
                        <span>seconds</span>
                    </div>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="image">
                <img src="<?php echo $img; ?>counter-img.png" alt="" />
            </div>
        </div>
    </section>

    <!-- deal section end -->

    <!-- review section start  -->

    <section class="review" id="review">
        <h1 class="heading">customers <span>review</span></h1>

        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-1.png" alt="" />
                            <div class="user-info">
                                <h3>Mostafa Ragab</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-15.png" alt="" />
                            <div class="user-info">
                                <h3>Zahra</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <link rel="stylesheet" href="" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-3.png" alt="" />
                            <div class="user-info">
                                <h3>Ryan</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-13.png" alt="" />
                            <div class="user-info">
                                <h3>Nada</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-4.png" alt="" />
                            <div class="user-info">
                                <h3>Menna</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-16.png" alt="" />
                            <div class="user-info">
                                <h3>Merna</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-10.png" alt="" />
                            <div class="user-info">
                                <h3>Salama</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-14.png" alt="" />
                            <div class="user-info">
                                <h3>Enjy</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Nesciunt nihil aut praesentium qui non, magnam perspiciatis
                            commodi fugit cumque quos, deserunt quidem esse fuga facilis
                            exercitationem, dolorum itaque corrupti tempore.
                        </p>
                        <div class="user">
                            <img src="<?php echo $img; ?>pic-7.png" alt="" />
                            <div class="user-info">
                                <h3>Eyad</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- review section end -->



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <?php include $tpl . "footer.php"; ?>