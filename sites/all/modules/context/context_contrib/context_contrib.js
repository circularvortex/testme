// $Id: context_contrib.js,v 1.1.2.2 2010/12/21 09:50:22 darthsteven Exp $

/**
 * This behavior looks at the views checkboxes that are being selected and if all the displays on a single view are ticked, then tick that too. Likewise if they are all ticked, and one is then unticked, untick the all checkbox. Toggling the parent checkbox toggles the children too.
 */
Drupal.behaviors.context_contrib_views_checkboxes = function(context) {
  $('#widget-views').find('input:checkbox').change(function() {
    var element = $(this);
    var val = element.val();
    // Children
    if (val.match("\:")) {
      var viewName = val.substring(0, val.indexOf(':'));
      // Check parent if all children are checked
      if (element.attr('checked')) {
        var allChecked = true;
        $('input[value^='+viewName+':]', element.parents('.form-checkboxes')).each(function() {
          if (!$(this).attr('checked')) {
            allChecked = false;
          }
        });
        if (allChecked) {
          $('input[value='+viewName+']', element.parents('.form-checkboxes')).attr('checked', true);
        }
      }
      else {
        $('input[value='+viewName+']', element.parents('.form-checkboxes')).attr('checked', false);
      }
    }
    // Parent
    else {
      // Check all children
      if (element.attr('checked')) {
        $('input[value^='+val+':]', element.parents('.form-checkboxes')).attr('checked', true);
      }
      // Uncheck all children
      else {
        $('input[value^='+val+':]', element.parents('.form-checkboxes')).attr('checked', false);
      }
    }
  });
}
