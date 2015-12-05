<?php

/*
 * GitHub plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-github
 * @package   hidev-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

error_reporting(-1);

$_SERVER['SCRIPT_NAME']     = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;
require_once __DIR__ . '/../vendor/autoload.php';
Yii::setAlias('@hidev\license', dirname(__DIR__));
