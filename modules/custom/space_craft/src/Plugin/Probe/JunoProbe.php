<?php

/* 
 * Provides a Juno probe object.
 */

namespace Drupal\space_craft\Plugin\Probe;

use Drupal\space_craft\ProbeBase;

/**
 *  @Probe(
 *    id = "juno_probe",
 *    description = @Translation("Juno is a NASA spacecraft currently orbiting Jupiter"),
 *    instruments = 8
 * )
 */

class JunoProbe extends ProbeBase {
  
  /**
   *  Override the abstract method in the base class.
   * 
   * @param array $extras
   * @return string
   */
  public function order(array $extras) {
    $ingredients = ['ham, mustard', 'rocket', 'sun-dried tomatoes'];
    $probe = array_merge($ingredients, $extras);
    return 'You ordered an ' . implode(', ', $probe) . ' sandwich. Enjoy!';
  }
}