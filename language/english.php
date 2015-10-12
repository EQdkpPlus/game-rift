<?php
/*	Project:	EQdkp-Plus
 *	Package:	RIFT game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
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
		5	=> 'Primalist',
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