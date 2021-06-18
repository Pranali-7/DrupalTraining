<?php

namespace Drupal\custom_events\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FormEvent implemented.
 */
class FormEvent extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_event';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['address'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Address'),
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    foreach ($form_state->getValues() as $key => $value) {
      // @todo Validate fields.
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      \Drupal::messenger()->addMessage($key . ': ' . ($key === 'text_format' ? $value['value'] : $value));
    }
  }

}
