<?php
// $Id: default.settings.php,v 1.8.2.1 2008/08/13 06:52:36 dries Exp $

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * IMPORTANT NOTE:
 * This file may have been set to read-only by the Drupal installation
 * program. If you make changes to this file, be sure to protect it again
 * after making your modifications. Failure to remove write permissions
 * to this file is a security risk.
 *
 * The configuration file to be loaded is based upon the rules below.
 *
 * The configuration directory will be discovered by stripping the
 * website's hostname from left to right and pathname from right to
 * left. The first configuration file found will be used and any
 * others will be ignored. If no other configuration file is found
 * then the default configuration file at 'sites/default' will be used.
 *
 * For example, for a fictitious site installed at
 * http://www.drupal.org/mysite/test/, the 'settings.php'
 * is searched in the following directories:
 *
 *  1. sites/www.drupal.org.mysite.test
 *  2. sites/drupal.org.mysite.test
 *  3. sites/org.mysite.test
 *
 *  4. sites/www.drupal.org.mysite
 *  5. sites/drupal.org.mysite
 *  6. sites/org.mysite
 *
 *  7. sites/www.drupal.org
 *  8. sites/drupal.org
 *  9. sites/org
 *
 * 10. sites/default
 *
 * If you are installing on a non-standard port number, prefix the
 * hostname with that number. For example,
 * http://www.drupal.org:8080/mysite/test/ could be loaded from
 * sites/8080.www.drupal.org.mysite.test/.
 */

/**
 * Database settings:
 *
 * Note that the $db_url variable gets parsed using PHP's built-in
 * URL parser (i.e. using the "parse_url()" function) so make sure
 * not to confuse the parser. If your username, password
 * or database name contain characters used to delineate
 * $db_url parts, you can escape them via URI hex encodings:
 *
 *   : = %3a   / = %2f   @ = %40
 *   + = %2b   ( = %28   ) = %29
 *   ? = %3f   = = %3d   & = %26
 *
 * To specify multiple connections to be used in your site (i.e. for
 * complex custom modules) you can also specify an associative array
 * of $db_url variables with the 'default' element used until otherwise
 * requested.
 *
 * You can optionally set prefixes for some or all database table names
 * by using the $db_prefix setting. If a prefix is specified, the table
 * name will be prepended with its value. Be sure to use valid database
 * characters only, usually alphanumeric and underscore. If no prefixes
 * are desired, leave it as an empty string ''.
 *
 * To have all database names prefixed, set $db_prefix as a string:
 *
 *   $db_prefix = 'main_';
 *
 * To provide prefixes for specific tables, set $db_prefix as an array.
 * The array's keys are the table names and the values are the prefixes.
 * The 'default' element holds the prefix for any tables not specified
 * elsewhere in the array. Example:
 *
 *   $db_prefix = array(
 *     'default'   => 'main_',
 *     'users'     => 'shared_',
 *     'sessions'  => 'shared_',
 *     'role'      => 'shared_',
 *     'authmap'   => 'shared_',
 *   );
 *
 * Database URL format:
 *   $db_url = 'mysql://username:password@localhost/databasename';
 *   $db_url = 'mysqli://username:password@localhost/databasename';
 *   $db_url = 'pgsql://username:password@localhost/databasename';
 */

$db_url = 'mysql://drupal_user:38A250D5D8FBC1E5D4D015C720@localhost/drupal_main_dev';
//$db_url = 'mysql://drupal_user:38A250D5D8FBC1E5D4D015C720@localhost/arcimoto';
//$db_url = 'mysql://drupal_user:38A250D5D8FBC1E5D4D015C720@arcimoto-www-lg.c5portf32pes.us-west-1.rds.amazonaws.com/drupal_main_production';
$db_prefix = '';

/**
 * Access control for update.php script
 *
 * If you are updating your Drupal installation using the update.php script
 * being not logged in as administrator, you will need to modify the access
 * check statement below. Change the FALSE to a TRUE to disable the access
 * check. After finishing the upgrade, be sure to open this file again
 * and change the TRUE back to a FALSE!
 */
$update_free_access = FALSE;

/**
 * Base URL (optional).
 *
 * If you are experiencing issues with different site domains,
 * uncomment the Base URL statement below (remove the leading hash sign)
 * and fill in the URL to your Drupal installation.
 *
 * You might also want to force users to use a given domain.
 * See the .htaccess file for more information.
 *
 * Examples:
 *   $base_url = 'http://www.example.com';
 *   $base_url = 'http://www.example.com:8888';
 *   $base_url = 'http://www.example.com/drupal';
 *   $base_url = 'https://www.example.com:8888/drupal';
 *
 * It is not allowed to have a trailing slash; Drupal will add it
 * for you.
 */
 $base_url = 'http://dev.arcimoto.com';  // NO trailing slash!

/**
 * PHP settings:
 *
 * To see what PHP settings are possible, including whether they can
 * be set at runtime (ie., when ini_set() occurs), read the PHP
 * documentation at http://www.php.net/manual/en/ini.php#ini.list
 * and take a look at the .htaccess file to see which non-runtime
 * settings are used there. Settings defined here should not be
 * duplicated there so as to avoid conflict issues.
 */
ini_set('arg_separator.output',     '&amp;');
ini_set('magic_quotes_runtime',     0);
ini_set('magic_quotes_sybase',      0);
ini_set('session.cache_expire',     200000);
ini_set('session.cache_limiter',    'none');
ini_set('session.cookie_lifetime',  2000000);
ini_set('session.gc_maxlifetime',   200000);
ini_set('session.save_handler',     'user');
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid',    0);
ini_set('url_rewriter.tags',        '');

/* Set PHP error reporting to a more sane level until modules update for PHP 5.3 */
#ini_set('error_reporting',	'E_ALL & E_NOTICE');

/**
 * Drupal automatically generates a unique session cookie name for each site
 * based on on its full domain name. If you have multiple domains pointing at
 * the same Drupal site, you can either redirect them all to a single domain
 * (see comment in .htaccess), or uncomment the line below and specify their
 * shared base domain. Doing so assures that users remain logged in as they
 * cross between your various domains.
 */
# $cookie_domain = 'example.com';

/**
 * Variable overrides:
 *
 * To override specific entries in the 'variable' table for this site,
 * set them here. You usually don't need to use this feature. This is
 * useful in a configuration file for a vhost or directory, rather than
 * the default settings.php. Any configuration setting from the 'variable'
 * table can be given a new value. Note that any values you provide in
 * these variable overrides will not be modifiable from the Drupal
 * administration interface.
 *
 * Remove the leading hash signs to enable.
 */
# $conf = array(
#   'site_name' => 'My Drupal site',
#   'theme_default' => 'minnelli',
#   'anonymous' => 'Visitor',
/**
 * A custom theme can be set for the off-line page. This applies when the site
 * is explicitly set to off-line mode through the administration page or when
 * the database is inactive due to an error. It can be set through the
 * 'maintenance_theme' key. The template file should also be copied into the
 * theme. It is located inside 'modules/system/maintenance-page.tpl.php'.
 * Note: This setting does not apply to installation and update pages.
 */
#   'maintenance_theme' => 'minnelli',
/**
 * reverse_proxy accepts a boolean value.
 *
 * Enable this setting to determine the correct IP address of the remote
 * client by examining information stored in the X-Forwarded-For headers.
 * X-Forwarded-For headers are a standard mechanism for identifying client
 * systems connecting through a reverse proxy server, such as Squid or
 * Pound. Reverse proxy servers are often used to enhance the performance
 * of heavily visited sites and may also provide other site caching,
 * security or encryption benefits. If this Drupal installation operates
 * behind a reverse proxy, this setting should be enabled so that correct
 * IP address information is captured in Drupal's session management,
 * logging, statistics and access management systems; if you are unsure
 * about this setting, do not have a reverse proxy, or Drupal operates in
 * a shared hosting environment, this setting should be set to disabled.
 */
#   'reverse_proxy' => TRUE,
/**
 * reverse_proxy accepts an array of IP addresses.
 *
 * Each element of this array is the IP address of any of your reverse
 * proxies. Filling this array Drupal will trust the information stored
 * in the X-Forwarded-For headers only if Remote IP address is one of
 * these, that is the request reaches the web server from one of your
 * reverse proxies. Otherwise, the client could directly connect to
 * your web server spoofing the X-Forwarded-For headers.
 */
#   'reverse_proxy_addresses' => array('a.b.c.d', ...),
# );

/**
 * String overrides:
 *
 * To override specific strings on your site with or without enabling locale
 * module, add an entry to this list. This functionality allows you to change
 * a small number of your site's default English language interface strings.
 *
 * Remove the leading hash signs to enable.
 */
# $conf['locale_custom_strings_en'] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );


/**
 * Drupal for Facebook settings:
 *
 * These settings enable Drupal to interface with the Facebook API.
 *
 * Also make sure that the PHP variable 'arg_separator.output' is set to '&' above.
*/

if (!is_array($conf))
$conf = array();

$conf['fb_api_file'] = 'sites/all/libraries/facebook-php-sdk/src/facebook.php';
$conf['session_inc'] = "sites/all/modules/fb/fb_session.inc"; // allow facebook to control session.
include "sites/all/modules/fb/fb_url_rewrite.inc"; // use URL tricks to detect canvas pages.
include "sites/all/modules/fb/fb_settings.inc"; // Enable Drupal for Facebook (modules/fb).


$conf['fb_verbose'] = TRUE; // debug output
//$conf['fb_verbose'] = 'extreme'; // for verbosity fetishists.

// More efficient connect session discovery.
// Required if supporting one connect app and different canvas apps.
$conf['fb_apikey'] = 'ce63b6b61f42c13ce4473934df97d6ff'; // Your connect app's apikey goes here.

// Enable URL rewriting (for canvas page apps).
include "sites/all/modules/fb/fb_url_rewrite.inc";
include "sites/all/modules/fb/fb_settings.inc";




/*
 *  Authcache / Cacherouter configuration
 *
*/

$conf['cache_inc'] = './sites/all/modules/authcache/authcache.inc';

$conf['cacherouter'] = array(
 'default' => array(
    'engine' => 'apc',               // apc, memcache, db, file, eacc or xcache
    'server' => array(),             // memcached (host:port, e..g, 'localhost:11211')
    'shared' => TRUE,                // memcached shared single process
    'prefix' => 'www_',                  // cache key prefix (for multiple sites)
    'path' => 'files/filecache',     // file engine cache location
    'static' => FALSE,               // static array cache (advanced)
  ),
  'cache_form' => array(
    'engine' => 'db',
  ),
);

/**
 * Add the domain module setup routine.
 */
include './sites/all/modules/domain/settings.inc';


/**
 * Force the HTTPS variable if page is requested from Pound
 */

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $_SERVER['HTTPS'] = 'on';
}


/*
 *  CiviCRM Views integration
 *
*/


$db_prefix = array(
  'civicrm_acl'                              => 'drupal_main_crm_dev.',
  'civicrm_acl_cache'                        => 'drupal_main_crm_dev.',
  'civicrm_acl_contact_cache'                => 'drupal_main_crm_dev.',
  'civicrm_acl_entity_role'                  => 'drupal_main_crm_dev.',
  'civicrm_activity'                         => 'drupal_main_crm_dev.',
  'civicrm_activity_assignment'              => 'drupal_main_crm_dev.',
  'civicrm_activity_target'                  => 'drupal_main_crm_dev.',
  'civicrm_address'                          => 'drupal_main_crm_dev.',
  'civicrm_address_format'                   => 'drupal_main_crm_dev.',
  'civicrm_batch'                            => 'drupal_main_crm_dev.',
  'civicrm_cache'                            => 'drupal_main_crm_dev.',
  'civicrm_campaign'                         => 'drupal_main_crm_dev.',
  'civicrm_campaign_group'                   => 'drupal_main_crm_dev.',
  'civicrm_case'                             => 'drupal_main_crm_dev.',
  'civicrm_case_activity'                    => 'drupal_main_crm_dev.',
  'civicrm_case_contact'                     => 'drupal_main_crm_dev.',
  'civicrm_component'                        => 'drupal_main_crm_dev.',
  'civicrm_contact'                          => 'drupal_main_crm_dev.',
  'civicrm_contact_type'                     => 'drupal_main_crm_dev.',
  'civicrm_contribution'                     => 'drupal_main_crm_dev.',
  'civicrm_contribution_page'                => 'drupal_main_crm_dev.',
  'civicrm_contribution_product'             => 'drupal_main_crm_dev.',
  'civicrm_contribution_recur'               => 'drupal_main_crm_dev.',
  'civicrm_contribution_soft'                => 'drupal_main_crm_dev.',
  'civicrm_contribution_type'                => 'drupal_main_crm_dev.',
  'civicrm_contribution_widget'              => 'drupal_main_crm_dev.',
  'civicrm_country'                          => 'drupal_main_crm_dev.',
  'civicrm_county'                           => 'drupal_main_crm_dev.',
  'civicrm_currency'                         => 'drupal_main_crm_dev.',
  'civicrm_custom_field'                     => 'drupal_main_crm_dev.',
  'civicrm_custom_group'                     => 'drupal_main_crm_dev.',
  'civicrm_dashboard'                        => 'drupal_main_crm_dev.',
  'civicrm_dashboard_contact'                => 'drupal_main_crm_dev.',
  'civicrm_dedupe_exception'                 => 'drupal_main_crm_dev.',
  'civicrm_dedupe_rule'                      => 'drupal_main_crm_dev.',
  'civicrm_dedupe_rule_group'                => 'drupal_main_crm_dev.',
  'civicrm_discount'                         => 'drupal_main_crm_dev.',
  'civicrm_domain'                           => 'drupal_main_crm_dev.',
  'civicrm_email'                            => 'drupal_main_crm_dev.',
  'civicrm_entity_batch'                     => 'drupal_main_crm_dev.',
  'civicrm_entity_file'                      => 'drupal_main_crm_dev.',
  'civicrm_entity_financial_trxn'            => 'drupal_main_crm_dev.',
  'civicrm_entity_tag'                       => 'drupal_main_crm_dev.',
  'civicrm_event'                            => 'drupal_main_crm_dev.',
  'civicrm_export_temp'                      => 'drupal_main_crm_dev.',
  'civicrm_file'                             => 'drupal_main_crm_dev.',
  'civicrm_financial_account'                => 'drupal_main_crm_dev.',
  'civicrm_financial_trxn'                   => 'drupal_main_crm_dev.',
  'civicrm_grant'                            => 'drupal_main_crm_dev.',
  'civicrm_group'                            => 'drupal_main_crm_dev.',
  'civicrm_group_contact'                    => 'drupal_main_crm_dev.',
  'civicrm_group_contact_cache'              => 'drupal_main_crm_dev.',
  'civicrm_group_nesting'                    => 'drupal_main_crm_dev.',
  'civicrm_group_organization'               => 'drupal_main_crm_dev.',
  'civicrm_im'                               => 'drupal_main_crm_dev.',
  'civicrm_import_job_1430341dacd2c895365428a896514480' => 'drupal_main_crm_dev.',
  'civicrm_import_job_593ea69e207826c32d6aa83e4cff6993' => 'drupal_main_crm_dev.',
  'civicrm_import_job_6e26ec9acc497ebc909037c9164eb0de' => 'drupal_main_crm_dev.',
  'civicrm_import_job_851c1c03c054edb405a1561ed606fc48' => 'drupal_main_crm_dev.',
  'civicrm_import_job_8797b86bc1186bb4704f8522c504376e' => 'drupal_main_crm_dev.',
  'civicrm_import_job_ad3263d0aaf032efc17f3f9d7ca192ea' => 'drupal_main_crm_dev.',
  'civicrm_import_job_b4e8c93718eed0648b34b114e5dc0148' => 'drupal_main_crm_dev.',
  'civicrm_import_job_d57206cdde93555bb9297099ac40ade8' => 'drupal_main_crm_dev.',
  'civicrm_line_item'                        => 'drupal_main_crm_dev.',
  'civicrm_loc_block'                        => 'drupal_main_crm_dev.',
  'civicrm_location_type'                    => 'drupal_main_crm_dev.',
  'civicrm_log'                              => 'drupal_main_crm_dev.',
  'civicrm_mail_settings'                    => 'drupal_main_crm_dev.',
  'civicrm_mailing'                          => 'drupal_main_crm_dev.',
  'civicrm_mailing_bounce_pattern'           => 'drupal_main_crm_dev.',
  'civicrm_mailing_bounce_type'              => 'drupal_main_crm_dev.',
  'civicrm_mailing_component'                => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_bounce'             => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_confirm'            => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_delivered'          => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_forward'            => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_opened'             => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_queue'              => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_reply'              => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_subscribe'          => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_trackable_url_open' => 'drupal_main_crm_dev.',
  'civicrm_mailing_event_unsubscribe'        => 'drupal_main_crm_dev.',
  'civicrm_mailing_group'                    => 'drupal_main_crm_dev.',
  'civicrm_mailing_job'                      => 'drupal_main_crm_dev.',
  'civicrm_mailing_spool'                    => 'drupal_main_crm_dev.',
  'civicrm_mailing_trackable_url'            => 'drupal_main_crm_dev.',
  'civicrm_mapping'                          => 'drupal_main_crm_dev.',
  'civicrm_mapping_field'                    => 'drupal_main_crm_dev.',
  'civicrm_membership'                       => 'drupal_main_crm_dev.',
  'civicrm_membership_block'                 => 'drupal_main_crm_dev.',
  'civicrm_membership_log'                   => 'drupal_main_crm_dev.',
  'civicrm_membership_payment'               => 'drupal_main_crm_dev.',
  'civicrm_membership_status'                => 'drupal_main_crm_dev.',
  'civicrm_membership_type'                  => 'drupal_main_crm_dev.',
  'civicrm_menu'                             => 'drupal_main_crm_dev.',
  'civicrm_msg_template'                     => 'drupal_main_crm_dev.',
  'civicrm_navigation'                       => 'drupal_main_crm_dev.',
  'civicrm_note'                             => 'drupal_main_crm_dev.',
  'civicrm_openid'                           => 'drupal_main_crm_dev.',
  'civicrm_openid_associations'              => 'drupal_main_crm_dev.',
  'civicrm_openid_nonces'                    => 'drupal_main_crm_dev.',
  'civicrm_option_group'                     => 'drupal_main_crm_dev.',
  'civicrm_option_value'                     => 'drupal_main_crm_dev.',
  'civicrm_participant'                      => 'drupal_main_crm_dev.',
  'civicrm_participant_payment'              => 'drupal_main_crm_dev.',
  'civicrm_participant_status_type'          => 'drupal_main_crm_dev.',
  'civicrm_payment_processor'                => 'drupal_main_crm_dev.',
  'civicrm_payment_processor_type'           => 'drupal_main_crm_dev.',
  'civicrm_pcp'                              => 'drupal_main_crm_dev.',
  'civicrm_pcp_block'                        => 'drupal_main_crm_dev.',
  'civicrm_persistent'                       => 'drupal_main_crm_dev.',
  'civicrm_phone'                            => 'drupal_main_crm_dev.',
  'civicrm_pledge'                           => 'drupal_main_crm_dev.',
  'civicrm_pledge_block'                     => 'drupal_main_crm_dev.',
  'civicrm_pledge_payment'                   => 'drupal_main_crm_dev.',
  'civicrm_preferences'                      => 'drupal_main_crm_dev.',
  'civicrm_preferences_date'                 => 'drupal_main_crm_dev.',
  'civicrm_premiums'                         => 'drupal_main_crm_dev.',
  'civicrm_premiums_product'                 => 'drupal_main_crm_dev.',
  'civicrm_price_field'                      => 'drupal_main_crm_dev.',
  'civicrm_price_field_value'                => 'drupal_main_crm_dev.',
  'civicrm_price_set'                        => 'drupal_main_crm_dev.',
  'civicrm_price_set_entity'                 => 'drupal_main_crm_dev.',
  'civicrm_product'                          => 'drupal_main_crm_dev.',
  'civicrm_project'                          => 'drupal_main_crm_dev.',
  'civicrm_relationship'                     => 'drupal_main_crm_dev.',
  'civicrm_relationship_type'                => 'drupal_main_crm_dev.',
  'civicrm_report_instance'                  => 'drupal_main_crm_dev.',
  'civicrm_saved_search'                     => 'drupal_main_crm_dev.',
  'civicrm_state_province'                   => 'drupal_main_crm_dev.',
  'civicrm_subscription_history'             => 'drupal_main_crm_dev.',
  'civicrm_survey'                           => 'drupal_main_crm_dev.',
  'civicrm_tag'                              => 'drupal_main_crm_dev.',
  'civicrm_task'                             => 'drupal_main_crm_dev.',
  'civicrm_task_action_temp'                 => 'drupal_main_crm_dev.',
  'civicrm_task_status'                      => 'drupal_main_crm_dev.',
  'civicrm_tell_friend'                      => 'drupal_main_crm_dev.',
  'civicrm_timezone'                         => 'drupal_main_crm_dev.',
  'civicrm_uf_field'                         => 'drupal_main_crm_dev.',
  'civicrm_uf_group'                         => 'drupal_main_crm_dev.',
  'civicrm_uf_join'                          => 'drupal_main_crm_dev.',
  'civicrm_uf_match'                         => 'drupal_main_crm_dev.',
  'civicrm_value_activities_10'              => 'drupal_main_crm_dev.',
  'civicrm_value_customer_information_1'     => 'drupal_main_crm_dev.',
  'civicrm_value_dealer_information_5'       => 'drupal_main_crm_dev.',
  'civicrm_value_government_contact_6'       => 'drupal_main_crm_dev.',
  'civicrm_value_investor_information_3'     => 'drupal_main_crm_dev.',
  'civicrm_value_media_contact_information_4' => 'drupal_main_crm_dev.',
  'civicrm_value_pilot_customers_9'          => 'drupal_main_crm_dev.',
  'civicrm_value_vendor_8'                   => 'drupal_main_crm_dev.',
  'civicrm_website'                          => 'drupal_main_crm_dev.',
  'civicrm_worldregion'                      => 'drupal_main_crm_dev.',
);
