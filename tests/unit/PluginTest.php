<?php

/*
 * GitHub plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-github
 * @package   hidev-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\github\tests\unit;

use hidev\github\Plugin;

class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Plugin
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Plugin();
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $this->object->init();
        $this->assertTrue(is_object($this->object));
    }
}
