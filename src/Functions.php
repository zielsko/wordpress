<?php

namespace Blowmedia;

class Functions {

  function blowmedia_get_thumbnail_src($size, $id = null) {


    if (!$id) {

      $id = get_post_thumbnail_id();

    }

    $thumb = wp_get_attachment_image_src($id, $size);

    $thumb_url = $thumb['0'];

    if (!$thumb_url) {

      $thumb_url = '';

    }

    return $thumb_url;

  }
  function blowmedia_get_media_src($size, $id = null) {

    if (!$id) {

      $id = get_post_thumbnail_id();

    }

    $thumb = wp_get_attachment_image_src($id, $size);

    $thumb_url = $thumb['0'];

    if (!$thumb_url) {

      $thumb_url = '';
    }

    return $thumb_url;
  }

  function blowmedia_get_featured_image_url($id = null, $size = 'thumbnail'){

    $array = wp_get_attachment_image_src( get_post_thumbnail_id($id), $size );

    $url = $array[0];

    return $url;
  }

}