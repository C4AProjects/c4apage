<?php

/**
 * @file
 * Contains Drupal\c4apage\Plugin\Block\ContactBlock.
 */

namespace Drupal\c4apage\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\Config;

/**
 * Provides a 'ContactBlock' block.
 *
 * @Block(
 *  id = "contact_block",
 *  admin_label = @Translation("Contact block"),
 * )
 */
class ContactBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $config = \Drupal::config('contact.settings');
    $contact_form = \Drupal::entityManager()
      ->getStorage('contact_form')
      ->load($config->get('default_form'));
    $message = \Drupal::entityManager()
      ->getStorage('contact_message')
      ->create(array(
        'contact_form' => $contact_form->id(),
      ));

// This works in a controller, use \Drupal::service('entity.form_builder') elsewhere.
    $form = \Drupal::service('entity.form_builder')->getForm($message);
    $form['#title'] ='';
	$form['msgleft'] = array(
	  '#type' => 'fieldset',
	  '#prefix' => '<div class="col-md-6">',
	  '#suffix' => '</div>',
	);

	$form['name']['#title'] = 'Name';
	$form['name']['#placeholder'] = 'Enter name';
	$form['mail']['#title'] = 'Email addess';
	$form['mail']['#placeholder'] = 'Enter email';
	$form['message']['#placeholder'] = 'Message';
	$form['msgleft'][] = $form['name'];
	$form['msgleft'][] = $form['mail'];

	unset($form['name']);
    unset($form['subject']);
	unset($form['mail']);
    $form['actions']['preview']['#access'] = FALSE;
	$form['#prefix'] ='
		<div class="container">
    	<div class="row">
	      <div class="col-md-7 col-sm-6  marginbot-50">
		        <div class="widget-contact">
		        			<div class="section-heading dark-font">
				  				 <h3> Get in touch with us</h3>
				  				  <h2> Send us your message</h2>
		             		 </div>

				<div class="boxed-grey">
                ';
	$form['#suffix']='
            </div>
		        </div>

			</div>
			<div class="col-md-5 col-sm-6">

						<div class="blog">

		    		<div class="item"></div>
					        <div class="widget-contact">
					        		<div class="section-heading">
										  <h3> From the blog</h3>
					                      <h2> Check our latest news</h2>
					              	</div>
					              	<a href="#" class="btn btn-warning btn-lg" type="submit">Click here</a>
					        </div>
					    </div>

			</div>
   		 </div>

	 </div>
	';
//	kint($form);

//    \Drupal::service('renderer')->addCacheableDependency($form, $config);
//    $this->renderer->addCacheableDependency($form, $config);
    $build['contact_block']['#markup'] = render($form) ;

    return $build;
  }

}
