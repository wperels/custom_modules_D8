<?php

/* 
 *  Inject custom service in Controller
 *  Inject LoggerChannelFactory into Controller
 */

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Jurassic\RoarGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class RoarController extends ControllerBase
{
  private $roarGenerator;
  private $loggerFactoryService;
  #private $roar;
  
  public function __construct(RoarGenerator $roarGenerator, LoggerChannelFactoryInterface $loggerFactoryService) 
  {
    $this->roarGenerator = $roarGenerator;
    $this->loggerFactoryService = $loggerFactoryService;
  }
  
    public function roar($count) 
    {
      #$keyValueStore = $this->keyValue('dino');
      
      #$roarGenerator = new RoarGenerator();
      $roar = $this->roarGenerator->getRoar($count);
      #$keyValueStore->set('roar_string', $roar);
      #$roar = $keyValueStore->get('roar_string');
      $this->loggerFactoryService->get('default')
        ->debug($roar);

      return new Response($roar);
    }
  
  public static function create(ContainerInterface $container) 
  {
    $roarGrenerator = $container->get('dino_roar.roar_generator');
    $loggerFactoryService = $container->get('logger.factory');

    return new static($roarGrenerator, $loggerFactoryService);
  }
  
}