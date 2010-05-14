<div class="comment comment-<?php print $zebra . ' ' . $status; ?><?php print $comment_classes; ?>"><div class="comment-inner">

<div class="comment-details">
	
	<div class="submitted">
		<div class="comment-author"><?php  print theme('username', $comment); ?></div>
    </div><!-- /submitted-->
	
	 <?php /* if ($comment->gravatar) { print $comment->gravatar; } elseif ($picture) { print $picture; }  */ ?>
	 <?php if ($picture) print $picture; ?>


</div><!-- /comment-details-->


<div class="comment-body">

  <div class="content">
	<div class="comment-date"><?php print format_date($comment->timestamp, 'custom', 'M d, Y'); ?></div>
    <?php print $comment->comment; ?>
	<?php if ($signature): ?>
		<div class=”user-signature clear-block”>
	    	<?php print $signature ?>
	    </div>
	<?php endif; ?>
  </div> <!-- /content -->

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div><!-- /comment-body-->

</div></div> <!-- /comment-inner, /comment -->

