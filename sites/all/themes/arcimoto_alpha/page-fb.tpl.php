<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body class="<?php print $body_classes; ?> standard_page">
<!-- Begin the Container -->
<div class="container_16" id="header">
  <!--Logo -->
  <div class="grid_12">
    <?php if ($logo): ?> 
      <div id="logo">
        <a href="<?php print $base_path ?>" title="<?php print t('Arcimoto Home') ?>">
          <img src="<?php print $logo ?>" alt="<?php print t('Arcimoto Home') ?>" />
        </a>
      </div>
    <?php endif; ?>
    
    <div class="site_title"><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></div>

  </div>

  <br class="clear" />
</div>  
<!-- End header -->

  
<!-- restart container_16 with the addition of the page border -->
<div class="container_16 content_border" id="main_container">

  
  <?php if($messages) : ?>
    <div id="console" class="grid_12">
      <?php print $messages ?>
    </div>
  <?php endif; ?>
  

  <div id="body">
    
    <!-- Region: Content Top -->
    <?php if($content_top) : ?>
      <div class="grid_12" id="content_top">
        <?php print $content_top ?>
      </div>
    <?php endif; ?>
    
    <!-- content -->
    <div id="content" class="<?php print ns('grid_12', $right, 6); ?>">
    
      <?php if($title) : ?>
        <div>
          <h1 class="title"><?php print $title ?></h1>
        </div>
      <?php endif; ?>
      
      <!-- tabs -->
      <?php if($tabs) : ?>
        <div id="tabs" class="clearfix">
          <?php print $tabs ?>
        </div>
      <?php endif; ?>
      
      <div id="content_body">
        <?php print $content ?>
      </div>
      
	  
	
    </div>
    
    

    <?php if($right) : ?>
      <div id="sidebar_right" class="sidebar grid_6 omega">
        <div class="sidebar_container">
          <?php print $right ?>
        </div>
      </div>
    <?php endif ?>
    
    <!-- Region: Content Bottom -->
    <?php if($content_bottom) : ?>
      <div class="grid_12" id="content_bottom">
        <?php print $content_bottom ?>
      </div>
    <?php endif; ?>
  </div>



  <br class="clear" />
</div>
<!-- break the container for a second to make a 100% wide line -->
<div id="blue_bottom_border"></div>
<div class="container_16 content_border clearfix">
  <div id="footer2" class="clearfix">

	<div class="grid_12" id="copyright">
		&copy;2007-<?php print date('Y') ?> Arcimoto, LLC.  All rights reserved.<br>
	</div>

  </div> <!-- /footer2 -->
</div><!-- /container_16 -->
<!-- End Footer -->

<?php print $closure; ?>
</body>
</html>

