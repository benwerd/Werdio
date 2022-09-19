<div class="permalink">
    <p>
        <?php echo $this->draw('content/edit') ?>
        <?php echo $this->draw('content/end/links') ?>
        <?php

        if (\Idno\Core\Idno::site()->currentPage()->isPermalink() && \Idno\Core\Idno::site()->config()->indieweb_citation) {

            ?>
                <span class="citation"><?php echo $vars['object']->getCitation() ?></span>
            <?php

        }

        ?>
    </p>
</div>
<br class="clearall"/>
<?php

if (\Idno\Core\Idno::site()->currentPage()->isPermalink()) {

    if (!empty($likes) || !empty($replies) || !empty($shares) || !empty($rsvps)) {

        ?>

            <div class="annotations">
                <a name="comments"></a>
            <?php echo $this->draw('content/end/annotations') ?>
            </div>

        <?php

    }

    echo $this->draw('entity/annotations/comment/main');

    echo $this->draw('content/syndication/links');

} else {

    ?>
        <div class="extra-metadata">
        <?php echo $this->draw('content/syndication/links')?>
        </div>
        <?php

        if (\Idno\Core\Idno::site()->session()->isLoggedOn()) {
            echo $this->draw('entity/annotations/comment/mini');
        }

}

