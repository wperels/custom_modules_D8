<?php

/* 
 * Provides a Parker Solar probe.
 */

namespace Drupal\space_craft\Plugin\Probe;

use Drupal\space_craft\ProbeBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 *  @Probe(
 *    id = "parker_solar_probe",
 *    description = @Translation("Parker Solar Probe is a nasa spacecraft currently orbiting the Sun"),
 *    instruments = 4
 * )
 */

class ParkerSolarProbe extends ProbeBase implements ContainerFactoryPluginInterface {
  
    use StringTranslationTrait;

  /**
   * @var TranslationInterface
   */
  private $translation;

  protected $day;
    
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $solarProbe = new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('string_translation')
      );
    return $solarProbe;
  }
  
  public function __construct(array $configuration, $plugin_id, $plugin_description, TranslationInterface $translation ) {
   $this->setStringTranslation($translation);
   $this->day = date('D');
   parent::__construct($configuration, $plugin_id, $plugin_description);
  }
  
  public function order(array $extras) {
    $payload = ['Fields Experiment (FIELDS)', 'Wide-field Imager for Solar PRobe (WISPR)', 'Integrated Science Investigation of the sun (IS☉IS)'];
    $probe = array_merge($payload, $extras);
    return 'The spacecrafts scientific payload includes; ' . implode(', ', $probe) . ' Also the Solar Wind Electrons Alphas and Protons (SWEAP) Investigation.';
  }
  public function description() {
    if ($this->day == 'Sun') {
      return $this->t('no data on Sundays');
    }
    return parent::description();
  }
}
