<?php
/**
*
* @package phpBB Extension - Google Translator
* @copyright (c) 2015 HiFiKabin
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_TRANSLATE'				=> 'Google Vertaler',
	'ACP_TRANSLATE_CONFIG'		=> 'Google Vertaler Instellingen',
));

