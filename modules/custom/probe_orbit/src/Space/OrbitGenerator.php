<?php

/* 
 *  Custom service 'probe_orbit.orbit_generator'
 */

namespace Drupal\probe_orbit\Space;

class OrbitGenerator 
{
  public function getOrbit($length) 
    {
      return 'Or'.str_repeat('B', $length).'it!';
    }
  
}