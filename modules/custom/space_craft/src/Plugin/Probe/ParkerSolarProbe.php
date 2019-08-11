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
    $payload = ['Fields Experiment (FIELDS)', 'Wide-field Imager for Solar PRobe (WISPR)', 'rocket', 'Integrated Science Investigation of the sun (IS☉IS)'];
    $probe = array_merge($payload, $extras);
    return 'The spacecrafts scientific payload includes; ' . implode(', ', $probe) . ' Also the Solar Wind Electrons Alphas and Protons (SWEAP) Investigation.';
  }
}
