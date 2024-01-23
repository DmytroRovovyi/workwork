<?php

namespace Drupal\work_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Page for teaching objects.
 */
class WorkTestController extends ControllerBase {

  protected $model;

  protected $square;

  protected $floors;

  function __construct($model, $square = 0, $floors = 1) {
    $this->model = $model;
    $this->square = $square;
    $this->floors = $floors;
  }

  /**
   * {@inheritdoc}
   */
  function startProject(){
    return "Start. Model: $this->model";
  }

  /**
   * {@inheritdoc}
   */
  function build(){
    return "Build. House: $this->square x $this->floors";
  }

  /**
   * {@inheritdoc}
   */
  public function getWorkTest() {
    return 141235135 + $this->square;
  }
}
