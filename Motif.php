<?php
/*
 Plugin Name: Motif Automatic Wordpress Theme Changer
 Plugin URI: http://kodemaster.co.cc/motif
 Description: This plugin automatically changes the theme of your blog on the scheduled days, occassions. Dress-up your blog every day.
 Author: Penuel
 Version: 1.0
 Author URI: http://kodemaster.co.cc
 */

/* Copyright 2008-2009 Penuel (email : penuelr@gmail.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

?>

<?php

class Motif{
	
	private $themes = array();
	
	function __construct(){
		
	}
	
	function getAvailableThemes(){
		
		$this->themes = get_themes();
	}
	
	function admin_menu(){
		add_theme_page( 'Motif Theme Changer', 'Motif Theme Changer', 8, __FILE__, array($this,'setup_page'));
	}
	
	function setup_page(){
		
		$this->getAvailableThemes();
		
		include("motif_setup.php");	
		
	}
}

$mtc = new Motif();

//plugin hook registrations.
add_action('admin_menu', array($mtc,'admin_menu'));
?>