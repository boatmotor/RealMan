<?php



require "vendor/autoload.php";

$access_token = 'KsFGCHfOsNiMdqlFB7RvrPAWA/fvzAWAIsRRxpd5h6kHiNXP4L1MIAImBKTKkabTUIVbt4CTzWgSuXHQEtgim60gPNkYiW42RYtRDatHVvWHhn3zsmHeVOTeTtyMhdLbDuOGmoeSEZeg8/Z2HhEvFQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '7d2bae44dd66d02dc1012ef87d3df6ed';
$idPush = 'U3d092e90274aba00840fe94180cd8906';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$test = 'temp = 25.66' ;
$testtext = [
    'type' => 'text',
    'text' => $test
];

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($testtext);
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('text number 2');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
/*
<br></br>
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('U ID = ');
$response = $bot->pushMessage($idPush, $textMessageBuilder);
require "webhooks.php";

*/


