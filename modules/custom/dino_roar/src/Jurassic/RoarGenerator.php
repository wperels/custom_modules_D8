<?php

/* 
 * Custom service.
 */
namespace Drupal\dino_roar\Jurassic;

#use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;
use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;
#use Drupal\Core\KeyValueStore\KeyValueFactory;

class RoarGenerator 
{
  
  private $keyValueFactory;
  private $useCache;
  
  public function __construct(KeyValueFactoryInterface $keyValueFactory, $useCache) 
  {
    $this->keyValueFactory = $keyValueFactory;
    $this->useCache = $useCache;
  }
  
  public function getRoar($length) 
    {
      $key = 'roar_'.$length;
      $store = $this->keyValueFactory->get('dino');
    echo $key;
      if ($this->useCache && $store->has($key)) {
          return $store->get($key);
      }
    
      sleep(2);
    
      $string = 'R'.str_repeat('O', $length). 'AR!';
      if ($this->useCache) {
          $store->set($key, $string);
      }
      return $string;
    }
  
}