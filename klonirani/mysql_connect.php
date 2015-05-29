<?php

DEFINE ('DB_USER', 'adminKKGn8Gs'); 
DEFINE ('DB_PASSWORD', 'AdeI29dif6IZ'); 
DEFINE ('DB_HOST', '127.3.237.2');
DEFINE ('DB_NAME', 'comments');
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error());
@mysql_select_db (DB_NAME) OR die('Could not select the database: ' . mysql_error() );

?>
