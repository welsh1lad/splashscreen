<?php
 /* These enviroment Vars are created in the MYSQL POD */

 $dbhost = getenv("MYSQL_SERVICE_HOST");
 $dbport = getenv("MYSQL_SERVICE_PORT");
 $dbuser = getenv("MYSQL_USER");
 $dbpwd = getenv("MYSQL_PASSWORD");
 $dbroot= getenv("MYSQL_ROOT_PASSWORD");
 $dbdatabase = getenv("MYSQL_DATABASE");
 $dburl = $dbhost . ":" . $dbport;
 $hostname=gethostname();
 $ip = $_SERVER['SERVER_ADDR']
 $port = $_SERVER['SERVER_PORT']
 
 /* Connect to the mysql pod with dburl enviroment variable */

 $connection = new mysqli ($dburl, $dbuser, $dbpwd,$dbdatabase);

/* display ip address of running container and port */
 print "!!! Running on IP Address ".$_SERVER['SERVER_ADDR']." on port ".$_SERVER['SERVER_PORT'];
 print " And running On Openshift Hostname Container ".$hostname;

/* Insert data into mysql */

 $sql = "INSERT INTO Container (IpAddr, PortNumber, HostName)
VALUES ($ip, $port, $hostname)";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$connection->close();



 
?>

