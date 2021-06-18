<?php


namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // return [
    //   '#markup' => $this->t('Hello, World!'),
    // ];
    return \Drupal::formBuilder()->getForm('Drupal\my_module\Form\CityBlockForm');
  }
  
}