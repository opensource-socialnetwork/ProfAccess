<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
 
/**
 * Initialize the poke component.
 *
 * @return void;
 * @access private;
 */
function profile_access_init() {
  ossn_register_callback('page', 'load:profile', 'profile_access_validate');
}
/**
 * Profile Access Validate
 *
 * @return void;
 * @access private;
 */
function profile_access_validate($callback, $type, $params){
	if (!ossn_isLoggedin()) {
		ossn_trigger_message(ossn_print('profile:access:error'), 'error');
		redirect();
	}
}
ossn_register_callback('ossn', 'init', 'profile_access_init');
