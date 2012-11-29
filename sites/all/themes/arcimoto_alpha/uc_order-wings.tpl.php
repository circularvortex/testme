<?php
// $Id: uc_order-customer.tpl.php,v 1.1.2.1 2010/07/16 15:45:09 islandusurper Exp $

/**
 * @file
 * This file is MODIFIED from the default customer invoice template for Ubercart.
 */
?>

<?php

$sku = $order->products[0]->model;

switch($sku) {
	case 'WINGS1':
		$wingstype = 'bronze';
		break;
	case 'WINGS5':
		$wingstype = 'silver';
		break;
	case 'WINGS10':
		$wingstype = 'gold';
		break;
	case 'WINGS25':
		$wingstype = 'mithril';
		break;
	case 'WINGS50':
		$wingstype = 'unobtainium';
		break;
	case 'WINGS100':
		$wingstype = 'wonderflonium';
		break;
	case 'WINGS200':
		$wingstype = 'doublerainbownium';
		break;
	case 'WINGS300':
		$wingstype = '300';
		break;
}

?>

<table width="100%" height="600" border="0" cellspacing="0" cellpadding="20" style="text-align=: center; background-color: #CCC; font: 0.65em/1.5em 'Helvetica Neue',Helvetica,Verdana,'Lucida Sans Unicode','Lucida Grande',Arial,sans-serif;">
  <tr>
    <td align="center" valign="top" style="text-align: center">
	
		<table width="620" border="0" cellspacing="0" cellpadding="0" style="background: #FFFFFF;" align="center">
		  <tr>
		    <td height="90" style="text-align: center; border-bottom: 1px solid #CCC;"><img src="http://www.arcimoto.com/sites/all/themes/arcimoto_alpha/images/arcimoto_logo3d.png" alt="Arcimoto Home"></td>
		  </tr>
		  <tr>
		    <td><?php echo '<img src="http://static.arcimoto.com/files/images/angelwings/angelwings_header_email_' . $wingstype . '.jpg">' ?></td>
		  </tr>
		  <tr>
		    <td style="text-align: left; padding: 15px;">
		    	<p>
				Thank you for your contribution to our efforts. Your assistance will help us reach our goal of affordable and sustainable transportation for everyone.
				</p>
				<p>
				Show your support for clean technology by displaying your wings on <?php echo '<a href="http://www.arcimoto.com/angels/thankyou/'. $wingstype .'/share">Facebook</a>'?> or <?php echo '<a href="http://www.arcimoto.com/angels/thankyou/'. $wingstype .'/tweet">Twitter</a>'?>.
				</p>
		   </td>
		   <tr>
		   	<td>

		    </td>
		    </tr>
		  </tr>

		</table>
		<table width="620" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
		    <td style="font-size: 0.7em; color: #999; background: transparent; text-align: center;">©2010 Arcimoto, LLC  544 Blair Blvd. Eugene, OR 97402</td>
		  </tr>
		</table>

</td>
  </tr>
</table>
