<?php
$host= gethostname();
switch($host){

}
$c = curl_init("https://2ip.ru");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
$r = curl_exec($c);

$ipaddr = $r;


$ip = gethostbyname($host);

echo "<h1>This is server with IP $ipaddr</h1>";
echo "Server var: ";
echo "<pre>";
print_r($_SERVER);

