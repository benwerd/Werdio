<?php

    namespace IdnoPlugins\Werdio;

    use Idno\Common\Plugin;

    class Main extends Plugin {

        function registerContentTypes() {
            \Idno\Core\Idno::site()->template()->extendTemplate('content/extra', 'werdio/content/extra');
            \Idno\Core\Idno::site()->template()->extendTemplate('entity/annotations/comment/main', 'werdio/entity/Entry', false);
        }

    }
