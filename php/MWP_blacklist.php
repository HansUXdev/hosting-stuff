<?php

/**
 * Settings
 */

$WP_BL   	= true;				
$WP_AC 	 	= ".htaccess";
$WP_WC 	 	= "wp-content/plugins/";

echo "Begin the plugin blacklist test ...";
	if ($WP_BL ) {
		echo (file_exists($WP_WC."akismet")) ? rename($WP_WC."akismet",$WP_WC."akismet"."-bad"): "akismet plugin !detected||rename...";

		echo (file_exists($WP_WC."/plugins-bad")) ? rename($WP_WC."/plugins-bad", $WP_WC."/plugins"):"plugin-bad !exist||renamed...";
		echo (file_exists($WP_mu."-bad")) ? rename($WP_mu."-bad", $WP_mu):"mu-plugin folder !exist||renamed...";
		echo (file_exists($WP_obj_c.".bad")) ? rename($WP_obj_c.".bad", $WP_obj_c):"cache !exist||renamed...";
		unlink('WP_500.php');
	}
?>