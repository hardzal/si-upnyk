<?php
// PHP Grid database connection settings
	define("PHPGRID_DBTYPE","mysql");
	define("PHPGRID_DBHOST","localhost");
	define("PHPGRID_DBUSER","siupnyk1_siapps");
	define("PHPGRID_DBPASS","adminsiapps");
	define("PHPGRID_DBNAME","siupnyk1_siapps");

// Automatically make db connection inside lib
define("PHPGRID_AUTOCONNECT",0);

// Basepath for lib
define("PHPGRID_LIBPATH",dirname(__FILE__).DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR);

?>