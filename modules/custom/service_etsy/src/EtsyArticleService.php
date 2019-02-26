<?php

namespace Drupal\service_etsy;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityManager;

/* 
 *  Etsy Article service class.
 */

class EtsyArticleService {
  
  private $entityQuery;
  private $entityManager;
  
  public function __construct(QueryFactory $entityQuery, EntityManager $entityManager) {
    $this->entityQuery = $entityQuery;
    $this->entityManager = $entityManager;
  }
  
  /**
   *  Method for getting articles.
   *  @return string
   */
  public function getEtsyArticles () {
    #$articles = ['Little Pots are cool', 'Makes a great gift'];
    
    $articleNids = $this->entityQuery->get('node')->condition('type', 'article')->execute();
    
    #kint($this->entityManager->getStorage('node')->loadMultiple($articleNids));
    
    return $this->entityManager->getStorage('node')->loadMultiple($articleNids);
  }
}