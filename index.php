<?php
$host= gethostname();
$ip = gethostbyname($host);

echo "<h1>This is server with IP $ip</h1>";
echo "Server var: ";
echo "<pre>";
print_r($_SERVER);

