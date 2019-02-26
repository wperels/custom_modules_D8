<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\service_etsy\controller;

class etsyControlller2 {
  
  public function etsylist() {
    
    $productListings = [
      ['listing' => 'fromCO'],
      ['listing' => 'fromCA'],
      ['listing' => 'fromAZ'],
    ];
    
    $ourlisting = "";
    foreach($productListings as $productListing) {
      $ourlisting .= '<li>' . $productListing['listing'] . '</li>';
    }
    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . $ourlisting . '</ol>'
    ];
  }
};

