<?php
 $dbhost = getenv("MYSQL_SERVICE_HOST");
 $dbport = getenv("MYSQL_SERVICE_PORT");
 $dbuser = getenv("MYSQL_USER");
 $dbpwd = getenv("MYSQL_PASSWORD");
 $dbroot= getenv("MYSQL_ROOT_PASSWORD");
 $dbdatabase = getenv("MYSQL_DATABASE");
 $dburl = $dbhost . ":" . $dbport;
 $connection = mysql_connect($dburl, $dbuser, $dbpwd);
 print "!!! Running on IP Address ".$_SERVER['SERVER_ADDR']." on port ".$_SERVER['SERVER_PORT'];
 print " And runnin On Openshift Hostname Container ";
 echo gethostname(); 
 print "*******   Now connecting to database = ";
 $connection = mysql_connect($dburl, $dbuser, $dbpwd);
 print $connection;
?>

