<?php 
session_start();
if (isset($_SESSION['username'])) {
} 
else {
    header('location: login.php');
    exit(); 
} 
include('conn.php');
include "init.php"; 
 include $tpl."header.php"; ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- home section start  -->

<section class="home" id="home">
    <div class="content">
        <span>special offer</span>
        <h3>sale up to 50% off</h3>
        <a href="#" class="btn">shop now</a>
    </div>

    <div class="image">
        <img src="<?php echo $img; ?>home-img.png" alt="" />
    </div>
</section>

<!-- home section end -->

<!-- category section start  -->

<section class="category">
    <h1 class="heading">shop by <span>category</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="<?php echo $img; ?>cat-1.jpg" alt="" />
            <div class="content">
                <span>up to 50% off</span>
                <h3>for women</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="<?php echo $img; ?>cat-2.jpg" alt="" />
            <div class="content">
                <span>up to 50% off</span>
                <h3>for men</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
    </div>
</section>

<!-- category section end -->

<!-- products section start  -->

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>

    <div class="swiper-container product-slider gap">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-1.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>women's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-2.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>women's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-3.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>men's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-12.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>women's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-5.png" alt="" />
                    </div>
                    <div class="content">
                    <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>men's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-container product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-6.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>women's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-7.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>men's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-8.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>women's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-9.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>men's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $img; ?>p-10.png" alt="" />
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>( 250 reviews )</span>
                        </div>
                        <h3>women's clothes</h3>
                        <div class="price">$15.99 <span>$18.99</span></div>
                        <a href="product.php" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- products section end -->

<!-- featured section start  -->

<section class="featured" id="featured">
    <h1 class="heading"><span>featured</span> products</h1>

    <div class="box-container">
        <div class="box">
            <div class="image-container">
                <div class="small-image">
                    <img src="<?php echo $img; ?>f-1-1.png" class="small-image-1" alt="" />
                    <img src="<?php echo $img; ?>f-1-2.png" class="small-image-1" alt="" />
                    <img src="<?php echo $img; ?>f-1-3.png" class="small-image-1" alt="" />
                </div>
                <div class="big-image">
                    <img src="<?php echo $img; ?>f-1-1.png" class="big-image-1" alt="" />
                </div>
            </div>
            <div class="content">
                <h3>men's clothes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>( 250 reviews )</span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Tempora quasi nesciunt, error fuga facilis autem rerum cumque
                    animi rem natus.
                </p>
                <div class="price">$15.99 <span>$18.99</span></div>
                <a href="product.php" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <div class="small-image">
                    <img src="<?php echo $img; ?>f-2-1.png" class="small-image-2" alt="" />
                    <img src="<?php echo $img; ?>f-2-2.png" class="small-image-2" alt="" />
                    <img src="<?php echo $img; ?>f-2-3.png" class="small-image-2" alt="" />
                </div>
                <div class="big-image">
                    <img src="<?php echo $img; ?>f-2-1.png" class="big-image-2" alt="" />
                </div>
            </div>
            <div class="content">
                <h3>women's clothes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>( 250 reviews )</span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Tempora quasi nesciunt, error fuga facilis autem rerum cumque
                    animi rem natus.
                </p>
                <div class="price">$15.99 <span>$18.99</span></div>
                <a href="product.php" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <div class="small-image">
                    <img src="<?php echo $img; ?>f-3-1.png" class="small-image-3" alt="" />
                    <img src="<?php echo $img; ?>f-3-2.png" class="small-image-3" alt="" />
                    <img src="<?php echo $img; ?>f-3-3.png" class="small-image-3" alt="" />
                </div>
                <div class="big-image">
                    <img src="<?php echo $img; ?>f-3-1.png" class="big-image-3" alt="" />
                </div>
            </div>
            <div class="content">
                <h3>men's clothes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>( 250 reviews )</span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Tempora quasi nesciunt, error fuga facilis autem rerum cumque
                    animi rem natus.
                </p>
                <div class="price">$15.99 <span>$18.99</span></div>
                <a href="product.php" class="btn">add to cart</a>
            </div>
        </div>
    </div>
</section>

<!-- featured section end -->

<!-- deal section start  -->

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
<?php include $tpl."footer.php"; ?>