<section class="left-shop-banner">
    <div class="single-page-banner" style="background: url(images/frontend/main/bg.jpg) no-repeat scroll center bottom / cover;">
        <div class="overlay">
            <div class="container">
                <div class="sp-header-content">
                    <h2>Каталог товаров</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo SITE_DIR; ?>">Главная</a></li>
                        <?php if (!isset($active_category)): ?>
                            <li class="active">Каталог</li>
                        <?php endif; ?>
                        <?php if (isset($active_category)): ?>
                            <li><a href="<?php echo SITE_DIR; ?>catalog/">Каталог</a></li>
                            <li class="active"><?php echo $active_category['category_name']; ?></li>
                        <?php endif; ?>
                    </ul><!--/.breadcrumb -->
                </div><!--/.sp-header-content -->
            </div>
        </div><!--/.overlay -->
    </div>
</section><!--left-shop-banner -->
<section class="shop shop-left">
<div class="container">
    <div class="shop-header">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="shop-header-left">
                    <div class="searcbar">
                        <input type="text" class="shop-search" placeholder="Поиск товаров">
                    </div>
                </div><!--/.shop-header-left -->
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="shop-header-right">
                    <form>
                        <div class="sorting-bar">
                            <div class="input-group">
                                <select name="order" class="form-control selectpicker bs-select-hidden order-select">
                                    <option value="name" <?php if($_GET['order'] == 'product_name') echo 'selected'; ?>>По названию</option>
                                    <option value="price" <?php if($_GET['order'] == 'price') echo 'selected'; ?>>По цене</option>
                                    <option value="bestseller" <?php if($_GET['order'] == 'bestseller') echo 'selected'; ?>>По популярности</option>
                                </select>
                            </div>
                        </div><!--/.sorting-bar -->
                    <?php if (count($pages) > 1): ?>
                        <nav class="product-pagination">
                            <ul class="pagination">
                                <?php foreach ($pages as $page => $url): ?>
                                    <li><a href="<?php echo $url; ?>"><?php echo $page; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav><!--/.product-pagination -->
                    <?php endif; ?>
                    </form>
                </div><!--/.shop-header-right -->
            </div>
        </div>
    </div><!--/.shop-header -->
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
                    <?php foreach ($products as $k => $product): ?>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="product">
                                <div class="product-thumb">
                                    <img alt="" src="<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $product['image_name']; ?>">
                                    <a class="hover-cart" href="<?php echo SITE_DIR; ?>products/<?php echo $product['product_key']; ?>/">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <h2><a href="<?php echo SITE_DIR; ?>products/<?php echo $product['product_key']; ?>/"><?php echo $product['product_name']; ?></a></h2>
                                <p><?php echo $product['short_description']; ?></p>
                                <div class="shop-price"><?php echo $product['price']; ?></div>
                            </div>
                        </div>
                        <?php if (($k + 1) % 3 === 0): ?>
                            </div>
                            <div class="row">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shop-bottom">
    <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="col-md-8 col-sm-8">
            <div class="shop-header-right">
                <form>
                    <div class="sorting-bar">
                        <div class="input-group">
                            <select name="order" class="form-control selectpicker bs-select-hidden order-select">
                                <option value="name" <?php if($_GET['order'] == 'product_name') echo 'selected'; ?>>По названию</option>
                                <option value="price" <?php if($_GET['order'] == 'price') echo 'selected'; ?>>По цене</option>
                                <option value="bestseller" <?php if($_GET['order'] == 'bestseller') echo 'selected'; ?>>По популярности</option>
                            </select>
                        </div>
                    </div><!--/.sorting-bar -->
                    <?php if (count($pages) > 1): ?>
                        <nav class="product-pagination">
                            <ul class="pagination">
                                <?php foreach ($pages as $page => $url): ?>
                                    <li><a href="<?php echo $url; ?>"><?php echo $page; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav><!--/.product-pagination -->
                    <?php endif; ?>
                </form>
            </div><!--/.shop-header-right -->
        </div>
    </div>
</div><!--/.shop-header -->
</div>
</section>
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function () {
        $(".order-select").change(function() {
            $(this).closest('form').submit();
        })
    });
</script>