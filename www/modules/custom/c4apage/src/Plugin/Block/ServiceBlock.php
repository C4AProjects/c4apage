<?php

/**
 * @file
 * Contains Drupal\c4apage\Plugin\Block\ServiceBlock.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ServiceBlock' block.
 *
 * @Block(
 *  id = "service_block",
 *  admin_label = @Translation("Service block"),
 * )
 */
class ServiceBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['service_block']['#markup'] = '<div class="container marginbot-50">

							<div class="section-heading dark-font">
				  					  <h3>What we do</h3>
				                      <h2> Discover our services</h2>
		             		 </div>

		</div>
		<div class="container">

        <div class="row">
            <div class="col-md-4 ">
				<div data-wow-delay="0.2s" class="wow fadeInLeft animated" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="service-box">
					<div class="service-icon">
						<img class="img-responsive" alt="c4A Trainer" src="'.drupal_get_path('theme','c4asite') .'/img/trainer.png">
					</div>
					<div class="service-desc">
						<h3>We train</h3>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4">
				<div data-wow-delay="0.2s" class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="service-box">
					<div class="service-icon">
						<img class="img-responsive" alt="c4A Network" src="'.drupal_get_path('theme','c4asite') .'/img/networkers.png">
					</div>
					<div class="service-desc">
						<h3>We network</h3>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4">
				<div data-wow-delay="0.2s" class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="service-box">
					<div class="service-icon">
							<img class="img-responsive" alt="c4A Hirer" src="'.drupal_get_path('theme','c4asite') .'/img/hirer.png">
					</div>
					<div class="service-desc">
						<h3>We hire</h3>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>

        </div>
		</div>
	</div>';
	
    return $build;
  }

}
