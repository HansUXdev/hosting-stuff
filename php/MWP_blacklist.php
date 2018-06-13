<?php

/**
 * Settings
 */

$WP_BL   	= true;
$WP_WC 	 	= "wp-content/plugins/";
$MWP_BL = array(
	"6scan-backup", 
	"6scan-protection",
	"adminer",
	"adsense-click-fraud-monitoring",
	"adsense-click-fraud-monitoring",
	"broken-link-checker",
	"contextual-related-posts",
	"clef",
	"ezpz-one-click-backup",
	"fuzzy-seo-booster",
	"google-sitemap-generator",
	"6scan-protection",
	"google-xml-sitemaps-with-multisite-support",
	"InfiniteWP Client",
	"jr-referrer",
	"MailPoet",
	"p3-profiler",
	"portable-phpmyadmin",
	"referrer-wp",
	"seo-alrp",
	"sgcachepress",
	"similar-posts",
	"statpress",
	"synthesis",
	"the-codetree-backup",
	"toolspack",
	"updraft",
	"w3-total-cache",
	"wordpress-beta-tester",
	"wordpress-gzip-compression",
	"wordpress-popular-posts",
	"wp-cache",
	"wp-cachecom",
	"wp-copysafe-web",
	"wp-copysafe-pdf",
	"wp-engine-snapshot",
	"wp-fast-cache",
	"wp-fastest-cache",
	"wp-file-cache",
	"wp-phpmyadmin",
	"wp-postviews",
	"wp-power-stats",
	"wp-slimstat",
	"wp-super-cache",
	"wpengine-common",
	"wponlinebackup",
	"yet-another-featured-posts-plugin",
	"yet-another-related-posts-plugin"
);



echo "Begin the plugin blacklist test ...";

	if ($WP_BL ) {

		echo (file_exists($WP_WC."akismet")) ? rename($WP_WC."akismet",$WP_WC."akismet-bad")."akismet detected..": nl2br("akismet plugin !detected||renamed...\n");

		foreach ($MWP_BL as $value) {
			echo (file_exists($WP_WC."$value")) ? rename($WP_WC."$value",$WP_WC."$value"."-bad"): nl2br("$value plugin !detected||renamed...\n");
		}

	}
	if (!$WP_BL ) {
		echo (file_exists($WP_WC."akismet-bad")) ? rename($WP_WC."akismet-bad",$WP_WC."akismet")."akismet-b detected..": "akismet plugin !detected||renamed...";

		// unlink('MWP_blacklist.php');

	}
?>