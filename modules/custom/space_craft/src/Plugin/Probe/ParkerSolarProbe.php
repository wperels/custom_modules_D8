<?php

/* 
 * Provides a Parker Solar probe.
 */

namespace Drupal\space_craft\Plugin\Probe;

use Drupal\space_craft\ProbeBase;

/**
 *  @Probe(
 *    id = "parker_solar_probe",
 *    description = @Translation("Parker Solar Probe is a NASA spacecraft currently orbiting the Sun"),
 *    instruments = 4
 * )
 */

class ParkerSolarProbe extends ProbeBase {
  
  public function order(array $extras) {
    $ingredients = ['ham, mustard', 'rocket', 'sun-dried tomatoes'];
    $probe = array_merge($ingredients, $extras);
    return 'You ordered an ' . implode(', ', $probe) . ' sandwich. Enjoy!';
  }
}
