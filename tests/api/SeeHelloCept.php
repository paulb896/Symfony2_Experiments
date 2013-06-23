<?php
$I = new ApiGuy($scenario);
$I->wantTo('See name from url');

$I->sendGet('hello/paul');
//$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('paul');
$I->seeResponseContains('"name":"paul"');
//var_dump($I->grabResponse());