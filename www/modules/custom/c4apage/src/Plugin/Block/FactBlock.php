<?php

/**
 * @file
 * Contains Drupal\c4apage\Plugin\Block\FactBlock.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FactBlock' block.
 *
 * @Block(
 *  id = "fact_block",
 *  admin_label = @Translation("Fact block"),
 * )
 */
class FactBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['fact_block']['#markup'] = '<div class="container marginbot-50">
					<div data-wow-delay="0.4s" class="wow bounceInDown animated" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
							<div class="section-heading">
							  <h3> Some facts about us </h3>
		               		  <h2> We are proud of this numbers</h2>
							</div>
					</div>

		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-md-3 col-xs-6 col-line">
                <div class="fact-box">
					<div class="fact-desc">
					    <span class="number">1591</span>
						<span class="desc">Members</span>
					</div>
                </div>
			  </div>
			<div class="col-md-3 col-xs-6 col-line">
	             <div class="fact-box">
					<div class="fact-desc">
					    <span class="number">25</span>
						<span class="desc">Countries</span>
					</div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 col-line">
                <div class="fact-box">
					<div class="fact-desc">
					    <span class="number">534</span>
						<span class="desc">Professional</span>
					</div>
                </div>
            </div>

			<div class="col-md-3 col-xs-6 col-line">
                <div class="fact-box">
					<div class="fact-desc">
					    <span class="number">1234</span>
						<span class="desc">Students</span>
					</div>
                </div>
            </div>
        </div>

        <div class="row marginbot-40">
            <div class="col-md-3 col-xs-6 col-line">
	            <div class="fact-box">
					<div class="fact-desc">
					    <span class="number">1591</span>
						<span class="desc">Events</span>
					</div>
                </div>
            </div>
			<div class="col-md-3 col-xs-6 col-line">
                <div class="fact-box">
					<div class="fact-desc">

                        <span class="number">456</span>
						<span class="desc">Projects</span>
					</div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 col-line">
                <div class="fact-box">
					<div class="fact-desc">

                        <span class="number">877</span>
						<span class="desc">Clients</span>
					</div>
                </div>
            </div>

			<div class="col-md-3 col-xs-6 col-line">
               <div class="fact-box">
					<div class="fact-desc">
						<span class="number">22347</span>
						<span class="desc">Followers</span>
					</div>
                </div>
   		     </div>
		</div>
	</div>';

    return $build;
  }

}
