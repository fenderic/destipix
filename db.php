<?php

define('DB_SERVER', 'localhost');

define('DB_USERNAME', 'destipix_admin');

define('DB_PASSWORD', 'qpwo123');

define('DB_DATABASE', 'destipix_userlogindb');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());

$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

?>

