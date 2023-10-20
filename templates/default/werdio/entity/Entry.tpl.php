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
              <iframe src="https://werd.substack.com/embed" width="100%" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
      </div>

    <?php
}
