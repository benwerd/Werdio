<?php

  if (!\Idno\Core\Idno::site()->currentPage()->isPermalink() && !empty($vars['object'])) {

?>

    <div id="banner" class="h-card">
      <div id="banner-container">
        <div class="namebadge-holder">
          <div class="namebadge">
            <p>
              <a href="https://werd.io" class="u-url icon-container">
                <img class="u-photo" alt="Ben Werdmuller" src="/IdnoPlugins/Werdio/images/ben.jpg">
              </a>
            </p>
          </div>
        </div>
        <div>
          <h1>
            <a href="/" rel="home" class="u-url"><strong>Werd</strong> I/O</a>
          </h1>
          <p class="site-description p-profile">
            Writing at the intersection of technology, democracy, and society by 
            <a href="https://about.werd.io" rel="me" class="p-name">Ben Werdmuller</a>
          </p>
          <div class="elsewhere">
        	<form action="https://buttondown.com/api/emails/embed-subscribe/benwerd" method="post">
        	  <p>
        	    <label style="display: inline">
        	      Subscribe by email:<br>
        	      <input type="email" name="email" placeholder="you@example.com" style="font-weight: 400; font-style: normal; min-width: 50%" />
                  <input type="hidden" value="1" name="embed" class="btn" />
                  <input type="submit" value="Subscribe" class="btn btn-primary" style="padding: 8px; padding-bottom: 10px; margin-bottom: 3px; border-radius: 0" />
        	    </label>
        	  </p>
        	</form>
            <p>
              Follow:
              <a href="https://newsletter.werd.io" rel="me" class="u-url">Newsletter</a>, 
              <a href="https://werd.social/@ben" rel="me" class="u-url">Mastodon</a>, 
              <a href="https://www.threads.net/@ben.werdmuller" rel="me" class="u-url">Threads</a>, 
              <a href="https://www.linkedin.com/in/benwerd" rel="me" class="u-url">LinkedIn</a>
            </p>
          </div>
        </div>
      </div>
    </div>

<?php

  }
