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
<!--                            <li><a href="">Личный кабинет</a></li>-->
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
                            <img style="width: 80px; margin-top: -13px;" src="<?php echo SITE_DIR; ?>images/main/logo200.png" alt="Твой Дом">
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
                <a class="logo" href="<?php echo SITE_DIR; ?>">
                    <img style="height: 36px; margin-top: -7px;" src="<?php echo SITE_DIR; ?>images/main/logo200.png" alt="Твой дом">
                </a>
                <nav class="mobile-menu" style="display: block;">
                    <ul>
                        <li><a href="<?php echo SITE_DIR; ?>">Главная</a></li>
                        <li>
                            <a href="<?php echo SITE_DIR; ?>catalog/">Каталог</a>
                            <?php if (isset($common_vars['common_categories'])): ?>
                            <ul>
                                <?php foreach ($common_vars['common_categories'] as $category): ?>
                                    <li>
                                        <a href="<?php echo SITE_DIR; ?>catalog/<?php echo $category['category_key']; ?>">
                                            <?php echo $category['category_name']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <li>
                            <a href="<?php echo SITE_DIR; ?>about/">О нас</a>
                        </li>
                        <li>
                            <a href="<?php echo SITE_DIR; ?>news/">Новости</a>
                        </li>
                        <li>
                            <a href="<?php echo SITE_DIR; ?>contacts/">Контакты</a>
                        </li>
                    </ul>
                </nav><!--/.mobile-menu -->
            </div><!--/.mobile -->
        </div><!--/.container -->
    </div><!--/.navbar -->
</header><!--/.header-area -->