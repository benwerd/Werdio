<?php

    namespace IdnoPlugins\Werdio;

    use Idno\Common\Plugin;

    class Main extends Plugin
    {

        function registerContentTypes()
        {
            \Idno\Core\Idno::site()->template()->extendTemplate('content/extra', 'werdio/content/extra');
            \Idno\Core\Idno::site()->template()->extendTemplate('shell/head', 'werdio/shell/head');
            \Idno\Core\Idno::site()->template()->extendTemplate('entity/annotations/comment/main', 'werdio/entity/Entry');
            \Idno\Core\Idno::site()->template()->replaceTemplate('entity/Like', 'werdio/entity/Like');
        }

    }
