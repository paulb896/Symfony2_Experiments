<?php
$I = new WebGuy($scenario);
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/hello/person');
$I->see('person');
