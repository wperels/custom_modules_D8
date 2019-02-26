<?php

namespace Drupal\module_hero;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityManager;

/* 
 * Hero article service class.
 */

class HeroArticleService {
  
  private $entityQuery;
  private $entitymanager;
  
  public function __construct(QueryFactory $entityQuery, EntityManager $entitymanager){
    $this->entityQuery = $entityQuery;
    $this->entitymanager = $entitymanager;
  }
  
  
  /**
   *  Method for getting Articles regarding heroes.
   */
  public function getHeroArticles() {
    #$articles = ['Hulk is green', 'Flash is red'];
    
    $articleNids = $this->entityQuery->get('node')->condition('type', 'article')->execute();
    
    #kint($this->entitymanager->getStorage('node')->loadMultiple($articleNids));
    return $this->entitymanager->getStorage('node')->loadMultiple($articleNids);
  }
}