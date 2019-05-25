<?php

/* 
 * Alternative method to register the controller as a service
 *  then refer to it in the routing.yml.
 */

namespace Drupal\probe_orbit\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\probe_orbit\Space\OrbitGeneratorAlt;

class OrbitControllerAlt 
{
  private $orbitGeneratorAlt;
  
  public function __construct(OrbitGeneratorAlt $orbitGeneratorAlt) 
    {
      $this->orbitGeneratorAlt = $orbitGeneratorAlt;
    }
  
  public function orbitAlt($count) 
    {
      $orbitalt = $this->orbitGeneratorAlt->getOrbitalt($count);
      return new Response($orbitalt);
    }
}