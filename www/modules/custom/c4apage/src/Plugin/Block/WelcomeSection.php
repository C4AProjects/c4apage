<?php

/**
 * @file
 * Contains Drupal\c4apage\Plugin\Block\WelcomeSection.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Component\Serialization\Json;
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
    $links = array(
      '#type' => 'link',
      '#title' => $this->t('Join the network'),
      '#url' => Url::fromRoute('user.register'),
      '#attributes' => array(
        'class' => array('use-ajax btn btn-lg btn-rounded-orange'),
        'data-dialog-type' => 'modal',
        'data-dialog-options' => Json::encode(array(
          'dialogClass' => 'c4auser-ui-dialog',
          'width' => 830,

        )),
      ),
    );
    $build['welcome_section']['#markup'] = '<div class="item">
    		 </div>
	<div class="logo"></div>
		<div class="slogan">
			<h2>WELCOME TO  your Coders community </h2>
			<h4>WE ARE GROUP OF GENTLEMEN MAKING AWESOME SOFTWARE SOLUTIONS</h4>

		</div>

		 <div class="network-btn">

		 <p>'.render($links).'</p>
		</div>';
//    <p><a class="btn btn-lg btn-rounded-orange use-ajax" data-dialog-options="{"width":700}" data-dialog-type="modal" href="/user/register" role="button">Join the network<i class="fa fa-angle-right icon-nav"></i></a></p>
    return $build;
  }

}
