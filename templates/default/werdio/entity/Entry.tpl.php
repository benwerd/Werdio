<?php

$entity = \Idno\Core\Idno::site()->currentPage()->getEntity();

if (\Idno\Core\Idno::site()->currentPage()->isPermalink() && !empty($vars['object']) &&  $entity->getID() === $vars['object']->getID()) {

/**
 Contextly code

      <div class="row annotation-add">
          <div class="col-md-12 idno-comment-container" >
            <div style="margin: auto; margin-bottom: 25px;">
              <div class="ctx-module-container ctx-clearfix"></div>
            </div>
          </div>
      </div>

*/

?>
      <div class="row annotation-add">
          <div class="col-md-8 idno-comment-container" id="comment-form" >
            <div style="margin: auto; margin-bottom: 25px;">
              <p style="line-height: 1.75em; font-size: 1.1em; font-family: merriweather,serif; font-weight: 300;">
I’m writing about the intersection of the internet, media, and society. <a href="https://newsletter.werd.io">Sign up to my newsletter</a> to receive every post and a weekly digest of the most important stories from around the web.</p>

              <iframe
scrolling="no"
style="width:100%!important;height:220px;border:1px #ccc solid !important"
src="https://newsletter.werd.io?as_embed=true"
></iframe><br /><br />
            </div>
          </div>
          <div class="col-md-4">
              <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CW7DT5QI&placement=werdio&format=cover" id="_carbonads_js"></script>
          </div>
      </div>

    <?php
}
