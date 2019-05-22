<?php

/* 
 *  Add wildcard in routing.yml. Add new Response object.
 */

namespace Drupal\probe_orbit\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\probe_orbit\Space\OrbitGenerator;
use Symfony\Component\HttpFoundation\Response;



class OrbitController extends ControllerBase
{
  private $orbitGenerator;
  
  public function __construct(OrbitGenerator $orbitGenerator) 
    {
      $this->orbitGenerator = $orbitGenerator;
    }
  public function orbit($count) 
    {
      #$orbitGenerator = new orbitGenerator;
      $orbit = $this->orbitGenerator->getOrbit($count);
      
      return new Response($orbit);
    }
  
  public static function create(ContainerInterface $container) 
    {
      $orbitGenerator = $container->get('probe_orbit.orbit_generator');
      return new static ($orbitGenerator);
    }
}