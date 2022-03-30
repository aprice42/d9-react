<?php

namespace Drupal\test_react\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Icon3dBlock' block.
 *
 * @Block(
 *  id = "icon3d_block",
 *  admin_label = @Translation("Icon3d block"),
 * )
 */
class Icon3dBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'icon3d_block';
    $build['#attached'] = [
      'library' => [
        'test_react/icon3d',
      ],
    ];
    $build['#content'] = '';

    return $build;
  }

}
