<?php
if(is_redirecting_to_checkout()) {
  drupal_set_message('You must login or register before purchasing your vehicle', 'status');
  print $messages;
}
?>



<div style="float: right; width: 40%;">
  <?php  print drupal_get_form('user_login');  ?> 
  <a href="<?php print base_path(); ?>user/password">Forgot username or password?<?php print $base_path; ?></a>
</div>


<div style="width: 40%;">
  <?php  print drupal_get_form('user_register');  ?>
</div>