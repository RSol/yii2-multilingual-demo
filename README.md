# Demo blog for yii2-multilingual package

This demo shows main features of [yii2-multilingual package](https://github.com/devgroup-ru/yii2-multilingual):

- multilingual URLs
- multilingual content
- hreflang tag
- language switcher

## Installation

```bash
vagrant up
vagrant ssh
cd /vagrant
composer install
./yii migrate --migrationPath=vendor/devgroup/yii2-deferred-tasks/src/migrations
./yii migrate
```

Now you can go to http://demo.yii2-multilingual.dev/ and test multilingual stuff.

For admin user password is 'admin'.

## City location widget

City location widgets need correct working geo provider configured. For using [sypex-geo-daemon](https://github.com/DevGroup-ru/sypex-geo-daemon) configure your settings in config/web.php:

—

```php
                    'class' => \DevGroup\Multilingual\SypexGeoDaemon\Provider::className(),
                    'host' => '127.0.0.1',
                    'port' => 16001,
```


## Functional test

### Prepare

Create database 'yii2_basic_tests' (or fix tests/codeception/config/config.php:17 to use other database)

```bash
cd ./tests
php ./codeception/bin/yii migrate
php ./codeception/bin/yii migrate --migrationPath=@vendor/devgroup/yii2-deferred-tasks/src/migrations
```

### Run test

Run functional tests
```
codecept run functional
```
   
Run functional tests with coverage (see [Codeception Codecoverage](http://codeception.com/docs/11-Codecoverage#.VrMMsEIvBhE))

```
codecept run functional --coverage-html
```

## Acceptance test

### Prepare

Install [PhantomJs](http://phantomjs.org/) and run

```bash
phantomjs --webdriver=4445
```

Be sure that 'supex-geo-daemon' is running and configured.
 
### Run test

```
codecept run acceptance
```