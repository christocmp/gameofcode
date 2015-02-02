<?php
/*
 * These are example commands to manipulate admin rights

$super_admins = get_super_admins();
echo 'List of super-admin users:<ul>';
foreach ($super_admins as $admin) {
  echo '<li>' . $admin . '</li>';
}
echo '</ul>';

$user_accounts = get_users( array('search' => '*'));
echo 'List of users:<ul>';
foreach ($user_accounts as $user_account) {
  echo '<li>' . print_r($user_account) . '</li>';
}
echo '</ul>';

//will make user super admin
//grant_super_admin( $user_id );

*/

/*
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

?>
