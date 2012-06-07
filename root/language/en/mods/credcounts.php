<?php
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// umil
$lang = array_merge($lang, array(
	'INSTALL_CREDCOUNTS'				=> 'Install the CredCounts Profile Link',
	'INSTALL_CREDCOUNTS_CONFIRM'		=> 'Are you ready to install the CredCounts Profile Link?',

	'UNINSTALL_CREDCOUNTS'			=> 'Uninstall the CredCounts Profile Link',
	'UNINSTALL_CREDCOUNTS_CONFIRM'	=> 'Are you ready to uninstall CredCounts Profile Link?',
	'UPDATE_CREDCOUNTS'				=> 'Update CredCounts Profile Link',
	'UPDATE_CREDCOUNTS_CONFIRM'		=> 'Are you ready to update CredCounts Profile Link?',
));

// acp_styles
$lang = array_merge($lang, array(
	'IMG_ICON_CONTACT_CREDCOUNTS'				=> 'CredCounts.com Profile Link',
));

// everywhere else
$lang = array_merge($lang, array(
	'CREDCOUNTS'				=> 'CredCounts.com',
	'UCP_CREDCOUNTS'			=> 'CredCounts.com Email',
));
