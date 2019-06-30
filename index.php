<?php
 /* These enviroment Vars are created in the MYSQL POD */

 $dbhost = getenv("MYSQL_SERVICE_HOST");
 $dbport = getenv("MYSQL_SERVICE_PORT");
 $dbuser = getenv("MYSQL_USER");
 $dbpwd = getenv("MYSQL_PASSWORD");
 $dbroot= getenv("MYSQL_ROOT_PASSWORD");
 $db = getenv("MYSQL_DATABASE");
 $dburl = $dbhost . ":" . $dbport;
 $hostname=gethostname();
 $ip = $_SERVER['SERVER_ADDR'];
 $port = $_SERVER['SERVER_PORT'];
 $browser = get_browser(); 
 /* Connect to the mysql pod with dburl enviroment variable */

 $connection = new mysqli ($dburl, $dbuser, $dbpwd,$db);

/* display ip address of running container and port */
 print "!!! Running on IP Address ".$_SERVER['SERVER_ADDR']." on port ".$_SERVER['SERVER_PORT'];
 print " And running On Openshift Hostname Container ".$hostname;
 print " And my Browser is ".$browser;
/* Insert data into mysql */

 $sql = "INSERT INTO Container (IpAddr, PortNumber, HostName,Browser) VALUES ('${ip}', '${port}', '${hostname}',${browser})";


if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();



 
?>

