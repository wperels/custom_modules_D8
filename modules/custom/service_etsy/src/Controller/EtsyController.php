<?php

/* 
 *  This is our Etsy Service controller
 */

namespace Drupal\service_etsy\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\service_etsy\EtsyArticleService;

class EtsyController extends ControllerBase {
  
  private $articleEtsyService;
  
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('service_etsy.etsy_articles')
      );
  }
  
  public function __construct(EtsyArticleService $articleEtsyService) {
    $this->articleEtsyService = $articleEtsyService;
  }
  
  public function etsylist(){
    
    kint($this->articleEtsyService->getEtsyArticles());die();
    
    $shopProducts = [
      ['listing' => 'alittlepotfromCO'],
      ['listing' => 'alittlepotfromCA'],
      ['listing' => 'alittlepotfromWA'],
    ];
    
    $ourlistings = "";
    foreach ($shopProducts as $shopProduct) {
      $ourlistings .= '<li>' . $shopProduct['listing'] . '</li>';
    }
    
    return [
      '#type' => 'markup',
      '#markup' => '<h4>' . $this->t('This our list of products') . '</h4><ol>' . $ourlistings . '</ol>',
    ];
  }
}