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
	'ACP_TRANSLATE_CONFIG_EXPLAIN'		=> 'Dit is de configuratie pagina voor de Google Vertaler Extensie.',

	'ACP_TRANSLATE_CONFIG_SET'			=> 'Configuratie',
	'TRANSLATE_CONFIG_SAVED'			=> 'Google Vertaler instellingen opgeslagen',

	'TRANSLATE_DEFAULT_LANG'			=> 'Forum taal',
	'TRANSLATE_DEFAULT_LANG_EXPLAIN'	=> 'Voer de code in voor de standaard taal van je Forum',

	'TRANSLATE_CHOICE_LANG'				=> 'Vertalingen',
	'TRANSLATE_CHOICE_LANG_EXPLAIN'		=> 'Voer de codes in van de talen die je wenst beschikbaar te maken gescheiden door een komma. Vb: nl,de,fr,es',
));

