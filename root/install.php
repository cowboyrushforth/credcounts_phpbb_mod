<?php
/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'CredCounts Profile Link';
$version_config_name = 'credcounts_pl_version';
$language_file = 'mods/credcounts';

$versions = array(
	'1.0.0'	=> array(
		// add cred counts column
		'table_column_add' => array(
			array(USERS_TABLE, 'user_credcounts', array('VCHAR_UNI', '')),
		),
	),
);

include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);
