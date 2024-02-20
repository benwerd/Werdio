<div class="container page-container">
	<div class="row" style=" margin-top: 50px; ">
		<div class="col-md-2 col-md-offset-2" style="padding: 1.5em">
			<p>
				<a href="/feed">
					<svg xmlns="http://www.w3.org/2000/svg"
     id="RSSicon"
     viewBox="0 0 8 8" width="30" height="30">

  <title>RSS feed icon</title>

  <style type="text/css">
    .button {stroke: none; fill: orange;}
    .symbol {stroke: none; fill: white;}
  </style>

  <rect   class="button" width="8" height="8" rx="1.5" />
  <circle class="symbol" cx="2" cy="6" r="1" />
  <path   class="symbol" d="m 1,4 a 3,3 0 0 1 3,3 h 1 a 4,4 0 0 0 -4,-4 z" />
  <path   class="symbol" d="m 1,2 a 5,5 0 0 1 5,5 h 1 a 6,6 0 0 0 -6,-6 z" />

</svg>
				</a>
			</p>
			<p>
				<a href="https://newsletter.werd.io">Newsletter</a>
			</p>
			<p>
				<a href="mailto:ben@werd.io">ben@werd.io</a>
			</p>
                        <p>
                                <a href="https://signal.me/#eu/_ehMeopT5JeELrkt2lSk-R0V6d1AsGt_3Q98UOJhgBMTal5EGTdNIbZHB9H9CqBn">Contact me on Signal</a>
                        </p>
		</div>
		<div class="col-md-2 " style="padding: 1.5em">
			<p>
				<a href="/archive">Archive of longer posts</a>
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
