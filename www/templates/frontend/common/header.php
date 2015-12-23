<header class="header-area home-v2">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>Твой Дом - Матрасы и товары для дома</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="top-right-menu navbar-right">
                        <ul>
                            <li><a href="">Личный кабинет</a></li>
                            <!--                            <li><a href=""><span><img src="--><?php //echo SITE_DIR; ?><!--images/frontend/theme/usa.png" alt=""></span> English</a></li>-->
                            <!--                            <li><a href="">Eur</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="container">
            <div class="row hidden-xs hidden-sm">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo SITE_DIR; ?>">
                            <img style="width: 80px; margin-top: -13px;" src="<?php echo SITE_DIR; ?>images/main/logo200.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <nav class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="<?php echo SITE_DIR; ?>">Главная</a>
                            </li>
                            <li>
                                <a href="<?php echo SITE_DIR; ?>catalog/">Каталог</a>
                                <?php if (isset($common_vars['common_categories'])): ?>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($common_vars['common_categories'] as $category): ?>
                                            <li><a href="<?php echo SITE_DIR; ?>catalog/<?php echo $category['category_key']; ?>/"><?php echo $category['category_name']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                            <!--                            <li><a href="">Features</a></li>-->
                            <!--                            <li class="dropdown">-->
                            <!--                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Pages</a>-->
                            <!--                                <ul class="dropdown-menu">-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/shop_full.html">Shop full</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/shop_left_list.html">Shop list</a></li>-->
                            <!--                                    <li><a href="<?php echo SITE_DIR; ?>images/frontend/theme/Fortuna.jpg">Shop left</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/product_full.html">Product full</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/product_right.html">Product right</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/cart_left.html">Cart</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/checkout.html">Checkout</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/blog.html">Blog</a></li>-->
                            <!--                                    <li><a href="http://softhemes.com/envato/html/vital/vital/single-post.html">Single post</a></li>-->
                            <!--                                </ul>-->
                            <!--                            </li>-->
                            <!--                            <li><a href="">Portfolio</a></li>-->
                            <li><a href="<?php echo SITE_DIR; ?>about/">О нас</a></li>
                            <li><a href="<?php echo SITE_DIR; ?>contacts/">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="cart-display">
                        <ul>
                            <li class="cart cart-v1-dropdown">
                                <a href=""><img src="http://tvoydom.loc/images/frontend/theme/cart-icon.png" alt="">&nbsp;&nbsp;&nbsp;
                                    <span>5600.00</span></a>
                                <div class="cart-box">
                                    <div class="cart-box-header">
                                        <ul>
                                            <li>
                                                <img src="<?php echo SITE_DIR; ?>images/frontend/theme/cart-icon.png" alt="">
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <h2>Сумма: 5600.00</h2>
                                            </li>
                                        </ul>
                                    </div><!--/.cart-box-header -->
                                    <div class="cart-box-body">
                                        <ul>
                                            <li>
                                                <div class="cbb-product-img">
                                                    <img src="<?php echo SITE_DIR; ?>images/frontend/theme/Fortuna.jpg" alt="">
                                                </div>
                                                <div class="cbb-product-details">
                                                    <h2>Аскона Victory</h2>
                                                    <span class="cbb-pp">15990.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cbb-product-img">
                                                    <img src="<?php echo SITE_DIR; ?>images/frontend/theme/Fortuna.jpg" alt="">
                                                </div>
                                                <div class="cbb-product-details">
                                                    <h2>Аскона Victory</h2>
                                                    <span class="cbb-pp">15990.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cbb-product-img">
                                                    <img src="<?php echo SITE_DIR; ?>images/frontend/theme/Fortuna.jpg" alt="">
                                                </div>
                                                <div class="cbb-product-details">
                                                    <h2>Аскона Victory</h2>
                                                    <span class="cbb-pp">15990.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!--/.cart-box-body -->
                                    <div class="cart-box-bottom">
                                        <a href="" class="btn checkout">Proceed to checkout</a>
                                        <a href="" class="btn gotocart">Go to cart</a>
                                    </div><!--/.cart-box-bottom -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile">
                <a class="logo" href="http://softhemes.com/envato/html/vital/vital/index.html"><img src="<?php echo SITE_DIR; ?>images/frontend/theme/logo-2.png" alt=""></a>
                <nav class="mobile-menu" style="display: block;">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="<?php echo SITE_DIR; ?>images/frontend/theme/Fortuna.jpg">Store</a></li>
                        <li><a href="">Features</a></li>
                        <li>
                            <a href="">Pages</a>
                            <ul>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/shop_full.html">Shop full</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/shop_left_list.html">Shop list</a></li>
                                <li><a href="<?php echo SITE_DIR; ?>images/frontend/theme/Fortuna.jpg">Shop left</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/product_full.html">Product full</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/product_right.html">Product right</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/cart_left.html">Cart</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/checkout.html">Checkout</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/blog.html">Blog</a></li>
                                <li><a href="http://softhemes.com/envato/html/vital/vital/single-post.html">Single post</a></li>
                            </ul>
                        </li>
                        <li><a href="">Portfolio</a></li>
                        <li><a href="http://softhemes.com/envato/html/vital/vital/blog.html">Blog</a></li>
                        <li><a href="http://softhemes.com/envato/html/vital/vital/contact.html">Contact</a></li>
                    </ul>
                </nav><!--/.mobile-menu -->
            </div><!--/.mobile -->
        </div><!--/.container -->
    </div><!--/.navbar -->
</header><!--/.header-area -->