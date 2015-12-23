<section class="left-shop-banner">
    <div class="single-page-banner" style="background: url(images/frontend/main/bg.jpg) no-repeat scroll center bottom / cover;">
        <div class="overlay">
            <div class="container">
                <div class="sp-header-content">
                    <h2>Каталог товаров</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo SITE_DIR; ?>">Главная</a></li>
                        <li><a href="<?php echo SITE_DIR; ?>catalog/">Каталог</a></li>
                        <li class="active"><?php echo $product['product_name']; ?></li>
                    </ul><!--/.breadcrumb -->
                </div><!--/.sp-header-content -->
            </div>
        </div><!--/.overlay -->
    </div>
</section><!--left-shop-banner -->
<section class="shop shop-left">
    <div class="container">
        <div class="shop-left-body">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">
                                Категории
                            </h2>
                            <ul>
                                <?php foreach ($categories as $category): ?>
                                    <li>
                                        <a href="<?php echo SITE_DIR; ?>catalog/<?php echo $category['category_key']; ?>">
                                            <?php echo $category['category_name']; ?>
                                        </a>
                                        <?php if ($category['children']): ?>
                                            <span class="sidebar-plus-btn"></span>
                                            <ul class="sidebar-child">
                                                <?php foreach ($category['children'] as $child): ?>
                                                    <li>
                                                        <a href="<?php echo SITE_DIR; ?>catalog/<?php echo $child['category_key']; ?>">
                                                            <?php echo $child['category_name']; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!--/.single-sidebar -->
                        <?php if ($bestsellers): ?>
                            <div class="single-sidebar">
                                <h2 class="sidebar-title">
                                    Хиты продаж
                                </h2>
                                <div class="widget-product-list">
                                    <ul>
                                        <?php foreach ($bestsellers as $bestseller): ?>
                                            <li>
                                                <div class="widget-product-thumb">
                                                    <a href=""><img src="<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $bestseller['image_name']; ?>" alt=""></a>
                                                </div>
                                                <div class="widget-product-list-text">
                                                    <h2><a href=""><?php echo $bestseller['product_name']; ?></a></h2>
                                                    <div class="widget-product-price">
                                                        <h3><?php echo $bestseller['price']; ?></h3>
                                                    </div>
                                                </div>
                                            </li><!--single list end -->
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="single-sidebar">
                            <?php if ($active_category['image']): ?>
                                <img src="<?php echo SITE_DIR; ?>uploads/images/category_images/<?php echo $active_category['image']; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="shop-display">
                        <div class="row">
                            <div class="product-details">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="product-thumb">
                                                <img alt="<?php echo $product['product_name']; ?>" src="<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $product['images']['main']; ?>">
<!--                                                <a class="hover-cart" href=""><img alt="" src="assets/images/cart-icon.png"></a>-->
                                            </div><!--/.snv-product-img -->
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="product-list-info">
                                                <h2><?php echo $product['product_name']; ?></h2>
                                                <p>
                                                    <?php echo $product['short_description']; ?>
                                                </p>
                                                <div class="shop-price"><?php echo $product['price']; ?></div><!--/.snv-price -->
<!--                                                <div class="product-details-bottom">-->
<!--                                                    <div class="btn add-cart-btn">Add to Cart</div>-->
<!--                                                    <input type="text" value="1" class="cart-amount"/>-->
<!--                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.single-nv-product -->
                            </div>
                            <section class="product-tabs">
                                <div role="tabpanel" class="tabpanel">
                                    <!-- PRODUCT NAV -->
                                    <div class="product-tabs-title">
                                        <ul role="tablist" class="tabs-head">
                                            <li class="active"><a data-toggle="tab" role="tab" href="#tab_des">Описание</a></li>
                                            <li><a data-toggle="tab" role="tab" href="#tab_review">Отзывы</a></li>
                                            <li><a data-toggle="tab" role="tab" href="#tab_policy">Доставка</a></li>
                                        </ul>
                                    </div>
                                    <!-- PRODUCT NAV -->

                                    <!-- PRODUCTS -->
                                    <div class="tab-content">
                                        <!-- Description -->
                                        <div id="tab_des" class="tab-pane fade in active" role="tabpanel">
                                            <h2 class="product-tab-title">Описание</h2>
                                            <?php echo $product['description']; ?>
                                        </div>
                                        <!-- Reviews -->
                                        <div id="tab_review" class="tab-pane fade" role="tabpanel">
                                            <h2 class="product-tab-title">Отзывы</h2>

                                        </div>
                                        <!-- Delivery and Return Information -->
                                        <div id="tab_policy" class="tab-pane fade" role="tabpanel">
                                            <h2 class="product-tab-title">Правила доставки</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                        </div>
                                        <!-- featured -->
                                    </div>
                                    <!-- PRODUCTS -->
                                </div>
                            </section><!--/.product-tabs -->
                            <?php if ($bestsellers): ?>
                            <section class="vital-shop-area related-product">
                                <div class="section-heading">
                                    <h2>Смотрите также</h2>
                                    <div class="border-green"></div>
                                </div><!--/.section-heading -->
                                <div class="new-vital-product">
                                    <div class="row">
                                        <?php foreach ($bestsellers as $bestseller): ?>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                                    </div>
                                </div><!--/.new-vital-product -->
                            </section>
                            <?php endif; ?><!--/.vital-shop-area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>