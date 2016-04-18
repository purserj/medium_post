<?php

/**
 * @file
 * Contains \Drupal\medium_post\Controller\MediumController;
 */

namespace Drupal\medium_post\Controller;

use Drupal\Core\Controller\ControllerBase;

class MediumController extends ControllerBase {
  
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello world'),
    );
  }
}
