<?php

/**
 * @file
 * Contains \Drupal\test\Form\Login.
 */

namespace Drupal\test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class LoginForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'my_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Your Name'),
        );
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Login'),
            '#button_type' => 'primary',
        );
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        if (strlen($form_state->getValue('name')) < 3) {
            $form_state->setErrorByName('name', $this->t('Name error.'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        drupal_set_message($this->t('Hello @name', array('@name' => $form_state->getValue('name'))));
    }

}