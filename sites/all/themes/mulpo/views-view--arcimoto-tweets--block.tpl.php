<?php
// $Id: views-view.tpl.php,v 1.13 2009/06/02 19:30:44 merlinofchaos Exp $
/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $css_name: A css-safe version of the view name.
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 * - $admin_links: A rendered list of administrative links
 * - $admin_links_raw: A list of administrative links suitable for theme('links')
 *
 * @ingroup views_templates
 */
?>
<?php 
/*dpr(filter_formats());

$text = "foobar @google from #hash <b>with</b> <em>em</em> <script>echo</script> http://foobar.com and #moo";


$output = '';
foreach($view->result as $tweet) {
  $output .=
  $output .= '<p>' . $tweet->node_revisions_body . '</p>';
  
}

dpr($view);
die();*/


function ago($timestamp){
   $difference = time() - $timestamp;
   $text = format_interval($difference, 2) . " ago";
   return $text;
}

function twitterize($text) {
  $result = strip_tags($text);
  $result = check_markup($result, 4, false);
  return $result;
}
  
?>


<div class="view view-<?php print $css_name; ?> view-id-<?php print $name; ?> view-display-id-<?php print $display_id; ?> view-dom-id-<?php print $dom_id; ?>">

  <h2>Arcimoto Tweets</h2>
  <div class="view-content">
    <?php foreach($view->result as $tweet) : ?>
      <div class="arcimoto-tweet">
        <p class="arcimoto-tweet-body"><?php print twitterize($tweet->node_title) //print twitterize($tweet->node_revisions_body) ?></p>
        <span class="arcimoto-tweet-info"><?php print ago($tweet->node_created) ?> <a href="<?php print $tweet->activitystream_link ?>" title="View this tweet">#</a></span>
      </div>
    <?php endforeach; ?>
  </div>


</div> <?php /* class view */ ?>
