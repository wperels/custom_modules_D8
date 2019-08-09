<?php

/* 
 * Hooks spaecific to the space_craft module.
 */

namespace Drupal\space_craft;

use Drupal\core\Render\Element\t;

function hook_probe_info_alter(array &$probe_plugin_info) {
  foreach ($probe_plugin_info as $plugin_id => $plugin_definition) {
    $probe_plugin_info[$plugin_id]['foobar'] = t('We have altered this in the alter hook');
  }
}