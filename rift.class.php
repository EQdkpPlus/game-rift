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

if(!class_exists('rift')) {
	class rift extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '2.0';
		protected $this_game		= 'rift';
		protected $types			= array('classes', 'races', 'factions', 'filters', 'roles');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> true,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> array(
					'faction' => array(
						'default'	=> 'all',
						'guardians'	=> array(0,1,2,3,7),
						'defiant'	=> array(0,4,5,6,7),
					),
				),
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Mathosian
						2 	=> 'all',		// High Elves
						3 	=> 'all',		// Dwarfes
						4 	=> 'all',		// Bahmi
						5 	=> 'all',		// Eth
						6 	=> 'all',		// Kelari
						7 	=> 'all',		// Ascended
					),
				),
			),
		);
		
		public $default_roles = array(
			1	=> array(3,4),
			2	=> array(1,2,3),
			3	=> array(1,2,3,4),
			4	=> array(2,3,4),
		);
		
		protected $class_colors = array(
			1	=> '#ff0000',
			2	=> '#ffff00',
			3	=> '#008000',
			4	=> '#800080',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function __construct() {
			$this->importers = array(
				'guild_import'		=> 'guildimporter.php',						// filename of the guild import
				'guild_imp_rsn'		=> false									// Guild import & Mass update requires server name
			);
			
			parent::__construct();
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){}
	}
}
?>