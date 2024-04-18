<?php

    $currentPage = \Idno\Core\Idno::site()->currentPage();
    $pageOwner = $currentPage->getOwner();

    if (empty($vars['title'])) { $vars['title'] = '';
    }

    if (!empty($vars['object'])) {
        $object_icon = $vars['object']->getIcon();
        $owner_icon = $vars['object']->getOwner()->getIcon();
        if ($object_icon === $owner_icon) {
//          $object_icon = \Idno\Core\Idno::site()->config()->getDisplayURL() . 'preview/' . $vars['object']->getID();
          $object_icon = 'https://werd.io/werdio-share.png';
          $image_width = '1200';
          $image_height = '630';
        } else if ($icon_file = \Idno\Entities\File::getByURL($object_icon)) {
          if (!empty($icon_file->metadata['width'])) {
              $image_width = $icon_file->metadata['width'];
          }
          if (!empty($icon_file->metadata['height'])) {
              $image_height = $icon_file->metadata['height'];
          }
      }
    } else {
        $object_icon = false;
    }

    $opengraph = array(
        'og:type'      => 'website',
        'og:title'     => htmlspecialchars(strip_tags($vars['title']), ENT_COMPAT, 'UTF-8'),
        'og:site_name' => htmlspecialchars(strip_tags(\Idno\Core\Idno::site()->config()->title), ENT_COMPAT, 'UTF-8'),
        'og:image'     => $currentPage->getIcon()
    );

    if (!empty($vars['description'])) { $opengraph['og:description'] = $vars['description'];
    }

    if ($currentPage->isPermalink()) {

        $opengraph['og:url'] = $currentPage->currentUrl();

        if (!empty($vars['object'])) {
            $owner  = $vars['object']->getOwner();
            $object = $vars['object'];

            $opengraph['og:title']       = htmlspecialchars(strip_tags($vars['object']->getTitle()), ENT_COMPAT, 'UTF-8');
            $opengraph['og:description'] = htmlspecialchars($vars['object']->getShortDescription(), ENT_COMPAT, 'UTF-8');
            $opengraph['og:type']        = 'article'; //htmlspecialchars($vars['object']->getActivityStreamsObjectType());
            $opengraph['og:image']       = $object_icon; //$owner->getIcon(); //Icon, for now set to being the author profile pic

            if ($image_width) {
              $opengraph['og:image:width'] = $image_width;
            }
            if ($image_height) {
              $opengraph['og:image:height'] = $image_height;
            }

            if ($url = $vars['object']->getDisplayURL()) {
                $opengraph['og:url'] = $vars['object']->getDisplayURL();
            }
        }

    }

    foreach ($opengraph as $key => $value) {
        echo "<meta property=\"$key\" content=\"$value\" />\n";
    }

