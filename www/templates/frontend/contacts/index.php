<section class="left-shop-banner">
    <div class="single-page-banner" style="background: url(assets/images/left-shop-banner.jpg) no-repeat scroll center bottom / cover;">
        <div class="overlay">
            <div class="container">
                <div class="sp-header-content">
                    <h2>Наши контакты</h2>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo SITE_DIR; ?>">Главная</a></li>
                        <li class="active">Контакты</li>
                    </ul><!--/.breadcrumb -->
                </div><!--/.sp-header-content -->
            </div>
        </div><!--/.overlay -->
    </div>
</section><!--left-shop-banner -->
<section class="google-map-area">
    <div class="container contact-info-main">
        <div class="contact-info">
            <h2>Наши контактные данные</h2>
            <p>Адрес: г. Норильск, Ленинский пр-т, 32</p>

            <p>Телефон: +7-926-333-57-08 <br />
                Email: info@tvoydom-norilsk.ru <br />
                Website: http://tvoydom-norilsk.ru</p>
        </div>
    </div>
    <div id="map"></div>
</section>
<section class="contact-page">
    <div class="container">
        <div class="section-heading">
            <h2>Напишите нам</h2>
            <div class="border-green"></div>
        </div><!--/.section-heading -->

        <div class="contact-form-area">
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="text" placeholder="Имя">
                        </div>
                        <div class="input-field">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Тема">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <textarea placeholder="Сообщение"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Отправить" class="btn send-message">
            </form>
        </div>
    </div>
</section><!--/.contact-page -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function () {
        jQuery(function () {

            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(69.355729, 88.187999), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(69.355729, 88.187999),
                    map: map,
                    title: 'Snazzy!'
                });
            }

        }());
    });
</script>