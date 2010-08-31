// $Id: touch_icons_themesettings_ui_extras.js,v 1.1.2.3 2010/02/14 07:38:32 andrewmacpherson Exp $

/**
 * @file 
 *
 * Provides javascript for integration with themesettings_ui_extras.module
 * Shows the custom path/upload fields when custom touch icon display option
 * is selected; otherwise hides these fields. 
 */

Drupal.behaviors.touch_icons_themesettings_ui_extras = function(){
  // plain touch icon, show-or-hide custom fields
  if ($("#edit-touch-icon-plain-display-custom:not('.touch-icon-plain-display-custom-processed')").size()) {
    $("input[@name='touch_icon_plain_display']").change(function(){
      if ($("#edit-touch-icon-plain-display-custom").is(":checked")) {
        //show the hidden divs
        $("#edit-touch-icon-path-plain-wrapper, #edit-touch-icon-upload-plain-wrapper").show("fast");
      }
      else {
        $("#edit-touch-icon-path-plain-wrapper, #edit-touch-icon-upload-plain-wrapper").hide("fast");
      }
    });
    // mark processed, initialize display
    $("#edit-touch-icon-plain-display-custom").addClass('touch-icon-plain-display-custom-processed').change();
  }
  // precomposed touch icon, show-or-hide custom fields
  if ($("#edit-touch-icon-precomp-display-custom:not('.touch-icon-precomp-display-custom-processed')").size()) {
    $("input[@name='touch_icon_precomp_display']").change(function(){
      if ($("#edit-touch-icon-precomp-display-custom").is(":checked")) {
        //show the hidden divs
        $("#edit-touch-icon-path-precomp-wrapper, #edit-touch-icon-upload-precomp-wrapper").show("fast");
      }
      else {
        $("#edit-touch-icon-path-precomp-wrapper, #edit-touch-icon-upload-precomp-wrapper").hide("fast");
      }
    });
    // mark processed, initialize display
    $("#edit-touch-icon-precomp-display-custom").addClass('touch-icon-precomp-display-custom-processed').change();
  }
}
