<?php

/**
 * @file
 * @author Your Name
 * Contains \Drupal\test\Controller\TestController.
 */

namespace Drupal\test\Controller;

/**
 * Provides route responses for the Test module.
 */
class TestController {

    /**
     * Returns a simple page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function home() {
        $element = array(
            '#markup' => 'Hello. This is my First Page',
        );
        return $element;
    }

}