<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Warrior',
		2	=> 'Rogue',
		3	=> 'Cleric',
		4	=> 'Mage',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Mathosian',
		2	=> 'High Elves',
		3	=> 'Dwarves',
		4	=> 'Bahmi',
		5	=> 'Eth',
		6	=> 'Kelari',
		7	=> 'Ascended'
	),
	'factions' => array(
		'default'	=> 'default',
		'guardians'	=> 'The Guardians',
		'defiant'	=> 'The Defiant'
	),
	'roles' => array(
		1	=> 'Healer',
		2	=> 'Tank',
		3	=> 'Damage Dealer',
		4	=> 'Supporter',
	),
	'lang' => array(
		'rift'							=> 'RIFT',
		'plate'							=> 'Plate',
		'heavy'							=> 'Heavy',
		'light'							=> 'Cloth',	
		'medium'						=> 'Leather',
		'import_ranks'					=> 'Import Ranks',
		'guild_xml'						=> 'Guild-XML',
		'uc_import_forw'				=> 'Import',
		'uc_import_guild'				=> 'Import/Update Guild',
		'uc_import_guild_help'			=> 'Import/Update all Guild-Members with a Guild-XML-File',
		'guild_xml_lang' 				=> 'Language of Guild-XML',
		'uc_gimp_header_fnsh'			=> 'The data has been imported successfully. This window can be closed.',
		'import_status_true'			=> 'Imported/Updated',
		'import_status_false'			=> 'Error',
		'guild_xml_error'				=> 'The Guild-XML is not valid.',
		'uc_delete_chars_onimport'		=> 'Delete Chars that have left the guild',

		// profile fields
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'RIFT Settings',
		'uc_faction'					=> 'Faction',
		'uc_faction_help'				=> 'Select the default faction',
	),
);
?>