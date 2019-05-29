<?php

/* 
 * Alternative method to pass other services into controller
 * without needing to add the create function 
 */

namespace Drupal\dino_roar\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Jurassic\RoarGenerator3;
use Symfony\Component\HttpFoundation\Response;
#use Symfony\Component\DependencyInjection\ContainerInterface;

class RoarController3 extends ControllerBase
{
  private $roarGenerator3;
  
  public function __construct(RoarGenerator3 $roarGenerator3) 
    {
      $this->roarGenerator3 = $roarGenerator3;
    }
  
    public function roar($count) 
      {
      #var_dump($count);die();
      $roar = $this->roarGenerator3->getRoar3($count);
      
      return new Response($roar);
      }
    
//    public static function create(ContainerInterface $container) 
//      {
//        $roarGenerator3 = $container->get('dino_roar.roar_generator3');
//        return new static ($roarGenerator3);
//      }
}