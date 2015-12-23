<div id="main-header-slider">
    <div class="banner-slider home-v2-slider">
        <div class="item" style="background-image: url(<?php echo SITE_DIR; ?>images/frontend/home-slider/slide-1.jpg);">
            <div class="overlay">
                <div class="banner-text">
                    <h2>Добро пожаловать в мир беспрецедентного комфорта и уюта</h2>
                    <a href="<?php echo SITE_DIR; ?>about/" class="btn btn-1c see-more">Подробнее</a>
                </div><!--/.banner-text -->
            </div>
        </div>
        <div class="item" style="background-image: url(<?php echo SITE_DIR; ?>images/frontend/home-slider/slide-2.png);">
            <div class="overlay">
                <div class="banner-text">
                    <h2>Твой Дом создан для людей не принимающих компромиссы </h2>
                    <a href="<?php echo SITE_DIR; ?>about/" class="btn btn-1c see-more">Подробнее</a>
                </div><!--/.banner-text -->
            </div>
        </div>
        <div class="item" style="background-image: url(<?php echo SITE_DIR; ?>images/frontend/home-slider/slide-3.jpg);">
            <div class="overlay">
                <div class="banner-text">
                    <h2>Здесь собрано только лучшее для Вас</h2>
                    <a href="<?php echo SITE_DIR; ?>about/" class="btn btn-1c see-more">Подробнее</a>
                </div><!--/.banner-text -->
            </div>
        </div>
    </div><!--/.owl-carousel-->
</div>
<section class="vital-shop-area">
    <div class="container">
        <div class="section-heading">
            <h2>Хиты продаж</h2>
            <div class="border-green"></div>
        </div><!--/.section-heading -->
        <div class="new-vital-product">
            <div class="row">
                <?php if ($bestsellers): ?>
                    <?php foreach ($bestsellers as $bestseller): ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-nv-product">
                                <div class="snv-product-img">
                                    <img src="<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $bestseller['image_name']; ?>" alt="" />
                                    <a href="<?php echo SITE_DIR; ?>products/<?php echo $bestseller['product_key']; ?>/" class="hover-cart">
<!--                                        <img src="assets/images/cart-icon.png" alt="" />-->
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div><!--/.snv-product-img -->
                                <h2>
                                    <a href="<?php echo SITE_DIR; ?>products/<?php echo $bestseller['product_key']; ?>/">
                                        <?php echo $bestseller['product_name']; ?>
                                    </a>
                                </h2>
                                <p><?php echo $bestseller['short_description']; ?></p>
                                <div class="snv-price"><?php echo $bestseller['price']; ?></div><!--/.snv-price -->
                            </div><!--/.single-nv-product -->
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div><!--/.new-vital-product -->
    </div>
</section><!--/.vital-shop-area -->
<section class="blog-area">
    <div class="container">
        <div class="section-heading">
            <h2>Последние Новости</h2>
            <div class="border-green"></div>
        </div><!--/.section-heading -->
        <div class="blog-post">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-sx-12">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <img src="<?php echo SITE_DIR; ?>images/frontend/main/3.jpg" alt="" />
                        </div><!--/.post-image -->
                        <h2>Митрасы ожили</h2>
                        <p>
                            Матрас Аскона Бейс относится к линейке классических недорогих моделей. Один из самых доступных по стоимости - матрас крупнейшего российского производителя Аскона пользуется спросом и заслуженным доверием у широкого круга покупателей.</p>
                        <a href="" class="btn blog-read-more">Читать</a>
                    </div><!--/.single-blog-post -->
                </div>
                <div class="col-md-4 col-sm-4 col-sx-12">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <img src="<?php echo SITE_DIR; ?>images/frontend/main/4.jpg" alt="" />
                        </div><!--/.post-image -->
                        <h2>Поступление нового постельного белья</h2>
                        <p>Матрас Аскона Бейс относится к линейке классических недорогих моделей. Один из самых доступных по стоимости - матрас крупнейшего российского производителя Аскона пользуется спросом и заслуженным доверием у широкого круга покупателей.</p>
                        <a href="" class="btn blog-read-more">Читать</a>
                    </div><!--/.single-blog-post -->
                </div>
                <div class="col-md-4 col-sm-4 col-sx-12">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <img src="<?php echo SITE_DIR; ?>images/frontend/main/5.png" alt="" />
                        </div><!--/.post-image -->
                        <h2>Живите полной жизнью</h2>
                        <p>Матрас Аскона Бейс относится к линейке классических недорогих моделей. Один из самых доступных по стоимости - матрас крупнейшего российского производителя Аскона пользуется спросом и заслуженным доверием у широкого круга покупателей.</p>
                        <a href="" class="btn blog-read-more">Читать</a>
                    </div><!--/.single-blog-post -->
                </div>
            </div>
        </div>
    </div>
</section><!--/.blog-area -->

