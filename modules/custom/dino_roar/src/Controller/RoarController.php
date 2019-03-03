<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Jurassic\RoarGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class RoarController extends ControllerBase
{
  private $roarGenerator;
  
  public function __construct(RoarGenerator $roarGenerator) 
  {
    $this->roarGenerator = $roarGenerator;   
  }
  
    public function roar($count) 
    {

      #$roarGenerator = new RoarGenerator();
      $roar = $this->roarGenerator->getRoar($count);

      return new Response($roar);
    }
  
  public static function create(ContainerInterface $container) 
  {
    $roarGrenerator = $container->get('dino_roar.roar_generator');

    return new static($roarGrenerator);
  }
  
}