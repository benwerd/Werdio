<?php

  if (!\Idno\Core\Idno::site()->currentPage()->isPermalink() && !empty($vars['object'])) {

?>

    <div id="banner" class="h-card">
      <div id="banner-container">
        <div>
          <div class="namebadge">
            <p>
              <a href="https://werd.io" class="u-url icon-container">
                <img class="u-photo" src="/IdnoPlugins/Werdio/images/ben.jpg">
              </a>
            </p>
          </div>
        </div>
        <div>
          <h1>
            <a href="/" rel="home"><strong>Werd</strong> I/O</a>
          </h1>
          <p class="site-description p-profile">
            Writing at the intersection of technology, democracy, and society by 
            <a href="/profile/benwerd" rel="me" class="u-url p-name">Ben Werdmuller</a>
          </p>
          <p>
            <a href="https://newsletter.werd.io" class="btn btn-primary" style="background-color: #4c93cb; color: #fff; font-size: 1.2em; font-weight: 400; padding: 5px 15px 5px 15px">Subscribe via email</a>
          </p>
          <div class="elsewhere">
            <p>
              Follow me elsewhere:
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
