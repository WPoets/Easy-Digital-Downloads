<?php
/**
 * Mime Types
 *
 * @package     Easy Digital Downloads
 * @subpackage  Mime Types
 * @copyright   Copyright (c) 2012, Pippin Williamson
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0 
*/


/**
 * Allowed Mime Types
 *
 * @access      public
 * @since       1.0 
 * @return      array
*/

function edd_allowed_mime_types( $existing_mimes ) {
 
	$existing_mimes['zip'] = 'application/zip';
	$existing_mimes['epub'] = 'application/epub+zip';
 	return $existing_mimes;
 
}
add_filter('upload_mimes', 'edd_allowed_mime_types');