<?php
 print "Running on IP Address ".$_SERVER['SERVER_ADDR']." on port ".$_SERVER['SERVER_PORT'];
 print " And runnin On Openshift Hostname Container ";
 echo gethostname(); 
 print " No connecting to database ";
 $mysqli = new mysqli(127.0.0.1, "admin", "password", "myphp");
 print $mysqli;

?>

