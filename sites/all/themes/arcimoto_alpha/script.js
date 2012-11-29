/*$(document).ready(function() {
*  $("#join_email_overlabel").overlabel();
* });
*/


/** From admin (aka slate) theme to make fieldsets into divs **/
Drupal.behaviors.arcimoto_alpha = function(context) {
  // Fieldset
  $('div.fieldset:not(.admin-processed)').each(function () {
    var $fieldset = $(this);
    $fieldset.addClass('admin-processed');
    if ($fieldset.is('.collapsible')) {
      if ($('.error', $fieldset).length > 0) {
        $fieldset.removeClass('collapsed');
      }
      if ($fieldset.is('.collapsed')) {
        $fieldset.children('.fieldset-content').hide();
      }
      $fieldset.children('.fieldset-title').click(function () {
        var $title = $(this);
        if ($fieldset.is('.collapsed')) {
          $title.next('.fieldset-content').slideDown('fast');
          $fieldset.removeClass('collapsed');
        }
        else {
          $title.next('.fieldset-content').slideUp('fast');
          $fieldset.addClass('collapsed');
        }
        return false;
      });
    }
  });
}

/** Comodo trust logo **/
//<![CDATA[
if(location.href.indexOf("vehicle/preorder/checkout") > 5) {
var tl_loc0=(window.location.protocol == "https:")? "https://secure.comodo.net/trustlogo/javascript/trustlogo.js" :
"http://www.trustlogo.com/trustlogo/javascript/trustlogo.js";
document.writeln('<scr' + 'ipt language="JavaScript" src="'+tl_loc0+'" type="text\/javascript">' + '<\/scr' + 'ipt>');
}
//]]>


/** Sliding login panel **/
$(document).ready(function() {
	$("div.panel_button").click(function(){
		$("div#panel").animate({
			height: "200px"
		})
		.animate({
			height: "175px"
		}, "fast");
		$("div.panel_button").toggle();
	
	});	
	
   $("div#hide_button").click(function(){
		$("div#panel").animate({
			height: "0px"
		}, "fast");
   });	
	
});

