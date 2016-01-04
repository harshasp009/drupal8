<?php

/**
 * @file
 * Contains \Drupal\register\Form\RegisterForm.
 */

namespace Drupal\register_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;


/**
 * Implements Register Form
 */
class RegisterForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'register_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['phone_number'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number'),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('phone_number')) < 3) {
      $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $ph=$form_state->getValue('phone_number');
    $schema = Database::getConnection();
    $id=$schema->insert('register_form')
      ->fields(array(
        'phone_no',))
      ->values(array(
        'phone_no' => $ph ,
      ))
      ->execute();
    if($id){
      drupal_set_message($this->t('Successfully Submitted'));
    }

  }







}
