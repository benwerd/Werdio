<?php

if (\Idno\Core\Idno::site()->currentPage()->isPermalink()) {

    ?>
      <div style="padding:25px; background-color: rgb(255, 229, 0); font-size: 1.3em">
        <h2>Can you help?</h2>
	<p>
	  My colleagues at <a href="https://19thnews.org">The 19th</a> are looking for 350 people to join as members. It costs as little
	  as $19 and you'll support a diverse, women-led newsroom doing important reporting at the intersection of gender, politics, and
	  policy in the US.
	</p>
	<p>
	  If you have the means, <strong><a href="https://the19th.donorsupport.co/-/NVXBQRUH?2" style="font-weight: 800">please donate to The 19th today</a></strong>.
	</p>
      </div>
      <div class="row annotation-add">
          <div class="col-md-12 idno-comment-container" id="comment-form" >
            <div style="margin: auto; margin-bottom: 25px;">
              <iframe src="https://werd.substack.com/embed" width="100%" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
      </div>

    <?php
}
