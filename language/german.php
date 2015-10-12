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
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Krieger',
		2	=> 'Schurke',
		3	=> 'Kleriker',
		4	=> 'Magier',
		5	=> 'Primalist',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Mathosianer',
		2	=> 'Hochelfen',
		3	=> 'Zwerg',
		4	=> 'Bahmi',
		5	=> 'Eth',
		6	=> 'Kelari',
		7	=> 'Ascended'
	),
	'factions' => array(
		'default'	=> 'default',
		'guardians'	=> 'Wächter',
		'defiant'	=> 'Skeptiker'
	),
	'roles' => array(
		1	=> 'Heiler',
		2	=> 'Tank',
		3	=> 'Damage Dealer',
		4	=> 'Supporter',
	),
	'lang' => array(
		'rift'							=> 'RIFT',
		'plate'							=> 'Platte',
		'heavy'							=> 'Kette',
		'medium'						=> 'Leder',
		'light'							=> 'Stoff',
		'import_ranks'					=> 'Ränge importieren',
		'guild_xml'						=> 'Gilden-XML',
		'uc_import_forw'				=> 'Importieren',
		'uc_import_guild'				=> 'Gilde importieren/aktualisieren',
		'uc_import_guild_help'			=> 'Importiere/aktualisiere alle Mitglieder einer Gilde aus dem Gilden-XML',
		'guild_xml_lang'				=> 'Sprache des Gilden-XMLs',
		'uc_gimp_header_fnsh'			=> 'Die Aktualisierung der Charaktere wurde beendet. Das Fenster kann nun geschlossen werden.',
		'import_status_true'			=> 'Importiert/Aktualisiert',
		'import_status_false'			=> 'Fehler',
		'guild_xml_error'				=> 'Das Gilden-XML hat ein nicht gültiges Format.',
		'uc_delete_chars_onimport'		=> 'Charaktere im System löschen, die nicht mehr in der Gilde sind',
		
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'RIFT Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Wähle die Standard-Fraktion',
	),
);
?>