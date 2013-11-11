<?php
/**
*
* full_quick_reply_editor [English]
*
* @author medeish (Jaros�aw Pustu�a) office@inventia.io
* @package language
* @version $Id$
* @copyright (c) 2011 medeish
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// � � � � �
//

$lang = array_merge($lang, array(
	'FULL_QUICK_REPLY_EDITOR'		=> 'Full Quick Reply Editor',
	'DBMS_NOT_SUPPORTED'			=> 'Automatic installer does not support your database type.',
	
	'VIEW_QUICK_REPLY'				=> 'Display quick reply',
	
	'QUICK_REPLY_LASTPAGE'			=> 'Restrict quick reply to last page of topic',
	'QUICK_REPLY_LASTPAGE_EXPLAIN'	=> 'Allow quick reply to be displayed only at the last page of a topic.',
));

?>