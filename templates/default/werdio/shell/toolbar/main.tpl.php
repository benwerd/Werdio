<a href="#maincontent" style="display:none"><?php echo \Idno\Core\Idno::site()->language()->_('Skip to main content'); ?></a>
<nav class="navbar navbar-default navbar-fixed-top werdio-nav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only"><?php echo \Idno\Core\Idno::site()->language()->_('Toggle navigation'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" tabindex="1" href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>"
                style="font-family: Helvetica, Arial, sans-serif; font-weight: 400;">
                <strong>Werd</strong> I/O
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">

            <?php
            if (\Idno\Core\Idno::site()->config()->isPublicSite() || \Idno\Core\Idno::site()->session()->isLoggedOn()) {
                echo $this->draw('shell/toolbar/search');
            }
            ?>

            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="https://about.werd.io" rel="me">About</a>
                </li>
                <li>
                    <a href="/content/posts">Posts</a>
                </li>
                <li>
                    <a href="/content/bookmarkedpages">Links</a>
                </li>
                <li>
                    <a href="https://newsletter.werd.io" rel="me">Newsletter</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="https://newsletter.werd.io" class="btn btn-primary" style="background-color: #0e62a4; color: #fff; font-weight: bold">Subscribe</a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
