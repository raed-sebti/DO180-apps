<?php
$host = gethostname();
$ip = gethostbyname($host);
print "Hello World! Pod Ip is $ip  php version is " . PHP_VERSION . "\n";
?>
