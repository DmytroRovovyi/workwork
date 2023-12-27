<?php

namespace Drupal\work_oop\Controller;

use Drupal\Core\Controller\ControllerBase;
use http\Env\Response;

/**
 * Page for teaching objects.
 */
class WorkOOPController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function getWorkOop() {
    $i = 1;
    dump(346436436);
//    while ($i <= 50) {
//      dump($i);
//
//      $i+=5;
//
//    }
//    for ($i = 1; $i <= 5; $i+=1) {
//      $result = $i;
//      dump($result);
//
//    }


    die();

    $build = [
      '#markup' => $header,
    ];

    return $build;
  }
}
