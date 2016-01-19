<?php

/**
 * @file
 * Contains \Drupal\c4apage\Plugin\Block\JoinusBlock.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'JoinusBlock' block.
 *
 * @Block(
 *  id = "joinus_block",
 *  admin_label = @Translation("Joinus block"),
 * )
 */
class JoinusBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['joinus_block']['#markup'] = '<div class="imgsection col-md-6 col-sm-3 col-xs-6 col-centered-fixed">
                                            <div class="img-responsive"></div>
                                            <div class="section-heading">
                                                <h3 class="ng-binding"> Join the</h3>
                                                <h2> C4A Network</h2>
                                            </div>
                                        </div>';

    return $build;
  }

}
