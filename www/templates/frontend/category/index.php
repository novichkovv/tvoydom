<div class="col-main col-sm-9 col-sm-push-3">
    <div class="pro-coloumn">
        <article class="col-main">
            <div class="toolbar">
                <div class="sorter">
                    <div class="view-mode">
                        <a href="grid.html" title="Grid" class="button button-grid">&nbsp;</a>&nbsp;
                        <span title="List" class="button button-active button-list">&nbsp;</span>&nbsp;
                    </div>
                </div>
                <div id="sort-by">
                    <label class="left">Сортировать по: </label>
                    <ul>
                        <li><a href="#">Популярности<span class="right-arrow"></span></a>
                            <ul class="sort-by-button-group1">
                                <li data-sort-value="name">Названию</li>
                                <li data-sort-value="price">Цене</li>
                                <li data-sort-value="position">Популярности</li>
                            </ul>
                        </li>
                    </ul>
                    <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                <div class="pager">
                    <div id="limiter">
                        <label>View: </label>
                        <ul>
                            <li><a href="#">15<span class="right-arrow"></span></a>
                                <ul>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#">30</a></li>
                                    <li><a href="#">35</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="pages">
                        <label>Page:</label>
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
<!--                            <li><a href="#">3</a></li>-->
<!--                            <li><a href="#">4</a></li>-->
<!--                            <li><a href="#">5</a></li>-->
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="category-products">
                <ol class="products-list grid1" id="products-list" style="width: 100%;">
                    <?php foreach ($products as $product): ?>
                        <li class="item first element-item1">
                            <div class="position hidden"><?php echo $product['id']; ?></div>
                            <div class="product-image">
                                <a href="<?php echo SITE_DIR . $product['product_key']; ?>/" title="<?php echo $product['product_name']; ?>">
                                    <?php if ($product['image_name']): ?>
                                        <img class="small-image" src="<?php echo SITE_DIR; ?>uploads/images/product_images/<?php echo $product['image_name']; ?>" alt="HTC Rhyme Sense">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="product-shop">
                                <h2 class="product-name">
                                    <a href="<?php echo SITE_DIR . $product['product_key']; ?>" title="<?php echo $product['product_name']; ?>" class="name">
                                        <?php echo $product['product_name']; ?>
                                    </a>
                                </h2>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:50%" class="rating"></div>
                                    </div>
                                    <p class="rating-links">
                                        <a href="#/review/product/list/id/167/category/35/">
                                            1 Отзыв
                                        </a>
                                        <span class="separator">|</span>
                                        <a href="#review-form">Добавить отзыв</a>
                                    </p>
                                    <div class="price-box pull-right">
                                        <?php if ($product['special_price'] > 0): ?>
                                            <p class="old-price">
                                                <span class="price-label"></span>
                                                <span id="old-price-212" class="price"> <?php echo $product['price']; ?> </span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price-label"></span>
                                                <span id="product-price-212" class="price"> <?php echo $product['special_price']; ?> </span>
                                            </p>
                                        <?php endif; ?>
                                        <?php if ($product['special_price'] == 0): ?>
                                            <p class="regular-price">
                                                <span class="price-label"></span>
                                        <span id="product-price-212" class="price">
                                            <?php echo rtrim(rtrim($product['price'], '0'), '.'); ?>
                                        </span>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="desc std">
                                    <?php echo $product['short_description']; ?>
                                </div>
                                <div class="actions">
                                    <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Заказать</span></button>
                                    <span class="add-to-links">
<!--                                        <a title="Add to Wishlist" class="button link-wishlist" href="#">-->
<!--                                            <span>Add to Wishlist</span>-->
<!--                                        </a> -->
<!--                                        <a title="Add to Compare" class="button link-compare" href="#"><span>Сравнить</span></a>-->
                                    </span>
                                </div>

                            </div>
                            <div style="clear: both;"></div>

                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </article>
    </div>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/libs/isotope.min.js"></script>
    <div>
        <h1>Isotope - sorting</h1>
        <div class="button-group sort-by-button-group1">
            <button class="button" data-sort-value="price">price</button>
        </div>

        <div class="button-group sort-by-button-group">
            <button class="button is-checked" data-sort-value="original-order">original order</button>

            <button class="button" data-sort-value="name">name</button>
            <button class="button" data-sort-value="symbol">symbol</button>
            <button class="button" data-sort-value="number">number</button>
            <button class="button" data-sort-value="weight">weight</button>
            <button class="button" data-sort-value="category">category</button>
        </div>

        <div class="grid">
            <div class="element-item transition metal " data-category="transition">
                <h3 class="name">Mercury</h3>
                <p class="symbol">Hg</p>
                <p class="number">80</p>
                <p class="weight">200.59</p>
            </div>
            <div class="element-item metalloid " data-category="metalloid">
                <h3 class="name">Tellurium</h3>
                <p class="symbol">Te</p>
                <p class="number">52</p>
                <p class="weight">127.6</p>
            </div>
            <div class="element-item post-transition metal " data-category="post-transition">
                <h3 class="name">Bismuth</h3>
                <p class="symbol">Bi</p>
                <p class="number">83</p>
                <p class="weight">208.980</p>
            </div>
            <div class="element-item post-transition metal " data-category="post-transition">
                <h3 class="name">Lead</h3>
                <p class="symbol">Pb</p>
                <p class="number">82</p>
                <p class="weight">207.2</p>
            </div>
            <div class="element-item transition metal " data-category="transition">
                <h3 class="name">Gold</h3>
                <p class="symbol">Au</p>
                <p class="number">79</p>
                <p class="weight">196.967</p>
            </div>
            <div class="element-item alkali metal " data-category="alkali">
                <h3 class="name">Potassium</h3>
                <p class="symbol">K</p>
                <p class="number">19</p>
                <p class="weight">39.0983</p>
            </div>
            <div class="element-item alkali metal " data-category="alkali">
                <h3 class="name">Sodium</h3>
                <p class="symbol">Na</p>
                <p class="number">11</p>
                <p class="weight">22.99</p>
            </div>
            <div class="element-item transition metal " data-category="transition">
                <h3 class="name">Cadmium</h3>
                <p class="symbol">Cd</p>
                <p class="number">48</p>
                <p class="weight">112.411</p>
            </div>
            <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
                <h3 class="name">Calcium</h3>
                <p class="symbol">Ca</p>
                <p class="number">20</p>
                <p class="weight">40.078</p>
            </div>
            <div class="element-item transition metal " data-category="transition">
                <h3 class="name">Rhenium</h3>
                <p class="symbol">Re</p>
                <p class="number">75</p>
                <p class="weight">186.207</p>
            </div>
            <div class="element-item post-transition metal " data-category="post-transition">
                <h3 class="name">Thallium</h3>
                <p class="symbol">Tl</p>
                <p class="number">81</p>
                <p class="weight">204.383</p>
            </div>
            <div class="element-item metalloid " data-category="metalloid">
                <h3 class="name">Antimony</h3>
                <p class="symbol">Sb</p>
                <p class="number">51</p>
                <p class="weight">121.76</p>
            </div>
            <div class="element-item transition metal " data-category="transition">
                <h3 class="name">Cobalt</h3>
                <p class="symbol">Co</p>
                <p class="number">27</p>
                <p class="weight">58.933</p>
            </div>
            <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
                <h3 class="name">Ytterbium</h3>
                <p class="symbol">Yb</p>
                <p class="number">70</p>
                <p class="weight">173.054</p>
            </div>
            <div class="element-item noble-gas nonmetal " data-category="noble-gas">
                <h3 class="name">Argon</h3>
                <p class="symbol">Ar</p>
                <p class="number">18</p>
                <p class="weight">39.948</p>
            </div>
            <div class="element-item diatomic nonmetal " data-category="diatomic">
                <h3 class="name">Nitrogen</h3>
                <p class="symbol">N</p>
                <p class="number">7</p>
                <p class="weight">14.007</p>
            </div>
            <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                <h3 class="name">Uranium</h3>
                <p class="symbol">U</p>
                <p class="number">92</p>
                <p class="weight">238.029</p>
            </div>
            <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                <h3 class="name">Plutonium</h3>
                <p class="symbol">Pu</p>
                <p class="number">94</p>
                <p class="weight">(244)</p>
            </div>
        </div>

        <style>
            .element-item {
                width: 10%;
                border: 1px solid grey;
                float: left;
                margin: 10px;
                text-align: center;
            }
        </style>
        <script type="text/javascript">
            var $grid = $('.grid').isotope({
                itemSelector: '.element-item',
                layoutMode: 'fitRows',
                getSortData: {
                    name: '.name',
                    symbol: '.symbol',
                    number: '.number parseInt',
                    price: '.price parseInt',
                    category: '[data-category]',
                    weight: function( itemElem ) {
                        var weight = $( itemElem ).find('.weight').text();
                        return parseFloat( weight.replace( /[\(\)]/g, '') );
                    }
                }
            });

            var $grid1 = $('.grid1').isotope({
                itemSelector: '.element-item1',
                layoutMode: 'fitRows',
                getSortData: {
                    name: '.name',
                    position: '.position',
                    price: '.price parseInt',
                    category: '[data-category]',
                    weight: function( itemElem ) {
                        var weight = $( itemElem ).find('.weight').text();
                        return parseFloat( weight.replace( /[\(\)]/g, '') );
                    }
                }
            });

            $('.sort-by-button-group1').on( 'click', 'li', function() {
                var sortValue = $(this).attr('data-sort-value');
                $grid1.isotope({ sortBy: sortValue });
            });


            // bind sort button click
            $('.sort-by-button-group').on( 'click', 'button', function() {
                var sortValue = $(this).attr('data-sort-value');
                $grid.isotope({ sortBy: sortValue });
            });

            // change is-checked class on buttons
            $('.button-group').each( function( i, buttonGroup ) {
                var $buttonGroup = $( buttonGroup );
                $buttonGroup.on( 'click', 'button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $( this ).addClass('is-checked');
                });
            });
        </script>
    </div>
</div>


