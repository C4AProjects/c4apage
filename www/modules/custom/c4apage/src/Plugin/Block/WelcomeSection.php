<?php

/**
 * @file
 * Contains Drupal\c4apage\Plugin\Block\WelcomeSection.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'WelcomeSection' block.
 *
 * @Block(
 *  id = "welcome_section",
 *  admin_label = @Translation("Welcome section"),
 * )
 */
class WelcomeSection extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['welcome_section']['#markup'] = '<div class="item">
    		 </div>
	<div class="logo"></div>
		<div class="slogan">
			<h2>WELCOME TO  your Coders community </h2>
			<h4>WE ARE GROUP OF GENTLEMEN MAKING AWESOME SOFTWARE SOLUTIONS</h4>

		</div>

		 <div class="network-btn">

		<p><a class="fancybox fancybox.iframe btn btn-lg btn-rounded-orange" href="register.html"role="button">Join the network<i class="fa fa-angle-right icon-nav"></i></a></p>
		</div>';

    return $build;
  }

}
