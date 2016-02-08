<?php
//$_SERVER['SCRIPT_FILENAME'] = str_replace('-test', '', YII_TEST_ENTRY_FILE);
//$_SERVER['SCRIPT_NAME'] = str_replace('-test', '', YII_TEST_ENTRY_URL);

new yii\web\Application(require(dirname(__DIR__) . '/config/acceptance.php'));
