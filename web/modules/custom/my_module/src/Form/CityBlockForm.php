<?php

namespace Drupal\my_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Database\Database;
use Drupal\taxonomy\Entity\Term;

/**
 * City block form
 */
class CityBlockForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'city_block_form';
  }
 public function buildForm(array $form, FormStateInterface $form_state) {
       
    $vid = 'cities';
    $result[] = t('Choose City');
    $path = \Drupal::service('path.current')->getPath();
    $path_array = explode('/', $path);
    $termid = $path_array[3];
    $selectedoption ;
     $terms =\Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);
    foreach ($terms as $term) {
      if($term->tid == $termid){
      $selectedoption=$term->name;
      }
    $result[$term->name] = $term->name;
      
    }
    //  $form['citylist'] = [
    //   '#type' => 'textfield',
    //   '#title' => $this->t('Citylist'),
    //   '#value' => $termid,
     
    // ];
    // $form['citylist'] = [
    //   '#type' => 'textfield',
    //   '#title' => $this->t('Citylist'),
    //   '#value' => $termid,
     
    // ];
    $form['cityname'] = [
      '#type' => 'select',
      '#title' => $this->t('Select City'),
      '#options' => $result,
      '#default_value' => $selectedoption,
      
    ];

    // How many phrases?
    

    // Submit.
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Filter'),
    ];

    return $form;
  }


  
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $form_state->setRedirect('my_module.generate', [
      'cityname' => $form_state->getValue('cityname'),
    //   'phrases' => $form_state->getValue('phrases'),
    ]);
  }

}