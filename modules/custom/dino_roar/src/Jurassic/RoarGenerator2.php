<?php

/* 
 * Practice creating a custom service.
 */

namespace Drupal\dino_roar\Jurassic;

class RoarGenerator2 
{
  public function getRoar2($length) 
  {
    return 'R'.str_repeat('F', $length).'AR!';
  }
}