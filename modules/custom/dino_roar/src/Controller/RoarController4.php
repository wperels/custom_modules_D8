<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\dino_roar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\dino_roar\Jurassic\RoarGenerator4;
use Drupal\Core\Controller\ControllerBase;

class RoarController4 extends ControllerBase
{
  private $roarGenerator4;
  

  public function roar4($count) 
    {
    #$roar = 'R'.str_repeat('o', $count).'AR!';
    $roarGenerator4 = new RoarGenerator4();
    $roar = $roarGenerator4->getRoar4($count);
    return new Response($roar);
    }
}