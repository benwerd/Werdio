<?php

    foreach(['reply' => 'replies',
             'like' => 'likes',
             'share' => 'shares',
             'rsvp' => 'rsvps',
             'mention' => 'mentions'] as $annotationType => $templateName) {

        if ($annotations = $vars['object']->getAnnotations($annotationType)) {

            foreach($annotations as $key => $annotation) {
                if (
                    substr_count($annotation['permalink'], \Idno\Core\Idno::site()->config()->getDisplayURL()) ||
                    substr_count($annotation['permalink'], 'brid-gy.appspot.com')
                    ) {
                    unset($annotations[$key]);
                }
            }

            echo $this->__(array('annotations' => $annotations))->draw('entity/annotations/' . $templateName);
        }

    }

