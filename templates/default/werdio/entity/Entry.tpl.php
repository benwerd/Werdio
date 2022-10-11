<?php

if (\Idno\Core\Idno::site()->currentPage()->isPermalink()) {

    ?>
      <div class="row annotation-add">
          <div class="col-md-12 idno-comment-container" id="comment-form" style="margin-bottom: 25px">
          <form
            action="https://buttondown.email/api/emails/embed-subscribe/benwerd"
            method="post"
            target="popupwindow"
            onsubmit="window.open('https://newsletter.werd.io', 'popupwindow')"
            class="embeddable-buttondown-form"
            style="font-size: 1.2em; line-height: 1.4em"
            >
                <div style="margin: auto; text-decoration: center">
                    <input type="email" name="email" id="bd-email" placeholder="To subscribe, enter your email address" style="color: rgb(0, 0, 0); border-color: rgb(227, 227, 227); border-radius: 4px; font-weight: 400; padding: 10px; margin: 0; width: 70%" />
                    <input type="button" class="btn btn-primary" value="Subscribe" style="padding: 10px; margin: 0; margin-top: -2px; font-size: 1em; width: 20%" />
                </div>
            </form>
            <p style="margin-top: 21px; font-size: 1.2em">
		        <a href="https://twitter.com/benwerd">Follow me on Twitter</a> <span style="padding-left: 15px; padding-right: 15px">|</span> 
                <a href="mailto:ben@werd.io">Email me</a> at ben@werd.io
              </p>
          </div>
      </div>

    <?php
}
