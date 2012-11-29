<?php if(!empty($field_box_image)) : ?>
  <?php print $field_box_image[0]['view'] ?>
<?php endif; ?>
<div class="main_display_text">
  <?php print $field_box_text[0]['view'] ?>
  <div class="button_container">
    <div class="main_display_button blue_button">
      <?php if(!empty($field_action_button)) : ?>
        <?php print $field_action_button[0]['view']; ?>
      <?php endif; ?>
    </div>
  </div>
</div>