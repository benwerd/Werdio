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
        	  <p>
			<a data-formkit-toggle="56920a9da9" href="https://artisanal-artisan-3527.ck.page/56920a9da9" class="btn btn-primary" style="font-size: 1.3em">Subscribe by email</a>
        	  </p>
            <p>
              Follow:
              <a href="https://werd.social/@ben" rel="me" class="u-url">Mastodon</a>, 
              <a href="https://bsky.app/profile/werd.io" rel="me" class="u-url">Bluesky</a>,
              <a href="https://www.threads.net/@ben.werdmuller" rel="me" class="u-url">Threads</a>, 
              <a href="https://www.linkedin.com/in/benwerd" rel="me" class="u-url">LinkedIn</a>
            </p>
          </div>
        </div>
      </div>
    </div>

<?php

  }
