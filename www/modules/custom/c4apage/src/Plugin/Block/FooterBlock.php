<?php

/**
 * @file
 * Contains Drupal\c4apage\Plugin\Block\FooterBlock.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FooterBlock' block.
 *
 * @Block(
 *  id = "footer_block",
 *  admin_label = @Translation("Footer block"),
 * )
 */
class FooterBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['footer_block']['#markup'] = '<div class="container">
            <div class="row">
                <div>
                   <ul class="ulbar">

                <li> <a title="Coders4Africa" href="#" target="_blank">&copy; 2016 Coders4Africa</a> </li>
                <li><a title="http://coders4africa.com" href="http://coders4africa.com" target="_blank">www.coders4Africa.org</a></li>
                <li><a href="#">Privacy Policy </a></li>

                </ul>
                </div>
                <div>

               <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> </a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> </a></li>

                                      <li><a href="#"><i class="icon-facebook icon-social"></i> </a></li>
                                </ul>
                </div>

            </div>
        </div>';

    return $build;
  }

}
