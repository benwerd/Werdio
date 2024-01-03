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
      <script defer src="https://cdn.commento.io/js/commento.js"></script>
      <div id="commento"></div>
      <div class="row annotation-add">
          <div class="col-md-12 idno-comment-container" id="comment-form" >
            <div style="margin: auto; margin-bottom: 25px;">

              <iframe
scrolling="no"
style="width:100%!important;height:220px;border:1px #ccc solid !important"
src="https://newsletter.werd.io?as_embed=true"
></iframe><br /><br />
            </div>
          </div>
      </div>

    <?php
}
