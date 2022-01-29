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
<meta name="monetization" content="$ilp.uphold.com/7yhraRBZn2GY">

<!-- Cactus comments -->
<script type="text/javascript" src="https://latest.cactus.chat/cactus.js"></script>
<link rel="stylesheet" href="https://latest.cactus.chat/style.css" type="text/css">

<!-- Experimenting with analytics again -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DTVWEX21QH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DTVWEX21QH');
</script>
