<?php

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->amOnPage('/');
$I->see('Language');
$I->see('English');
$I->see('Demo');
$I->click('.b-language-selector');
$I->click('Russian');
$I->see('Демонстрационный');