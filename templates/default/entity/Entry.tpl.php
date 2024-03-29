<?php
$currentPage = \Idno\Core\Idno::site()->currentPage();
if (!empty($currentPage) && \Idno\Core\Idno::site()->currentPage()->isPermalink()) {
    $rel = 'rel="in-reply-to" class="u-in-reply-to"';
} else {
    $rel = '';
}
    $tags = "";
if (!empty($vars['object']->tags)) {
    //        $tags = is_array($vars['object']->tags) ? implode(', ' , $vars['object']->tags) : $vars['object']->tags;
    //        $vars['object']->body .= '<p class="tag-row"><i class="icon-tag"></i>' . $tags . '</p>';
    $tags = $this->__(['tags' => $vars['object']->tags])->draw('forms/output/tags');
}
?>

<?php
if (empty($vars['feed_view'])) {
    ?>
        <h2 class="p-name"><a
                href="<?php echo $vars['object']->getDisplayURL() ?>"><?php echo htmlentities(strip_tags($vars['object']->getTitle()), ENT_QUOTES, 'UTF-8'); ?></a>
        </h2>
    <?php

}

?>
<div class="e-content entry-content">
<p>
  <em>
    I’m writing about the intersection of the internet, media, and society. <a href="https://newsletter.werd.io">Sign up to my newsletter</a> to receive every post and a weekly digest of the most important stories from around the web.
  </em>
</p>
<?php

    echo $this->__(['value' => $vars['object']->body, 'object' => $vars['object'], 'rel' => $rel])->draw('forms/output/richtext') . $tags;

?>
</div>
