<div class="container page-container">
	<div class="row" style=" margin-top: 50px; ">
		<div class="col-md-2 col-md-offset-2" style="padding: 1.5em">
			<p>
				<a href="mailto:ben@werd.io">Email</a>: ben@werd.io
			</p>
		</div>
		<div class="col-md-2 " style="padding: 1.5em">
			<p>
				<a href="/archive">Blog archive</a>
			</p>
			<p>
				<a href="https://www.etsy.com/shop/WerdStore">Etsy store</a>
			</p>
		</div>
		<div class="col-md-4 " style="padding: 1.5em; text-align: right">
			<p>
				<a href="https://getblogging.org">Get Blogging!</a>
			</p>
			<p>
				<a href="https://blogroll.org">Discover more blogs on Blogroll</a>
			</p>
			<p>
				<a href="https://xn--sr8hvo.ws/%F0%9F%8E%B7%F0%9F%88%82%EF%B8%8F%E2%86%AA%EF%B8%8F/previous">←</a> <a href="https://xn--sr8hvo.ws/directory">Discover more IndieWeb sites</a> <a href="https://xn--sr8hvo.ws/%F0%9F%8E%B7%F0%9F%88%82%EF%B8%8F%E2%86%AA%EF%B8%8F/next">→</a><br>
			</p>
		</div>
	</div>
</div>

<?php

$object = $vars['object'];
/* @var \Idno\Common\Entity $object */

if (!empty($object) && 1 == 2) { // Latter clause is to permanently cut Contextly out for now

?>
<script>
    Contextly.ready('widgets');
</script>

<?php 

}
