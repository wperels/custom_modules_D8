<?php

/* 
 *  Add wildcard in routing.yml. Add new Response object.
 */

namespace Drupal\probe_orbit\Controller;


use Symfony\Component\HttpFoundation\Response;


class OrbitController
{

    
  public function orbit($count) 
    {
      $orbit = "Or" . str_repeat('B', $count) . "it!";
      return new Response($orbit);
    }
  
}