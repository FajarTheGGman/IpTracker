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

#Dear Tukang Recode :
#[=============Baca Hadist ini=============]
#Lelaki yang mencuri dan wanita yang mencuri,potonglah tangan
#keduanya (sebagai) pembalasan bagi apa yang mereka kerjakan dan
#sebagai siksaan dari Allah.
#Dan Allah Maha Perkasa lagi Maha Bijaksana.
#Maka barangsiapa bertaubat (di antara pencuri-pencuri itu)
#sesudah melakukan kejahatan itu dan memperbaiki diri,
#maka sesungguhnya Allah menerima taubatnya.
#Sesungguhnya Allah Maha Pengampun lagi Maha Penyayang.”

#(QS. Al-Maidah: 38-39)
?>
