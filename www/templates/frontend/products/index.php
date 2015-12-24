<script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
<section class="left-shop-banner">
    <div class="single-page-banner" style="background: url(<?php echo SITE_DIR; ?>images/frontend/main/bg.jpg) no-repeat scroll center bottom / cover;">
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
                <div class="col-md-3 col-sm-4 col-xs-12 hidden-xs">
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
                                                <div>
                                                    <script type="text/javascript">
                                                        <!--
                                                        document.write(VK.Share.button({
                                                                image: '<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $product['images']['main']; ?>',
                                                                title: '<?php echo $product['product_name']; ?>',
                                                                noparse: true,
                                                                description: <?php echo $product['short_description']; ?>
                                                            },
                                                            {
                                                                type: "round_nocount",
                                                                text: "Нравится"
                                                            })
                                                        );
                                                        -->
                                                    </script>
                                                </div>
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
                                    <div class="tab-content">
                                        <div id="tab_des" class="tab-pane fade in active" role="tabpanel">
                                            <h2 class="product-tab-title">Описание</h2>
                                            <?php echo $product['description']; ?>
                                        </div>
                                        <div id="tab_review" class="tab-pane fade" role="tabpanel">
                                                <div id="comments">
                                                    <div class="comments-inner-wrap">
                                                        <?php if ($reviews): ?>
                                                        <h2 class="product-tab-title">Все отзывы</h2>
                                                        <?php endif; ?>
                                                        <?php if (!$reviews): ?>
                                                            <h2 class="product-tab-title">Нет отзывов</h2>
                                                        <?php endif; ?>
                                                        <ul class="commentlist" id="reviews">
                                                            <?php foreach ($reviews as $review): ?>
                                                                <?php @require(TEMPLATE_DIR . 'products' . DS . 'ajax' . DS . 'review.php'); ?>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <div id="respond">
                                                <div class="reply-title">
                                                    <h3 class="h5">Оставьте свой отзыв</h3>
                                                </div>
                                                <form id="review_form" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-field">
                                                                <input type="text" name="review[user_name]" data-require="1" placeholder="Имя">
                                                                <div class="error-require validate-message">
                                                                    Необходимо указать имя
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-field">
                                                                <input type="email" name="review[user_email]" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-field">
                                                                <textarea  name="review[review]" placeholder="Ваш отзыв" data-require="1"></textarea>
                                                                <div class="error-require validate-message">
                                                                    Необходимо написать отзыв
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="hidden" name="review[entity_id]" value="<?php echo $product['id']; ?>">
                                                            <input type="submit" value="Отправить" class="btn submit-btn">
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- ./COMMENT FORM -->

                                            </div>

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
                            <?php if ($related_products): ?>
                            <section class="vital-shop-area related-product">
                                <div class="section-heading">
                                    <h2>Смотрите также</h2>
                                    <div class="border-green"></div>
                                </div><!--/.section-heading -->
                                <div class="new-vital-product">
                                    <div class="row">
                                        <?php foreach ($related_products as $related): ?>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-nv-product">
                                                    <div class="snv-product-img">
                                                        <img src="<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $related['image_name']; ?>" alt="" />
                                                        <a href="<?php echo SITE_DIR; ?>products/<?php echo $related['product_key']; ?>/" class="hover-cart">
                                                            <!--                                        <img src="assets/images/cart-icon.png" alt="" />-->
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div><!--/.snv-product-img -->
                                                    <h2>
                                                        <a href="<?php echo SITE_DIR; ?>products/<?php echo $related['product_key']; ?>/">
                                                            <?php echo $related['product_name']; ?>
                                                        </a>
                                                    </h2>
                                                    <p><?php echo $related['short_description']; ?></p>
                                                    <div class="snv-price"><?php echo $related['price']; ?></div><!--/.snv-price -->
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
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function () {
        $("#review_form").submit(function() {
            if(validate('review_form')) {
                var params = {
                    'action': 'save_review',
                    'get_from_form': 'review_form',
                    'callback': function (msg) {
                        ajax_respond(msg, function(respond)
                        {
                            var $reviews_container = $("#reviews");
                            $reviews_container.prepend(respond.review);
                            document.getElementById('review_form').reset();
                            slideToAnchor("#reviews");
                            Notifier.success('Спасибо за Ваш отзыв!');
                        });
                    }
                };
                ajax(params);
            }
            return false;
        });
    });
</script>