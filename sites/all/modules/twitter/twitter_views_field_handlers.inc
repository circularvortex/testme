<?php

/**
 * Process Twitter-style @usernames and URLs before filtering XSS.
 */
class twitter_views_handler_field_xss extends views_handler_field {
  function option_definition() {
    $options = parent::option_definition();
    $options['link_urls'] = array('default' => TRUE);
    $options['link_usernames'] = array('default' => TRUE);
    $options['link_hashtags'] = array('default' => FALSE);
    $options['hashtags_url'] = array('default' => variable_get('twitter_search', TWITTER_SEARCH) . '/search?q=%23');
    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['link_urls'] = array(
      '#title' => t('Link urls to their destinations'),
      '#type' => 'checkbox',
      '#default_value' => !empty($this->options['link_urls']),
    );
    $form['link_usernames'] = array(
      '#title' => t('Link Twitter @usernames to their Twitter.com urls'),
      '#type' => 'checkbox',
      '#default_value' => !empty($this->options['link_usernames']),
    );
    $form['link_hashtags'] = array(
      '#title' => t('Link Twitter #hashtags to another url'),
      '#type' => 'checkbox',
      '#default_value' => !empty($this->options['link_hashtags']),
    );
    $form['hashtags_url'] = array(
      '#type' => 'textfield',
      '#default_value' => $this->options['hashtags_url'],
      '#process' => array('views_process_dependency'),
      '#dependency' => array('edit-options-link-hashtags' => array(TRUE)),
    );
  }

  function render($values) {
    $value = $values->{$this->field_alias};
    if (!empty($this->options['link_urls'])) {
      $value = _filter_url($value, FILTER_DEFAULT);
    }
    if (!empty($this->options['link_usernames'])) {
      $value = twitter_link_filter($value);
    }
    if (!empty($this->options['link_hashtags']) && valid_url($this->options['hashtags_url'])) {
      $value = twitter_link_filter($value, '#', url($this->options['hashtags_url']));
    }
    return filter_xss($value);
  }
}


/**
 * Field handler to provide simple renderer that turns a URL into a clickable link.
 */
class twitter_views_handler_field_profile_image extends views_handler_field {
  // Ensure we have the account name field to be used
  // as alt and title attributes of the image.
  function construct() {
    parent::construct();
    $this->additional_fields['name'] = 'name';
  }

  function query() {
    parent::query();
    $this->ensure_my_table();
    $this->add_additional_fields();
  }

  function render($values) {
    $name = $values->{$this->aliases['name']};
    $value = $values->{$this->field_alias};

    return theme('image', $value, $name, t("@name's twitter picture", array('@name' => $name)), array(), FALSE);
  }
}

class twitter_views_handler_field_profile_url extends views_handler_field {
  function construct() {
    parent::construct();
    $this->additional_fields['screen_name'] = 'screen_name';
  }
  function query() {
    $this->ensure_my_table();
    $this->add_additional_fields();
  }
  function render($values) {
    $value = $values->{$this->aliases['screen_name']};
    return twitter_profile_url($value);
  }
}

