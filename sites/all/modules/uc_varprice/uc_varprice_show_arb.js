// $Id$

/**
 * @file
 * Customer-facing JavaScript for UC Variable Price.
 */
Drupal.behaviors.ucVarPriceShowArb = function(context) {
  $('select[name="varprice_sel"], input[name="varprice_sel"]', context).change(function() {
    var val = $(this).is('select') ? $(this).val() : this.value;
    if (val === 'other') {
      $(this).parents('form').find('input[name="varprice"]').parent('.form-item').show('fast');
      $(this).parents('form').find('input[name="varprice"]').focus();
    } 
    else {
      $(this).parents('form').find('input[name="varprice"]').parent('.form-item').hide('fast');
    } 
  }); 
  $('select[name="varprice_sel"], input[name="varprice_sel"]:checked', context).trigger('change');
};
