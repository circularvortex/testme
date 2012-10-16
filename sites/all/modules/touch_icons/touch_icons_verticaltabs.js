/**
 * @file
 * 
 * Provides touch icons vertical tab summary for theme settings form.
 */

// The following line will prevent a JavaScript error if this file is included and vertical tabs are disabled.
Drupal.verticalTabs = Drupal.verticalTabs || {};

Drupal.verticalTabs.touch_icons = function() {
  var vals = [];
  if ($('#edit-default-touch-icon-plain').size()) {
    if ($('#edit-default-touch-icon-plain').attr('checked')) {
      vals.push(Drupal.t('Default touch icon'));
    }
    else {
      vals.push(Drupal.t('Custom touch icon'));
    }
  }
  if ($('#edit-default-touch-icon-precomp').size()) {
    if ($('#edit-default-touch-icon-precomp').attr('checked')) {
      vals.push(Drupal.t('Default Precomposed touch icon'));
    }
    else {
      vals.push(Drupal.t('Custom Precomposed touch icon'));
    }
  }
  return vals.join(',<br />');
};
