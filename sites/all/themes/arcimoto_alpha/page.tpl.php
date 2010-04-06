<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script language="javascript" type="text/javascript">
//<![CDATA[
var tl_loc0=(window.location.protocol == "https:")? "https://secure.comodo.net/trustlogo/javascript/trustlogo.js" :
"http://www.trustlogo.com/trustlogo/javascript/trustlogo.js";
document.writeln('<scr' + 'ipt language="JavaScript" src="'+tl_loc0+'" type="text\/javascript">' + '<\/scr' + 'ipt>');
//]]>
</script>
</head>
<body class="<?php print $body_classes; ?> standard_page">
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
  <?php if($sub_navigation) : ?>
    <div class="sub_navigation grid_16">
      <?php print $sub_navigation; ?>
    </div>
  <?php endif; ?>
   <!-- End the sub navigation -->

  <br class="clear" />
</div>  
<!-- End header -->

<!-- Small branding area and section title -->
<div id="branding_small">
  <div class="content container_16">
    <div class="grid_12 suffix_4" id="title_header">
      <div class="title">
        <div class="header"><?php print $section_title ?></div>
      </div>
    </div>
  </div>
</div>
  
<!-- restart container_16 with the addition of the page border -->
<div class="container_16 content_border" id="main_container">

  
  <?php if($messages) : ?>
    <div id="console" class="grid_16">
      <?php print $messages ?>
    </div>
  <?php endif; ?>
  

  <div id="body">
    
    
    <!-- Region: Content Top -->
    <?php if($content_top) : ?>
      <div class="grid_16" id="content_top">
        <?php print $content_top ?>
      </div>
    <?php endif; ?>
    
    <!-- content -->
    <div id="content" class="<?php print ns('grid_16', $right, 6); ?>">
    
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
		<?php if ($node->comment && $node->comment_count) : ?>
		    <div>
				<h2>Comments on this post:</h2>
			</div>
		<?php endif; ?>
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
      <div class="grid_16" id="content_bottom">
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
    <!-- Footer Links -->
    <div class="grid_16" id="footer_links">
      <?php if (isset($secondary_links)) : ?>
        <?php print arcimoto_alpha_links($secondary_links, array('class' => 'links secondary-links')) ?>
      <?php endif; ?>	
    </div>

	<div id="copyright">
		&copy;2007-<?php print date('Y') ?> Arcimoto, LLC.  All rights reserved.<br>
		<?php print l('Privacy policy', 'privacy-policy') ?>
	</div>
<?php /* Previous footer, remove eventually...

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
  </div>
  <br class="clear" />

*/ ?>


</div><!-- /container_16 -->
<!-- End Footer -->

<?php if(!empty($dev_popout_sidebar) && $is_admin) : ?>
  <div id="dev_popout_sidebar">
    <?php print $dev_popout_sidebar ; ?>
  </div>
<?php endif; ?>

<?php print $closure; ?>
</body>
</html>