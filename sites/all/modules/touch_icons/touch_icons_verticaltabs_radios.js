// $Id: touch_icons_verticaltabs_radios.js,v 1.1.2.1 2010/02/14 13:59:38 andrewmacpherson Exp $

/**
 * @file
 *
 * Provides touch icons vertical tab summary for theme settings form.
 */

// The following line will prevent a JavaScript error if this file is included and vertical tabs are disabled.
Drupal.verticalTabs = Drupal.verticalTabs || {};

Drupal.verticalTabs.touch_icons = function() {
  var vals = [];
  $('.vertical-tabs-touch_icons .form-radios label').each(function() {
    if ($('input', this).is(':checked')) {
      vals.push($(this).text());
    }
  });
  return vals.join(', ');
}
