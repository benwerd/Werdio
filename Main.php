<?php

    namespace IdnoPlugins\Werdio;

    use Idno\Common\Plugin;
    use Idno\Core\Idno;

    class Main extends Plugin
    {
        function registerPages() 
        {
          Idno::site()->routes()->addRoute('/preview/:id/?', '\IdnoPlugins\Werdio\Pages\Preview');
        }

        function registerContentTypes()
        {
            \Idno\Core\Idno::site()->template()->extendTemplate('content/extra', 'werdio/content/extra');
            \Idno\Core\Idno::site()->template()->extendTemplate('shell/head', 'werdio/shell/head');
			      \Idno\Core\Idno::site()->template()->extendTemplate('shell/beforecontent', 'werdio/shell/header');
			      \Idno\Core\Idno::site()->template()->extendTemplate('shell/footer', 'werdio/shell/footer');
            \Idno\Core\Idno::site()->template()->extendTemplate('shell/head/final', 'werdio/shell/css', false);
            \Idno\Core\Idno::site()->template()->extendTemplate('entity/annotations/comment/main', 'werdio/entity/Entry');
            if (!\Idno\Core\Idno::site()->session()->isLoggedIn()) \Idno\Core\Idno::site()->template()->extendTemplate('shell/afternav', 'werdio/banner');
            \Idno\Core\Idno::site()->template()->replaceTemplate('entity/Like', 'werdio/entity/Like');

            if (!\Idno\Core\Idno::site()->session()->isLoggedIn())
                \Idno\Core\Idno::site()->template()->replaceTemplate('shell/toolbar/main', 'werdio/shell/toolbar/main');
        }

    }
