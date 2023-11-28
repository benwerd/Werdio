<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DTVWEX21QH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DTVWEX21QH');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBCSTT3X');</script>
<!-- End Google Tag Manager -->
<?php

    if (\Idno\Core\Idno::site()->currentPage()->isPermalink() && !empty($vars['object'])) {
?>

<link rel="canonical" href="<?php echo $vars['object']->getDisplayURL() ?>" />

<?php
    }

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

<link rel="alternate feed" type="application/rss+xml" title="Ben Werdmuller: links" href="https://werd.io/content/bookmarkedpages?_t=rss" />

<meta name="flattr:id" content="7y55gl">

<!-- Granary Atom -->
<link rel="alternate" type="application/atom+xml"
      href="https://granary.io/url?url=https://werd.io/content/all/&input=html&output=atom&hub=https://bridgy-fed.superfeedr.com/" />

<!-- Licensing -->
<meta name="license" content="archive, search, republish:BY-NC-SA">

<!-- Affiliates -->
<script type="text/javascript" src="https://s.skimresources.com/js/226792X1708955.skimlinks.js"></script>

