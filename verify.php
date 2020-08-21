<?php

$phone = $_GET['phone'];

$ch = curl_init();
$url = "https://api.joinkingschat.com/api/v1/barcode/".$phone."/exists";
//die($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);

var_dump($res);exit;

$resp = json_decode($res);
$data = isset($resp->barcode_id)?"true":"false";

echo $data;


?>