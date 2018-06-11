<?php
////
//// This file will self-destruct after running. 
//// Good luck Agents.
////


// current time
echo "Begin the 500 error test for WP...". date('h:i:s') . "\n";


//// check if .htaccess exists, then rename it
	$GDaccess = '.htaccess';

	if (file_exists($GDaccess)) {
	    echo "... The file $GDaccess exists and has been renamed."."<br>";
	    rename("$GDaccess", "$GDaccess".".bad");
	} else {
	    echo "... The file $GDaccess does not exist";
		if (file_exists(".htaccess.bad")) {
		    echo "... test file exists, putting it back...";
		    rename(".htaccess.bad", ".htaccess");
		}
	}

//// Disable the plugins
	if (file_exists('wp-content/plugins')) {
	    rename('wp-content/plugins', 'wp-content/plugins-bad');
	    echo "\n The plugin folder has been renamed.";
	} else {
	    echo "... There is no wp-content folder...";
		if (file_exists('wp-content/plugins-bad')) {
		    echo "... test file exists, putting it back...";
		    rename("wp-content/plugins-bad", "wp-content/plugins");

		}
	}

//// If all tests were run
	if (file_exists(".htaccess.bad")&&file_exists('wp-content/plugins-bad')) {
		echo "... BOTH Test files detected, putting everything back together and SELF DESTRUCTING...";
		unlink('testfile.php');
	}





?>