<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"> </script>
</head>
<body class="<?php print $body_classes; ?> landing_page">
<!-- Begin the Container -->
<div class="container_16" id="header">
  <!-- User box-->
  <div class="prefix_10 grid_6">
    <div id="user_box">
      <div id="user_box_container">
        <?php print $user_box ?>
      </div>
    </div>
  </div>


  <!--Logo -->
  <div class="grid_16">
    <?php if ($logo): ?> 
      <div id="logo">
        <a href="<?php print $base_path ?>" title="<?php print t('Arcimoto Home') ?>">
          <img src="<?php print $logo ?>" alt="<?php print t('Arcimoto Home') ?>" />
        </a>
      </div>
    <?php endif; ?>

    <div class="site_title"><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></div>

  </div>


  <!-- Navigation bar -->
  <div class="grid_16">
    <div id="navigation">
      <?php if (isset($primary_links)): ?>
        <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
      <?php endif; ?>
    </div>
  </div>
  
  <!-- Sub navigation for the pages -->
  <div class="sub_navigation grid_16">
    <?php print $sub_navigation; ?>
  </div>
  <!-- End the sub navigation -->

  <br class="clear" />
</div>  
<!-- End header -->

<!-- Branding Splash Image -->
<!-- For landing pages, this is the main content -->
<div id="branding" class="clearfix">
  <div class="content container_16">
    <?php print $content ?>
  </div>
</div>

<!-- End branding area -->

<!-- restart container_16 with the addition of the page border -->
<div class="container_16 content_border clearfix" id="main_container">
  
  <?php if($messages) : ?>
    <div id="console" class="grid_16">
      <?php print $messages ?>
    </div>
  <?php endif; ?>
 
 
 
 
 
  <!-- Begin the upper branding area -->
  <div id="branding_upper_bar">
    <?php print $branding_upper_bar; ?>
  </div>
  <!-- End Upper branding region -->

  <!-- Star middle bar region -->
  <?php if($branding_middle_bar) : ?>
    <div id="branding_middle_bar" class="clearfix">
      <?php print $branding_middle_bar ?>
    </div>
  <?php endif; ?>
  <!-- End middle bar region -->
  
  
  <!-- Start Secondary News / Content Items -->
  <?php if($branding_lower_bar) : ?>
    <div id="branding_lower_bar">
      <?php print $branding_lower_bar; ?>
    <!-- End Secondary items -->
    </div>
  <?php endif; ?>
  
  
  <div>
    <div id="sidebar-left">
      <?php print $left ; ?>
    </div>
    <div id="sidebar-right">
      <?php print $right ; ?>
    </div>
  </div>
  
</div>
<!-- break the container for a second to make a 100% wide line -->



<!-- This is where the main body ends. Everything else should be static across the versions -->
<div id="blue_bottom_border"></div>
<div class="container_16 content_border">
  <div id="footer2">
    <!-- Footer Links -->
    <div class="grid_4" id="footer_links">
      <?php if (isset($secondary_links)) : ?>
        <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
      <?php endif; ?>	
    </div>
    
    <!-- Begin social media links/icons -->
    <div class="prefix_1 grid_6 suffix_1 social_media_icons_2">
      <p>Join Us</p>
      <ul>
        <li id="twitter_icon"><a href="http://twitter.com/arcimoto"></a></li>
        <li id="flickr_icon"><a href="http://www.flickr.com/photos/arcimoto/"></a></li>
        <li id="facebook_icon"><a href="http://www.facebook.com/pages/Arcimoto/254707685073"></a></li>
        <li id="youtube_icon"><a href="http://www.youtube.com/arcimoto"></a></li>
      </ul>
    </div>
    
    <!-- Address & Contact Info -->
    <div class="grid_4 address">
      <ul>
        <li>Arcimoto</li>
        <li>544 Blair Blvd.</li>
        <li>Eugene, Oregon</li>
        <li>541-683-6293</li>
      </ul>
    </div>  
    <br class="clear" />
  </div>
  <br class="clear" />
</div>
<!-- End Footer -->

<!-- Sidebar for administrators that are logged in -->
<?php if($is_admin) : ?>
  <div id="dev_popout_sidebar">
    <?php print $dev_popout_sidebar ; ?>
  </div>
<?php endif; ?>

<?php print $closure; ?>
</body>
</html>