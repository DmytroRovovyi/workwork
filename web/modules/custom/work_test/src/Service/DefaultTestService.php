<?php

namespace Drupal\work_test\Service;

/**
 * Service count default test.
 */
class DefaultTestService {

  /**
   * Count test pi.
   */
  protected $countTest;

  /**
   * @param $countPi
   */
  public function __construct($countPi = 3.14) {
    $this->countTest = $countPi;
  }

  /**
   * {@inheritdoc}
   */
  public function pi() {
    return $this->countTest;
  }

}

