<?php

namespace Drupal\work_oop\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\work_test\Service\DefaultTestService;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Page for teaching objects.
 */
class WorkOOPController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  protected $DefaultTest;

  /**
   * @param \Drupal\work_test\Service\DefaultTestService $defaultTest
   *   check test pi default.
   */
  public function __construct(DefaultTestService $defaultTest) {
    $this->DefaultTest = $defaultTest;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('work_test.default_pi'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getWorkOop() {

    $build = [
      '#markup' => $this->DefaultTest->pi(),
    ];

    return $build;
  }
}
