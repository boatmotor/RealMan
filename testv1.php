<?php

require "vendor/autoload.php";

$access_token = 'KsFGCHfOsNiMdqlFB7RvrPAWA/fvzAWAIsRRxpd5h6kHiNXP4L1MIAImBKTKkabTUIVbt4CTzWgSuXHQEtgim60gPNkYiW42RYtRDatHVvWHhn3zsmHeVOTeTtyMhdLbDuOGmoeSEZeg8/Z2HhEvFQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '7d2bae44dd66d02dc1012ef87d3df6ed';
$idPush = 'U3d092e90274aba00840fe94180cd8906';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);


$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('text number 2');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

$text2 = new \LINE\LINEBot\MessageBuilder\text2('text2');
$res = $bot->pushMessage($idPush, $text2);
echo $response->getHTTPStatus() . ' ' . $res->getRawBody();

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();