<?php

    if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/2019/testing-the-unlock-paywall--protocolcom') {

    ?>
    <!-- Include this script in the <head> section of your page -->
    <script src="https://unlock-protocol.com/static/paywall.min.js"
            data-unlock-url="https://unlock-protocol.com"></script>
    <meta name="lock" content="0xFF5625114f1Cc77A572974602b8db93F6078Bf4c"/>
    <?php

} else if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/2019/this-is-a-paywall-staging-test-check') {

?>
<!-- Include this script in the <head> section of your page -->
<script src="https://staging-paywall.unlock-protocol.com/static/paywall.min.js" data-unlock-url="https://staging-paywall.unlock-protocol.com"></script>
<meta name="lock" content="0xbD4dAffA2D05E68675274fb636c85D380eDaF1e7" />

<?php
} else if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/2019/part-iit-is-an-ancient-marinerand-he') {
?>
<!-- Include this script in the <head> section of your page -->
<script src="https://paywall.unlock-protocol.com/static/paywall.min.js" data-unlock-url="https://paywall.unlock-protocol.com"></script>
<meta name="lock" content="0xcaCDf9297602786303059D4B4adA220B5855dE96" />

<?php
}

?>
<script async data-uid="94c6858b99" src="https://artisanal-artisan-3527.ck.page/94c6858b99/index.js"></script>
<meta name="monetization" content="$ilp.uphold.com/7yhraRBZn2GY">

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://werd.matomo.cloud/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src='//cdn.matomo.cloud/werd.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

<!-- Cactus comments -->
<script type="text/javascript" src="https://latest.cactus.chat/cactus.js"></script>
<link rel="stylesheet" href="https://latest.cactus.chat/style.css" type="text/css">