<?php

//Available fields

$webform2sugar_available_fields = array(
	'none' => 'Do Not Map',
	// names
	'name' => 'Full Name', 	
	'title' => 'Title',
	'salutation' => 'Salutation',
	'first_name' => 'First Name',
	'last_name' => 'Last Name',
		
	// email addresses and status
	'email1' => 'Email',
	'email2' => 'Alternate Email',
	'email_opt_in' => 'Opt-In for E-Mail',
	'email_opt_out' => 'Out-Out for E-Mail',
	
	// lead  info for SugarCRM
	'account_name' => 'Account Name',
	'description' => 'Description',
	'lead_source_description' => 'Lead Source Description',
	'refered_by' => 'Referred By',
	'assigned_user_name' => 'Assigned To',
	
	// phone numbers
	'phone_home' => 'Home Phone', 
	'phone_mobile' => 'Mobile Phone',
	'phone_other' => 'Other Phone',
	'phone_work' => 'Work Phone',
	'phone_fax' => 'Fax',
	'do_not_call' => 'Do Not Call',
	
	// adddresses
	'primary_address_city' => 'Primary Address City',
	'primary_address_country' => 'Primary Address Country',
	'primary_address_postalcode' => 'Primary Address Postal Code',
	'primary_address_state' => 'Primary Address State',
	'primary_address_street' => 'Primary Address Line 1',
	'primary_address_street_2' => 'Primary Address Line 2',
	'primary_address_street_3' => 'Primary Address Line 3',
	'alt_address_city' => 'Alternate Address City',
	'alt_address_country' => 'Alternate Address Country',
	'alt_address_postalcode' => 'Alternate Address Postal Code',
	'alt_address_state' => 'Alternate Address State',
	'alt_address_street' => 'Alternate Address Line 1',
	'alt_address_street_2' => 'Alternate Address Line 2',
	'alt_address_street_3' => 'Alternate Address Line 3',

	// extra
	'birthdate' => 'Birthdate',
	
	'description_1' => 'Description 1',
	'description_2' => 'Description 2',
	'description_3' => 'Description 3',
	'description_4' => 'Description 4',
	'description_5' => 'Description 5',
	'description_6' => 'Description 6',
	'description_7' => 'Description 7',
	'description_8' => 'Description 8',
	'description_9' => 'Description 9',
	'description_10' => 'Description 10',
	'description_11' => 'Description 11',
	'description_12' => 'Description 12',
	'description_13' => 'Description 13',
	'description_14' => 'Description 14',
	'description_15' => 'Description 15',

);

function load_custom_fields () {
	$custom_fields = variable_get('sugarwebform_custom_fields', null);
	if ( is_array($custom_fields) ) return $custom_fields ;
	else return array();
}