<?php
function ip($ide){
$url = "http://ip-api.com/json/$ide";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$out = curl_exec($ch);
$js = json_decode($out,true);
print_r($js);
}
include "banner.php";
echo "Masukan IP : ";
$ide = trim(fgets(STDIN));
ip($ide);
?>
