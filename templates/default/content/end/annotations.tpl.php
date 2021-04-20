<?php

foreach(['reply' => 'replies',
             'like' => 'likes',
             'share' => 'shares',
             'rsvp' => 'rsvps',
             'mention' => 'mentions'] as $annotationType => $templateName) {

    if ($annotations = $vars['object']->getAnnotations($annotationType)) {
        foreach($annotations as $key => $annotation) {
            if (
                !\Idno\Core\Idno::site()->session()->isLoggedIn() &&
                    ((
                        substr_count($annotation['permalink'], \Idno\Core\Idno::site()->config()->host) &&
                        substr_count($annotation['permalink'], 'annotation') &&
                        $annotation['time'] < 1516557318 // Comments from the time of this change are allowed
                    ) ||
                    substr_count($annotation['permalink'], 'brid-gy.appspot.com'))
                ) {
                unset($annotations[$key]);
            }
        }

        echo $this->__(array('annotations' => $annotations))->draw('entity/annotations/' . $templateName);
    }

}

