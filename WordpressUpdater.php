<?php 
    /*
    Plugin Name: Updater
    Plugin URI: http://www.codingbin.com
    Description: A wordpress Plugin to update it from github repository
    Author: Manoj Dhiman mail: er.dhimanmanoj@gmail.com
    Version: 1.0
    Author URI: http://www.codingbin.com
    */
?>
<?php
define('codingbin_VERSION',1.0);
define('codingbin_Path',__DIR__);
include('updater.php');
/* loader */
add_action(
	'plugins_loaded',
	array(
		'Codingbin_Updater',
		'instance'
	)
);
?>
