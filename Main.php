<?php

    namespace IdnoPlugins\Werdio;

    use Idno\Common\Plugin;

    class Main extends Plugin {

        function registerContentTypes() {
            \Idno\Core\Idno::site()->template()->extendTemplate('content/extra', 'werdio/content/extra');
        }

    }
