<?php

/* 
 * Practice injecting custom service into a controller.
 */
namespace Drupal\dino_roar\Controller;

use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Jurassic\RoarGenerator2;
#use Drupal\dino_roar\Jurassic\RoarGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;



class RoarController2 extends ControllerBase
{
    private $roarGenerator2;
    private $loggerFactoryService;
    
/**
 * Constructor using RoarGenerator2.
 * @param RoarGenerator2 $roarGenerator2
 */
    public function __construct(RoarGenerator2 $roarGenerator2, LoggerChannelFactoryInterface $loggerFactoryService) {
      $this->roarGenerator2 = $roarGenerator2;
      $this->loggerFactoryService = $loggerFactoryService;
    }
  
     public function roar2($count) 
     {
       #$roarGenerator2 = new RoarGenerator2();
       $roar = $this->roarGenerator2->getRoar2($count);
       #$roar2 = 'R'.str_repeat('O', $count).'AR!'; 
       $this->loggerFactoryService->get('default')
         ->debug($roar);
       
       return new Response($roar);
     }
     
/**
 * New service dino_roar.roar_generator2.
 * @param ContainerInterface $container
 * @return \static
 */
     public static function create(ContainerInterface $container) {
       $roarGenerator2 = $container->get('dino_roar.roar_generator2');
       $loggerFactoryService = $container->get('logger.factory');
       
       return new static($roarGenerator2, $loggerFactoryService);
     }
  
} 