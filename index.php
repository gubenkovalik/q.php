<?php
$host= gethostname();
$ip = "";
$domain = "";
$location = "";

switch($host){
    case "q-php-a":
        $domain = "a.php.q.jencat.pro";
        $ip = gethostbyname($domain);
        $location = "Minato City, Tokyo, Japan";
        break;
    case "q-php-b":
        $domain = "b.php.q.jencat.pro";
        $ip = gethostbyname($domain);
        $location = "Berkeley County, S.C, USA";
}



$ip = gethostbyname($host);

echo "<h1>This is server with IP $ip<br/>Worker domain: $domain<br/> Location: $location</h1>";


