<?php

define("PHPGRID_DBTYPE","mysql");

define("PHPGRID_DBHOST","localhost");

define("PHPGRID_DBUSER","siupnyk1_siapps");

define("PHPGRID_DBPASS","adminsiapps");

define("PHPGRID_DBNAME","siupnyk1_siapps");

define("PHPGRID_AUTOCONNECT",0);

define("PHPGRID_LIBPATH",dirname(__FILE__).DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR);

mysql_connect(PHPGRID_DBHOST, PHPGRID_DBUSER, PHPGRID_DBPASS);

mysql_select_db(PHPGRID_DBNAME);

include(PHPGRID_LIBPATH."inc/jqgrid_dist.php");

?>