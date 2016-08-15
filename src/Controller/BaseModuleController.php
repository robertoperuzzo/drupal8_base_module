<?php
/**
 * @file
 * Contains \Drupal\drupal8_base_module\Controller\BaseModuleController.
 */

namespace Drupal\drupal8_base_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for my module routes.
 */
class BaseModuleController extends ControllerBase {

  /**
   * Returns an administrative overview of my module.
   *
   * @return array
   *   A render array representing the administrative page content.
   */
  public function adminOverview() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
}
