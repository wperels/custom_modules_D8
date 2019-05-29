<?php

/* 
 * Practice creating a custom service
 * then refer to it in the routing.yml.
 * 'dino_roar.roar_generator3:roar'
 */

namespace Drupal\dino_roar\Jurassic;

class RoarGenerator3 
{
  public function getRoar3($length) 
    {
     
    return 'R'.str_repeat('3', $length).'or!';
        
    }
}