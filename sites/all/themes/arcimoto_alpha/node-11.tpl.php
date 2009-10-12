<?php
if(is_redirecting_to_checkout()) {
  drupal_set_message('You must login or register before purchasing your vehicle', 'status');
  print $messages;
}
?>



<div class="grid_8 alpha">
  <h2>New to Arcimoto?</h2>
  <?php  print drupal_get_form('user_register');  ?>
</div>

<div class="grid_8 omega">
  <h2>Login</h2>
  <?php  print drupal_get_form('user_login');  ?> 
  <a href="<?php print url('user/password'); ?>">Forgot your username or password?</a>
</div>

