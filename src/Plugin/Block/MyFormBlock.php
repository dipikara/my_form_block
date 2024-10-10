<?php

namespace Drupal\my_form_block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'My Form Block' block.
 *
 * @Block(
 *   id = "Myform_block",
 *   admin_label = @Translation("My Form Block"),
 *   category = @Translation("Custom"),
 * )
 */
class MyFormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return $this->formBuilder->getForm('Drupal\my_form_block\Form\MyFormBlock');
   
  }

}