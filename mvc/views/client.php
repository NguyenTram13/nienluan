<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://css.gg/search.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&family=Roboto&display=swap" rel="stylesheet" />
    <link rel="icon" href="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/plant4.png' ?>" />
    <title>VTea</title>
    <?php

    foreach ($data['css'] as $item) {
        echo '<link rel="stylesheet" href="' . _PATH_ROOT_PUBLIC . '/css/' . $item . '.css " />';
    }
    ?>

</head>

<body>
    <div class="app">
        <div class="header">
            <div class="header-content">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/cropped-site_logo_276x106.png' ?>" alt="" class="logo" />
                    </a>
                </div>
                <div class="header-link">
                    <ul class="header-link-item">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="header-icon">
                    <div class="search">
                        <i class="gg-search"></i>
                        <div class="search-input">
                            <div class="input-content">
                                <input type="text" placeholder="Search in ..." />
                                <button type="submit" class="search-btn">
                                    <i class="gg-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="user">
                        <a href=""> <i class="fa-solid fa-user"></i></a>
                        <ul class="account">
                            <li><a href="user.html">User</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="<?php  echo _WEB_ROOT.'/admin/index'
                            ?>">Admin</a></li>

                        </ul>
                    </div>
                    <div class="cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <!-- <i class="fa-thin fa-bag-shopping"></i> -->
                        <span class="cart-count">0</span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "./mvc/views/pages/" . $data['page'] . ".php";
        ?>
        <div class="footer">
            <?php
                
                if(isset($_SESSION['check']) && $_SESSION['check']==1){
                    ?>
                    <div class="footer-top">
                        <div class="footer-top-content">
                            <div class="footer-img" data-aos="fade-up" data-aos-duration="1000">
                                <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/teapot.png' ?>" alt="" />
                            </div>
                            <div class="footer-text" data-aos="fade-up" data-aos-duration="2000">
                                <span> Subscribe to Newsletter</span>
                            </div>
                            <div class="footer-input" data-aos="fade-up" data-aos-duration="3000">
                                <input type="text" placeholder="Email address here..." />
                                <button type="submit" class="subscribe">
                                    subscribe <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                     </div>

                    <?php
                }
            ?>
           
            <div class="footer-bottom">
                <div class="footer-bottom-content container">
                    <div class="row">
                        <div class="col col-sm-12 col-md-4 footer-left">
                            <div class="footer-logo">
                                <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/cropped-site_logo_276x106.png' ?>" alt="" />
                            </div>
                            <div class="footer-left-text">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit,
                                    sed do et olore magna aliqua enenatis</span>
                            </div>
                            <div class="footer-left-time">
                                <span>© 2015 — 2022</span>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-md-4 footer-center">
                            <div class="footer-center-heading">
                                <span>Quick Links</span>
                            </div>
                            <div class="row">
                                <div class="col col-6 footer-center-left">
                                    <ul>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Terms Of Service</a></li>
                                        <li><a href="#">View Cart</a></li>
                                    </ul>
                                </div>
                                <div class="col col-6 footer-center-right">
                                    <ul>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Support Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-md-4 footer-right">
                            <div class="footer-right-heding">
                                <span>Contact Info</span>
                            </div>
                            <div class="footer-right-contact">
                                <span>7th Tea Street • Santa Monica, CA</span>
                                <span>Phone: 987.654.3210</span>
                            </div>
                            <div class="footer-right-link">
                                <div class="row">
                                    <a class="col col-4 fb"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="col col-4 tw"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="col col-4 in"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="footer-border"></span>
                <p>US © 2022. All Rights Reserved</p>
            </div>
        </div>
    </div>

    <div class="model-cart">
        <div class="model-cart-content">
            <div class="model-cart-heading">
                <div class="text">
                    <span>shopping cart</span>
                </div>
                <div class="model-close">
                    <span>Close </span>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="model-cart-center">
                <div class="cart-center-item">
                    <div class="cart-center-left">
                        <p class="title">Hezb Mazzubium Vulgaze</p>
                        <div class="price-amount">
                            <span class="cart-center-amount">1</span>
                            X
                            <span class="cart-center-price">$45.00</span>
                        </div>
                    </div>
                    <div class="cart-center-right">
                        <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/product/Hezb Mazzubium Vulgaze.jpg' ?>" alt="" />
                        <span class="cart-center-close">
                            <i class="fa-solid fa-xmark"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="model-cart-footer">
                <div class="cart-footer-total">
                    <span>Total</span>
                    <span>$45.00</span>
                </div>
                <div class="cart-footer-btn">
                    <a href="#"> <button class="view">View Cart</button></a>
                    <a href="#"><button class="check">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php

    foreach ($data['js'] as $item) {
        if ($item == "main") {

            echo '<script src="' . _PATH_ROOT_PUBLIC . '/js/' . $item . '.js" type="module"></script>';
        } else {
            echo '<script src="' . _PATH_ROOT_PUBLIC . '/js/' . $item . '.js"></script>';
        }
    }
    ?>

</body>

</html>