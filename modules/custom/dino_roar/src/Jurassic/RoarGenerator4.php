<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\dino_roar\Jurassic;

class RoarGenerator4 
{
  public function getRoar4($length) 
    {
      return 'R'.str_repeat('o', $length).'AR!';
      #return ($roar4);
    }
}