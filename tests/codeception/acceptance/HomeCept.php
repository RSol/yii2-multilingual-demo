<?php

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure that home city widget work');
$I->amOnPage('/');
$I->see('Демонстрационный');
$I->see('Мы определили ваш город, как "Moscow". (Russia)');
$I->click('Установить город');
$I->wait(1);
$I->see('Пожалуйста, подтвердите ваш город');
$I->click('Tambov');
$I->see('Мы определили ваш город, как "Tambov". (Russia)');