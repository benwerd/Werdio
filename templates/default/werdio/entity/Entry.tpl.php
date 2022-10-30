<?php

if (\Idno\Core\Idno::site()->currentPage()->isPermalink()) {

    ?>
      <div class="row annotation-add">
          <div class="col-md-12 idno-comment-container" id="comment-form" >
            <div style="margin: auto; margin-bottom: 25px;">
              <iframe src="https://werd.substack.com/embed" width="100%" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
      </div>

    <?php
}
