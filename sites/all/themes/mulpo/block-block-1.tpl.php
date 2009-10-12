<?php


$edit_links = l(t('edit block'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('edit the content of this block'), 'class' => 'block-edit'), drupal_get_destination(), NULL, FALSE, TRUE);
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block <?php print $block_classes; ?>">

  <?php if ($block->subject): ?>
    <h2><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    Not working yet. Are we still doing blubs?? See block-block-1.tpl.php
    <?php
    global $user;
    //$ablurb_form = user_profile_form(null, $user, 'A-Blurb');

    /*$ablurb_form['profile_a_blurb'] = $ablurb_form['A-Blurb']['profile_a_blurb'];
    $ablurb_form['profile_a_blurb']['#weight'] = 1;
    $ablurb_form['profile_a_blurb']['#description'] = '';

    $ablurb_form['A-Blurb'] = null;
    $ablurb_form['delete'] = null;*/


    //dpr($ablurb_form);

    //print drupal_render_form('user_profile_form', $ablurb_form);

    print drupal_render($ablurb_form);
    ?>
  </div>

<?php if (user_access('administer blocks')) :?>  
  <div class="edit"><?php print $edit_links; ?></div>
<?php endif; ?>

</div>
