<?php

    namespace IdnoPlugins\Werdio;

    use Idno\Common\Plugin;

    class Main extends Plugin
    {
        

        function registerContentTypes()
        {
            \Idno\Core\Idno::site()->template()->extendTemplate('content/extra', 'werdio/content/extra');
            \Idno\Core\Idno::site()->template()->extendTemplate('shell/head', 'werdio/shell/head');
			\Idno\Core\Idno::site()->template()->extendTemplate('shell/beforecontent', 'werdio/shell/header');
			\Idno\Core\Idno::site()->template()->extendTemplate('shell/footer', 'werdio/shell/footer');
            \Idno\Core\Idno::site()->template()->extendTemplate('entity/annotations/comment/main', 'werdio/entity/Entry');
            \Idno\Core\Idno::site()->template()->replaceTemplate('entity/Like', 'werdio/entity/Like');

            if (!\Idno\Core\Idno::site()->session()->isLoggedIn())
                \Idno\Core\Idno::site()->template()->replaceTemplate('shell/toolbar/main', 'werdio/shell/toolbar/main');
        }

    }
