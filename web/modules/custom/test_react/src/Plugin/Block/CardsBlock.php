<?php

namespace Drupal\test_react\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CardsBlock' block.
 *
 * @Block(
 *  id = "cards_block",
 *  admin_label = @Translation("Cards block"),
 * )
 */
class CardsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'cards_block';
    $build['#attached'] = [
      'library' => [
        'test_react/cards',
      ],
    ];
    $build['#content'] = 'Woot!';

    return $build;
  }


}
