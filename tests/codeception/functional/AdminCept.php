<?php

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->amOnPage('/');
$I->click('Login');
$I->see('Please fill out the following fields to login');
$I->fillField('#loginform-username', 'admin');
$I->fillField('#loginform-password', 'admin');
$I->click('Login', '.btn');

$I->see('Admin panel');
$I->click('Admin panel');
$I->see('yii2.CMS');
$I->click('Posts');
$I->see('Posts', 'h1');
$I->click('Add');

$I->see('Post edit', 'h1');
$I->see('English');
$I->see('Russian');

$title = 'Test title from' . time();

$I->fillField('#posttranslation-1-title', $title);
$I->fillField('#posttranslation-2-title', $title);
$I->click('.box-footer button');

$I->click('Posts');
$I->click('ID');
$I->click('ID');
$I->see($title);