<?php
/**
 *  @file
 *  Contains Drupal\module_hero\Controller\HeroController.
 */
namespace Drupal\module_hero\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\module_hero\HeroArticleService;

class HeroController extends ControllerBase{
  
  private $articleHeroService;
  
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('module_hero.hero_articles')
      );
  }
  
  public function __construct(HeroArticleService $articleHeroService) {
    $this->articleHeroService = $articleHeroService;
  }
  
  public function herolist() {
    
    #kint($this->articleHeroService->getHeroArticles()); die();
    
    $heroes = [
      ['name' => 'Hulk'],
      ['name' => 'Thor'],
      ['name' => 'Iron Man'],
      ['name' => 'Luke Cage'],
      ['name' => 'Black Widow'],
      ['name' => 'Davedevil'],
      ['name' => 'Captain America'],
      ['name' => 'Wolverine'],      
    ];
    
//    $ourheros = "";
//    foreach($heroes as $hero){
//      $ourheros .= '<li>' . $hero['name'] . '</li>';
//    }
    return [
   #   '#type' => 'markup',
   #   '#markup' => '<h4>' . $this->t('These are the best voted heroes') . '</h4><ol>' . $ourheros . '</ol>'     
   #   '#markup' => '<h4>' . $this->t('This is another list') . '</h4><ol>' . $ourheros . '</ol>',
        '#theme' => 'hero_tlist',
        '#items' => $heroes,
        '#title' => $this->t('WonderfulList'),
      ];
  }
}