<!DOCTYPE html>
<html>
  <head>
    <title><?= $title; ?></title>

    <!-- Meta Data -->
    <?= $meta; ?>

    <!-- CSS: Plugins > Fancybox -->
    <link type="text/css" rel="stylesheet" media="all" href="/libs/vendor/fancybox/css/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" media="all" href="/libs/vendor/fancybox/css/jquery.fancybox-thumbs.css" />
    <link type="text/css" rel="stylesheet" media="all" href="/libs/vendor/fancybox/css/jquery.fancybox-buttons.css" />

    <!-- CSS: Custom Styles -->
    <link type="text/css" rel="stylesheet" media="all" href="/libs/css/index.css" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="favicon.ico"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- JS: Plugins > Underscore -->
    <script type="text/javascript" src="/libs/vendor/underscore/underscore-min.js"></script>
    <!-- JS: Plugins > Backbone -->
    <script type="text/javascript" src="/libs/vendor/backbone/backbone-min.js"></script>
    <!-- JS: Plugins > jQuery -->
    <script type="text/javascript" src="/libs/vendor/jquery/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/libs/vendor/jquery/jquery.easing-1.3.pack.js"></script>
    <!-- JS: Plugins > Fancybox -->
    <script type="text/javascript" src="/libs/vendor/fancybox/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/libs/vendor/fancybox/js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="/libs/vendor/fancybox/js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="/libs/vendor/fancybox/js/jquery.fancybox-media.js"></script>
    <!-- JS: Plugins > BX Slider -->
    <script type="text/javascript" src="/libs/vendor/bx-slider/js/jquery.bx-slider.min.js"></script>
    <!-- JS: Plugins > Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAyhw8QDDthUf_-P5XBMKY2RRaLhBCYEQ2HxwDcACoBDSJCmxiJxT8pCzmBKczuPZyjKWzlTFd-Idi6A"></script>
    <!-- JS: Plugins > Bootstrap -->
    <script type="text/javascript" src="/libs/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS: Custom Scripts -->
    <script type="text/javascript" src="/libs/js/baralaye.namespace.js"></script>
    <script type="text/javascript" src="/libs/js/baralaye.plugins.js"></script>
    <script type="text/javascript" src="/libs/js/baralaye.template.js"></script>
    <script type="text/javascript" src="/libs/js/baralaye.catalog.js"></script>
    <script type="text/javascript" src="/libs/js/baralaye.pages.js"></script>
    <script type="text/javascript" src="/libs/js/baralaye.site.js"></script>

    <!-- JS: Plugins Typekit -->
    <script type="text/javascript" src="http://use.typekit.com/pro5kts.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- JS: Pinterest (for pin button) -->
    <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
  </head>
  <body>
    <?= $analytics; ?>
    <?= $vendor; ?>
    <div id="tmp-window" class="tmp-window">
      <div id="tmp-wrap" class="tmp-wrap">
        <div id="tmp-top" class="tmp-top">
          <div class="tmp-logo">
            <a href="/"><?= $logo; ?></a>
          </div>
          <div class="tmp-nav">
            <?= $menu; ?>
          </div>
        </div>
        <div id="tmp-sub" class="tmp-sub">
          <?= $content; ?>
        </div>
        <div id="tmp-bottom" class="tmp-bottom">
          <div class="tmp-nav">
            <?= $menu; ?>
          </div>
          <div id="google_translate_element" class="tmp-google-translate"></div>
        </div>
      </div>
    </div>
  </body>
</html>
