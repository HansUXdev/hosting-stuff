<?php

/**
 * Settings
 */

$WP_BL   	= true;
$WP_WC 	 	= "wp-content/plugins/";


echo "Begin the plugin blacklist test ...";

	if ($WP_BL ) {

		echo (file_exists($WP_WC."akismet")) ? rename($WP_WC."akismet",$WP_WC."akismet-bad")."akismet detected..": nl2br("akismet plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."6scan-backup")) ? rename($WP_WC."6scan-backup",$WP_WC."6scan-backup"."-bad"): nl2br("6scan-backup plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."6scan-protection")) ? rename($WP_WC."6scan-protection",$WP_WC."6scan-protection-bad"): nl2br("6scan-protection plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."adminer")) ? rename($WP_WC."adminer",$WP_WC."adminer-bad"): nl2br("adminer plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."adsense-click-fraud-monitoring")) ? rename($WP_WC."adsense-click-fraud-monitoring",$WP_WC."adsense-click-fraud-monitoring-bad"): nl2br("adsense-click-fraud-monitoring plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."broken-link-checker")) ? rename($WP_WC."broken-link-checker",$WP_WC."broken-link-checker-bad"): nl2br("broken-link-checker plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."contextual-related-posts")) ? rename($WP_WC."contextual-related-posts",$WP_WC."contextual-related-posts-bad"): nl2br("contextual-related-posts plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."clef")) ? rename($WP_WC."clef",$WP_WC."clef-bad"): nl2br("clef plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."ezpz-one-click-backup")) ? rename($WP_WC."ezpz-one-click-backup",$WP_WC."ezpz-one-click-backup-bad"): nl2br("ezpz-one-click-backup plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."fuzzy-seo-booster")) ? rename($WP_WC."fuzzy-seo-booster",$WP_WC."fuzzy-seo-booster-bad"): nl2br("fuzzy-seo-booster plugin !detected||renamed...\n");


		// echo (file_exists($WP_WC."/plugins-bad")) ? rename($WP_WC."/plugins-bad", $WP_WC."/plugins"):"plugin-bad !exist||renamed...\n");

		echo (file_exists($WP_WC."google-sitemap-generator")) ? rename($WP_WC."google-sitemap-generator",$WP_WC."google-sitemap-generator"."-bad"): nl2br("google-sitemap-generator plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."6scan-protection")) ? rename($WP_WC."6scan-protection",$WP_WC."6scan-protection-bad"): nl2br("6scan-protection plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."google-xml-sitemaps-with-multisite-support")) ? rename($WP_WC."google-xml-sitemaps-with-multisite-support",$WP_WC."google-xml-sitemaps-with-multisite-support-bad"): nl2br("google-xml-sitemaps-with-multisite-support plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."InfiniteWP Client")) ? rename($WP_WC."InfiniteWP Client",$WP_WC."InfiniteWP Client-bad"): nl2br("InfiniteWP Client plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."jr-referrer")) ? rename($WP_WC."jr-referrer",$WP_WC."jr-referrer-bad"): nl2br("jr-referrer plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."MailPoet")) ? rename($WP_WC."MailPoet",$WP_WC."MailPoet-bad"): nl2br("MailPoet plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."p3-profiler")) ? rename($WP_WC."p3-profiler",$WP_WC."p3-profiler-bad"): nl2br("p3-profiler plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."portable-phpmyadmin")) ? rename($WP_WC."portable-phpmyadmin",$WP_WC."portable-phpmyadmin-bad"): nl2br("portable-phpmyadmin plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."referrer-wp")) ? rename($WP_WC."referrer-wp",$WP_WC."referrer-wp-bad"): nl2br("referrer-wp plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."seo-alrp")) ? rename($WP_WC."seo-alrp",$WP_WC."seo-alrp-bad"): nl2br("seo-alrp plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."sgcachepress")) ? rename($WP_WC."sgcachepress",$WP_WC."sgcachepress-bad"): nl2br("sgcachepress plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."similar-posts")) ? rename($WP_WC."similar-posts",$WP_WC."similar-posts-bad"): nl2br("similar-posts plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."statpress")) ? rename($WP_WC."statpress",$WP_WC."statpress-bad"): nl2br("statpress plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."synthesis")) ? rename($WP_WC."synthesis",$WP_WC."synthesis-bad"): nl2br("synthesis plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."the-codetree-backup")) ? rename($WP_WC."the-codetree-backup",$WP_WC."the-codetree-backup-bad"): nl2br("the-codetree-backup plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."toolspack")) ? rename($WP_WC."toolspack",$WP_WC."toolspack-bad")."toolspack detected..": nl2br("toolspack plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."updraft")) ? rename($WP_WC."updraft",$WP_WC."updraft-bad")."updraft detected..": nl2br("updraft plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."w3-total-cache")) ? rename($WP_WC."w3-total-cache",$WP_WC."w3-total-cache-bad"): nl2br("w3-total-cache plugin !detected||renamed...\n");


		echo (file_exists($WP_WC."wordpress-beta-tester")) ? rename($WP_WC."wordpress-beta-tester",$WP_WC."wordpress-beta-tester-bad"): nl2br("wordpress-beta-tester plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wordpress-gzip-compression")) ? rename($WP_WC."wordpress-gzip-compression",$WP_WC."wordpress-gzip-compression-bad"): nl2br("wordpress-gzip-compression plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wordpress-popular-posts")) ? rename($WP_WC."wordpress-popular-posts",$WP_WC."wordpress-popular-posts-bad"): nl2br("wordpress-popular-posts plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-cache")) ? rename($WP_WC."wp-cache",$WP_WC."wp-cache-bad"): nl2br("wp-cache plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-cachecom")) ? rename($WP_WC."wp-cachecom",$WP_WC."wp-cachecom-bad"): nl2br("wp-cachecom plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-copysafe-web")) ? rename($WP_WC."wp-copysafe-web",$WP_WC."wp-copysafe-web-bad"): nl2br("wp-copysafe-web plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-copysafe-pdf")) ? rename($WP_WC."wp-copysafe-pdf",$WP_WC."wp-copysafe-pdf-bad"): nl2br("wp-copysafe-pdf plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-engine-snapshot")) ? rename($WP_WC."wp-engine-snapshot",$WP_WC."wp-engine-snapshot-bad")."wp-engine-snapshot detected..": nl2br("wp-engine-snapshot plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-fast-cache")) ? rename($WP_WC."wp-fast-cache",$WP_WC."wp-fast-cache-bad"): nl2br("wp-fast-cache plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-fastest-cache")) ? rename($WP_WC."wp-fastest-cache",$WP_WC."wp-fastest-cache-bad"): nl2br("wp-fastest-cache plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-file-cache")) ? rename($WP_WC."wp-file-cache",$WP_WC."wp-file-cache-bad"): nl2br("wp-file-cache plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-phpmyadmin")) ? rename($WP_WC."wp-phpmyadmin",$WP_WC."wp-phpmyadmin-bad"): nl2br("wp-phpmyadmin plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-postviews")) ? rename($WP_WC."wp-postviews",$WP_WC."wp-postviews-bad"): nl2br("wp-postviews plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-power-stats")) ? rename($WP_WC."wp-power-stats",$WP_WC."wp-power-stats-bad"): nl2br("wp-power-stats plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-slimstat")) ? rename($WP_WC."wp-slimstat",$WP_WC."wp-slimstat-bad"): nl2br("wp-slimstat plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wp-super-cache")) ? rename($WP_WC."wp-super-cache",$WP_WC."wp-super-cache-bad"): nl2br("wp-super-cache plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wpengine-common")) ? rename($WP_WC."wpengine-common",$WP_WC."wpengine-common-bad"): nl2br("wpengine-common plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."wponlinebackup")) ? rename($WP_WC."wponlinebackup",$WP_WC."wponlinebackup-bad"): nl2br("wponlinebackup plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."yet-another-featured-posts-plugin")) ? rename($WP_WC."yet-another-featured-posts-plugin",$WP_WC."yet-another-featured-posts-plugin-bad"): nl2br("yet-another-featured-posts-plugin plugin !detected||renamed...\n");

		echo (file_exists($WP_WC."yet-another-related-posts-plugin")) ? rename($WP_WC."yet-another-related-posts-plugin",$WP_WC."yet-another-related-posts-plugin-bad"): nl2br("yet-another-related-posts-plugin plugin !detected||renamed...\n");


	}
	if (!$WP_BL ) {
		echo (file_exists($WP_WC."akismet-bad")) ? rename($WP_WC."akismet-bad",$WP_WC."akismet")."akismet-b detected..": "akismet plugin !detected||renamed...";

		// unlink('MWP_blacklist.php');

	}
?>