<?php 

  namespace IdnoPlugins\Werdio\Pages;

  class Preview extends \Idno\Common\Page 
  {

    function getContent() {
      if (!empty($this->arguments[0])) {
        $object = \Idno\Common\Entity::getByID($this->arguments[0]);
      }

      if (!$object) $this->noContent();

      $image = imagecreate(1200, 630) or $this->noContent();
      $background_color = imagecolorallocate($image, 255,255,255);
      $bottom_bar = imagecolorallocate($image, 150,150,255);
      $text_color = imagecolorallocate($image, 0, 0, 0);
      $subtitle_color = imagecolorallocate($image, 60, 60, 60);

      $text = $object->getTitle();
      $text = wordwrap($text, 16, "\n");
      $subtitle_unwrapped = $object->getShortDescription(10);
      if ($subtitle_unwrapped !== $object->getShortDescription()) $subtitle_unwrapped .= ' ...';
      $subtitle = wordwrap($subtitle_unwrapped, 32, "\n");
      $font = dirname(dirname(__FILE__)) . '/fonts/helvetica.ttf';
      $font_bold = dirname(dirname(__FILE__)) . '/fonts/helvetica_bold.ttf';

      $offset = 100;
      $font_size = 60;

      imagefilledrectangle($image, 0, 0, 1200, 630, $background_color);
      imagefilledrectangle($image, 0, 500, 1200, 630, $bottom_bar);
      imagettftext($image, $font_size, 0, $offset, $offset + $font_size, $text_color, $font_bold, $text);

      $bbox = imagettfbbox($font_size, 0, $font_bold, $text);
      $lower_bounds = $bbox[1];

      imagettftext($image, $font_size / 2, 0, $offset, $lower_bounds + ($offset * 1.7) + $font_size, $subtitle_color, $font, $subtitle);
      imagettftext($image, 40, 0, $offset, 530 + 40, $background_color, $font_bold, \Idno\Core\Idno::site()->config()->getTitle());

      $icon_image = imagecreatefromjpeg('https://werd.io/IdnoPlugins/Werdio/images/ben.jpg');

      imagecopyresampled($image, $icon_image, 800, $offset, 0, 0, 300, 300, imagesx($icon_image), imagesy($icon_image));

      header('Content-type: image/png');
      imagepng($image);
      imagedestroy($image);

    }

  }
