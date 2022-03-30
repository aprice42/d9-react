<?php

namespace Drupal\test_react\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HelloReactBlock' block.
 *
 * @Block(
 *  id = "hello_react_block",
 *  admin_label = @Translation("Hello react block"),
 * )
 */
class HelloReactBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'hello_react_block';
    $build['#attached'] = [
      'library' => [
        'test_react/hello',
      ],
    ];
    $build['#content'] = 'Woot!';

    return $build;
  }

}
