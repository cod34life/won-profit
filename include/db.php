<?php
// Database Credentials
define('DBHOST','localhost'); //shareddb-m.hosting.stackcp.net
define('DBUSER','wonprofit-313031f02b');
define('DBPASS','19dn0hw6ze');
define('DBNAME','wonprofit-313031f02b');

// PDO Database Connection Establishment
$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>