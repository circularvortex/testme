
<?php print $field_box_text[0]['view'] ?>
<?php if(!empty($field_box_image)) : ?>
  <?php print $field_box_image[0]['view'] ?>
<?php endif; ?>
<div class="grey_button_container">
  <div class="grey_button">
    <?php if(!empty($field_action_button)) : ?>
      <?php print $field_action_button[0]['view']; ?>
    <?php endif; ?>
  </div>
</div>